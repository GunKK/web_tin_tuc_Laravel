<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    use HasFactory;
    protected $table = 'theloai';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function LoaiTin() {
        return $this->hasMany(LoaiTin::class, 'idTheLoai', 'id');
    }
    // relation to table TinTuc
    public function TinTuc() {
        return $this->hasManyThrough(TinTuc::class ,LoaiTin::class, 'idTheLoai', 'idLoaiTin', 'id');
    }
}
