@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Équipe</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Équipe</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Liste des membres de l'équipe</h4>
                            <a href="{{ route('admin.team.create') }}" class="btn btn-primary btn-round ms-auto">
                                <i class="fa fa-plus"></i> Ajouter un membre
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table id="team-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>Nom</th>
                                        <th>Poste</th>
                                        <th>Département</th>
                                        <th>Catégorie</th>
                                        <th>Ordre</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($members as $member)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($member->image)
                                                <img src="{{ asset('storage/' . $member->image) }}"
                                                     alt="{{ $member->name }}"
                                                     style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                                            @else
                                                <div style="width: 60px; height: 60px; background-color: #f0f0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                                    <i class="fa fa-user" style="font-size: 24px; color: #999;"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->position }}</td>
                                        <td>{{ $member->department ?? '-' }}</td>
                                        <td>
                                            @if($member->category)
                                                <span class="badge badge-info">{{ $member->category }}</span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            {{-- Version simplifiée sans formulaire AJAX --}}
                                            <form action="{{ route('admin.team.update', $member) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="order" value="{{ $member->order }}">
                                                <input type="number" name="order" value="{{ $member->order }}"
                                                    min="0" max="100" class="form-control form-control-sm"
                                                    style="width: 80px;" onchange="this.form.submit()">
                                            </form>
                                        </td>
                                        <td>
                                            {{-- Version simplifiée pour toggle-active --}}
                                            <form action="{{ route('admin.team.update', $member) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="is_active" value="{{ $member->is_active ? '0' : '1' }}">
                                                <button type="submit" class="btn btn-sm btn-link">
                                                    @if($member->is_active)
                                                        <span class="badge badge-success">Actif</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactif</span>
                                                    @endif
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="form-button-action d-flex">
                                                <a href="{{ route('admin.team.edit', $member) }}"
                                                   class="btn btn-link btn-primary btn-sm mr-2"
                                                   title="Modifier">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.team.show', $member) }}"
                                                   target="_blank"
                                                   class="btn btn-link btn-info btn-sm mr-2"
                                                   title="Voir">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <form action="{{ route('admin.team.destroy', $member) }}"
                                                      method="POST"
                                                      class="delete-form"
                                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce membre ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link btn-danger btn-sm" title="Supprimer">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mettre à jour l'ordre automatiquement
    const orderInputs = document.querySelectorAll('.order-input');
    orderInputs.forEach(input => {
        input.addEventListener('change', function() {
            const form = this.closest('.order-form');
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    order: [parseInt(this.getAttribute('data-id'))],
                    _method: 'PUT'
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showToast('Ordre mis à jour avec succès!', 'success');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('Erreur lors de la mise à jour', 'error');
            });
        });
    });

    function showToast(message, type) {
        // Créer un toast simple
        const toast = document.createElement('div');
        toast.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
        toast.style.top = '20px';
        toast.style.right = '20px';
        toast.style.zIndex = '9999';
        toast.innerHTML = `
            ${message}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        `;
        document.body.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 3000);
    }
});
</script>
@endsection
