<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Model SinhVien
use App\Models\SinhVien;

class SinhVienController extends Controller
{
    // Phương thức index() – HIỂN THỊ (SELECT)
    public function index()
    {
        // TODO 11: Lấy toàn bộ sinh viên
        $danhSachSV = SinhVien::all();

        // TODO 12: Trả về view và truyền dữ liệu
        return view('sinhvien.list', compact('danhSachSV'));
    }

    // Phương thức store() – LƯU (INSERT)
    public function store(Request $request)
    {
        // TODO 13: Lấy dữ liệu từ form
        $data = $request->all();

        // TODO 14: Lưu vào CSDL bằng Eloquent
        SinhVien::create($data);

        // TODO 15: Chuyển hướng về trang danh sách
        return redirect()->route('sinhvien.index');
    }
}
