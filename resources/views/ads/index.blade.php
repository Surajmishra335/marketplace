@extends('layouts.app')
@section('content')


<div class="container">
  <div class="row">

    <div class="col-md-3">
      @include('sidebar')
    </div>
    <div class="col-md-9">
      @if (Session::has('message'))
      <div class="alert alert-success">
        {{Session::get('message')}}
      </div>
      @endif
      @if ($ads)
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
            <th scope="col">View</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ads as $key => $ad)

          <tr>
            <th scope="row">{{1+$key}}</th>
            <td style="width: 200px; height: 130px;">
              <div id="carouselExampleControls{{$ad->id}}" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{Storage::url($ad->feature_image)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{Storage::url($ad->first_image)}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{Storage::url($ad->second_image)}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls{{$ad->id}}" role="button"
                  data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls{{$ad->id}}" role="button"
                  data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              {{-- <img src="{{Storage::url($ad->feature_image)}}" alt="" width="130">
              <img src="{{Storage::url($ad->first_image)}}" alt="" width="130">
              <img src="{{Storage::url($ad->second_image)}}" alt="" width="130"> --}}
            </td>
            <td>{{$ad->name}}</td>
            <td>{{$ad->price}}</td>
            <td>
              @if ($ad->published == 1)
              <span class="badge badge-success">Published</span>
              @else
              <span class="badge badge-warning">Pending</span>
              @endif
            </td>
            <td><a href="{{route('ad.edit', $ad->id)}}"> <button class="btn btn-primary">Edit</button></a>
            </td>
            <td><a href="{{route('product.view', [$ad->id, $ad->slug])}}" target="_blank"><button class="btn btn-info">View</button></a></td>
            <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$ad->id}}">
                Delete
              </button>
              <div class="modal fade" id="exampleModal{{$ad->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <form action="{{route('ad.delete', $ad->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Are your sure you want to delete this add?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </td>
            <!-- Modal -->

          </tr>

          @endforeach
        </tbody>
      </table>
      @else
      <p>You Dont have any adds</p>
      @endif
    </div>
  </div>
</div>

@endsection