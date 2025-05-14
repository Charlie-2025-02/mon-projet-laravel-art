<x-app-layout>
    <div class="container mt-5">
        <h2 class="text-warning mb-4">Modifier l'œuvre : {{ $oeuvre->titre }}</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('oeuvres.update', $oeuvre->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" value="{{ old('titre', $oeuvre->titre) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Artiste</label>
                <input type="text" name="artiste" class="form-control" value="{{ old('artiste', $oeuvre->artiste) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Année</label>
                <input type="number" name="annee" class="form-control" value="{{ old('annee', $oeuvre->annee) }}" required>
            </div>

            <button type="submit" class="btn btn-warning">
                <i class="bi bi-pencil"></i> Mettre à jour
            </button>
            <a href="{{ route('oeuvres.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
</x-app-layout>
