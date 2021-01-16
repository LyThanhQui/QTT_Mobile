<?php

namespace App\Http\Controllers;

use App\Models\NguoiDung;
use App\Models\SanPham;
use App\Models\DonHang;
use App\Models\DonHang_ChiTiet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Mail\DatHangEmail;
use Illuminate\Support\Facades\Mail;
use Cart;
use Illuminate\Support\Facades\Hash;
use Socialite;
use DB;


class HomeController extends Controller
{
	public function __construct()
	{
	}
	public function getGoogleLogin()
	{
		return Socialite::driver('google')->redirect();
	}

	public function getGoogleCallback()
	{
		try {
			$user = Socialite::driver('google')
				->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
				->stateless()
				->user();
		} catch (Exception $e) {
			return redirect()->route('khachhang.dangnhap')->with('warning', 'Lỗi xác thực. Xin vui lòng thử lại!');
		}

		$existingUser = NguoiDung::where('email', $user->email)->first();
		if ($existingUser) {
			// Nếu người dùng đã tồn tại thì đăng nhập
			Auth::login($existingUser, true);
			return redirect()->route('khachhang');
		} else {
			// Nếu chưa tồn tại người dùng thì thêm mới
			$newUser = NguoiDung::create([
				'name' => $user->name,
				'username' => Str::before($user->email, '@'),
				'email' => $user->email,
				'password' => Hash::make('larashop@2020'), // Gán mật khẩu tự do
			]);

			// Sau đó đăng nhập
			Auth::login($newUser, true);
			return redirect()->route('khachhang');
		}
	}
	//getdonhang

	public function getHome()
	{
		//$sanpham = SanPham::paginate(16);
		$sanpham = DB::table('sanpham')->where('loaisanpham_id', 1)->paginate(16);
		return view('frontend.index', compact('sanpham'));
	}

	public function getDetail($id)
	{
		$sanpham = SanPham::find($id);
		$sp1 = SanPham::find(2);
		$sp2 = SanPham::find(3);
		$sp3 = SanPham::find(4);
		$sp4 = SanPham::find(5);
		return view('frontend.detail', compact('sanpham', 'sp1', 'sp2', 'sp3', 'sp4'));
	}
	public function getCompare($idFirstSP, $idSecondSP)
	{
		$sp1 = SanPham::find($idFirstSP);
		$sp2 = SanPham::find($idSecondSP);
		return view('frontend.compare_sanpham', compact('sp1', 'sp2'));
	}

	public function getQuickSanPham($id)
	{
		$sanpham = SanPham::find($id);
		return view('frontend.quick_view_sanpham', compact('sanpham'));
	}
	public function getLaptop()
	{
		$sanpham = DB::table('sanpham')->where('loaisanpham_id', 2)->paginate(16);
		//$sanpham = SanPham::paginate(16);
		return view('frontend.laptop', compact('sanpham'));
	}


	public function getTablet()
	{
		$sanpham = DB::table('sanpham')->where('loaisanpham_id', 3)->paginate(16);
		//$sanpham = SanPham::paginate(16);
		return view('frontend.tablet', compact('sanpham'));
	}

	public function getDangKy()
	{
		return view('frontend.dangky');
	}

	public function getDangNhap()
	{
		return view('frontend.dangnhap');
	}

	public function getSanPham($tenloai_slug = '')
	{
		return view('frontend.sanpham');
	}

	public function getSanPham_ChiTiet($tenloai_slug, $tensanpham_slug)
	{
		return view('frontend.sanpham_chitiet');
	}

	public function getLienHe()
	{
		return view('frontend.lienhe');
	}

	public function getGioHang()
	{
		if (Cart::count() > 0)
			return view('frontend.giohang');
		else
			return view('frontend.giohang_rong');
	}

	public function getGioHang_Them($tensanpham_slug)
	{
		$sanpham = SanPham::where('tensanpham_slug', $tensanpham_slug)->first();

		Cart::add([
			'id' => $sanpham->id,
			'name' => $sanpham->tensanpham,
			'price' => $sanpham->dongia,
			'qty' => 1,
			'weight' => 0,
			'options' => [
				'image' => $sanpham->hinhanh
			]
		]);

		return redirect()->route('frontend');
	}

	public function getGioHang_Xoa($row_id)
	{
		Cart::remove($row_id);
		return redirect()->route('frontend.giohang');
	}

	public function getGioHang_XoaTatCa()
	{
		Cart::destroy();
		return redirect()->route('frontend.giohang');
	}

	public function getGioHang_Giam($row_id)
	{
		$row = Cart::get($row_id);

		if ($row->qty > 1) {
			Cart::update($row_id, $row->qty - 1);
		}

		return redirect()->route('frontend.giohang');
	}

	public function getGioHang_Tang($row_id)
	{
		$row = Cart::get($row_id);

		if ($row->qty <= 10) {
			Cart::update($row_id, $row->qty + 1);
		}

		return redirect()->route('frontend.giohang');
	}

	public function getDatHang()
	{
		return view('frontend.dathang');
	}

	public function postDatHang(Request $request)
	{
		$this->validate($request, [
			'diachigiaohang' => ['required', 'max:255'],
			'dienthoaigiaohang' => ['required', 'max:255'],
		]);

		// Lưu vào đơn hàng
		$dh = new DonHang();
		$dh->nguoidung_id = Auth::user()->id;
		$dh->diachigiaohang = $request->diachigiaohang;
		$dh->dienthoaigiaohang = $request->dienthoaigiaohang;
		$dh->save();

		// Lưu vào đơn hàng chi tiết
		foreach (Cart::content() as $value) {
			$ct = new DonHang_ChiTiet();
			$ct->donhang_id = $dh->id;
			$ct->sanpham_id = $value->id;
			$ct->soluongban = $value->qty;
			$ct->dongiaban = $value->price;
			$ct->save();
		}
		Mail::to(Auth::user()->email)->send(new DatHangEmail($dh));

		return redirect()->route('frontend.dathangthanhcong');
	}

	public function getDatHangThanhCong()
	{
		Cart::destroy();
		return view('frontend.dathangthanhcong');
	}

	//san xep
	public function postSanPham(Request $request)
	{
		if ($request->sapxep == 'popularity') // Mua nhiều nhất
		{
			$sanpham = SanPham::leftJoin('donhang_chitiet', 'sanpham.id', '=', 'donhang_chitiet.sanpham_id')
				->selectRaw('sanpham.*, coalesce(sum(donhang_chitiet.soluongban), 0) tongsoluongban')
				//Biên soạn: Nguyễn Hoàng Tùng. Giấy phép CC BY-NC 4.0 Quốc tế.
				->groupBy('sanpham.id')
				->orderBy('tongsoluongban', 'desc')
				->paginate(16);

			// Ghi vào SESSION
			session()->put('sapxep', 'popularity');
		} elseif ($request->sapxep == 'date') // Mới nhất
		{
			$sanpham = SanPham::orderBy('created_at', 'desc')->paginate(16);

			// Ghi vào SESSION
			session()->put('sapxep', 'date');
		} elseif ($request->sapxep == 'price') // Xếp theo giá: thấp đến cao
		{
			$sanpham = SanPham::orderBy('dongia', 'asc')->paginate(16);

			// Ghi vào SESSION
			session()->put('sapxep', 'price');
		} elseif ($request->sapxep == 'price-desc') // Xếp theo giá: cao xuống thấp
		{
			$sanpham = SanPham::orderBy('dongia', 'desc')->paginate(16);

			// Ghi vào SESSION
			session()->put('sapxep', 'price-desc');
		} else // Mặc định
		{
			$sanpham = SanPham::paginate(16);

			// Ghi vào SESSION
			session()->put('sapxep', 'default');
		}

		return view('frontend.index', compact('sanpham'));
	}
}
