<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index(){

        $customers = Customer::all();
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

        return view('customers.index', compact('activeCustomers','inactiveCustomers','companies'));
        // return view ('customers', [
        //     'customers' => $customers,
        //     'activeCustomers'=> $activeCustomers,
        //     'inactiveCustomers'=> $inactiveCustomers,
        // ]);
    }
    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();

        return view('customers.create', compact('companies','customer'));
        //return view('customers.create', compact('companies'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);

        Customer::create($data);

        // $customer = new Customer();
        // $customer->name = request('name');
        // $customer->email = request('email');
        // $customer->active = request('active');
        // $customer->save();

        return redirect('customers');
    }

    public function show(Customer $customer)
    {

        // $customer = Customer::where('id', $customer)->firstOrFail();
        return view('customers.show', compact('customer'));
    }
    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit', compact('customer','companies'));
    }
    public function update(Customer $customer)
    {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);

        $customer->update($data);

        return redirect('customers/' . $customer->id);
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('customers');
    }
}
