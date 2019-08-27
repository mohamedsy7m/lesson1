<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function list(){

        $customers = Customer::all();
        

        return view ('customer', [
            'customers' => $customers,
        ]);
    }
}
