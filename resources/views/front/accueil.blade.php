    @extends('front.layouts.template')
    @section('content')
        <header id="head">
            <div class="container">
                <div class="row">
                    <h1 class="lead">EGLISE EVANGELIQUE "PORTE DE VIE"</h1>
                    <p class="tagline">Sa mission est La marque distinctive d’une communauté parmi tant d’autres est sa volonté à s’organiser, à s’unir pour penser à son développement. L’union ou l’organisation des citoyens s’observe donc par la création des fédérations ou associations au sein desquelles, ils abordent les réels problèmes qui mineraient le développement de leur communauté en vue d’en trouver des solutions. <a href="{{ route('eglise') }}">Plus d'informations</a></p>
                </div>
            </div>
        </header>

        <h2 class="text-center thin" >
                    <marquee>
                        <mark style="background: white; opacity: 40%;">LA PORTE DE VIE DE MISSION LE SALUT  DES  ÂMES</mark>
                    </marquee>
        </h2>


        <div class="jumbotron ">
            <div class="container">

                <div class="row  col-md-12">
                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption"><h4>   <img src="{{ asset('assets/images/François.jpg') }}" alt="" class="img-rounded pull-right" width="300" >  <a href="biographie_Prophète.html">Biographie du prophète </a> </h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption">
                            <h4> <img src="assets/images/don.png" alt="" class="img-rounded pull-right" width="300" >
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Selection la catégorie de don <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="fait_Don.html">DÎMES</a></li>
                                        <li class="active"><a href="fait_Don.html">OFFRANDES</a></li>
                                        <li><a href="fait_Don.html">SEMENCES</a></li>
                                        <li class="active"><a href="partenaire.html">PARTENARIAT</a></li>
                                    </ul>
                                </li>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption"><h4><img src="{{ asset('assets/images/rendvous.png') }}" alt="" class="img-rounded pull-right" width="300" ><li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Prendre un rendez vous<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="rend_v_simple.html">rendez vous simple</a></li>
                                        <li class="active"><a href="rend_v_Prophetic.html">rendez vous de consultation prohétique </a></li>

                                    </ul>
                                </li></h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 highlight">
                        <div class="h-caption"><h4><img src="{{ asset('assets/images/ligne.png') }}" alt="" class="img-rounded pull-right" width="300" >
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rejoignez nous en ligne pour les cultes  <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.facebook.com/Dieu.sec.sans.melange">Facebook</a></li>
                                    <li class="active"><a href="https://youtube.com/channel/UCdfm-hJvLy5UXO6vkzEo0aQ">Youtube</a></li>
                                </ul>
                        </li></h4></div>

                    </div>
                </div> <!-- /row  -->

            </div>
        </div>



        <div class="container">

            <h1 id="program" class="text-center top-space" style="color: orange ">LES DIFFERENTS TRAVAUX DE L'EGLISE </h1>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <h2 >✅MERCREDI 17h -21h :</h2>

                </div>
                <div class="col-sm-6">
                    <h2>Culte Prophétique de délivrance et de guérison</h2>

                </div>
            </div> <!-- /row -->

            <div class="row">
                <div class="col-sm-6">
                    <h2>✅ DIMANCHE 09h-13h: </h2>

                </div>
                <div class="col-sm-6">
                    <h2>	Culte Prophétique d'adoration et de louanges</h2>
                </div>
            </div> <!-- /row -->
            <div class="row">
                <div class="col-sm-6">
                    <h2 >✅ Chaque dernier samedi du mois :
                </div>
                <div class="col-sm-6">
                    <h2>Réunion des partenaires</h2>

                </div>
            </div> <!-- /row -->

            <div class="row">
                <div class="col-sm-6">
                    <h2>✅  Chaque début de mois: </h2>

                </div>
                <div class="col-sm-6">
                    <h2>	Réveil spirituel de 03 jours</h2>
                </div>
            </div> <!-- /row -->
        </div>



        <section id="social">
            <div class="container">
                <div class="wrapper clearfix">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_linkedin_counter"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                    </div>
                    <!-- AddThis Button END -->
                </div>
            </div>
        </section>

    @endsection

