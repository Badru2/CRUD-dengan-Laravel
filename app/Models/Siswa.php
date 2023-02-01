<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $visible = ['nama', 'nim', 'alamat'];
    protected $fillable = ['nama','nim', 'alamat'];
    public $timestamps = true;
}
