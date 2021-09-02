<div class="row">
    <div class="col-md-12">
        <div>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="/">Home </a>
                    /
                </li>
                @for ($i = 2; $i <= count(Request::segments()); $i++) @if ($i < count(Request::segments()) & $i> 0)
                    <a
                        href="{{URL::to(implode('/', array_slice(Request::segments(), 0, $i, true)))}}">{{ucwords(Request::segment($i))}}
                    </a>
                    /
                    @else
                    {{str_replace('-', ' ',Request::segment($i))}}
                    @endif
                    @endfor
            </ol>
        </div>
    </div>
</div>