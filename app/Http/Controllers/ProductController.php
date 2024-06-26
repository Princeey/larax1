<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request) {
        $products = Product::orderBy('name');

        // Accessing filter input properly
        if ($request->has('filter')) {
            $filter = $request->input('filter');
            $products->where('name', 'like', "%{$filter}%")
                ->orWhere('description', 'like', "%{$filter}%");
        }

        $html = "";

        // Generating HTML directly (consider using Blade templates instead)
        foreach ($products->get() as $prod) {
            $html .= "
                <div class='p-6 rounded-lg bg-blue-100 shadow-md w-full max-w-sm'>
                    <img src='{$prod->imageURL}' class=''>
                    <h3 class='text-2xl font-semibold mb-2'>{$prod->name}</h3>
                    <hr class='border-t-2 border-blue-300 mb-2' />
                    <div class='italic text-gray-600 mb-4'>
                        {$prod->description}
                    </div>
                    <div class='text-3xl text-right text-blue-700 font-bold'>
                        {$prod->price}
                    </div>
                </div>
            ";
        }
        
        return $html;
    } 
    // 
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'description' =>'required',
            'price' =>'required',
            'imageURL' =>'required'
        ]);

        if($validator->fails()) {
            $products = Product::orderBy('name');
            return view('template._create-products-error', ['errors' => $validator->errors()->all(), 'products' => $products]);

        };

        Product::create($request->all());

        $products = Product::orderBy('name');

        return view('template._products-list-for-create', ['products'=>$products]);
    }
    
}
