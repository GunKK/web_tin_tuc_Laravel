<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table = 'loaitin';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function TheLoai() {
        return $this->belongsTo(TheLoai::class, 'idTheLoai', 'id');
    }

    public function TinTuc() {
        return $this->hasMany(TinTuc::class, 'idLoaiTin', 'id');
    }
}
