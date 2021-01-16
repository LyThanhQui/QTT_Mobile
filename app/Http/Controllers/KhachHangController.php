<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KhachHangController extends Controller
{
	public function __construct()
	{
		$this->middleware('khachhang');
	}

	public function getHome()
	{

		return view('frontend.khachhang');
	}

	public function getDonHang($id)
	{
		$donhang = DonHang::find($id);
		$iddonhang = $donhang->id;
		$donhangchitiet = DonHang_ChiTiet::find($iddonhang);
		return view('frontend.khachhang_donhang', compact('donhangchitiet'));
	}

	public function postDonHang(Request $request, $id)
	{
		return redirect()->route('khachhang.donhang');
	}

	public function postCapNhatHoSo(Request $request)
	{
		$request->validate([
			'name' => ['required', 'string', 'max:100'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:nguoidung,email,' . Auth::user()->id],
			'password' => ['confirmed'],
		]);

		$orm = NguoiDung::find(Auth::user()->id);
		$orm->name = $request->name;
		$orm->username = Str::before($request->email, '@');
		$orm->email = $request->email;
		if (!empty($request->password)) $orm->password = Hash::make($request->password);
		$orm->save();

		return redirect()->route('khachhang');
	}
}
