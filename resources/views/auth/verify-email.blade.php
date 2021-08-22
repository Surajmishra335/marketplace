@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
                <div class="alert alert-success text-center"> 
                    {{session('status')}}
                </div>
        @endif
        <div class="card">
            <div class="card-header">
                Verify your account
            </div>
            <div class="card-body">
                <form action="{{route('verification.send')}}" method="POST">
                    @csrf
                    <button class="btn btn-primary" type="submit">Verify</button>
                </form>
            </div>
        </div>
    </div>
@endsection