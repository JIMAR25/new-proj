@include('layouts.header')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nom -->
        <div>
            <x-input-label for="nom" :value="__('Nom')" />
            <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nom')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Téléphone -->
        <div class="mt-4">
            <x-input-label for="tel" :value="__('Téléphone')" />
            <x-text-input id="tel" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" />
            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
        </div>

        <!-- Adresse -->
        <div class="mt-4">
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <!-- Code postal -->
        <div class="mt-4">
            <x-input-label for="code_postal" :value="__('Code postal')" />
            <x-text-input id="code_postal" class="block mt-1 w-full" type="text" name="code_postal" :value="old('code_postal')" />
            <x-input-error :messages="$errors->get('code_postal')" class="mt-2" />
        </div>

        <!-- Ville -->
        <div class="mt-4">
            <x-input-label for="ville" :value="__('Ville')" />
            <x-text-input id="ville" class="block mt-1 w-full" type="text" name="ville" :value="old('ville')" />
            <x-input-error :messages="$errors->get('ville')" class="mt-2" />
        </div>

        <!-- Date de naissance -->
        <div class="mt-4">
            <x-input-label for="date_de_naissance" :value="__('Date de naissance')" />
            <x-text-input id="date_de_naissance" class="block mt-1 w-full" type="date" name="date_de_naissance" :value="old('date_de_naissance')" />
            <x-input-error :messages="$errors->get('date_de_naissance')" class="mt-2" />
        </div>

        <!-- Mot de passe -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirmation du mot de passe -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Déjà inscrit(e) ?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('S\'inscrire') }}
            </x-primary-button>
        </div>
    </form>
<div class="footer">
  @include('layouts.footer')
</div>

<style>
    .flex a{
        margin-left:280px;
        font-size:18px;
        color:gray;
        margin-top:-30px;
    }


form {
  position:relative;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  max-width: 700px;
  margin: 0 auto;
  border-radius:5%;
}

form div {
  margin-bottom: 10px;
  display:flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1rem;
}

form label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
  width:300px;
  color:gray;
}
#date_de_naissance,
form input[type="text"],
form input[type="email"],
form input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  font-size: 16px;
}

form input[type="submit"] {
  display: inline-block;
  background-color: #337ab7;
  color: #fff;
  border: none;
  border-radius: 3px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #23527c;
}
form input:invalid {
  border-color: red;
}

form .text-red-500 {
  color: red;
}

form .bg-red-100 {
  background-color: rgba(255, 0, 0, 0.2);
}

form button[type="submit"] {
  margin-top: -30px;
  padding: 0.5rem 1.5rem;
  margin-right:100px;
  font-size:18px;
  background-color:red;
  color: white;
  border: none;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

form button[type="submit"]:hover {
  background-color:gray;
}
.mt-4{
    margin-top:30px;
}
.flex {
  margin-top:80px;
}

</style>