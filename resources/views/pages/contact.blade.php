@extends("master")

@section('title', 'Contactez Nous')

@section('content')

    <section class="bg-light p-3">
        <div class="container">
            <h2 class="text-center text-uppercase fw-bold">Contactez Nous !</h2>

            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Notre Adresse</h3>
                                <p>Lomé, Togo</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Notre Mail</h3>
                                <p>adama.samake.work@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Appellez nous</h3>
                                <p>+ 228 92 02 90 08</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form method="POST" action="/contact" role="form">
                        @csrf
                        <div class="row my-2">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required="">
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                    required="">
                            </div>
                        </div>
                        <div class="form-group my-2">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required="">
                        </div>
                        <div class="form-group my-2">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="text-center"><button class="btn btn-success" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
