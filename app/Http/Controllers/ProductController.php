<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function create()
    {
        return view('index');
    }
    public function comboCreate(){
        return view('indexcombo');
    }
    public function store(Request $request)
    {
        $product=new product();
        $product->p_code = $request->get('p_code');
        $product->p_name = $request->get('p_name');
        $product->p_weight = $request->get('p_weight');    
        $product->p_stock = $request->get('p_stock');        
        $product->p_price = $request->get('p_price');        
        $product->p_type = 'single'; 
        $product->p_choice1 = null; 
        $product->p_choice2 = null;             
        $product->save(); 
        return redirect('view')->with('success', 'Product has been successfully added');
    }
    public function storeCombo(Request $request){
        $product=new product();
        $products1 = product::where('p_code', '=', $request->get('p_choice1'))->get()->first();
        $products2 = product::where('p_code', '=', $request->get('p_choice2'))->get()->first();
        $price = (int)$products1->p_price + (int)$products2->p_price; 
        $product->p_code = $request->get('p_code');
        $product->p_name = $request->get('p_name');
        $product->p_weight = (int)$products1->p_weight + (int)$products2->p_weight; ;    
        if((int)$products1->p_stock>(int)$products2->p_stock){
                $product->p_stock = $products2->p_stock;
        }  
        else{
            $product->p_stock = $products1->p_stock;
        }      
        $product->p_price = $price;  
        $product->p_type = 'combo';
        $product->p_choice1 = $request->get('p_choice1'); 
        $product->p_choice2 = $request->get('p_choice2');             
        $product->save(); 
        return redirect('view')->with('success', 'Product has been successfully added');
    }

    public function index()
    {
        $products=product::all();
        return view('viewproduct',compact('products'));
    }
    public function edit($id)
    {
        $product = product::find($id);
        return view('productedit',compact('product','id'));
    }
    public function update(Request $request, $id)
    {
        $product= Product::find($id);
        $product->p_name = $request->get('p_name');
        $product->p_weight = $request->get('p_weight');    
        $product->p_stock = $request->get('p_stock');        
        $product->p_price = $request->get('p_price');        
        $product->update();
        return redirect('view')->with('success', 'Product has been successfully added');
        
    }
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect('view')->with('success','Product has been  deleted');
    }
}
