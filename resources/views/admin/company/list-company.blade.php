@extends("admin-master")

@section('content')
    <div class="page-content fade-in-up">
        <h2 class="mb-5">Liste de toutes les compagnies</h2>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-12">
                    <div class="ibox">
                        <div class="ibox-body">
                            <table class="table">
                                <thead class="thead-default">
                                    <tr>
                                        <th>#</th>
                                        <th>Nom de la compagnie</th>
                                        <th>Numéro de téléphone</th>
                                        <th>Adresse</th>
                                        <th>Mail</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($companies->count() > 0)
                                        @foreach ($companies as $company)
                                            <tr>
                                                <td>{{ $company->id }}</td>
                                                <td>{{ $company->name }}</td>
                                                <td>{{ $company->phone }}</td>
                                                <td>{{ $company->address }}</td>
                                                <td>{{ $company->email }}</td>
                                                <td>{{ $company->description }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
