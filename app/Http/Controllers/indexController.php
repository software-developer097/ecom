<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Models\Ecommerce;
use App\User;
use App\Models\Upload;
class indexController extends Controller
{   
    
    public function index()
    {   
        $produts = Ecommerce::simplePaginate(6);
        return view('index',['products'=>$produts]);
    }
    public  function product()
    {
        $produts =Ecommerce::paginate(4);
      
        return view('product',['products'=>$produts]);
    }
    public function detail($id)
    { 

        // dd($id);
        $details =Ecommerce::find($id);
        // dd($details);
        
        
      
        return view('product-details',['details'=>$details]);

    }
    public function checkout($id)
    {
        // dd($id);
        $checkout =Ecommerce::find($id);
        return view('checkout',['checkout'=>$checkout]);
    }
    public function register()
    {
     return view('auth.register');
    }
    //
}
