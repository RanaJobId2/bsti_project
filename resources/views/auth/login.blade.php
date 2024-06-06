<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> HR/Payroll SYSTEMS - Login</title>
    <link rel="stylesheet" href="{{ asset('') }}assets/css/login.css">
</head>

<body>
    <div class="login">
        <div class="container right-panel-active">
            <!-- Sign Up -->
            <div class="container__form container--signup">
                <div action="#" class="form" id="form1">
                    <h2 style="font-size: 40px; font-weight: 100">Welcome to BSTI ERP</h2>
                    <ul>
                        <li id="payrollSignIn">
                            <span>&#8594;</span>
                            Payroll System
                        </li>
                        <li id="pensionSignIn">
                            <span>&#8594;</span>
                            Pension scheme
                        </li>
                        <li id="gpfSignIn">
                            <span>&#8594;</span>
                            General Provident Fund
                        </li>
                        <li id="riskAllowanceSignIn">
                            <span>&#8594;</span>
                            Risk Allowance
                        </li>
                        <li id="checkPrintSignIn">
                            <span>&#8594;</span>
                            Check Print
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sign In -->
            <div class="container__form container--signin">
                <form action="{{ route('login') }}" method="POST" class="form">
                    @csrf
                    <h2 class="form__title">Sign In</h2>
                    <input type="text" name="email" value="" class="input" placeholder="Email" />
                    {{-- <input type="text" name="username" value="" class="input" placeholder="Username" /> --}}
                    <input type="password" name="password" value="" class="input" placeholder="Password" />
                    <input type="submit" name="login" value="Login" class="btn" />
                </form>
            </div>

            <!-- Overlay -->
            <div class="container__overlay">
                <div class="overlay">
                    <div class="overlay__panel overlay--left">
                        @if ($errors->any())
                            <span style="margin-bottom: 5px;color: red;">
                                <strong>Credentials do not match!</strong>
                            </span>
                        @endif

                        <button class="btn" id="adminLogin">Sign In</button>

                    </div>
                    <div class="overlay__panel overlay--right">
                        <div style="display: flex; flex-direction: column; gap: 20px">
                            <h2>Welcome To BSTI ERP</h2>
                            <h3 id="selectedSection">Payroll System</h3>
                            <button class="btn" id="signUp">Home</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const payrollSignInBtn = document.getElementById("payrollSignIn");
            const pensionSignInBtn = document.getElementById("pensionSignIn");
            const gpfSignInBtn = document.getElementById("gpfSignIn");
            const riskAllowanceSignInBtn = document.getElementById(
                "riskAllowanceSignIn"
            );
            const checkPrintSignInBtn = document.getElementById(
                "checkPrintSignIn"
            );
            const adminLoginBtn = document.getElementById("adminLogin");
            const signUpBtn = document.getElementById("signUp");
            const fistForm = document.getElementById("form1");
            //   const secondForm = document.getElementById("form2");
            const container = document.querySelector(".container");
            const selectedSection = document.getElementById("selectedSection");

            payrollSignInBtn.addEventListener("click", () => {
                selectedSection.textContent = "Payroll System";
                container.classList.remove("right-panel-active");
            });

            pensionSignInBtn.addEventListener("click", () => {
                selectedSection.textContent = "Pension Scheme";
                container.classList.remove("right-panel-active");
            });

            gpfSignInBtn.addEventListener("click", () => {
                selectedSection.textContent = "General Provident Fund";
                container.classList.remove("right-panel-active");
            });

            riskAllowanceSignInBtn.addEventListener("click", () => {
                selectedSection.textContent = "Risk Allowance";
                container.classList.remove("right-panel-active");
            });
            checkPrintSignInBtn.addEventListener("click", () => {
                selectedSection.textContent = "Check Print";
                container.classList.remove("right-panel-active");
            });

            adminLoginBtn.addEventListener("click", () => {
                selectedSection.textContent = "Master Panel";
                container.classList.remove("right-panel-active");
            });

            signUpBtn.addEventListener("click", () => {
                container.classList.add("right-panel-active");
            });

            fistForm.addEventListener("submit", (e) => e.preventDefault());
            //   secondForm.addEventListener("submit", (e) => e.preventDefault());
        </script>



</body>

</html>

{{-- <x-guest-layout>
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

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
