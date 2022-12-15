<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'pegawai';
    //mapping ke kolom/fieldnya
    protected $fillable = [
        'nip', 'nama', 'jabatan_id', 'gender', 'tmp_lahir',
        'tgl_lahir', 'alamat', 'telepon', 'foto'
    ];
    //relasi one to many ke tabel transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    //tabel relasi merujuk/merefer ke tabel master/acuan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
