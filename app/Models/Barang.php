<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'barang';
    //mapping ke kolom/fieldnya
    protected $fillable = [
        'kode_barang', 'nama', 'transaksi_id',
        'jenisBarang_id', 'stok', 'kondisi'
    ];

    //tabel relasi merujuk/merefer ke tabel master/acuan
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
    public function jenis_barang()
    {
        return $this->belongsTo(Jenis_Barang::class);
    }
}
