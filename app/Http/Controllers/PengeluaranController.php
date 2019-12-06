<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pengeluaran;


class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $pengeluaran = Pengeluaran::all();
      return view('Pengeluaran.pengeluaran', [
        'data' => $pengeluaran
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Pengeluaran.tambahPengeluaran', [
        'data' => new Pengeluaran(),
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $pengeluaran = new Pengeluaran();
      $pengeluaran->deskripsi = $request->input('deskripsi');
      $pengeluaran->harga = $request->input('harga');
      $pengeluaran->catatan = $request->input('catatan');
      $pengeluaran->save();
      return redirect ('Pengeluaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('Pengeluaran.tambahPengeluaran',[
        'data'=>Pengeluaran::findOrFail($id)
      ]);
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
      $pengeluaran = Pengeluaran::findOrFail($id);
      $pengeluaran->deskripsi = $request->input('deskripsi');
      $pengeluaran->harga = $request->input('harga');
      $pengeluaran->catatan = $request->input('catatan');
      $pengeluaran->save();
      return redirect('Pengeluaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $pengeluaran = Pengeluaran::findOrFail($id);
      $pengeluaran->delete();
      return redirect('Pengeluaran');
    }
}
