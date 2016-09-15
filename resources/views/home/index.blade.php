@extends('layouts.basic')

@section('content')
    <div class="col-xs-12">
        <ul class="list-group">
            @foreach ($links as $link)
                <li class="list-group-item">
                    <a href="{{ $link->getViewUrl() }}">
                        {{ $link->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@stop
