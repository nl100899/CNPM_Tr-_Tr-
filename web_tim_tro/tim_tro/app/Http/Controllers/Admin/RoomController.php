<?php

namespace App\Http\Controllers\Admin;

use App\phongModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class RoomController extends Controller
{
    public function index()
    {
        // dua ra danh sách phòng
        $items = DB::table('danhsachphong')->paginate(10);
    
        $data = array();
        $data['rooms'] = $items;
        return view("admin.content.room.danhsachphong",$data);
    }
    public function edit($id) {
        
        // dưa ra view sửa phòng
        $data = array();
        
        $item = phongModel::find($id);
        $data['room'] = $item;
        
        return view('admin.content.room.edit_room', $data);
    }
    public function delete($id) {
        
        //đưa ra view xóa phòng
        $data = array();
        
        $item = phongModel::find($id);
        $data['room'] = $item;
        
        return view('admin.content.room.delete_room', $data);
    }
    public function update(Request $request, $id) {
    
        // cập nhật thông tin phòng sau khi sửa nhận từ form sửa để sửa vào CSDL
        $file = $request->anh;
        $path ='upload/image/';
        $file->move($path, $file->getClientOriginalName());
        $input = $request->all();
    
        $input = $request->all();
        $item =  phongModel::find($id);
        $item->vi_tri = $input['vi_tri'];
        $item->gia_tien = $input['gia_tien'];
        $item->loai_phong = $input['kieu_phong'];
        $item->nguoi_dang = $input['nguoi_dang'];
        $item->ngay_dang = $input['ngay_dang'];
        $item->anh = $path.$file->getClientOriginalName();
        $item->mo_ta = isset($input['mota']) ? $input['mota'] : '';
    
        $item->save();
        
        
        return redirect('/admin/room/repository');
    }
    
    public function destroy($id) {
        // xóa phòng khỏi CSDL
        $item = phongModel::find($id);
        
        $item->delete();
        
        return redirect('/admin/room/repository');
    }
}
