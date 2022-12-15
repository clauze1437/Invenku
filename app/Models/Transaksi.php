<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'transaksi';
    //mapping ke kolom/fieldnya
    protected $fillable = [
        'kode_trans', 'pegawai_id', 'nama_barang', 'tanggal', 'jumlah',
        'status', 'catatan'
    ];
    //relasi one to one ke tabel barang
    public function barang()
    {
        return $this->hasOne(Barang::class);
    }
    //tabel relasi merujuk/merefer ke tabel master/acuan
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
