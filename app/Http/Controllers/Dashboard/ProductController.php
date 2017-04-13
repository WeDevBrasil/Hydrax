<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Company;
use App\Models\Product;
use App\Models\Provider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ProductController extends Controller
{
    private $product;
    private $itemPerPage = 20;
    
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $product = $this->product->paginate($this->itemPerPage);
        return view('dashboard.product.index')->with('products', $product);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = Provider::pluck('name', 'id');
        $companies = Company::pluck('name', 'id');
        return view('dashboard.product.create', compact('providers'))->with('companies', $companies);
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
                'size' => 'required',
                'price' => 'required',
                'quantity' => 'required',
            )
        );
        
        $input = $request->all();
        //dd($input); // dd() helper function is print_r alternative
        $product = new Product($input);
        $product->save();
        $product->provider()->attach($input['provider']);
        
        Session::flash('flash_message', 'Successo! Produto cadastrado.');
        
        //return redirect()->back();
        //return redirect('news');
        return redirect()->route('product.index');
    }
}
