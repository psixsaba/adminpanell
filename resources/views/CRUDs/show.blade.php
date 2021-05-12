@extends('CRUDs.layout')
@section('content')
    <br>
    <br>
    <div class="row">
        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>name:</strong>
                {{ $CRUD->name }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>surname:</strong>
                {{ $CRUD->surname }}
            </div>
        </div>
        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                @if($CRUD->is_hired == 1)
                    <input type="checkbox" class="form-check-input" disabled="disabled" checked="checked">
                @else
                    <input type="checkbox" class="form-check-input" disabled="disabled">
                @endif
            </div>
        </div>
    </div>


    <div class="row">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
    </div>
@endsection
