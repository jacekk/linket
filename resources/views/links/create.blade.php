@extends('layouts.basic')

@section('title')
    Add a link
@stop

@section('content')
    <div class="col-xs-12">
        <form action="/links/new" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
                <legend>Form to add link</legend>
            </div>

            <div class="form-group">
                <label for="url-input" class="col-sm-1 control-label">URL</label>
                <div class="col-sm-11">
                    <input
                        type="url"
                        class="form-control"
                        id="url-input"
                        name="url"
                        value="{{ old('url') }}"
                        required
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="author-input" class="col-sm-1 control-label">Title</label>
                <div class="col-sm-11">
                    <input
                        type="text"
                        class="form-control"
                        id="title-input"
                        name="title"
                        value="{{ old('title') }}"
                        required
                    >
                </div>
            </div>


            <div class="form-group">
                <label for="author-input" class="col-sm-1 control-label">Author</label>
                <div class="col-sm-11">
                    <input
                        type="text"
                        class="form-control"
                        id="author-input"
                        name="author"
                        value="{{ old('author') }}"
                    >
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>

            @if (count($errors))
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>
@stop
