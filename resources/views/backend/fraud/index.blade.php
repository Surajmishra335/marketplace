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
                                        <th>Ad</th>
                                        <th>Email</th>
                                        <th>Reason</th>
                                        <th>Message</th>
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ads as $ad)
                                    @if ($ad)
                                    <tr>
                                        <td>
                                            {{$ad->fraudad->name}}
                                        </td>

                                        <td>
                                            {{$ad->email}}
                                        </td>

                                        <td>
                                            {{$ad->reason}}
                                        </td>

                                        <td>
                                            {{$ad->message}}
                                        </td>

                                        <td>
                                            <a href="{{route('product.view', [$ad->fraudad->id, $ad->fraudad->slug])}}" target="_blank"><button class="btn btn-info">View</button></a>
                                        </td>

                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal{{$ad->ad_id}}">
                                                Delete <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$ad->ad_id}}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{route('ad.delete',[$ad->ad_id])}}" method="POST">
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
                                    <p>NO any reported ads to display</p>
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