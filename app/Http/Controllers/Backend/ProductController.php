<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Astrotomic\Translatable\Locales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public $pagination = 10;

    public function pagination(Request $request, $page)
    {
        $user = auth()->user();
        $products = Product::paginate($this->pagination, ['*'], 'page', $page);

        return view('backend.products.index', compact('user', 'products'))->render();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate($this->pagination);
        
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create', [
            'categoryOptions' => $this->getCategoryOptions(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('public');
            }

            if ($request->has('title')) {
                $data['slug'] = \Str::slug($data['title']);
            }

            $product = Product::create($data);

            DB::commit();

            return redirect()->route('products.edit', compact('product'))->with('status-message', 'Trabajo creado')->with('status', 'success');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('products.create')
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.products.edit', [
            'product' => $product,
            'categoryOptions' => $this->getCategoryOptions(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try {
            DB::beginTransaction();

            $data = $request->all();

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('public');
            }

            if ($request->has('title')) {
                $data['slug'] = \Str::slug($data['title']);
            }

            $product->update($data);

            DB::commit();

            return redirect()->route('products.index')->with('status-message', 'Trabajo actualizado')->with('status', 'success');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('products.create')
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try {
            DB::beginTransaction();

            $product->delete();

            DB::commit();

            return redirect()->route('products.index')->with('status-message', 'Producto borrado correctamente')->with('status', 'success');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('products.index')
                ->with('status-message', $e->getMessage())
                ->with('status', 'danger');
        }
    }

    public function getCategoryOptions()
    {
        return [
            'Servicio de mezcla',
            'Tutoriales producción',
            'Merchandising',
        ];
    }
}
