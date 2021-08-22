<div class="card ">

    <div class="card-body ">
        @if (!auth()->user()->avatar)
        <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
        @else
        <img class="mx-auto d-block img-thumbnail" src="{{Storage::url(auth()->user()->avatar)}}" width="130">
        @endif
        
        @if (!auth()->user()->name)
        <p class="text-center"><b>User</b></p>
        @else
        <p class="text-center"><b>{{auth()->user()->name}}</b></p>
        @endif
    </div>
    <hr style="border:2px solid blue;">
    <div class="vertical-menu">
        <a href="#">Dashboard</a>
        <a href="{{route('profile')}}" class="{{request()->is('profile') ? 'active': ''}}">Profile</a>
        <a href="{{route('ads.create')}}" class="{{request()->is('ads/create') ? 'active': ''}}">Create ads</a>
        <a href="{{route('ads.index')}}" class="{{request()->is('ads') ? 'active': ''}}">Published ads</a>
        <a href="#">Pending ads</a>
        <a href="#" class="">Message</a>
    </div>

</div>