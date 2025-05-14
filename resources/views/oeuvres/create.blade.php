<x-app-layout>
    <div class="container mt-5">
        <h2 class="text-success mb-4">Ajouter une nouvelle œuvre</h2>

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

        <form method="POST" action="{{ route('oeuvres.store') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" value="{{ old('titre') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Artiste</label>
                <input type="text" name="artiste" class="form-control" value="{{ old('artiste') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Année de création</label>
                <input type="number" name="annee_creation" class="form-control" value="{{ old('annee_creation') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Prix</label>
                <input type="number" name="prix" class="form-control" value="{{ old('prix') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Date d'acquisition</label>
                <input type="date" name="date_acquisition" class="form-control" value="{{ old('date_acquisition') }}" required>
            </div>

            <div class="mb-3">
                <label for="categorie_id" class="form-label">Catégorie</label>
                <select name="categorie_id" id="categorie_id" class="form-select" required>
                    <option value="">-- Choisir une catégorie --</option>
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}" {{ old('categorie_id') == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Enregistrer
            </button>
            <a href="{{ route('oeuvres.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</x-app-layout>
