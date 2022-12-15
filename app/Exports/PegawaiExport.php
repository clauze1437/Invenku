<?php

namespace App\Exports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\FromCollection;

class PegawaiExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Pegawai::all();
        $ar_pegawai = Pegawai::join('jabatan', 'jabatan.id', '=', 'pegawai.jabatan_id')
            ->select(
                'pegawai.nip',
                'pegawai.nama',
                'jabatan.nama AS posisi',
                'pegawai.gender',
                'pegawai.tmp_lahir',
                'pegawai.tgl_lahir',
                'pegawai.alamat',
                'pegawai.telepon'
            )
            ->get();

        return $ar_pegawai;
    }

    public function headings(): array
    {
        return ["NIP", "Nama", "Jabatan", "Jenis Kelamin", "Tempat lahir", "Tanggal Lahir", "Alamat", "Telepon"];
    }
}
