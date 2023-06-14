<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temoignage;

class TemoignageController extends Controller
{
    public function index()
    {
        $temoignages = Temoignage::all();
        return view('temoignages.index', compact('temoignages'));
    }

    public function create()
    {
        return view('temoignages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'message' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $temoignage = new Temoignage();

        $temoignage->nom = $validatedData['nom'];
        $temoignage->message = $validatedData['message'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $temoignage->image = $filename;
        }

        $temoignage->save();

        return redirect()->route('temoignages.index')->with('success', 'Témoignage ajouté avec succès!');
    }

    // public function edit(Temoignage $temoignage)
    // {
    //     return view('temoignages.edit', compact('temoignage'));
    // }

    // public function update(Request $request, Temoignage $temoignage)
    // {
    //     $validatedData = $request->validate([
    //         'nom' => 'required',
    //         'message' => 'required',
    //         'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $temoignage->nom = $validatedData['nom'];
    //     $temoignage->message = $validatedData['message'];

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $filename = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('images'), $filename);
    //         $temoignage->image = $filename;
    //     }

    //     $temoignage->save();

    //     return redirect()->route('temoignages.index')->with('success', 'Témoignage modifié avec succès!');
    // }

    public function destroy(Temoignage $temoignage)
    {
        $temoignage->delete();

        return redirect()->route('temoignages.index')->with('success', 'Témoignage supprimé avec succès!');
    }
}
