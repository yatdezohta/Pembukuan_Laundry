<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
     {
       return view('layout.master');

     }

     public function login()
      {
        return view('login.login');

      }

      public function User()
       {
         return view('User.User');

       }

       public function UserTambah()
        {
          return view('User.tambahUser');

        }

        public function UserEdit()
         {
           return view('User.editUser');

         }

      public function Customer()
       {
         return view('customer.cust');

       }

       public function CustomerTambah()
        {
          return view('customer.tambah');

        }

        public function CustomerEdit()
         {
           return view('customer.edit');

         }

         public function Transaksi()
          {
            return view('Transaksi.transaksi');

          }

          public function TransaksiEdit()
           {
             return view('Transaksi.editTran');

           }
           public function TransaksiTambah()
            {
              return view('Transaksi.tambahTran');

            }
            public function Pengeluaran()
             {
               return view('Pengeluaran.pengeluaran');

             }

             public function PengeluaranEdit()
              {
                return view('Pengeluaran.editPengeluaran');

              }
              public function PengeluaranTambah()
               {
                 return view('Pengeluaran.tambahPengeluaran');

               }
               public function Laundry()
                {
                  return view('Laundry.Laundry');

                }

                public function LaundryEdit()
                 {
                   return view('Laundry.editLaundry');

                 }
                 public function LaundryTambah()
                  {
                    return view('Laundry.tambahLaundry');

                  }
                  public function Tipe()
                   {
                     return view('Laundry.TipeLaundry');

                   }

                   public function TipeEdit()
                    {
                      return view('Laundry.editTipe');

                    }
                    public function EditTambah()
                     {
                       return view('Laundry.EditLaundry');

                     }
               public function Laporan()
                {
                  return view('Laporan.Laporan');

                }
}
