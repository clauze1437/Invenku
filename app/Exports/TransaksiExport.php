<?php

namespace App\Exports;

use App\Models\Transaksi;
use Maatwebsite\Excel\Concerns\FromCollection;

class TransaksiExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Transaksi::all();
        $ar_transaksi = Transaksi::join('pegawai', 'pegawai.id', '=', 'transaksi.pegawai_id')
            ->select(
                'transaksi.kode_trans',
                'pegawai.nama',
                'transaksi.nama_barang',
                'transaksi.tanggal',
                'transaksi.jumlah',
                'transaksi.status',
                'transaksi.catatan'
            )
            ->get();

        return $ar_transaksi;
    }

    public function headings(): array
    {
        return ["Kode Transaksi", "Nama Pegawai", "Nama Barang", "Tanggal", "Jumlah", "Status", "Catatan"];
    }
}
