@extends("master")

@section('title', 'Les compagnies')

@section('content')
    <h2 class="text-center text-uppercase">Nos compagnies</h2>
    <div class="row ">
        @if ($companies->count() > 0)
            @foreach ($companies as $company)
                <div class="card mx-auto my-3 bg-light" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $company->name }}</h5>
                        <p class="card-text">{{ $company->description }}</p>
                        <a href="/company/{{ $company->id }}" class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row">
                <h3 class="text-center">Aucune compagnie</h3>
            </div>
        @endif
    </div>
@endsection
