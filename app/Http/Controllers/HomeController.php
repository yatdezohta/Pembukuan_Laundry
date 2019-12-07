<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Users;
use App\Role;


class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

   public function __construct(){
     $this->middleware('auth');
     // $this->middleware('acces:1,2');
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    // public function login(Request $request)
    //  {
    //
    //    // if ($request->input('email') != 'admin@admin.com' || $request->input('password') != 'admin') {
    //    //    return response()->json("error");
    //    // }
    //    // $request->session()->put('email', $request->input('email'));
    //    //
    //    // return redirect('Cust');
    //  }


    // public function __invoke (Request $request)
    // {
    //     return view('Cust');
    // }
    public function index()
    {
      
      $user = Auth::user();
      // $role = Role::where('id', $user->idRole)->first();

      if ($user->role->name == "admin") {
           return redirect ('customer.cust');
       }

      // return view('Cust');

        // $user = Auth::users();
        // if (! $user->input('email') || ! $user->input('password') ) {
        //     return response()->json("error");
        // }
        // $request->session()->put('email', $request->input('email'));
        // return redirect()->route('Cust');
        // $adm = Users::all();
        // $customer = Customer::all();
        // if ($user->level == 1) {
        //   return view ('customer.cust',[
        //     'data' => $customer
        //   ]);
        // }elseif ($user->level == 2) {
        //   return view ('User.User', [
        //     'adm' => $adm
        //   ]);
        // }

    }

    // public function logout (Request $request)
    // {
    //   $request->session()->flush();
    // }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
