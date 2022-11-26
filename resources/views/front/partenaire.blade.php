@extends('front.layouts.template')
@section('content')
<header id="head2">
    <div class="row ">
        <h1 class="lead col-md-12">
            <b>LES DIFFERENTS PARTENAIRES DE L'EGLISE "PORTE DE VIE"</b> </h1>

    </div>
</header>
<div class="container">
    <div class="pull-left">
        <img src="{{ asset('assets/images/François.jpg') }}" alt="" class="img-thumbnail" width="360">
    </div>
</div>


<div class="container ">
    <div class="row">
        <div class="main_pricing roomy-100">

            <div class="col-md-12 ">
                <div class="head_title text-center">
                    <h2>LES DIFFÉRENTES CATÉGORIES DE PARTENARIAT:</h2>


                </div>

                <div class="col-xs-3 ">
                    <div class="pricing_item">
                        <div class="pricing_top_border"></div>
                        <div class="pricing_head p-top-30 p-bottom-100 text-center">
                            <h3 class="text-uppercase">Catégorie B</h3>
                        </div>


                        <div class="pricing_body bg-white p-top-110 p-bottom-60">
                            <ul>
                                <li class="disabled"><i class="fa fa-check-circle text-primary"></i> <span>10000F CFA</span>
                                    </li>
                                <li class="disabled "><i class="fa fa-check-circle text-primary"></i><a href="#">Demandez</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div><!-- End off col-md-3 -->

                <div class="col-xs-3  ">
                    <div class="pricing_item sm-m-top-30">
                        <div class="pricing_top_border"></div>
                        <div class="pricing_head p-top-30 p-bottom-100 text-center">
                            <h3 class="text-uppercase">Catégorie A

                            </h3>
                        </div>


                        <div class="pricing_body bg-white p-top-110 p-bottom-60">
                            <ul>
                                <li class="disabled"><i class="fa fa-check-circle text-primary"></i> <span>20000F CFA</span>
                                    </li>
                                <li class="disabled"><i class="fa fa-check-circle text-primary"></i><a href="#">Demandez</a>

                            </ul>

                        </div>
                    </div>
                </div><!-- End off col-md-3 -->

                <div class="col-xs-3 ">
                    <div class="pricing_item sm-m-top-30">
                        <div class="pricing_top_border"></div>
                        <div class="pricing_head p-top-30 p-bottom-100 text-center">
                            <h3 class="text-uppercase">  Catégorie VIP  </h3>
                        </div>


                        <div class="pricing_body bg-white p-top-110 p-bottom-60">
                            <ul>
                                <li class="disabled"><i class="fa fa-check-circle text-primary"></i> 50000F CFA
                                </li>
                                <li class="disabled"><i class="fa fa-check-circle text-primary"></i><a href="#">Demandez</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div><!-- End off col-md-3 -->

                <div class="col-xs-3 ">
                    <div class="pricing_item sm-m-top-30">
                        <div class="pricing_top_border"></div>
                        <div class="pricing_head p-top-30 p-bottom-100 text-center">
                            <h3 class="text-uppercase"> Catégorie VIP STAR  </h3>
                        </div>


                        <div class="pricing_body bg-white p-top-110 p-bottom-60">
                            <ul class="pull-center">
                                <li class="disabled "><i class="fa fa-check-circle text-primary"></i>100 000F
                                </li>
                                <li class="disabled "><i class="fa fa-check-circle text-primary"></i> <a href="#">Demandez</a>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div><!-- End off col-md-3 -->

            </div>
        </div>
    </div>
    <!--End off row-->
</div>

@endsection
