@extends('CRUDs.layout')

@section('content')

<br>
<br>

<form action="{{ route('store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="">
            </div>
        </div>
        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="surname" placeholder="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection
