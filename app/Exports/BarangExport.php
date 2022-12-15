<?php

namespace App\Exports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Barang::all();
        $ar_barang = Barang::join('transaksi', 'transaksi.id', '=', 'barang.transaksi_id')
            ->join('jenis_barang', 'jenis_barang.id', '=', 'barang.jenis_barang_id')
            ->select(
                'barang.kode_barang',
                'barang.nama',
                'transaksi.kode_trans',
                'jenis_barang.jenis',
                'barang.kondisi',
                'barang.stok'
            )
            ->get();

        return $ar_barang;
    }

    public function headings(): array
    {
        return ["Kode Barang", "Nama", "Kode Transaksi", "Jenis", "Kondisi", "Stok"];
    }
}
