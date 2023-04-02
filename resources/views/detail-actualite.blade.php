@extends('layouts.template')
@section('content')
<style>
    .text-container{
        font-size: 20px;
        line-height: 40px;
    }
</style>
<div class="container-fluid justify-content-center">
    <div class="container">
        <h2 class="mt-5 mb-4">Title Lorem ipsum dolor</h2>
        <img src="{{ asset('img/img1.png') }}" alt="" class="w-100 rounded">
        <div class="mt-4 text-container">
            Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. <br>

            Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. <br>

            Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. <br>

            Donec sollicitudin molestie malesuada. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt.
        </div>
        <div class=" mt-4 d-flex justify-content-between align-items-center">
            <p class="d-flex align-items-center">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                    </svg>
                </i> &nbsp;
                <span>
                    15h - 22h
                </span>
            </p>
            <p class="d-flex align-items-center">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"/>
                    </svg>
                </i> &nbsp; &nbsp;
                <span>23 Jan - 05 Fév 2023</span>
            </p>
            <p class="d-flex align-items-center">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                </i> &nbsp; &nbsp;
                <span>Place de l'étoile rouge</span>
            </p>
        </div>
    </div>
</div>
@endsection
