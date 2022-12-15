<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\Jenis_Barang;

class Jenis_BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data
        //$jenis_barang = Jenis_Barang::all();
        $jenis_barang = Jenis_Barang::orderBy('id', 'DESC')->get();
        return view('jenis_barang.index', compact('jenis_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //arahkan ke form input data
        return view('jenis_barang.form');
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
        $request->validate([
            'jenis' => 'required|unique:jenis_barang|max:45'
        ]);
        //lakukan insert data dari request form
        Jenis_Barang::create($request->all());

        return redirect()->route('jenis_barang.index')
            ->with('success', 'Jenis Barang Berhasil Ditambah!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Jenis_Barang::find($id);
        return view('jenis_barang.detail', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Jenis_Barang::find($id);
        return view('jenis_barang.form_edit', compact('row'));
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
        $request->validate(['jenis' => 'required|string']);
        //lakukan update data dari request form edit
        Jenis_Barang::find($id)->update($request->all());

        return redirect('/jenis_barang' . '/' . $id)
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
        $row = Jenis_Barang::find($id);
        //setelah itu baru hapus data Jenis Barang
        Jenis_Barang::where('id', $id)->delete();
        return redirect()->route('jenis_barang.index')
            ->with('success', 'Data Jenis_Barang Berhasil Dihapus');
    }
}
