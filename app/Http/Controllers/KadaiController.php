<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Company;

class KadaiController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }

   // 一覧表示
   public function index(Request $request)
   {
       $keyword = $request->input('keyword');
       $company = $request->input('company_id');

       $query = Company::query();
       $query->join('products', function ($query) use ($request){
        $query->on('products.company_id', '=', 'companies.id');
       });

       if(!empty($keyword))
       {
           $query->where('name', 'LIKE', "%{$keyword}%");
       }

       if(!empty($company))
       {
           $query->where('company_name', 'LIKE', $company);
       }

      
       $items = $query->orderBy('products.id', 'desc')->paginate(5);
       $company_list = Company::all();
       $hash = array(
        'keyword' => $keyword,
        'company' => $company,
        'items' => $items,
        'company_list' => $company_list,
       );
       return view('kadai.index')->with($hash);
   }

   // 詳細画面
   public function show(Request $request)
   {
       $item = Product::find($request->id);
       return view('kadai/show', compact('item'));
   }
   

   // 新規登録
   public function add(Request $request)
   {    
        return view('kadai.add');
   }

   public function create(Request $request)
   {
        $item = new Product();
        $item->join('companies', function ($item) use ($request){
        $item->on('product.company_id', '=', 'companies.id');
        });
        $item->fill($request->all())->save();
       
        return redirect('kadai');
   }

   // 編集
   public function edit($id)
   {
       $item = Product::find($id);
       return view('kadai.edit')->with('item', $item);
   }

   public function henshu($id, Request $request)
   {
       $item = Product::find($request->id);
       $item->fill($request->all())->save();
       return redirect('kadai');
   }

   // 削除
   public function delete($id)
   {   
       $item = Product::find($id);
       $item->delete();
       return redirect('kadai');
   }

   
}
