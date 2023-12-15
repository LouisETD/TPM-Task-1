<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tenant;

class Registration extends Controller
{
    public function redirectToregister(){
        return view('registration');
    }

    public function Registration(Request $request) {
       
        Tenant::create([
            'nama_tenant' => $request-> nama_tenant_input,
            'tipe_makanan' => $request-> tipe_makanan_input,
            'asal_makanan' => $request-> asal_makanan_input
        ]);
       return redirect('/');
    }
}
