@extends('layouts.basic')

@section('title')
    {{ $link->title }}
@stop

@section('content')
    <div class="col-xs-6 col-xs-offset-3">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>Url</th>
                    <td>
                        <a href="{{ $link->url }}" target="blank">
                            {{ $link->url }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ $link->title }}</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{ $link->author or '-' }}</td>
                </tr>
                <tr>
                    <th>Created at</th>
                    <td>{{ $link->created_at }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $link->description or '-' }}</td>
                </tr>
                <tr>
                    <th>Content</th>
                    <td>{{ $link->content or '-' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@stop
