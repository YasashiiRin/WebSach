<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use App\Models\Cart;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use Session;
use Hash;
use Auth;
use Image;

class PController extends Controller
{
     public function getIndex()
    {
    $slide=Slide::all();
    $newpd=Product::where('typeB',1)->paginate(4);
    $toppd=Product::where('typeB',11)->paginate(4,['*'],'pag=top');
    $gocpd=Product::where('typeB',0)->paginate(4,['*'],'pag=goc');
    $khuyenmai=Product::where('promotion_price','<>',0)->paginate(8,['*'],'pag=km');
    return view('page.trangchu',compact('slide','newpd','khuyenmai','toppd','gocpd'));
    }
    public function getLoaiSP($type){
        $sp_theoloai=Product::where('id_type',$type)->paginate(3);
        $sp_khac=Product::where('id_type','<>',$type)->paginate(3,['*'],'pag=sp_khac');
        $loai=ProductType::all();
        $loai_sp=ProductType::where('id',$type)->first(); 
        // một loại sản phẩm chỉ có một id nên chỉ cần lấy cái đầu tiên 
         return view('page.loaisanpham',compact('sp_theoloai','sp_khac','loai','loai_sp'));
    }
    public function getChitiet(Request $reg){
        $sanpham=Product::where('id', $reg->id)->first();
         return view('page.chitiet' ,compact('sanpham'));
    }
    public function getLienHe(){
         return view('page.lienhe');
    }
    public function getGioiThieu(){
         return view('page.gioithieu');
    }

    public function getLogin(){
        return view('page.Pagelog');
    }
     public function getSigup(){
        return view('page.dangky');
    }
    public function getPL(){
        return view('page.PageLog');
    }
    public function profile(){
        return view('page.HS');
    }
    public function getUpload(){
        return view('page.uploadd');
    }
    public function getaddcart(Request $req,$id){
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $req->Session()->put('cart',$cart);
        return redirect()->back();

    }
    public function getdeletecart($id){
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();

    }
    public function getUploatavata(Request $requ){
        if($requ ->hasFile('avatar')){        
            $avatar=$requ->file('avatar');
            $filename=time().'.'. $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/' . $filename));
            $user=Auth::user();
            $user->avatar=$filename;
            $user->save();
             }
        return view('page.HS');
    }
    public function getdathang(){
         if(Session::has('cart')){
                 $oldCart= Session::get('cart');
                 $cart= new Cart($oldCart);
                 return view('page.dat_hang',['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
             }
             return view('page.dat_hang');
    }
    public function postdathang(Request $ii){
        $cart=Session::get('cart');
        $customer=new Customer;
        $customer->name=$ii->name;
        $customer->gender=$ii->gender;
        $customer->email=$ii->email;
        $customer->address=$ii->address;
        $customer->phone_number=$ii->phone;
        $customer->note=$ii->notes;
        $customer->save();

        $bill = new Bill;
        $bill->id_customer=$customer->id;
        $bill->date_order=date('Y-m-d');
        
        $bill->total=$cart->totalPrice;
        $bill->payment=$ii->payment_method;
        $bill->note=$ii->notes;
        $bill->save();
        
        foreach ($cart->items as $key => $value) {
            $bill_detail=new BillDetail;
            $bill_detail->id_bill=$bill->id;
            $bill_detail->id_product=$key;
            $bill_detail->quantity=$value['qty'];
            $bill_detail->unit_price=$value['price']/$value['qty'];
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao','đặt hàng thành công');
        
    }
    public function postSigup(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                'fullname'=>'required',
                'phone'=> 'required|min:11|max:11',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'vui lòng nhập email',
                'email.email'=>'không đúng dịnh dạng email',
                'email.unique'=>'email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'ngaysinh.required'=>'vui lòng nhập ngày sinh của bạn theo định dạng 0000/00/00',
                're_password.same'=>'Mật khẩu không khớp',
                'password.min'=>'mật khẩu ít nhất 6 ký tự '
            ]);
        $user=new User();
        $user->full_name=$req->fullname;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->phone=$req->phone;
        $user->address=$req->address;
        $user->ngaysinh=$req->ngaysinh;
        $user->save();
        return redirect()->back()->with('thanhcong','tạo tài khoản thành công');


    }
    public function postLogin(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
               'email.required'=>'vui lòng nhập email',
                'email.email'=>'email không đúng định dạng',
                'password.required'=>'vui lòng nhập password',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
                'password.max'=>'mật khẩu nhiều nhất 20 ký tự'
            ]);
        $credentials=array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            // return redirect()->back()->with(['flag'=>'success','message'=>'đăng nhập thành công']);
            return redirect()->route('trang-chu');
        }else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'đăng nhập không thành công']);
        }
         

    }
    public function getlogout(){
        Auth::logout();
        return view('page.PageLog');
    }
     public function getsearch(Request $req){
        $prd=Product::where('name','like','%'.$req->key.'%')
                      ->orWhere('unit_price',$req->key)->get();

        return view('page.search',compact('prd'));              
        
    }
}
