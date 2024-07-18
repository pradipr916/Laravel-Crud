<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    //Shows product page
    public function index(){
      
    }
    //Shows create page
    public function create(){
        return view('products.create');
    }
    //Store product in db
    public function store(Request $request){
        $rules=[
            'name'=>'required',
            'sku'=>'required|min:3',
            'price'=>'required|numeric'
        ];
       $validator= Validator::make($request->all(),$rules);
       if($validator->fails()){
        return redirect()->route('products.create')->withInput()->withErrors($validator);
       }
    }
    //Show product edit page
    public function edit(){

    }
    //Update product in db
    public function update(){

    }
    //Deletes product from db
    public function destroy(){

    }

}
