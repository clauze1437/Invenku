<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data
        $user = User::orderBy('id', 'DESC')->get();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = User::find($id);
        return view('user.detail', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = User::find($id);
        return view('user.form_edit', compact('row'));
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
        //proses input user
        $request->validate([
            'name' => 'required|max:45',
            'email' => 'required|unique:user',
            'role' => 'required',
            'isactive' => 'required',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        //------------foto lama apabila user ingin ganti foto-----------
        $foto = DB::table('user')->select('foto')->where('id', $id)->get();
        foreach ($foto as $f) {
            $namaFileFotoLama = $f->foto;
        }
        //------------apakah user ingin ganti foto lama-----------
        if (!empty($request->foto)) {
            //jika ada foto lama, hapus foto lamanya terlebih dahulu
            if (!empty($f->foto)) unlink('admin/image/' . $f->foto);
            //proses foto lama ganti foto baru
            $fileName = 'foto-' . $request->nip . '.' . $request->foto->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('admin/image'), $fileName);
        }
        //------------tidak berniat ganti ganti foto lama-----------
        else {
            $fileName = $namaFileFotoLama;
        }
        //lakukan update data dari request form edit
        DB::table('user')->where('id', $id)->update(
            [
                // 'nip' => $request->nip,
                // 'email' => $request->email,
                'name' => $request->name,
                'role' => $request->role,
                'foto' => $fileName,
                'updated_at' => now(),
            ]
        );

        return redirect('/user' . '/' . $id)
            ->with('success', 'Data User Berhasil Diubah');
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
        $row = User::find($id);
        if (!empty($row->foto)) unlink('admin/image/' . $row->foto);
        //setelah itu baru hapus data user
        User::where('id', $id)->delete();
        return redirect()->route('user.index')
            ->with('success', 'Data User Berhasil Dihapus');
    }
}
