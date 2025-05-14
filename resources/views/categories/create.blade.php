<x-app-layout>
    <div class="container mt-5">
        <h2 class="text-success mb-4">Ajouter une nouvelle catégorie</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow p-4">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom de la catégorie</label>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" required>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="bi bi-check-circle"></i> Enregistrer
                </button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</x-app-layout>
