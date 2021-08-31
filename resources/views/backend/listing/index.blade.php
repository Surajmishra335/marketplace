@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row justify-content-center">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    @include('backend.inc.message')
                    <div class="card-header">
                        <h4>Manage Advertisements</h4>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Seller</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Published Date</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ads as $ad)
                                    @if ($ad)
                                    <tr>
                                        <td>
                                            @if ($ad->user->avatar)
                                            <img src="{{Storage::url($ad->user->avatar)}}" alt="">
                                            @else
                                            <img src="/img/man.jpg" alt="">
                                            @endif
                                            <a href="{{route('show.user.ads',[$ad->user->id])}}" target="_blank">
                                                {{$ad->user->name}}
                                            </a>
                                        </td>

                                        <td><img src="{{Storage::url($ad->feature_image)}}" alt=""></td>

                                        <td>{{$ad->name}}</td>

                                        <td>{{$ad->created_at->format('Y-m-d')}}</td>

                                        <td>
                                            <a href="{{route('product.view', [$ad->id, $ad->slug])}}" target="_blank">
                                                <button class="btn btn-info">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </a>
                                        </td>

                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal{{$ad->id}}">
                                                Delete <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$ad->id}}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{route('ad.delete',[$ad->id])}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                    Confirmations
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you really want to delete ?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger">Delete
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @else
                                    <p>NO Category found in record</p>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{$ads->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection