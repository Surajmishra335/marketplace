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
    <span>
        <h1>Car</h1>
        <a href="" class="float-right">View All</a>
    </span>
    <div id="carouselExampleFade" class="carousel slide" data-ride="carousel" ata-interval="200">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-3">
                        <img src="products/car1.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                    <div class="col-3">
                        <img src="products/car1.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                    <div class="col-3">
                        <img src="products/car1.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                    <div class="col-3">
                        <img src="products/car1.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                </div>

            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-3">
                        <img src="products/car2.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                    <div class="col-3">
                        <img src="products/car2.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                    <div class="col-3">
                        <img src="products/car2.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                    <div class="col-3">
                        <img src="products/car2.jpg" class="img-thumbnail" alt="...">
                        <p class="text-center card-footer" style="color: #222;">Name Of Product/ $500</p>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

@endsection