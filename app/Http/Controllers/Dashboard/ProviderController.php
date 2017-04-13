<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Company;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ProviderController extends Controller
{
    private $provider;
    
    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
    }
    
    public function index()
    {
        $provider = $this->provider->all();
        return view('dashboard.provider.index')->with('providers', $provider);
    }
    
    public function create()
    {
        $companies = Company::pluck('name', 'id');
        return view('dashboard.provider.create')->with('companies', $companies);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'cnpj' => 'required',
            'company_id' => 'required',
        ]);
        
        Provider::create($request->all());
    
        Session::flash('flash_message', 'Successo! Fornecedor cadastrado.');
        
        return redirect()->route('provider.index');
    }
}
