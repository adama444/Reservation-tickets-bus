<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">{{ env('APP_NAME') }}</span>
            </a>

            <!-- Nav -->
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Accueil</a></li>
                <li class="nav-item"><a href="/company" class="nav-link">Compagnies</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contactez nous</a></li>
            </ul>
            <!-- Nav -->
        </header>

        <!-- ======= About Us Section ======= -->
        <section class="my-5 bg-light p-3">
            <div class="container" data-aos="fade-up">
                <h2 class="text-center text-uppercase fw-bold">À propos de nous</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <p>
                            Seul auteur du travail, je me présente à vous. Je suis Adama SAMAKE, jeune étudiant en cycle
                            d'ingénieur en Big
                            Data à l'UCAO-UUT.
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <p>
                            Le projet s'inscrit dans un contexte pédagogique pour nous permettre d'apprehender nos
                            connaissances en developpement web.
                        </p>
                    </div>
                </div>
                <div class="text-center"><a class="btn btn-primary" href="/contact">Nous contacter</a></div>
            </div>
        </section><!-- End About Us Section -->

        @yield("content")

        <footer class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5 pt-2">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3">{{ env('APP_NAME') }}</i>
                            </h6>
                            <p>
                                Les meilleures offres sont pour vous. Votre satisfaction est notre priorité
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Compagnies
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">ETRAB</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">S.T.S</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Cheval Blanc</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">STISALI</a>
                            </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://github.com/adama444/">Adama</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
</body>

</html>
