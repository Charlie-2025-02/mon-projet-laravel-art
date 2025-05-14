<x-app-layout>
    <div class="container mt-5">

        <!-- Carte de Bienvenue -->
        <div class="card shadow-lg p-4 mb-4 text-center border-0">
            <h2 class="card-title text-primary mb-3">🎉 Bienvenue, {{ Auth::user()->name }} !</h2>
            <p class="card-text">Gérez vos œuvres d'art et leurs catégories efficacement.</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary mt-2">
                <i class="bi bi-person-circle"></i> Modifier mon profil
            </a>
        </div>

        <!-- Cartes Fonctionnalités -->
        <div class="row">
            <!-- Catégories d'œuvres -->
            <div class="col-md-6 mb-4">
                <div class="card bg-gradient bg-primary text-white shadow-lg h-100 border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-tags-fill display-4 mb-3"></i>
                        <h5 class="card-title">Catégories d'œuvres</h5>
                        <p class="card-text">Ajoutez, modifiez ou supprimez des catégories d'œuvres facilement.</p>
                        <a href="{{ route('categories.index') }}" class="btn btn-light fw-bold">Accéder</a>
                    </div>
                </div>
            </div>

            <!-- Œuvres d'art -->
            <div class="col-md-6 mb-4">
                <div class="card bg-gradient bg-success text-white shadow-lg h-100 border-0">
                    <div class="card-body text-center">
                        <i class="bi bi-brush-fill display-4 mb-3"></i>
                        <h5 class="card-title">Œuvres d'art</h5>
                        <p class="card-text">Ajoutez, modifiez ou supprimez vos œuvres facilement.</p>
                        <a href="{{ route('oeuvres.index') }}" class="btn btn-light fw-bold">Accéder</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</x-app-layout>
