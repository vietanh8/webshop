<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Slide;
use App\Products;
use App\Customer;
use App\BillDetail;
use App\User;
use Cart;
use Session;
use PDF;
class adminController extends Controller
{
    public function admin(){
    	$billdetail = BillDetail::all();
    	return view('admin.index', compact('billdetail'));
    }public function listproduct(){
    	$list = Products::paginate(5);
    	return view('admin.listproduct', compact('list'));
    }
    public function editProduct(Request $req){
    	$data = $req->all();
        $data = array(
            'name' => $req->name,
            'unit' => $req->price,
            'type' => $req->type,
            'best' => $req->best,
            // 'description' => $req->description,
        );
        Products::where('id',$req->id)->update($data);
    }
    public function description(Request $req, $id){
    	$product =Products::where('id', $req->id)->first();
    	$id = $product->id;

 		// $description = $product->description;
    	return view('admin.description', compact('product'));
    }
    public function invoice(Request $req, $id){
        $bill =BillDetail::where('id', $req->id)->first();
        $customer = Customer::where('id', $bill->id_customer)->first();
        return view('admin.invoice', compact('bill','customer'));
    }
    public function savedescription(Request $req){
        $product =Products::where('id', $req->id)->first();
    	$newdes = $req->description;
        $product->description = $newdes;
        $product->update();
        return redirect()->back();
        
    }

    public function addproduct(){
    	return view('admin.addproduct');
    }
    public function member(){
        $list = User::all();
    	return view('admin.member',compact('list'));
    }
    public function postaddproduct(Request $req){
        $this->validate($req,
            [
                'name'=>'required',
                'price'=>'required',
                'size'=>'required',
                'quantity'=>'required',
                'type'=>'required',
            ],
            [
                'name.required'=>'Please enter name product',
                'price.required'=>'Please enter price product',
                'size.required'=>'Please enter size product',
                'quantity.required'=>'Please enter quantity product',
                'type.required'=>'Please enter type product',
                
            ]
        );
        $product = new Products();
        $product->name = $req->name;
        $product->unit = $req->price;
        $product->size = $req->size;
        $product->quantity =$req->quantity;
        $product->type = $req->type;
        $product->description = $req->description;
        $product->best = $req->best;
        $img = $req->file('img')->getClientOriginalName();
        $nameimg = 'footwear/images/'.$img;
        
        if($req->hasFile('img')){
            $product->img = $nameimg;
        }
        else{
            $product->img = "";
        }
        $product->save();
        return redirect()->back()->with('Success','Create product successfully');
    }
    public function deleteproduct(Request $req){
        $product =Products::where('id', $req->id)->first();
        $product->delete();
        return redirect()->back();
    }
    public function deletebill(Request $req){
        $bill = BillDetail::where('id', $req->id)->first();
        $bill->delete();
        return redirect()->back();
    }
    public function adminlogin(){
        return view('admin.adminlogin');
    }
    public function postadminlogin(Request $req){
        $check = $req->only('email','password');
        if(Auth::attempt($check)){
            return redirect('adminpanel');
        }
        else{
            return redirect()->back()->with('Error','Email or pasword incorrect');
        }
    }
    public function adminlogout(){
        Auth::logout();
        return redirect('adminlogin');
    }
    public function admininfo(){
        return view('admin.admininfo');
    }
    public function editinfoadmin(Request $req){
        $data = $req->all();
        $data = array(
            'name' => $req->name,
            'address' => $req->address,
            'phone' => $req->phone,
        );
        User::where('id',$req->id)->update($data);
    }
    public function avatar(Request $req){
        $avatar = $req->file('avatar')->getClientOriginalName();
        $nameimg = 'footwear/images/'.$avatar;
        $data = array(
            'avatar' => $nameimg,
        );
        User::where('id',$req->id)->update($data);
        return redirect('admininfo');
    }
    public function generatepdf(Request $req){
        $bill =BillDetail::where('id', $req->id)->first();
        $customer = Customer::where('id', $bill->id_customer)->first();
        $pdf = PDF::loadView('admin.bill', compact('bill','customer'))->setPaper('A4');
        $status = 'Complete';
        $update = array(
            'status' => $status,
        );
        BillDetail::where('id', $req->id)->update($update);
        return $pdf->download('bill.pdf');
    }
}
