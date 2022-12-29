@extends('front.layouts.template')
@section('content')

    <section>
        <div>
            <img src="{{ asset('storage/' . $actualite->photo) }}" alt="">
            <div>
                <p class="lieuevent">{{ $actualite->zone_intervention }}</p>
                <p class="date-event">{{ $actualite->date_debut }}</p>
            </div>
            <div class="detail">
                <p class="title-event">{{ $actualite->titre }}</p>
                <p class="detail">{{ $actualite->description }}</p>
            </div>
        </div>
        <div>
            <button class="btn btn-secondary">Nous soutenir</button>
        </div>
    </section>

@endsection
