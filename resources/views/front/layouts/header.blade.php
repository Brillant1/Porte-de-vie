<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="{{ route('accueil') }}"><img src="{{ asset('assets/images/logo1.png') }}" alt="Porte de vie " class="img-circle" ></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li ><a href="#program">Agenda</a></li>
                <li ><a href="{{ route('service') }}">Services</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">A Propos <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('eglise') }}">Notre église</a></li>
                        <li ><a href="{{ route('equipe') }}">Notre équipe</a></li>
                        <li><a href="{{ route('branche') }}">Differentes branches de l'église </a></li>
                        <li><a href="{{ route('partenaire') }}">Nos Partenaires</a></li>
                        <li class="active"><a href="{{ route('mediatheque') }}">Notre Photothèque</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Plus de Pages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('rendez-vous-prophetique') }}">Barre latérale gauche</a></li>
                        <li class="active"><a href="{{ route('rendez-vous-simple') }}">Barre latérale droit</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a class="btn" href="signin.html">s'identifier / S'inscrire</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->
