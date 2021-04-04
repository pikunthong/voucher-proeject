<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VoucherController extends Controller
{
    //

    public function index(){
        $coupons = Voucher::all();
        $Counts = Voucher::count();
        $sum = Voucher::sum('discount');
//        dd($sum);
//        for ($i=0; $i< $Counts;$i++){
//
//            dd($couponsCounts);
//        }
        return view('index',compact('coupons','sum'));
    }

    public function created(){
        return view('from');
    }
    public function store(Request $request){
//        dd($request->all());

        $keyword = $request->get('keyword');
        $discount = $request->get('discount');
        $endTime = $request->get('daytime');
        $status = 0;
        $randomChar = $this->random();


//        $codeName=$keyword.=$discount.=$randomChar.=$keyword[0];


        Voucher::create([
           'keyword'=> $keyword,
            'discount'=>$discount,
            'endTime'=>$endTime,
            'status'=>$status,
            'code'=>$randomChar
        ]);




        return redirect('/')->with('success','บึนทึกข้อมูลเรียบร้อยแล้ว');
    }

    public function random(){
        $char = 'abcdefghijklmnopqrstuvwxyz';


//        dd(rand(0,26));

        $string = '-';
        for ($i = 0;$i <4;$i++){
            $string.=$char[rand(0,25)];
        }
        return $string;
    }

    public function preview($code){
//        dd($code);
        $result = Voucher::all();
    }
}
