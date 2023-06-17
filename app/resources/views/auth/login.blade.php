@include('layouts.header')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="qstn">
            <div class="flex1">
                @if (Route::has('password.request'))
                    <a class="pass" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
            <div class="flex2">
                <a class="regist" href="{{ route('register') }}">
                    {{ __("Don't have an account? Register") }}
                </a>
            </div>
        </div>
    </form>


<div class="footer">
  @include('layouts.footer')
</div>

<style>

.qstn{
    display:flex;
    justify-content:space-around;
    margin-top:80px;
}
.qstn a{
    color:gray;
    text-decoration:none;
    font-size:18px;
}


form {
  position:relative;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
  max-width: 700px;
  margin: 0 auto;
  border-radius:5%;
  margin-bottom:30px;
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
  margin-top: -220px;
  padding: 0.5rem 1.5rem;
  margin-left:150px;
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
    margin-top:70px;
}


</style>

