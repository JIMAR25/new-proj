<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\URL;




class EvenementController extends Controller
{
    public function index()
{
    $evenements = Evenement::paginate(10); // Récupérer les événements paginés

    $facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . URL::current();
    $twitterShareUrl = 'https://twitter.com/intent/tweet?url=' . URL::current();
    $linkedinShareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=' . URL::current();
    $instagramShareUrl = 'https://www.instagram.com/?url=' . URL::current();

    return view('evenements.index', compact('evenements', 'facebookShareUrl', 'twitterShareUrl', 'linkedinShareUrl', 'instagramShareUrl'));
}

    

    public function create()
    {
        return view('evenements.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photos' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $evenement = new Evenement();
        $evenement->title = $request->title;
        $evenement->content = $request->content;
    
        if ($request->hasFile('photos')) {
            $image = $request->file('photos');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $evenement->photos = $filename;
        }

    
        $evenement->save();
    
        return redirect()->route('evenements.index')->with('success', 'Le poste a été ajouté avec succès.');
    }

    public function like($id)
    {
        $evenement = Evenement::findOrFail($id);
        
        $user = Auth::user();
        if (!$evenement->likes->contains($user)) {
            $evenement->likes()->attach($user);
        }
        
        return redirect()->back()->with('success', 'Événement aimé avec succès.');
    }

    public function comment(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $evenement = Evenement::findOrFail($id);

        $comment = new Comment();
        $comment->content = $request->content;
        $comment->evenement()->associate($evenement);
        $comment->user()->associate(Auth::user());
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    public function share($id)
{
    $evenement = Evenement::findOrFail($id);

    // Generate the share URL for Facebook
    $facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' . URL::current();

    // Generate the share URL for Twitter
    $twitterShareUrl = 'https://twitter.com/intent/tweet?url=' . URL::current();

    // Generate the share URL for LinkedIn
    $linkedinShareUrl = 'https://www.linkedin.com/shareArticle?mini=true&url=' . URL::current();

    // Generate the share URL for Instagram
    $instagramShareUrl = 'https://www.instagram.com/?url=' . URL::current();

    return view('evenements.share', compact('evenement', 'facebookShareUrl', 'twitterShareUrl', 'linkedinShareUrl', 'instagramShareUrl'));
}

    
    

    

}
