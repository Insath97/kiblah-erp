<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $product = Product::with('productCategory')->where('status', true)->orderBy('name', 'asc')->get();
        return view('admin.products.index',compact('product'));
    }

    public function create()
    {
        $productCategories = ProductCategory::where('status', true)->orderBy('name', 'asc')->get();
        return view('admin.products.create', compact('productCategories'));
    }

    public function store(Request $request)
    {
        $imagepath = $this->handleFileUpload($request, 'image');

        $product = new Product();
        $product->product_category_id = $request->product_category_id;
        $product->code = $request->code;
        $product->image = !empty($imagepath) ? $imagepath : null;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->unit_measurement = $request->unit_measurement;
        $product->price = $request->price;
        $product->sales_price = $request->sales_price;
        $product->stock_qty = $request->stock_qty;
        $product->threshold = $request->threshold;
        $product->description = $request->description;
        $product->save();

      
        /*  alert()->success('Success!', 'The product has been created successfully.')->persistent(true, false)->width('auto')->autoClose(3000); */
        return redirect()->route('admin.products.index');
    }

    public function show(string $id) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id)
    {
        try {
            $product = Product::find($id);
            $product->delete();

            return response(['status' => 'success', 'message' => 'Product Delete Successfully']);
        } catch (\Throwable $th) {
            return response(['status' => 'error', 'message' => 'Failed to delete the Product. Please try again.']);
        }
    }
}
