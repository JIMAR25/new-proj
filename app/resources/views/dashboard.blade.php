hello
@if (auth()->check())
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Déconnexion</button>
    </form>
@endif