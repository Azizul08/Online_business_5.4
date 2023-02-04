<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function createProduct() {
        $categories = Category::where('publicationStatus', 1)->get();
        $manufacturers = Manufacturer::where('publicationStatus', 1)->get();
        return view('admin.product.createProduct', ['categories' => $categories, 'manufacturers' => $manufacturers]);
    }

    public function storeProduct(Request $request) {
        $this->validate($request, [
            'productName' => 'required',
            'productPrice' => 'required',
            'productImage' => 'required',
        ]);

        $productImage = $request->file('productImage');
        $name = $productImage->getClientOriginalName();
        $uploadPath = 'productImage/';
        $productImage->move($uploadPath, $name);
        $imageUrl = $uploadPath . $name;
        $this->saveProductInfo($request, $imageUrl);
        return redirect('/product/add')->with('message', 'Product info save sauccessfully');
    }

    protected function saveProductInfo($request, $imageUrl) {
        $product = new Product();
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productPriceOld = $request->productPriceOld;
        $product->productQuantity = $request->productQuantity;
        $product->productDescription = $request->productDescription;
        // $product->product_vedio = $request->product_vedio;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();
    }

    public function manageProduct() {
        $products = DB::table('products')
                ->join('categories', 'products.categoryId', '=', 'categories.id')
                ->join('manufacturers', 'products.manufacturerId', '=', 'manufacturers.id')
			//  ->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuantity', 'products.publicationStatus', 'categories.categoryName', 'manufacturers.manufacturerName')
                ->select('products.*', 'categories.categoryName', 'manufacturers.manufacturerName')
                ->get();
        return view('admin.product.manageProduct', ['products' => $products]);
    }

    public function viewProduct($id) {
        $productById = DB::table('products')
                ->join('categories', 'products.categoryId', '=', 'categories.id')
                ->join('manufacturers', 'products.manufacturerId', '=', 'manufacturers.id')
			//  ->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuantity', 'products.publicationStatus', 'categories.categoryName', 'manufacturers.manufacturerName')
                ->select('products.*', 'categories.categoryName', 'manufacturers.manufacturerName')
                ->where('products.id', $id)
                ->first();
        return view('admin.product.viewProduct', ['product' => $productById]);
    }

    public function editProduct($id) {
		// 	['productById' => $productById, 'categories' => $categories, 'manufacturers' => $manufacturers];

        	$categories = Category::where('publicationStatus', 1)->get();
        	$manufacturers = Manufacturer::where('publicationStatus', 1)->get();
        	$productById = Product::where('id', $id)->first();
		// 	return view('admin.product.editProduct', ['productById' => $productById, 'categories' => $categories, 'manufacturers' => $manufacturers]);
        	return view('admin.product.editProduct')
                        ->with('productById', $productById)
                        ->with('categories', $categories)
                        ->with('manufacturers', $manufacturers);
    }

    public function updateProduct(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        // echo $imageUrl;
        // exit();
        // $product = Product::find($id);
        $product = Product::find($request->id);
        // dd($product);
        $product->productName = $request->productName;
        $product->categoryId = $request->categoryId;
        $product->manufacturerId = $request->manufacturerId;
        $product->productPrice = $request->productPrice;
        $product->productPriceOld = $request->productPriceOld;
        $product->productQuantity = $request->productQuantity;
        $product->productDescription = $request->productDescription;
        $product->productImage = $imageUrl;
        $product->publicationStatus = $request->publicationStatus;
        $product->save();

        return redirect('/product/manage')->with('message', 'Product info update successfully');;
    }

    private function imageExistStatus($request) {
        $productById = Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {
            unlink($productById->productImage);
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $productById->productImage;
        }
        return $imageUrl;
    }

    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product/manage')->with('message', 'Product info delete successfully');
    }

}
