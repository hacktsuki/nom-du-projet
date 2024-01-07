@include('theme.header')

<div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Description du Profil</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Consultants</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Description du Profil</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card custom-profile-container">
                    <div class="card-body text-center">
                        <img class="img-fluid rounded-circle mb-3" src="img/consultant-profile.jpg" alt="Photo de profil">
                        <h1 class="display-4 mb-3">Nom Complet</h1>
                        <h4 class="mb-3">Titre / Poste</h4>
                        <div class="contact-buttons">
                            <a href="#" class="btn btn-primary btn-contact">Appel Audio</a>
                            <a href="#" class="btn btn-success btn-contact">Appel Vidéo</a>
                            <a href="#" class="btn btn-info btn-contact">Messagerie</a>
                        </div>
                        <p class="lead default-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."

                        </p>
                    </div>
                </div>

                <div class="card custom-review mt-4">
                    <div class="card-body">
                        <h2 class="mt-3 mb-3">Avis</h2>
                        <div class="media">
                            <img src="img/avatar_client1.jpg" alt="Avatar client 1" class="mr-3 rounded-circle" width="64">
                            <div class="media-body">
                                <h5 class="mt-0">Nom Client 1</h5>
                                <p>Excellent consultant, très professionnel. Je le recommande vivement!</p>
                            </div>
                        </div>

                        <div class="media mt-4">
                            <img src="img/avatar_client2.jpg" alt="Avatar client 2" class="mr-3 rounded-circle" width="64">
                            <div class="media-body">
                                <h5 class="mt-0">Nom Client 2</h5>
                                <p>Très satisfait du service. Expertise remarquable!</p>
                            </div>
                        </div>
                        <!-- Ajoutez plus d'avis au besoin -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('theme.footer')
