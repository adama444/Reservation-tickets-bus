@extends("admin-master")

@section('content')
    <div class="page-content fade-in-up">
        <h2 class="mb-5">Ajouter une nouvelle compagnie</h2>
        <div class="row">
            <div class="col-12">
                <div class="ibox">
                    <div class="ibox-body">
                        <form method="POST" action="/admin/company/add">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Nom</label>
                                    <input id="name" name="name" class="form-control" type="text" required="" placeholder="Nom" />
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Numéro de téléphone</label>
                                    <input id="phone" name="phone" class="form-control" type="text" required="" placeholder="Numéro de téléphone" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mail</label>
                                <input id="email" name="email" class="form-control" type="text" required="" placeholder="Mail" />
                            </div>
                            <div class="form-group">
                                <label>Adresse</label>
                                <input id="address" name="address" class="form-control" type="text" required="" placeholder="Adresse" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea id="description" name="description" class="form-control" required="" rows="4"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">
                                    Ajouter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
