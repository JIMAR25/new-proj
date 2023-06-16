<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'administration</title>
    <!-- Chargement des styles CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="logo">
                <span class="flaticon-solidarity"></span>
                <h1 class="navbar-brand">ShareHope</h1>
            </div>
            <div class="navbar" id="navbarNav">
                <div class="row">
                    <ul class="navbar1">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('evenements.index')}}">Evenements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">{{__("À propos de nous")}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="donations-link" href="#">Donations</a>
                            <ul id="donations-menu" class="submenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="/urgences">Cas d'urgences</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('temoignages.index')}}">{{__("Témoignages")}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('evenements.index')}}">Événements</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> --}}

    <!-- Your admin content goes here -->
        @yield('content')
    <!-- Chargement des scripts JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js" integrity="sha384-XXX0oXyWLvoc+AWO4K5J2p7SSXy0vYh6hv7ERuG8sBne3prGS05H7hB99ohN5oyW" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-pzjw8f+ua5dEUCFtwSk9uOK4P4tkFV9/cz+6a8eY4IQbKlNVNHrTFOvEtGhed5I6" crossorigin="anonymous"></script>
</body>
</html>
