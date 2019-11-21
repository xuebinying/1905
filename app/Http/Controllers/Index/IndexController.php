<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Goods;
use App\Cart;
class IndexController extends Controller
{
    public function index(){
        $data = Goods::all();
        return view('index.index.index',['data'=>$data]);
    }

    public function detail(){
        $goods_id = \request()->goods_id;
        $where = [
            ['goods_id','=',$goods_id]
        ];
        $goodsInfo = Goods::where($where)->first();
        return view('index.index.detail',['goodsInfo'=>$goodsInfo]);
    }

    public function car(){
        $goods_id = \request()->goods_id;
        $add_price = \request()->add_price ;
        $buy_number = \request()->buy_number;
        $info = session('user');
        $id = $info['id'];
        $cartInfo = $this->addCarDb($goods_id,$buy_number,$add_price,$id);
        if($cartInfo){
            echo json_encode(['font'=>'','code'=>1]);
        }else{
            echo json_encode(['font'=>'加入购物车失败','code'=>2]);
        }
//        return view('index.index.car');
    }

    public function addCarDb($goods_id,$buy_number,$add_price,$id){
        $where = [
            ['goods_id','=',$goods_id],
            ['id','=',$id]
        ];
        $cartInfo = Cart::where($where)->first();
        if(empty($cartInfo)){
            $arr = ['goods_id'=>$goods_id,'id'=>$id,'buy_number'=>$buy_number,'add_time'=>time(),'add_price'=>$add_price];
            $res = Cart::create($arr);
        }else{
            $buy_number = $buy_number+$cartInfo['buy_number'];
            $res = Cart::where($where)->update(['buy_number'=>$buy_number,'add_time'=>time()]);
        }
        return $res;
    }
    public function carDo(){
        $info = session('user');
        $id = $info['id'];
        $where = [
            ['id','=',$id]
        ];
        $data = Cart::join('goods','goods.goods_id','=','cart.goods_id')->where($where)->get();
        return view('index.index.car',['data'=>$data]);
    }
    //改变数量
    public function ChangeNum(){
        $buy_number = \request()->buy_number;
        $goods_id = \request()->goods_id;
        $this->ChangeNumDb($buy_number,$goods_id);
    }
    //改变购买数据--数据库
    public function ChangeNumDb($buy_number,$goods_id){
        $info = session('user');
        $id = $info['id'];
        $where = [
            ['goods_id','=',$goods_id],
            ['id','=',$id],
            ['is_del','=',1]
        ];
        $arr = ['buy_number'=>$buy_number];
        $res = Cart::where($where)->update($arr);
        if($res){
            echo json_encode(['font'=>'','code'=>1]);
        }else{
            echo json_encode(['font'=>'更改购买数量失败','code'=>2]);
        }
    }
    //获取小计
    public function getTotal(){
        $goods_id = \request()->goods_id;
        //获取单价
        $goodsWhere = [
            ['goods_id','=',$goods_id]
        ];
        $goods_price = Goods::where($goodsWhere)->value('goods_price');

        //获取购买数量
        $info = session('user');
        $id = $info['id'];
        $cartWhere = [
            ['goods_id','=',$goods_id],
            ['id','=',$id],
            ['is_del','=',1]
        ];
        $buy_number = Cart::where($cartWhere)->value('buy_number');
        $total = $goods_price*$buy_number;
        return $total;
    }

    //获取总价
//    public function getCount(){
//        $goods = \request()->goods_id;
//        dump($goods);
//    }
}
