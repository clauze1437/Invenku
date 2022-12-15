<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\Barang;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_barang = DB::table('barang')->select('nama', 'stok')->get();
        $ar_gender = DB::table('pegawai')
            ->selectRaw('gender, count(gender) as jumlah')
            ->groupBy('gender')
            ->get();
        return view('dashboard.index', compact('ar_barang', 'ar_gender'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
