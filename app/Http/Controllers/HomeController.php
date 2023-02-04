<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    //
	public function index(){
		$publishedProducts=Product::where('publicationStatus', 1)->get();
		return view('frontend.home', ['publishedProducts' => $publishedProducts]);
	}


	public function about(){
		return view('frontend.about');
	}

	public function contact(){
		return view('frontend.contact');
	}

	public function events(){
		return view('frontend.events');
	}

	public function services(){
		return view('frontend.services');
	}

	public function products(){
		// return view('frontend.products');

		// dd('Hello');
        $publishedProducts=Product::where('publicationStatus', 1)->get();
        // dd($publishedProducts);

        return view('frontend.products', ['publishedProducts' => $publishedProducts]);

	}

	public function allproducts(){
		// return view('frontend.products');

		// dd('Hello');
        $publishedProducts=Product::where('publicationStatus', 1)->get();
        // dd($publishedProducts);

        return view('frontend.allproducts', ['publishedProducts' => $publishedProducts]);

	}

	public function productDetails($id) {

		$publishedProducts=Product::where('publicationStatus', 1)->get();

        $productById=Product::where('id', $id) ->first();
        // dd($productById);
         return view('frontend.product_details', ['publishedProducts' => $publishedProducts ,'productById'=>$productById]);
    }

	public function bread(){
		return view('frontend.bread');
	}

	// public function getCheckout(){
	// 	return view('frontend.checkout');
	// }

	// public function getPayment(){
	// 	return view('frontend.payment');
	// }
}
