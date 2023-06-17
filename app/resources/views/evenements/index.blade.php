@include('layouts.header')
@extends('layouts.app')
<head>
    <!-- ... autres balises head ... -->

    <!-- Lien vers la bibliothèque Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- Lien vers votre fichier CSS personnalisé -->
    <link rel="stylesheet" href="chemin/vers/votre/fichier.css" />
</head>
@section('content')
    <div class="con">
        <a href="{{ route('evenements.create') }}" class="event">Ajouter Un evenement</a>
        <div class="ok">
            <div class="ok2">
                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        @foreach ($evenements as $evenement)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title"> # {{ $evenement->title }}</h5>
                                    @if ($evenement->photos)
                                        <img src="{{ asset('images/' . $evenement->photos) }}" class="img-fluid" alt="Image">
                                    @endif
                                    <p class="card-text">{{ $evenement->content }}</p>
                                
                                    <!-- Like and Share buttons -->
                                    <div class="d-flex justify-content-between" id="media">
                                        {{-- <div class="likes-count">{{ $evenement->likes->count() }} <i class="fas fa-heart"></i></div> --}}
                                        <div class="like">
                                        @if ($evenement->likes->contains(auth()->user()))
                                            <button class="btn btn-primary">Liked</button>
                                        @else
                                            <form action="{{ route('like', $evenement->id) }}" method="POST" class="likee">
                                                @csrf
                                                <button type="submit"><i class="fas fa-heart"></i></button>
                                            </form>
                                        @endif
                                        <div class="likes-count">{{ $evenement->likes->count() }} <i class="fas fa-heart"></i></div>
                                        </div>
                                        <div class="comment">
                                        <!-- Comment section -->
                                        <div class="comments-section">
                                            <h6><i class="fas fa-comment"></i></h6>

                                            @foreach ($evenement->comments as $comment)
                                                <p>{{ $comment->content }}</p>
                                            @endforeach
                                        </div>

                                        <!-- Comment form -->
                                        <form action="{{ route('comment', $evenement->id) }}" method="POST" class="champ">
                                            @csrf
                                            <div class="form-group">
                                                <textarea name="content" class="form-control" rows="3" placeholder="Add a comment"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                        </div>
                                        <div class="buut">
                                        <h6><i class="fas fa-share"></i></h6>
                                        <!-- Instagram share button -->
                                        <div class="bt">
                                        <a href="{{ $instagramShareUrl }}" class="button">On Instagram</a> <br>
                                        <!-- Facebook share button -->
                                        <a href="{{ $facebookShareUrl }}" class="button">On Facebook</a>  <br>
                                        <!-- Twitter share button -->
                                        <a href="{{ $twitterShareUrl }}" class="button">On Twitter</a> <br>
                                        <!-- LinkedIn share button -->
                                        <a href="{{ $linkedinShareUrl }}" class="button">On LinkedIn</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    
                        {{ $evenements->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="footer">
  @include('layouts.footer')
</div>
@endsection

<style>

.like{
    margin-top:10px;
}
.likee button i{
    color: red;
    font-size:20px;
}
.likee button{
    border:none;
    background:none;
}
.con {
    width: 100%;
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
   
}

.card {
    
    margin-top: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.ok2{
      border:1px solid gray;
      margin-top: 50px;
      
}
.card-header {
    background-color: #f5f5f5;
    padding: 10px;
    font-weight: bold;
}

.card-body {
    padding: 20px;
}
.card-body h5{
    color:red;
}

.card-title {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-text {
    margin-bottom: 20px;
}
.event{
    text-decoration:none;
    font-size:18px;
    color:red;
    background-color:#DCDCDC;
    border:solid 1px gray;
    padding:10px 18px;
    margin-bottom:50px;
    margin-left:-150px;
}
.card img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
    border-radius: 5px;
    background-color:gray;
}

.likes-count {
    margin-top:20px;
    font-size: 15px;
    color: #888;
}

.buut{
    line-height:20px;
    margin-top:-15px;
}
.buut h6{
    margin-left:40px;
}

.buut h6 i{
    color:gray;
    font-size:20px;
}
.bt{
    margin-top:-10px;
}
.button {
    padding: 8px 16px;
    font-size: 14px;
    margin-right: 10px;
    border-radius: 5px;
    background-color: transparent;
    color:red;
    border: none;
     text-decoration: none;
}
.champ{
    margin-top:22px;
}
.champ button{
    border:solid 1px red;
    color:gray;
    background:none;
    padding:5px 15px;
    margin-left:50px;
}

.comments-section {
    margin-top: 20px;
}
.comments-section h6 i {
    margin-left:80px;
    color:gray;
    font-size:20px;
}
.comments-section h6 {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 10px;
}

.comments-section p {
    font-size: 14px;
    margin-bottom: 5px;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}
#media{
    display:flex;
    justify-content:space-around;
}

.comment{
    margin-top:-30px;
}

</style>

