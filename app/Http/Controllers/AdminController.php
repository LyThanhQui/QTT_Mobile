<?php

namespace App\Http\Controllers;

use App\Models\DonHang_ChiTiet;
use Illuminate\Http\Request;
use DB;


class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getAdmin()
	{
		return view('admin');
	}
	public function getDoanhThu()
	{
		$doanhthu = DB::table('donhang_chitiet')->sum('dongiaban');
		return view('doanhthu', compact('doanhthu'));
	}
}
