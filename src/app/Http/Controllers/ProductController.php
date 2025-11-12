<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Season;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // 商品一覧
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::with('season')->keywordSearch($keyword)->get();
        $seasons = Season::all();
        return view('index', compact('products' ,'seasons','keyword'));
    }

    // 商品検索
    public function find(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::with('season')->keywordSearch($request->keyword)->get();
        return view('index',compact('products','keyword'));
    }

    // 商品並び替え


    // 商品登録
    public function create()
    {
    $seasons = Season::all();
    return view('products.create', compact('seasons'));
    }
    
    public function store(ProductRequest $request)
    {
        $this->validate($request,Product::$rules);
        if($request->has('back'))
            {
                return view('/products');
            }
        $imagePath = $request->file('image')->store('products','public');
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $imagePath
        ]);
        $product->seasons()->attach($request->season);
        return redirect('/products');
    }

    // 商品更新
    public function update()
    {

    }

    // 商品詳細
    public function show($id)
    {
        $product = Product::find($id);
        return view('posts.show',compact('product'));
    }
}