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
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($ads as $key => $ad)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>
                            <a href="{{route('product.view', [$ad->id, $ad->slug])}}" target="_blank">{{$ad->name}}</a>
                        </td>
                        <td>
                            <a href="{{route('ad.edit', [$ad->id])}}" target="_blank">Edit</a>
                        </td>
                    </tr>
                    @empty
                    <p>You dont have any Pending Ads</p>
                    @endforelse
                </tbody>
            </table>
            @else
            <p>You Dont have any adds</p>
            @endif
        </div>
    </div>
</div>

@endsection