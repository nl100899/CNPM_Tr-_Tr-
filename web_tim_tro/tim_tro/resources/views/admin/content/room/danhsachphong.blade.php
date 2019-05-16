@extends('admin.layouts.glance')
@section('title')
   Quản Lý phòng
@endsection
@section('content')
    <h1> Quản Lý Phòng</h1>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>vị trí</th>
                    <th>Giá</th>
                    <th>Ngày đăng</th>
                    <th>Người đăng</th>
                    <th>Mô tả</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rooms as $room)
                    <tr>
                        <th scope="row">{{ $room->id }}</th>
                        <td>{{ $room->vi_tri }}</td>
                        <td>{{ $room->gia_tien }}</td>
                        <td>{{ $room->ngay_dang }}</td>
                        <td>{{ $room->nguoi_dang }}</td>
                        <td><?php echo($room->mo_ta) ?></td>
                        <td>
                            <a href="{{ url('admin/room/'.$room->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('admin/room/'.$room->id.'/delete ') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $rooms->links() }}
        </div>
    </div>
@endsection
