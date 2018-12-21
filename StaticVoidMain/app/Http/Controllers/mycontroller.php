<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Products;
use App\Customer;
use App\Bill;
use App\BillDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use Mail;
use Cart;
use Session;
use Hash;

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
        Cart::add(array('id'=>$id, 'name'=>$product_buy->name, 'quantity'=>1, 'price'=>$product_buy->unit, 
            'attributes' => array('img'=>$product_buy->img,'size'=>$product_buy->size)));
        return redirect()->route('mycart');
    }
    public function infocart(Request $req,$id){
        $product_buy =Products::where('id', $req->id)->first();
        $size = $req->size;
        $quantity = $req->quantity;
        Cart::add(array('id'=>$id, 'name'=>$product_buy->name, 'quantity'=>$quantity, 'price'=>$product_buy->unit, 
            'attributes' => array('img'=>$product_buy->img,'size'=>$size)));
        return redirect()->route('mycart');
    }
    public function cart(){
        $content = Cart::getContent();
        $total =Cart::getTotal();
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
        // $this->validate($req,
        //     [
        //         'name'=>'required|unique:posts|max:255',
        //         'address'=>'required',
        //         'email'=>'required|email',
        //         'phone'=>'required|max:10',
        //     ],
        //     [
        //         'name.required'=>'Please enter your name',
        //         'address.required'=>'Please enter your address',
        //         'email.required'=>'Please enter your email address',
        //         'phone.required'=>'Please enter your pho',
        //         'name.required'=>'Please enter your name',
        //     ]
        // );
        $customer->name = $req->name;
        $customer->address = $req->address;
        $customer->email =$req->email;
        $customer->phone =$req->phone;
        $customer->save();
            
        foreach ($content as $key => $value) {

            $bill_detail = new BillDetail;
            $bill_detail->id_customer = $customer->id;
            $bill_detail->name_customer = $customer->name;
            $bill_detail->name_products = $content[$key]->name;
            $bill_detail->quantity = $content[$key]->quantity;
            $bill_detail->size = $content[$key]->attributes->size;
            $bill_detail->date_order = date('Y-m-d');
            $bill_detail->total = $total;
            $bill_detail->unit_price = $content[$key]->price;
            $bill_detail->status = 'Pending';
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
    public function postRegister(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6',
                'fullname'=>'required',
                'repassword'=>'required|same:password',
            ],
            [
                'email.required'=>'Please enter your email address!',
                'email.email'=>'Email is invalid',
                'email.unique'=>'Email already taken',
                'password.required'=>'Pleass enter your password',
                'repassword.same'=>'Password does not match the confirm password',
                'password.min'=>'Password must be at least 6 characters',
            ]);
        $user = new User();
        $user->name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('Success','Create account successfully');
    }
    public function changepass(Request $req){
        $user = User::find(Auth::user()->id);
        $this->validate($req,
            [
                'oldpassword'=>'required|min:6',
                'newpassword'=>'required|min:6',
                'renewpassword'=>'required|same:newpassword',
            ],
            [
                'oldpassword.required'=>'Pleass enter your password',
                'newpassword.required'=>'Pleass enter your password', 
                'renewpassword.required'=>'Pleass enter your password', 
                'newpassword.min'=>'Password must be at least 6 characters',
                'oldpassword.min'=>'Password must be at least 6 characters',
                'renewpassword.same'=>'Password does not match the confirm password',
            ]);
        if(Hash::check(Input::get('oldpassword'),$user['password']) && Input::get('newpassword') == Input::get('renewpassword')){
            $user->password = bcrypt(Input::get('newpassword'));
            $user->save();
            return redirect()->back()->with('Success','Password changed');
        }
        else{
            return redirect()->back()->with('Error','Password not changed');
        }
        
     }
    public function login(){
        return view('login');
    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
            ],
            [
                'email.required'=>"Please enter your email address!",
                'email.email'=>'Email is invalid',
                'password.required'=>'Pleass enter your password',
                'password.min'=>'Password must be at least 6 characters',
            ]);
        
        $user =User::where('email', $req->email)->first();
        if($user->account_type == 0){
            $check = $req->only('email','password');
            if(Auth::attempt($check)){
                return redirect()->back();
            }
            else{
                return redirect()->back()->with('Error','Email or pasword incorrect');
            }
        }
        else
        {
            return redirect()->back()->with('Error','Your account does not match this page');
        }
        
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function search(Request $req){
        $product = Products::where('name','like','%'.$req->key.'%')
                                ->orWhere('unit',$req->key)
                                ->get();
        return view('search',['product'=>$product,'key'=>$req->key]);
        // return view('search');
    }
    public function infouser(){
        return view('infouser');
    }
    public function editinfo(Request $req){
        $data = $req->all();
        $data = array(
            'name' => $req->name,
            'email' => $req->email,
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
        return view('infouser');
    }
    public function sendmail(Request $req){
        $quotation = array('quotation' => json_decode($req->quotation));
        $email = $req->email;
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'messageCC' => $req->message,
        ];
        Mail::send('blacks',$data,function($message) use ($data){
            $message->from($data['email']);
            $message->to('vietanh.17399@gmail.com');
            $message->subject($data['subject']);
        });
        return redirect()->back()->with('Success','Thanks your for contact');
    }
}







