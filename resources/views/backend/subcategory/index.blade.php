@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row justify-content-center">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    @include('backend.inc.message')
                    <div class="card-header">
                        <h4>Manage Subcategory</h4>
                    </div>
                    <div class="card-body">


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subcategories as $subcategory)
                                    @if ($subcategory)
                                    <tr>
                                        <td>{{$subcategory->name}}</td>
                                        <td>{{$subcategory->category->name}}</td>
                                        <td> <a href="{{route('subcategory.edit',[$subcategory->id])}}"><button
                                                    class="btn btn-info"><i class="mdi mdi-table-edit"></i></button></a>
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                                data-target="#exampleModal{{$subcategory->id}}">
                                                Delete <i class="mdi mdi-delete"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{$subcategory->id}}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{route('subcategory.destroy',[$subcategory->id])}}" method="POST">
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
                                    <p>NO Subcategory found in record</p>
                                    @endif

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection