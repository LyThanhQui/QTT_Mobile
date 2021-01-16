<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LoaiSanPham;
use App\Imports\SanPhamImport;
use App\Exports\SanPhamExport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Excel;

class SanPhamController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getDanhSach()
	{
		$sanpham = SanPham::paginate(25);
		return view('sanpham.danhsach', compact('sanpham'));
	}
	
	public function getThem()
    {
        $loaisanpham = LoaiSanPham::all();
		return view('sanpham.them', compact('loaisanpham'));
    }
	
	public function postThem(Request $request)
	{
		$this->validate($request, [
			'loaisanpham_id' => ['required'],
			'tensanpham' => ['required', 'max:255', 'unique:sanpham'],
			'soluong' => ['required', 'numeric'],
			'dongia' => ['required', 'numeric'],
			// 'hinhanh' => ['image', 'max:2048'],
		]);
		
		$orm = new SanPham();
		$orm->loaisanpham_id = $request->loaisanpham_id;
		$orm->tensanpham = $request->tensanpham;
		$orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
		$orm->soluong = $request->soluong;
		$orm->dongia = $request->dongia;
		if($request->hasFile('hinhanh')) $orm->hinhanh = $request->hinhanh;
		$orm->motasanpham = $request->motasanpham;
		$orm->save();
		
		return redirect()->route('sanpham');
	}
	
	public function getSua($id)
	{
		$sanpham = SanPham::find($id);
		$loaisanpham = LoaiSanPham::all();
		return view('sanpham.sua', compact('sanpham', 'loaisanpham'));
	}
	
	public function postSua(Request $request, $id)
	{
		$this->validate($request, [
			'loaisanpham_id' => ['required'],
			'tensanpham' => ['required', 'max:255', 'unique:sanpham,tensanpham,' . $id],
			'soluong' => ['required', 'numeric'],
			'dongia' => ['required', 'numeric'],
			// 'hinhanh' => ['image', 'max:2048'],
		]);
		
		$orm = SanPham::find($id);
		$orm->loaisanpham_id = $request->loaisanpham_id;
		$orm->tensanpham = $request->tensanpham;
		$orm->tensanpham_slug = Str::slug($request->tensanpham, '-');
		$orm->soluong = $request->soluong;
		$orm->dongia = $request->dongia;
		if($request->hasFile('hinhanh')) $orm->hinhanh = $request->hinhanh;
		$orm->motasanpham = $request->motasanpham;
		$orm->save();
		
		return redirect()->route('sanpham');
	}
	
	public function getXoa($id)
	{
		$orm = SanPham::find($id);
		$orm->delete();
		
		return redirect()->route('sanpham');
	}
	
	// Nhập từ Excel
	public function postNhap(Request $request)
	{
		Excel::import(new SanPhamImport, $request->file('file_excel'));
		
		return redirect()->route('sanpham');
	}
	
	// Xuất ra Excel
	public function getXuat()
	{
		return Excel::download(new SanPhamExport, 'danh-sach-san-pham.xlsx');
	}
}