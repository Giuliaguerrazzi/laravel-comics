@extends('layouts/main')

@section('content')
    <main class='wrap-home'>
    
    <section class='general-hero'  style="background-image: url({{ $comic['image-hero'] }});">
        <div class='container'>
            <img src="{{ $comic['image-cover'] }}" alt="">
        </div>
    </section>

    <section class='container comics-card mt-2 mb-2'>
        <div class='flex'> 
            <div class='text-comic'>
                <h1>{{ $comic['title'] }}</h1>
                
                <div class="detail flex mb-1">    
                  <div class="price flex space-between align-center"> 
                    <p> U.S. Price &#xFF04; {{ $comic['price'] }}</p>
                    <p>AVAILABLE ON 11/10</p>
                </div> 
                <div class="check flex align-center">
                    <p> 
                   Check Availbility <i class="fas fa-caret-down"></i>
                     </p> 
                </div>
             </div>
            <div class='text'>{!! $comic['body'] !!}</div>
            </div>
            

            <div class="adv">
                    <p class='flex flex-end'>Advertisement</p>
                    <img src="../images/adv.png" alt="">
            </div>
        </div>    
    </section>

     <section class="detail-comic mt-2"> 
            <div class="container flex space-between mb-4">
                <div class="detail-column">
                    <h4>Talent</h4>
                    <div class="detail-info flex space-between">
                        <p>Art by</p>
                        <p class='text-blue'>Sandy Jarrell</p>
                    </div>
                    <div class="detail-info flex space-between">
                        <p>Written by</p>
                        <p class='text-blue'>P. C. Morrissey</p>
                    </div>
                </div>
                <div class="detail-column">
                    <h4> Specs</h4>
                    <div class="detail-info flex space-between">
                        <p>Series</p>
                        <p class='text-blue'>Titans</p>
                    </div>
                    <div class="detail-info flex space-between">
                        <p>Price</p>
                        <p>{{ $comic['price'] }}</p>
                    </div>
                    <div class="detail-info flex space-between">
                        <p>On sale on date</p>
                        <p>Nov 10 2020</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="icon-comic pb-4">
            <div class="container">
                <ul class="flex space-around">
                    <li class='flex'>
                        <p>Digital comics</p>
                        <img src="../images/digital.png" alt="">
                    </li>
                    <li class='flex'>
                        <p>comic shop locator</p>
                        <img src="../images/shop.png" alt="">
                    </li>
                    <li class='flex'>
                        <p>Shop locator</p>
                        <img src="../images/locator.png" alt="">
                    </li>
                    <li class='flex'>
                        <p>subscriptions</p>
                        <img src="../images/subscription.png" alt="">
                    </li>
                </ul>
            </div>
        </section>

    </main>
@endsection