<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $product_category = ProductCategory::where('status', true)->get();
        return view('admin.product-category.index', compact('product_category'));
    }

    public function create() {}

    public function store(Request $request)
    {
        $product_category = new ProductCategory();
        $product_category->code = $request->code;
        $product_category->name = $request->name;
        $product_category->slug = Str::slug($request->name);
        $product_category->description = $request->description;
        $product_category->save();

        alert()->success('Success!', 'The product category has been created successfully.')->persistent(true, false)->width('auto')->autoClose(3000);
        return redirect()->route('admin.product-category.index');
    }

    public function show(string $id) {}

    public function edit(string $id) {}

    public function update(Request $request, string $id) {}

    public function destroy(string $id)
    {
        try {
            $product_category = ProductCategory::find($id);
            $product_category->delete();

            return response(['status' => 'success', 'message' => 'Product Category Delete Successfully']);
        } catch (\Throwable $th) {
            return response(['status' => 'error', 'message' => 'Failed to delete the Product Category. Please try again.']);
        }
    }
}
