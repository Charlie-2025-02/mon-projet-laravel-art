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
        </style>
    </x-slot>

    <div class="container min-vh-90 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg border-0 p-4 w-100" style="max-width: 500px;">
            <div class="text-center mb-4">
                <h3 class="text-success fw-bold">
                    <i class="bi bi-pencil-square" aria-label="Inscription"></i> Inscription
                </h3>
                <p class="text-muted text-center">Créez votre compte pour continuer</p>
            </div>

            <!-- Affichage des erreurs -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nom complet</label>
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="bi bi-person-fill" aria-label="Nom"></i></span>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse Email</label>
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="bi bi-envelope-fill" aria-label="Email"></i></span>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="bi bi-lock-fill" aria-label="Mot de passe"></i></span>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                    <div class="input-group">
                        <span class="input-group-text bg-success text-white"><i class="bi bi-lock-fill" aria-label="Confirmation mot de passe"></i></span>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                </div>

                <button type="submit" class="btn btn-success w-100 fw-bold py-2">
                    <i class="bi bi-person-plus-fill"></i> Créer un compte
                </button>
            </form>

            <p class="mt-4 text-center text-muted">
                Vous avez déjà un compte ? <a href="{{ route('login') }}" class="text-success fw-bold">Se connecter</a>
            </p>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</x-guest-layout>
