@extends('layouts.app')
@section('content')
    
    <div class="container">
        @include('breadcrumb')
        <div class="row ">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center bg-info">
                        Filters
                    </div>
                    <div class="card-body">
                        @forelse ($filterByChildCategories as $ad)
                        <p>
                           <a href="{{$ad->childcategory->slug}}">{{$ad->childcategory->name}}</a>
                        </p>
                        @empty
                           
                        @endforelse
                    </div>
                </div>
                <br>
                <form action="{{url()->current()}}" method="GET">
                    <div class="card">
                        <div class="card-header bg-info text-white text-center">
                            Price Filter
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Minimum price</label>
                                <input type="text" name="minPrice" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Maximum price</label>
                                <input type="text" name="maxPrice" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Search</button>
    
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @forelse ($advertisements as $ad)
                    <div class="col-md-3">
                        <img src="{{Storage::url($ad->feature_image)}}" alt="" class="img-thumbnail">
                        <p class="text-center card-footer info">
                            {{$ad->name}} USD {{$ad->price}}
                        </p>
                    </div>  
                    @empty
                       <p>Sorry we are unbale to add based on category</p> 
                    @endforelse
                </div>
            </div>
            
        </div>
    </div>

@endsection