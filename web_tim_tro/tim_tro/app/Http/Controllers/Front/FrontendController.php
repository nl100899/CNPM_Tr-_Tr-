<?php

namespace App\Http\Controllers\Front;

use App\phongModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class FrontendController extends Controller
{
    public function index()
    {
        // đưa ra view trang chủ
        return view('frontend.homepages.homepage');
    }
    public function listroom()
    {
        // đưa ra view danh sách các phòng
        $items = DB::table('danhsachphong')->paginate(6);
        $data = array();
        $data['rooms'] = $items;
        return view('frontend.room_manager.listroom',$data);
    }
    public function postroom()
    {
        // đưa ra form đăng bài
        return view('frontend.room_manager.postroom');
    }
    public function updateroom(Request $request)
    {
    
        // nhận dữ liệu từ form đăng bài và truyền lưu vào CSDL
        $file = $request->anh;
        $path ='upload/image/';
        $file->move($path, $file->getClientOriginalName());
        $input = $request->all();
    
        $input = $request->all();
        $item = new phongModel();
        $item->vi_tri = $input['vi_tri'];
        $item->gia_tien = $input['gia_tien'];
        $item->loai_phong = $input['kieu_phong'];
        $item->nguoi_dang = $input['nguoi_dang'];
        $item->ngay_dang = $input['ngay_dang'];
        $item->anh = $path.$file->getClientOriginalName();
        $item->mo_ta = isset($input['mota']) ? $input['mota'] : '';
    
        $item->save();
        
        return view("frontend.homepages.homepage");
        
    }
    public function thanhxuan()
    {
        // tìm các phòng ơ thanh xuân rùi trả về view
        $items = DB::table('danhsachphong')->where('vi_tri','thanh xuan')->paginate(10);
        $data = array();
        $data['rooms'] = $items;
        return view("frontend.room_manager.listroom",$data);
    }
    public function caugiay()
    {
        // tìm các phòng ở cầu giấy rùi trả về view
        $items = DB::table('danhsachphong')->where('vi_tri','cau giay')->paginate(10);
        $data = array();
        $data['rooms'] = $items;
        return view("frontend.room_manager.listroom",$data);
    }
    public function badinh()
    {
        // tìm các phòng ở ba đình rùi trả về view
        $items = DB::table('danhsachphong')->where('vi_tri','ba dinh')->paginate(10);
        $data = array();
        $data['rooms'] = $items;
        return view("frontend.room_manager.listroom",$data);
    }
    public function don()
    {
        // tìm các phòng đơn rùi trả về view
        $items = DB::table('danhsachphong')->where('loai_phong',1)->paginate(10);
        $data = array();
        $data['rooms'] = $items;
        return view("frontend.room_manager.listroom",$data);
    }public function doi()
{
    // tìm các phòng đôi rùi trả về view
    $items = DB::table('danhsachphong')->where('loai_phong',2)->paginate(10);
    $data = array();
    $data['rooms'] = $items;
    return view("frontend.room_manager.listroom",$data);
}public function da()
{
    // tìm các phòng đa rùi trả về view
    $items = DB::table('danhsachphong')->where('loai_phong',3)->paginate(10);
    $data = array();
    $data['rooms'] = $items;
    return view("frontend.room_manager.listroom",$data);
}
public function about()
{
    // trả về view about
    return view("frontend.about");
}
public function contact()
{
    // trả về view liên hệ
    
    return view("frontend.contact");
    
}
}
