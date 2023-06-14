<?php
namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Professional;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        
        $services = Service::with('professionals')->get();

        return view('services.index', compact('services'));
    }
    public function create()
    {
        $services = Service::all();
        return view('services.create', compact('services'));
    }
    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'provider_nom' => 'required|max:255',
        'provider_age' => 'required|integer',
        'provider_time' => 'required|max:255',
        'provider_telephone' => 'required|digits:10',
        'provider_email' => 'required|email',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $serviceName = $request->input('nom');
    $newServiceName = $request->input('new_service');

    if (!empty($serviceName)) {
        $service = Service::where('nom', $serviceName)->first();
    } elseif (!empty($newServiceName)) {
        $service = new Service;
        $service->nom = $newServiceName;
        $service->save();
    } else {
        return back()->withErrors(['nom' => 'Le nom du service est requis.']);
    }


    $provider = new Professional;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);
        $provider->image = $filename;
    }
    $provider->nom = $validatedData['provider_nom'];
    $provider->age = $validatedData['provider_age'];
    $provider->available_time = $validatedData['provider_time'];
    $provider->telephone = $validatedData['provider_telephone'];
    $provider->email = $validatedData['provider_email'];
    $provider->service_id = $service->id;
    $provider->save();

    return redirect()->route('services.index');
}


}
