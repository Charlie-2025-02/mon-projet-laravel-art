<x-app-layout>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="mb-4 text-success fw-bold">
                <i class="bi bi-brush-fill"></i> Liste des Œuvres d'art
            </h2>

            <!-- Bouton Ajouter une Œuvre -->
            <a href="{{ route('oeuvres.create') }}" class="btn btn-primary mb-3">
                <i class="bi bi-plus-circle"></i> Ajouter une œuvre
            </a>

            @if($oeuvres->count())
                <table class="table table-striped table-hover">
                    <thead class="table-success">
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Artiste</th>
                            <th>Catégorie</th>
                            <th>Date de création</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($oeuvres as $oeuvre)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $oeuvre->titre }}</td>
                                <td>{{ $oeuvre->artiste }}</td>
                                <td>{{ $oeuvre->categorie->nom ?? 'N/A' }}</td>
                                <td>{{ $oeuvre->created_at->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted">Aucune œuvre enregistrée pour le moment.</p>
            @endif
        </div>
    </div>
</x-app-layout>
