<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Customer;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CustomerController extends Controller
{
    private $customer;
    
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $customer = $this->customer->all();
        return view('dashboard.customer.index')->with('customers', $customer);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::all('id', 'name');
        return view('dashboard.customer.create', compact('providers'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'name' => 'required',
            )
        );
        
        $input = $request->all();
        //dd($input); // dd() helper function is print_r alternative
        
        Customer::create($input);
        
        Session::flash('flash_message', 'Successo! Cliente cadastrado.');
        
        //return redirect()->back();
        //return redirect('news');
        return redirect()->route('customer.index');
    }
}
