<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\Jabatan;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data
        //$Jabatan = Jabatan::all();
        $jabatan = Jabatan::orderBy('id', 'DESC')->get();
        return view('jabatan.index', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //arahkan ke form input data
        return view('jabatan.form');
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
            'nama' => 'required|unique:jabatan|max:45'
        ]);
        //lakukan insert data dari request form
        Jabatan::create($request->all());

        return redirect()->route('jabatan.index')
            ->with('success', 'Jabatan Berhasil Ditambah!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Jabatan::find($id);
        return view('jabatan.detail', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Jabatan::find($id);
        return view('jabatan.form_edit', compact('row'));
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
        Jabatan::find($id)->update($request->all());

        return redirect('/jabatan' . '/' . $id)
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
        $row = Jabatan::find($id);
        //setelah itu baru hapus data Jenis Barang
        Jabatan::where('id', $id)->delete();
        return redirect()->route('jabatan.index')
            ->with('success', 'Data Jabatan Berhasil Dihapus');
    }
}
