<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Order;

use Barryvdh\DomPDF\Facade\Pdf;


class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $category= new Category;
        $category->category_name = $request->category;
        $category->status = $request->input('status');

        $category->save();
        toastr()->closeButton()->addSuccess('Category Added Successfully');

        return redirect()->back();
    }

    public function delete_category($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_category($id)
    {
        $data = Category::find($id);
        return view('admin.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);
        $data->category_name= $request->category;
        $data->status = $request->input('status');
        $data->save();
        return redirect('/view_category');
    }

    public function add_product()
    {
        $category = Category::all();
      return view('admin.add_product',compact('category'));
    }

    public function upload_product(Request $request){

        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        $data->category = $request->category;

        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getclientOriginalExtension();
            $request->image->move('products',$imagename);
            $data->image = $imagename;
        }



        $data->save();
        toastr()->closeButton()->addSuccess('Product Added Successfully');
        return redirect()->back();

    }


    public function view_product()
    {
        $product = Product::paginate(3);
        return view('admin.view_product',compact('product'));
    }


    public function  delete_product($id)
    {
        $data = Product::find($id);

        $image_path = public_path('products/' .$data->image);

        if(file_exists($image_path)){
            unlink($image_path);
        }
        
        $data->delete();
        toastr()->closeButton()->addSuccess('Product Deleted Successfully');

        return redirect()->back();
    }


    public function update_product($slug)
    {
        $data = Product::where('slug',$slug)->get()->first();
        $category = Category::all();
        return view('admin.update_page',compact('data','category'));

    }


    public function edit_product(Request $request,$id)
    {
        $data = Product::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->category = $request->category;
        $image = $request->image;

        if($image)
        {
            $image_name = time().'.'. $image->getClientOriginalExtension();
            $request->image->move('products',$image_name);
            $data->image = $image_name;
        }
        $data->save();
        toastr()->closeButton()->addSuccess('Product Added Successfully');
        return redirect('/view_product');
    }


    public function product_search(Request $request)
    {
        $search = $request->search;

        $product = Product::where('title','LIKE','%'.$search.'%')->
        orwhere('category','LIKE','%'.$search.'%')->paginate(3);

        return view('admin.view_product',compact('product'));
    }

    public function view_orders()
    {
        $data = Order::all();

        return view('admin.order',compact('data'));

    }

    public function on_the_way($id)
    {

        $data = Order::find($id);

        $data->status = 'on the way';

        $data->save();

        return redirect('/view_orders');

    }

    public function delivered($id)
    {

        $data = Order::find($id);

        $data->status = 'Delivered';

        $data->save();

        return redirect('/view_orders');

    }

    public function print_pdf($id)
    {

        $data = Order::find($id);
        
        $pdf = Pdf::loadView('admin.invoice',compact('data'));
        
        return $pdf->download('invoice.pdf');

    }


}
