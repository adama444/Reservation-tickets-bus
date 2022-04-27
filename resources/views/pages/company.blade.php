@extends("master")

@section('title', 'Les compagnies')

@section('content')
    <h2 class="text-center text-uppercase">Nos compagnies</h2>
    <div class="row ">
        <div class="card mx-auto my-3 bg-light" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ETRAB</h5>
                <h6 class="card-subtitle mb-2 text-muted">Entreprise de transport Belengai</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="/company/1" class="btn btn-primary">Details</a>
            </div>
        </div>
        <div class="card mx-auto my-3 bg-light" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">STISALI</h5>
                <h6 class="card-subtitle mb-2 text-muted">Société de Transport</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's Lorem, ipsum dolor.
                    content.</p>
                <a href="/company/2" class="btn btn-primary">Details</a>
            </div>
        </div>
        <div class="card mx-auto my-3 bg-light" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">STS</h5>
                <h6 class="card-subtitle mb-2 text-muted">Société de Transport des Savanes</h6>
                <p class="card-text">Lorem ipsum dolor sit amet. on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="/company/3" class="btn btn-primary">Details</a>
            </div>
        </div>
        <div class="card mx-auto my-3 bg-light" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Cheval Blanc</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectemple text to build on the card title and make up the bulk of the
                    card's
                    content.</p>
                <a href="/company/4" class="btn btn-primary">Details</a>
            </div>
        </div>
    </div>
@endsection
