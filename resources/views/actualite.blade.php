@extends('layouts.template')
@section('content')

<style>
    .main-banner{
        height: 500px;
        background-image: url('{{ asset('img/renov-daze1.avif') }}');
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
        <h1 class=" text-center mt-5">Activité en cours</h1>
        <div class="container mt-5 pt-5">
            <div class=" row justify-content-between">
                <div class=" col-5 border border-2 border-dark rounded position-relative" style="height:350px" >
                    <img src="{{ asset('img/img-pdv1.jpeg') }}" alt="" class="rounded current-activity-image w-100" style="object-fit: cover;">
                </div>
                <div class="ps-5 col-7">
                    <h1 class="mb-4">
                        Lorem ipsum dolor sit amet consectetur. Neque pharetra.
                    </h1>
                    <div style="font-size:20px;">
                        Lorem ipsum dolor sit amet consectetur. Vel tellus ut aenean augue nisi id non odio enim. Sapien erat aliquet a pulvinar cursus. Nibh amet id venenatis risus vel sit mollis risus. Donec viverra euismod pellentesque sit nunc tellus. Imperdiet sagittis nisi tellus nibh sed.
                    </div>
                    <div class=" d-flex justify-content-between mt-3">
                        <p class="date-event d-flex align-items-center">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                                </svg>
                            </i> &nbsp; &nbsp;
                            <span>23 Jan - 05 Fév 2023</span>
                            </p>
                        <p class="time-event d-flex align-items-center">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                </svg>
                            </i> &nbsp; &nbsp;
                            <span>15h - 22h</span>
                        </p>

                    </div>
                    <p class="d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg> &nbsp; &nbsp;
                            <span>Les locaux de l'étoile rouge</span>
                        </p>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class=" mt-5">TOUTES LES ACTIVITES</h2>
            <div class="row">
                <div class=" col col-md-6 col-lg-4">
                    <div class="card p-2">

                            <img src="{{ asset('img/renov-daze2.avif') }}" alt="">


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
                            <a href="{{ route('actualites.show', 1) }}" class="text-danger d-flex align-items-center">
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

                            <img src="{{ asset('img/renov-daze2.avif') }}" alt="">


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
                            <a href="{{ route('actualites.show', 1) }}" class="text-danger d-flex align-items-center">
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

                            <img src="{{ asset('img/renov-daze2.avif') }}" alt="">


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
                            <a href="{{ route('actualites.show',1) }}" class="text-danger d-flex align-items-center">
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
                <a href="{{ route('actualites.index') }}" class="btn btn-success rounded-pill p-2 px-5 ">Voir toutes les activités</a>
            </div>
        </div>
    </section>
</section>


@endsection
