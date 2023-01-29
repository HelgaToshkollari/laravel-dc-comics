@extends('layouts.app')

@section("content")
<div class="jumbo">
</div>
<div class="blue-banner">
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="single-comic-container">
                <img class="card-img"src="{{$comic->thumb}}" >
                <div class="comic-book">
                    COMIC BOOK
                </div>
                
                <div class="view-gallery">
                    VIEW GALLERY
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center py-3">
        <div class="col-sm-9 d-flex justify-content-between">
            
            <div>
                <h2 class="">{{$comic->title}}</h2>
                
                <div class="p-2 my-bg-green text-white d-flex justify-content-between "> 
                                           
                    <h6>U.S. Price:${{number_format($comic->price)}}</h6> 
                    <h6>AVAILABLE</h6>
                    <h6>Sale date{{date('d/m/Y', strtotime($comic->sale_date))}}</h6>
                </div>
                <p>
                    description missing...
                </p> 
            </div>
            <div class="px-4">

                <img class="size-sm"src="{{ Vite::asset('resources/img/adv.jpg') }}" >
            </div>
        
        </div>
       
    </div>
   <div class="text-center p-4">
    <form action="{{route("comics.destroy", $comic->id)}}" method="POST" id="delete-btn" >
        @csrf
        @method('delete')

        <button class="btn btn-danger">Delete Comic</button>

    </form>
   </div>
   
</div>
<script>
    const deleteBtn = document.getElementById("delete-btn");

    deleteBtn.addEventListener("submit", function(e){
        e.preventDefault();
        
        const confirmBtn = confirm("Are u sure u want to delete this comic?");

        if(confirmBtn ===  true){
            deleteBtn.submit();
        }
        
    })
   </script>

<div class="row justify-content-center my-grey-bg">

    <div class="col-sm-8 p-4 d-flex ">

        <div class="col-sm-6 p-2">

            <h4>Talent</h4>

           <div class="hr-line"></div>

            <div class="d-flex justify-content-between ">
                <p>Art by:</p>
                <p class="text-primary">
                    José Luis García-López
                </p>
            </div>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between">
                <p>Written by:</p>
                <p class="text-primary">
                    Brad Meltzer
                </p>
            </div>

            <div class="hr-line"></div>

        </div>

        <div class="col-sm-6 p-2">

            <h4>Specs</h4>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between">
                <p>Series:</p>
                <p class="text-primary">
                    {{$comic->series}}
                </p>
            </div>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between">
                <p>U.S. Price:</p>
                <p>
                    ${{number_format($comic->price)}}
                </p>
            </div>

            <div class="hr-line"></div>

            <div class="d-flex justify-content-between ">
                <p>On Sale Date:</p>
                <p>
                    {{date('d/m/Y', strtotime($comic->sale_date))}}
                </p>
            </div>

            <div class="hr-line"></div>

        </div>

    </div>
    <div class="container"> 
        <div class="my-banner" >
            <ul class="my-banner-ul list-unstyled py-3 ">
                <li> 
                    <h5>DIGITAL COMICS</h5>
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" >
                    
                </li>
                <li>
                    <h5>DC MERCHANDISE</h5>               
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" >
                       
                </li>
                <li>
                    <h5>SUBSCRIPTION</h5>                
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" >
                             
                </li>
                <li>
                    <h5>COMIC SHOP LOCATION</h5>
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" >
                    
                </li>
                <li>
                    <h5>DC POWER VISA</h5>               
                    <img class="size-sm"src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" >
                            
                </li>
            </ul>
        </div>
    </div>

</div>

@endsection