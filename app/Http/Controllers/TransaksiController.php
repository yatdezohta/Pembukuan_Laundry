<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Transaksi;
use App\Customer;
use App\Laundry;



class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $transaksi = Transaksi::all();
      $customer = Customer::all();
      return view('Transaksi.transaksi', [
        'data' => $transaksi,
        'cust' => $customer

      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
      return view('Transaksi.tambahTran', [
        'data' => new Transaksi(),
        'cust' => $customer


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
      // $detLaundry = Laundry::find($request->id_detLaundry);
      $hrg = $request->harga;
      // $totalharga = $request->amount*$hrg;

      $transaksi = new Transaksi();
      $transaksi->amount = $request->input('amount');
      $transaksi->start_date = $request->input('start_date');
      $transaksi->end_date = $request->input('end_date');
      $transaksi->status = $request->input('status');
      $transaksi->customer_id = $request->input('customer_id');
      $transaksi->harga = $request->input('harga');
      $transaksi->Total = $request->amount*$hrg;
      $transaksi->save();
      return redirect ('Transaksi');

      // $request->validate([
      //     'amount' => 'required',
      //     'status' => 'required',
      //     'Total' => 'required'
      // ]);
      // Penjualan::create([
      //
      //   'amount' => $request->amount,
      //   'start_date' => $request->start_date,
      //   'end_date' => $request->end_date,
      //   'status' => $request->status,
      //   'customer_id' => $request->customer_id,
      //   'harga' => $request->harga,
      //   'Total' => $totalharga
      // ]);

      return redirect('Transaksi');
      // $transaksi = new Transaksi();
      // $transaksi->amount = $request->input('amount');
      // $transaksi->start_date = $request->input('start_date');
      // $transaksi->end_date = $request->input('end_date');
      // $transaksi->status = $request->input('status');
      // $transaksi->customer_id = $request->input('customer_id');
      // $transaksi->harga = $request->input('harga');
      // $transaksi->Total = $request->input('Total');
      // $transaksi->save();
      // return redirect ('Transaksi');
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
      $customer = Customer::all();
      return view('Transaksi.editTran', [
      'data' => Transaksi::findOrFail($id),
      'cust' => $customer
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
      $transaksi = Transaksi::findOrFail($id);
      // $transaksi->amount = $request->input('amount');
      // $transaksi->start_date = $request->input('start_date');
      // $transaksi->end_date = $request->input('end_date');
      $transaksi->status = $request->input('status');
      // $transaksi->customer_id = $request->input('customer_id');
      // $transaksi->harga = $request->input('harga');
      // $transaksi->Total = $request->input('Total');

      $transaksi->save();
      return redirect ('Transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $transaksi = Transaksi::findOrFail($id);
      $transaksi->delete();
      return redirect('Transaksi');
    }
}
