@extends('layouts.app')

@section("content")
<div class="jumbo">
</div>
<div class="my-bg-cards">
    <div class="container py-5">
        <div class="d-flex flex-wrap ">
            @foreach ($comics as $comic)
                <div class="card-container">
                    <div class="card-image">
                        <img class="card-img" src="{{$comic->thumb}}" alt="Card image cap">
                    </div>
                    <div class="card-body text-white">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$comic->type}}</h6>
                        <p class="card-text">{{$comic->series}}</p>
                        <p class="card-text">Prezzo : € {{number_format($comic->price)}}</p>
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-dark">See more</a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-dark">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
        <div class="text-center">
            <button class="btn btn-primary px-4 "><a class="text-white" href="{{route("comics.create")}}">Add Comic!</a></button>
        </div>
    </div>
</div>
<div class="my-blue-bg"> 
    <div class="my-banner" >
        <ul class="my-banner-ul list-unstyled py-3 ">
            <li>  
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" >
                <h5>DIGITAL COMICS</h5>
            </li>
            <li>              
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" >
                <h5>DC MERCHANDISE</h5>    
            </li>
            <li>               
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" >
                <h5>SUBSCRIPTION</h5>          
            </li>
            <li>
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" >
                <h5>COMIC SHOP LOCATION</h5>
            </li>
            <li>              
                <img class="size-sm"src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" >
                <h5>DC POWER VISA</h5>         
            </li>
        </ul>
    </div>
</div>
@endsection