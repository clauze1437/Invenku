<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Barang extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'jenis_barang';
    //mapping ke kolom/fieldnya
    protected $fillable = ['nama'];
    //relasi one to many ke tabel barang
    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
