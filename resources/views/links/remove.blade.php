@extends('layouts.basic')

@section('title')
    Link removal
@stop

@section('content')
    <div class="col-xs-12">
        <form
            action="{{ $link->getRemoveUrl() }}"
            method="POST"
            class="form-horizontal"
            role="form"
        >
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}

            <div class="form-group">
                <legend>
                    Removal confirmation
                </legend>
                <h4>{{ $link->title }}</h4>
                <pre>{{ $link->url }}</pre>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-danger">Yes</button>
                <a href="javascript:history.back();" class="btn btn-default">Cancel</a>
            </div>
        </form>
    </div>
@stop
