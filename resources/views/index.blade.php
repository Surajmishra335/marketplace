@extends('layouts.app')
@section('content')

<div class="slider" style="margin-top: -30px">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="sliders/slider1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="sliders/slider2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="sliders/slider3.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h1>Top Categories</h1>
    <div class="row text-center mt-5">
        @foreach ($categories  as $category)
            <div class="col-lg-3 col-md-4 col-lg" id="card">
                <a href="{{route('category.show', [$category->slug])}}" class="d-block mb-4 h-100" >
                    <img src="{{Storage::url($category->image)}}" alt="" class="img img-fluid img-thumbnail" style="height: 70px; width: auto;">
                    <p>{{$category->name}}</p>
                </a>
            </div>
        @endforeach
    </div>
</div>

<div class="container mt-5">
    <span>
        <h1>Car</h1>
        <a href="{{route('category.show', $category->slug)}}" class="float-right">View All</a>
    </span><br>
    <div id="carouselExampleFade{{$category->id}}" class="carousel slide" data-ride="carousel" ata-interval="200">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    @forelse ($firstAds as $firstad)
                    <div class="col-3">
                        <a href="{{route('product.view', [$firstad->id, $firstad->slug])}}">
                            <img src="{{Storage::url($firstad->feature_image)}}" class="img-thumbnail" alt="...">

                            <p class="text-center card-footer" style="color: #222;">{{$firstad->name}}/
                                ${{$firstad->price}}</p>
                        </a>

                    </div>
                    @empty

                    @endforelse

                </div>
            </div>
            @if ($secondAds->count() > 0)
            <div class="carousel-item">
                <div class="row">
                    @forelse ($secondAds as $secondad)
                    <div class="col-3">
                        <a href="{{route('product.view', [$secondad->id, $secondad->slug])}}">
                            <img src="{{Storage::url($secondad->feature_image)}}" class="img-thumbnail" alt="...">
                            <p class="text-center card-footer" style="color: #222;">{{$secondad->name}}/
                                ${{$secondad->price}}</p>
                        </a>
                    </div>
                    @empty

                    @endforelse

                </div>
            </div>
            @endif

        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade{{$category->id}}" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade{{$category->id}}" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mt-5">
    <span>
        <h1>Eelctronics</h1>
        <a href="{{route('category.show', $categoryElectronics->slug)}}" class="float-right">View All</a>
    </span><br>
    <div id="carouselExampleFade{{$categoryElectronics->id}}" class="carousel slide" data-ride="carousel" ata-interval="200">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    @forelse ($firstAdsForElectronics as $firstAdForElectronic)
                    <div class="col-3">
                        <a href="{{route('product.view', [$firstAdForElectronic->id, $firstAdForElectronic->slug])}}">
                            <img src="{{Storage::url($firstAdForElectronic->feature_image)}}" class="img-thumbnail" alt="...">

                            <p class="text-center card-footer" style="color: #222;">{{$firstAdForElectronic->name}}/
                                ${{$firstAdForElectronic->price}}</p>
                        </a>

                    </div>
                    @empty

                    @endforelse

                </div>
            </div>
            @if ($secondAdsForElectronics->count() > 0)
            <div class="carousel-item">
                <div class="row">
                    @forelse ($secondAdsForElectronics as $secondAdForElectronic)
                    <div class="col-3">
                        <a href="{{route('product.view', [$secondAdForElectronic->id, $secondAdForElectronic->slug])}}">
                            <img src="{{Storage::url($secondAdForElectronic->feature_image)}}" class="img-thumbnail" alt="...">
                            <p class="text-center card-footer" style="color: #222;">{{$secondAdForElectronic->name}}/
                                ${{$secondAdForElectronic->price}}</p>
                        </a>
                    </div>
                    @empty

                    @endforelse

                </div>
            </div>
            @endif

        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade{{$categoryElectronics->id}}" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade{{$categoryElectronics->id}}" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@endsection