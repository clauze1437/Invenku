<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\Jenis_Barang;
use PDF;
use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data
        //$barang = Barang::all();
        $barang = Barang::orderBy('id', 'DESC')->get();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil master untuk dilooping di select option
        $ar_transaksi = Transaksi::all();
        $ar_jenis_barang = Jenis_Barang::all();
        //arahkan ke form input data
        return view('barang.form', compact('ar_transaksi', 'ar_jenis_barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //proses input barang
        $request->validate(
            [
                'kode_barang' => 'required|unique:barang|max:5',
                'nama' => 'required|max:45',
                'transaksi_id' => 'required|integer',
                'jenis_barang_id' => 'required|integer',
                'kondisi' => 'required',
                'stok' => 'required',
            ],
            //custom pesan errornya
            [
                'kode_barang.required' => 'Kode Barang Wajib Diisi',
                'kode_barang.unique' => 'Kode Barang Sudah Ada (Terduplikasi)',
                'kode_barang.max' => 'Kode Barang Maksimal 10 karakter',
                'nama.required' => 'Nama Wajib Diisi',
                'nama.max' => 'Nama Maksimal 45 karakter',
                'transaksi_id.required' => 'Transaksi Wajib Diisi',
                'transaksi_id.integer' => 'Transaksi Wajib Diisi Berupa dari Pilihan yg Tersedia',
                'jenis_barang_id.required' => 'Jenis Barang Wajib Diisi',
                'jenis_barang_id.integer' => 'Jenis Barang Wajib Diisi Berupa dari Pilihan yg Tersedia',
                'kondisi.required' => 'Kondisi Wajib Diisi',
                'stok.required' => 'Stok Wajib Diisi Berupa dari Pilihan yg Tersedia',
            ]
        );
        //lakukan insert data dari request form
        Barang::create($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Data Barang Baru Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Barang::find($id);
        return view('barang.detail', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Barang::find($id);
        return view('barang.form_edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //proses input pegawai
        $request->validate([
            // 'kode_barang' => 'required|unique:barang|max:5',
            'nama' => 'required|max:45',
            'transaksi_id' => 'required|integer',
            'jenis_barang_id' => 'required|integer',
            'kondisi' => 'required',
            'stok' => 'required',
        ]);
        //lakukan update data dari request form edit
        Barang::find($id)->update($request->all());

        return redirect('/barang' . '/' . $id)
            ->with('success', 'Data Barang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //sebelum hapus data, hapus terlebih dahulu fisik file fotonya jika ada
        $row = Barang::find($id);
        //setelah itu baru hapus data Barang
        Barang::where('id', $id)->delete();
        return redirect()->route('barang.index')
            ->with('success', 'Data Barang Berhasil Dihapus');
    }

    public function barangPDF()
    {
        $barang = Barang::all();
        $pdf = PDF::loadView('barang.barangPDF', ['barang' => $barang]);
        return $pdf->download('data_barang.pdf');
    }

    public function barangExcel()
    {
        return Excel::download(new BarangExport, 'data_barang.xlsx');
    }
}
