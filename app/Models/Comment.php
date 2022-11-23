<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function TinTuc() {
        return $this->belongsTo(TinTuc::class, 'idTinTuc', 'id');
    }

    public function User() {
        return $this->belongsTo(User::class, 'isUser', 'id');
    }
}
