@extends('layouts/main')

@section('content')
    <main class='wrap-home'>
    
    <section class='general-hero'>
        <div class='container'>
            <img src="{{ asset('images/cover-home.jpg') }}" alt="">
        </div>
    </section>

    <section class='row'> 
        <h3 class='container'>CURRENT SERIES</h3>
    </section>


    <section class='comics pt-1'>
        <div class='container'> 
            <ul class='comics-list'>
                @foreach ($comics as $comic)
                <li>
                    <a href="{{ route('comic-detail', $comic['slug']) }}">
                        <img src="{{ $comic['image'] }}" alt="">
                        <h3>{{ $comic['title'] }}</h3>
                    </a>
                </li>

                @endforeach
            </ul>
        </div>

        <div class="flex content-center">
            <a href="/">
                <div class="btn mb-2">
                    <small>Load More</small>        
                </div>
            </a>
        </div>
    
    </section>

    <section class='icon'>

        <ul class='flex space-between'>
            <li class='flex align-center'>
                <img src="../images/digital-comics.png" alt="">
                 <p>Digital comics</p>                
            </li>
            <li class='flex align-center'>
                <img src="../images/merchandise.png" alt="">
                <p>Dc merchandise</p>                
            </li>
            <li class='flex align-center'>
                <img src="../images/subscriptions.png" alt="">
                <p>Subscription</p>                
            </li>
            <li class='flex align-center'>
                <img src="../images/shop-locator.png" alt="">
                <p>Comic sop locator</p>                
            </li>
            <li class='flex align-center'>
                <img src="../images/power-visa.svg" alt="">
                <p>Dc power visa</p>                
            </li>
        
        </ul>
    
    </section>

    <section class='white-row'></section>

    </main>
@endsection
