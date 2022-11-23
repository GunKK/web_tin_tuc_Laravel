<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table = 'tintuc';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function LoaiTin() {
        return $this->belongsTo(LoaiTin::class, 'idLoaiTin', 'id');
    }

    public function Comment() {
        return $this->hasMany(Comment::class, 'idTinTuc', 'id');
    }
}
