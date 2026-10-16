
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Superhero UI</title>

    <!-- Local Bootswatch Theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-superhero.min.css') }}">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark min-vh-100 d-flex flex-column">

    <!-- Header / Navbar Branding -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary border-bottom border-secondary shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-uppercase"
                   href="{{ url('/') }}">
                    <i class="bi bi-shield-lock-fill text-warning fs-4"></i>
                    <span>SuperApp</span>
                </a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="container my-auto py-5">
        <div class="row justify-content-center align-items-stretch g-0 shadow-lg rounded-4 overflow-hidden border border-secondary">

            <!-- Left Branding Panel -->
            <div class="col-lg-6 bg-secondary p-5 d-none d-lg-flex flex-column justify-content-between position-relative overflow-hidden">

                <div>
                    <div class="d-inline-flex align-items-center justify-content-center bg-warning text-dark rounded-circle mb-4"
                         style="width: 50px; height: 50px;">
                        <i class="bi bi-lightning-charge-fill fs-4"></i>
                    </div>

                    <h2 class="display-6 fw-bold text-white mb-3">
                        Powering your workflow with precision.
                    </h2>

                    <p class="text-white-50 lead fs-6">
                        Access your dashboard, manage system integrations,
                        and track analytics from a unified control panel.
                    </p>
                </div>

                <!-- Security Feature -->
                <div class="p-3 bg-dark bg-opacity-50 rounded-3 border border-dark">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-shield-check text-success fs-3"></i>

                        <div>
                            <p class="mb-0 fw-semibold text-white small">
                                Enterprise-Grade Security
                            </p>
                            <p class="mb-0 text-white-50 small">
                                256-bit SSL Encryption & Two-Factor Auth Ready
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Login Form -->
            <div class="col-12 col-lg-6 bg-dark p-4 p-sm-5 d-flex flex-column justify-content-center">

                <!-- Form Header -->
                <div class="mb-4 text-center text-lg-start">
                    <h1 class="h3 fw-bold text-white mb-1">
                        Welcome Back
                    </h1>
                    <p class="text-muted small">
                        Please sign in to your account
                    </p>
                </div>

                <!-- Session Status Message -->
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show mb-4 small" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        {{ session('status') }}

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"
                                aria-label="Close"></button>
                    </div>
                @endif

                <!-- General Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger small">
                        Please check the information you entered.
                    </div>
                @endif

                <!-- Login Form -->
                <form action="{{ route('login.perform') }}" method="POST">
                    @csrf

                    <!-- Email Field -->
                    <div class="form-floating mb-3">
                        <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="floatingInput"
                            placeholder="Email Address"
                            value="{{ old('email') }}"
                            required
                            autofocus>

                        <label for="floatingInput" class="text-dark fw-semibold">
                            <i class="bi bi-envelope me-2"></i>
                            Email Address
                        </label>

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-floating mb-3">
                        <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="floatingPassword"
                            placeholder="Password"
                            required>

                        <label for="floatingPassword" class="text-dark fw-semibold">
                            <i class="bi bi-lock me-2"></i>
                            Password
                        </label>

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4 small">

                        <div class="form-check">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="remember"
                                id="rememberMe"
                                value="1"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label text-white-50"
                                   for="rememberMe">
                                Remember me
                            </label>
                        </div>

                        <a href="#" class="text-warning text-decoration-none fw-semibold">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button
                        class="btn btn-primary w-100 py-2 rounded-2 fw-bold shadow d-flex align-items-center justify-content-center gap-2 mb-3"
                        type="submit">

                        <span>SIGN IN</span>
                        <i class="bi bi-arrow-right-short fs-5"></i>
                    </button>

                    <!-- Divider -->
                    <div class="position-relative my-4 text-center">
                        <hr class="text-secondary opacity-25">

                        <span class="position-absolute top-50 start-50 translate-middle px-3 bg-dark text-muted small">
                            OR
                        </span>
                    </div>

                    <!-- Social Login Placeholders -->
                    <div class="row g-2">
                        <div class="col-6">
                            <button
                                type="button"
                                class="btn btn-outline-secondary w-100 btn-sm py-2 d-flex align-items-center justify-content-center gap-2">

                                <i class="bi bi-google"></i>
                                <span class="small">Google</span>
                            </button>
                        </div>

                        <div class="col-6">
                            <button
                                type="button"
                                class="btn btn-outline-secondary w-100 btn-sm py-2 d-flex align-items-center justify-content-center gap-2">

                                <i class="bi bi-github"></i>
                                <span class="small">GitHub</span>
                            </button>
                        </div>
                    </div>

                </form>

                <!-- Registration Link -->
                <div class="mt-4 pt-3 border-top border-secondary text-center text-lg-start">
                    <p class="small text-muted mb-0">
                        Don't have an account?

                        <a href="{{ url('/signup') }}"
                           class="text-warning fw-semibold text-decoration-none">
                            Create an account
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </main>

    <!-- Page Footer -->
    <footer class="py-3 text-center text-muted small border-top border-secondary mt-auto">
        &copy; {{ date('Y') }} SuperApp. All rights reserved.
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
