@extends('CRUDs.layout')

@section('content')

    <table class="table ">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>is_hired</th>
            <th></th>
        </tr>
        @foreach ($CRUDs as $key => $item)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->surname }}</td>

            <td>
            @if($item->is_hired == 1)
                <input type="checkbox" disabled="disabled" checked="checked">
            @else
                <input type="checkbox" disabled="disabled">
            @endif
            </td>
            <td>
                <form action="{{ route('delete',$item->id) }}" method="POST">
{{--                    <a class="btn btn-primary" href="{{ route('show',$item->id) }}">Show</a>--}}
                    <a class="btn btn-primary" href="{{ route('edit',$item->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
                <form action="{{ route('hire',$item->id) }}" method="POST">
                    @csrf
                    @if($item->is_hired == 1)
                        <input type="hidden" name="is_hired" value="0">
                        <button type="submit" class="btn btn-secondary">Hired</button>
                    @else
                        <input type="hidden" name="is_hired" value="1">
                        <button type="submit" class="btn btn-secondary">Not hired</button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </table>


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('create') }}"> Add</a>
            </div>
        </div>
    </div>


@endsection
