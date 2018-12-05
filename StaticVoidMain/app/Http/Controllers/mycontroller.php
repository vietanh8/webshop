<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Products;
use App\Customer;
use App\Bill;
use App\BillDetail;
use Illuminate\Http\Request;
use Cart;
use Session;
class mycontroller extends Controller
{
    public function showindex(Request $req){
        $slide = Slide::all();
        $best = Products::where('best',1)->get();
        return view('index', compact('slide','best'));
    }
    public function showabout(){
        return view('about');
    }
    public function showcontact(){
        return view('contact');
    }
    public function showcart(Request $req,$id){
        
        $product_buy =Products::where('id', $req->id)->first();
        Cart::add(array('id'=>$id, 'name'=>$product_buy->name, 'quantity'=>$product_buy->quantity, 'price'=>$product_buy->unit, 
            'attributes' => array('img'=>$product_buy->img,'size'=>$product_buy->size)));
        return redirect()->route('mycart');
    }
    public function cart(){
        // Cart::remove(670);
        $content = Cart::getContent();
        $total =Cart::getTotal();
        // ($content);
        // die();
        return view('cart', compact('content', 'total'));
    }
    public function deletecart($id){
        Cart::remove($id);
        return redirect()->route('mycart');
    }
    public function updateqty(Request $req){
            $content = Cart::getContent();
            $id = $req->id;
            $size = $req->size;
            $quantity = $req->quantity;
            Cart::update($id, array(
             'quantity' =>$quantity-$content[$id]->quantity,
             'attributes' => array(
                'size'=>$size,
                'img'=>$content[$id]->attributes['img'],
             )
            )); 
            $total =Cart::getTotal();
            echo $total.'/';
            echo $content[$id]->price*$quantity;   
            }
            
    public function showinfo(Request $req,$id){
        $product_buy =Products::where('id', $req->id)->first();
        // var_dump($product_buy);
        // die();
        return view('info', compact('product_buy'));
    }
    public function showcheckout(){
        $content = Cart::getContent();
        $total =Cart::getTotal();
        return view('checkout',compact('content','total'));
    }
    public function postcheckout(Request $req){
        $total =Cart::getTotal();
        $content = Cart::getContent();

        $customer = new Customer;
        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->email =$req->email;
        $customer->phone =$req->phone;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $total;
        $bill->save();
    
        foreach ($content as $key => $value) {

            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id; 
            $bill_detail->name_products = $content[$key]->name;
            $bill_detail->quantity = $content[$key]->quantity;
            $bill_detail->size = $content[$key]->attributes->size;
            $bill_detail->unit_price = $content[$key]->price;
            $bill_detail->save();
            Cart::remove($key);
        }
        
    }
    public function showcomplete(){
        return view('complete');
    }
    public function showshoes(){
        $products = Products::paginate(8);
        return view('shoes', compact('products'));
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
}