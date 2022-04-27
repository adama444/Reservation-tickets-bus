@extends("master")

@section('title', 'Compagnie | ETRAB')

@section('content')
    <h2 class="text-center text-uppercase">Détails de la compagnie</h2>
    <div class="row bg-light text-center">
        <div class="col-md-3">
            <div class="info-box mt-4">
                <h3>Nom de la compagnie</h3>
                <p>{{ $company->name }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-box mt-4">
                <h3>Mail de la compagnie</h3>
                <p>{{ $company->email }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-box mt-4">
                <h3>Contact</h3>
                <p>{{ $company->phone }}</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-box mt-4">
                <h3>Adresse</h3>
                <p>{{ $company->address }}</p>
            </div>
        </div>
        <div class="row">
            <div class="info-box mt-4">
                <h3>Description</h3>
                <p>{{ $company->description }}</p>
            </div>
        </div>
    </div>
@endsection
