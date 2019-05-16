@extends('admin.layouts.glance')
@section('title')
    Delete New
@endsection
@section('content')
    <h1> Delete New {{ $room->id . ' : ' }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <p>Are you want to delete "{{$room->id}}" ?</p>
            <form name="page" action="{{ url('admin/room/'.$room->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>

@endsection
