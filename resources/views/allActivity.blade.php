@extends('layouts.template')
@section('content')
<style>
    .main-banner{
        height: 500px;
        background-image: url('/assets/img/renov-daze2.avif');

        background-repeat: no-repeat;
        background-size: 100%;
    }
    .main-banner>h1{
        bottom: 50px;
        left: 80px;
    }
    .current-activity-image{
        position: absolute;
        bottom: 20px;
        left: -20px;
    }
</style>
<section class="first-banniere container-fluid p-0">
    <section class="banner">
        <div class="main-banner position-relative w-100">
            <div style=" background-color: rgba(0, 0, 0, 0.6); height: 500px;">

            </div>
            <h1 class="position-absolute text-white">Activités</h1>
        </div>

        <div class="container">
            <h2 class=" mt-5 text-center mb-5 mt-2">TOUTES LES ACTIVITES</h2>
            <div class="row ">
                <div class=" col col-md-6 col-lg-4">
                    <div class="card p-2">

                            <img src="/assets/img/renov-daze2.avif" alt="">


                            <h2 class="mt-3">TitleLorem ipsum dolor</h2>
                            <p class="pt-2">
                                Lorem ipsum dolor sit amet consectetur. Arcu sit ut...
                            </p>

                        <div class=" d-flex justify-content-between align-items-center py-3">
                            <div class="date-event d-flex align-items-center">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                                    </svg>
                                </i> &nbsp; &nbsp;
                                <span>23 Jan - 05 Fév 2023</span>
                            </div>
                            <a href="#" class="text-danger d-flex align-items-center">
                                <span>Voir plus</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class=" col col-md-6 col-lg-4">
                    <div class="card p-2">

                            <img src="/assets/img/renov-daze2.avif" alt="">


                            <h2 class="mt-3">TitleLorem ipsum dolor</h2>
                            <p class="pt-2">
                                Lorem ipsum dolor sit amet consectetur. Arcu sit ut...
                            </p>

                        <div class=" d-flex justify-content-between align-items-center py-3">
                            <div class="date-event d-flex align-items-center">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                                    </svg>
                                </i> &nbsp; &nbsp;
                                <span>23 Jan - 05 Fév 2023</span>
                            </div>
                            <a href="#" class="text-danger d-flex align-items-center">
                                <span>Voir plus</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


                <div class=" col col-md-6 col-lg-4">
                    <div class="card p-2">

                            <img src="/assets/img/renov-daze2.avif" alt="">


                            <h2 class="mt-3">TitleLorem ipsum dolor</h2>
                            <p class="pt-2">
                                Lorem ipsum dolor sit amet consectetur. Arcu sit ut...
                            </p>

                        <div class=" d-flex justify-content-between align-items-center py-3">
                            <div class="date-event d-flex align-items-center">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                                    </svg>
                                </i> &nbsp; &nbsp;
                                <span>23 Jan - 05 Fév 2023</span>
                            </div>
                            <a href="#" class="text-danger d-flex align-items-center">
                                <span>Voir plus</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" d-flex justify-content-center my-5 ">
                <router-link to="/activites" class="btn btn-success rounded-pill p-2 px-5 ">Voir toutes les activités</router-link>
            </div>
        </div>
    </section>
</section>

@endsection
