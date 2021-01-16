<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
	use HasFactory;
	
	protected $table = 'sanpham';
	// protected $primaryKey = 'id';
	// protected $keyType = 'string';
	
	protected $fillable = [
		'loaisanpham_id', 'tensanpham', 'tensanpham_slug', 'soluong', 'dongia', 'hinhanh', 'motasanpham',
	];
	
	public function LoaiSanPham()
	{
		return $this->belongsTo('App\Models\LoaiSanPham', 'loaisanpham_id', 'id');
	}
	
	public function DonHang_ChiTiet()
	{
		return $this->hasMany('App\Models\DonHang_ChiTiet', 'sanpham_id', 'id');
	}
}