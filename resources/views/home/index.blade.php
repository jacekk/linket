@extends('layouts.basic')

@section('content')
    <div class="col-xs-12">
        <table class="table table-condensed table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Created</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($links as $link)
                    <tr>
                        <td>
                            <a href="{{ $link->getViewUrl() }}">
                                {{ $link->title }}
                            </a>
                        </td>
                        <td>{{ $link->author }}</td>
                        <td>{{ $link->created }}</td>
                        <td>
                            <a
                            class="btn btn-danger btn-xs"
                                href="{{ $link->getRemoveUrl() }}"
                            >✖</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
