<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    //Shows product page
    public function index(){
        return view('products.list');
      
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
        if($request->image!=""){
            $rules['image']='image';
        }
       $validator= Validator::make($request->all(),$rules);
       if($validator->fails()){
        return redirect()->route('products.create')->withInput()->withErrors($validator);
       }
       //Here we will insert data into Db
       $product=new Product();
       $product->name=$request->name;
       $product->sku=$request->sku;
       $product->price=$request->price;
       $product->description=$request->description;
       //Save image in db
       $image=$request->image;
       
       $ext=$image->getClientOriginalExtension();
       $imageName=time().'.'.$ext;
       $image->move(public_path('upload/products'),$imageName);
       $product->image=$imageName;
       //Save Image
       $product->save();
       return redirect()->route('products.index')->with('success','Product added successfully');
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
