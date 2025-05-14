<x-guest-layout>
    <x-slot name="head">
        <style>
            body {
                background: linear-gradient(135deg, #d4fc79, #96e6a1);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .card {
                border-radius: 20px;
            }

            .btn-success {
                transition: all 0.3s ease-in-out;
            }

            .btn-success:hover {
                background-color: #28a745;
                transform: translateY(-2px);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            }

            .input-group-text i {
                font-size: 1.2rem;
            }

            .text-danger {
                font-size: 0.875rem;
                margin-top: 0.25rem;
            }
        </style>
    </x-slot>

    <div class="container min-vh-80 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg border-0 p-4 w-100" style="max-width: 500px;">
            <div class="text-center mb-4">
                <h3 class="text-success fw-bold">
                    <i class="bi bi-box-arrow-in-right"></i> Connexion
                </h3>
                <p class="text-muted text-center">Accédez à votre compte</p>
            </div>

            <!-- Affichage des erreurs globaux -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Champ Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="bi bi-envelope-fill"></i></span>
                        <input id="email" class="form-control @error('email') is-invalid @enderror"
                               type="email" name="email" value="{{ old('email') }}" required autofocus />
                    </div>
                    @error('email')
                        <div class="text-danger">
                            <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Champ Mot de passe -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="bi bi-lock-fill"></i></span>
                        <input id="password" class="form-control @error('password') is-invalid @enderror"
                               type="password" name="password" required />
                    </div>
                    @error('password')
                        <div class="text-danger">
                            <i class="bi bi-exclamation-circle-fill"></i> {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                    <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                </div>

                <button type="submit" class="btn btn-success w-100 fw-bold py-2">
                    <i class="bi bi-box-arrow-in-right"></i> Se connecter
                </button>
            </form>

            <p class="mt-4 text-center text-muted">
                Mot de passe oublié ? <a href="{{ route('password.request') }}" class="text-success fw-bold">Réinitialiser</a>
            </p>

            <p class="text-center text-muted">
                Pas encore de compte ? <a href="{{ route('register') }}" class="text-success fw-bold">S'inscrire</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</x-guest-layout>
