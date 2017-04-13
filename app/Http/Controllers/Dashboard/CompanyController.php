<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Company;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CompanyController extends Controller
{
    private $company;
    
    public function __construct(Company $company)
    {
        $this->company = $company;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $company = $this->company->all();
        return view('dashboard.company.index')->with('companies', $company);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::all('id', 'name');
        return view('dashboard.company.create', compact('providers'));
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
        
        Company::create($input);
        
        Session::flash('flash_message', 'Successo! Empresa cadastrada.');
        
        //return redirect()->back();
        //return redirect('news');
        return redirect()->route('company.index');
    }
}
