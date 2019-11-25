<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tipe;

class TipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Tipe = Tipe::all();
      return view('Laundry.TipeLaundry', [
        'data' => $Tipe
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Laundry.tambahTipe', [
        'data' => new Tipe(),
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
      $Tipe = new Tipe();
      $Tipe->tipe_laundry = $request->input('tipe_laundry');
      $Tipe->save();
      return redirect ('Tipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('Laundry.tambahTipe',[
        'data'=>Tipe::findOrFail($id)
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
      $Tipe = Tipe::findOrFail($id);
      $Tipe->tipe_laundry = $request->input('tipe_laundry');
      $Tipe->save();
      return redirect ('Tipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Tipe = Tipe::findOrFail($id);
      $Tipe->delete();
      return redirect('Tipe');
    }
}
