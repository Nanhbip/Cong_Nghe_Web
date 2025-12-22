<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    use HasFactory;

    // Cho phép Mass Assignment với ::create()
    protected $fillable = [
        'ten_sinh_vien',
        'email',
    ];
}
