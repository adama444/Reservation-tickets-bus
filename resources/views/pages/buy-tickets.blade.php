@extends("master")

@section('title', 'Reserver votre ticket')

@section('content')
    <section class="bg-light p-3">
        <div class="container">
            <h2 class="text-center text-uppercase fw-bold">Reserver votre ticket !</h2>

            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/contact" role="form">
                        @csrf
                        <div class="col-lg-6 mx-auto">
                            <div class="row my-2">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nom du passager" required="">
                                </div>
                                <div class="col form-group">
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="Numéro de télephone" required="">
                                </div>
                            </div>
                            <div class="form-group my-2">
                                <input type="date" class="form-control" name="travel_date" id="travel_date" required="">
                            </div>
                            <div class="form-group my-2">
                                <select class="form-control">
                                    <option value="default">Nom de la compagnie</option>
                                </select>
                            </div>
                            <div class="form-group my-2">
                                <select class="form-control">
                                    <option value="default">De ... à ...</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center"><button class="btn btn-success" type="submit">Reserver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
