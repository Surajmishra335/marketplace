@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{Storage::url($advertisement->feature_image)}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{Storage::url($advertisement->first_image)}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{Storage::url($advertisement->second_image)}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <hr>
            <div class="card">

                <div class="card-body">
                    <p>{!!$advertisement->description !!}</p>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-header bg-info text-white">
                    More Info
                </div>
                <div class="card-body">
                    <p>Country: {{$advertisement->country->name ?? ''}}</p>
                    <p>State: {{$advertisement->state->name?? ''}}</p>
                    <p>City: {{$advertisement->city->name?? ''}}</p>
                    <p>Product Condition: {{$advertisement->product_condition}}</p>


                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    {!! $advertisement->displayVideoFromLink() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>{{$advertisement->name}}</h3>
            <p>Price: {{$advertisement->price}} USD {{$advertisement->price_status}}</p>
            <p>Posted: {{$advertisement->created_at->diffForHumans()}}</p>
            <p>Location: {{$advertisement->listing_location}}</p>
            <hr>
            @if ($advertisement->user->avatar)
            <img src="{{Storage::url($advertisement->user->avatar)}}" alt="" height="130">
            @else
            <img src="{{asset('img/man.jpg')}}" alt="" height="130">
            @endif
            <p>{{$advertisement->user->name}}
                @if (Auth()->check())
                
                <message 
                
                seller-name="{{$advertisement->user->name}}"
                :user-id="{{auth()->user()->id}}"
                :receiver-id="{{$advertisement->user->id}}"
                :ad-id="{{$advertisement->id}}"
                >
                </message>
                @endif
                

            </p>
        </div>
    </div>
</div>
@endsection