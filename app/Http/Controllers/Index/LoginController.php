<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Reg;
class LoginController extends Controller
{
    public function send(){
        $email = \request()->email;
        $code = rand(100000,999999);
        $info = ['email'=>$email,'code'=>$code,'add_time'=>time()];
        session(['info'=>$info]);
//        $message = '您正在白钢的爸爸珠宝注册,验证码是:'.$code;
        $res = $this->sendemail($email,$code);
    }


public function sendemail($email,$code){
    \Mail::send('index.login.email' , ['code'=>$code] ,function($message)use($email){
        //设置主题
        $message->subject("欢迎注册滕浩有限公司");
        //设置接收方
        $message->to($email);
    });
}

//    public function sendemail($email,$message){
//        \Mail::raw($message ,function($message)use($email) {
//            //设置主题
//            $message->subject("欢迎注册滕浩有限公司");
//            //设置接收方
//            $message->to($email);
//        });
//    }

    public function do_reg(){
        $data = \request()->except('_token');
        $info = session('info');
        if($data['code']!=$info['code']){
            echo '验证码有误';die;
        }
        if(time()-$info['add_time']>60){
            echo '验证码超时';die;
        }
        if($data['pwd']!=$data['pwds']){
            echo '两次密码不一致';die;
        }
//        $data['pwd'] = Hash::make($data['pwd']);
//        $data['pwds'] = Hash::make($data['pwds']);
        $res = Reg::create($data);
        return redirect('/login');
    }

    public function do_login(){
        $data = \request()->except('_token');
        $where = [
            ['email','=',$data['email']],
            ['pwd','=',$data['pwd']]
        ];
        $res = Reg::where($where)->first();
        session(['user'=>$res]);
        if($res){
//            echo '登陆成功';
            return redirect()->intended('/');
        }else{
            //echo '登陆失败';
            return redirect('/login')->with("msg","登陆失败");
        }
    }
    public function pay($orderId){
        require_once app_path().'/libs/alipay/wappay/service/AlipayTradeService.php';
        
       
        // require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'buildermodel/AlipayTradeWapPayContentBuilder.php';
       $config=config('alipay');
        // if (!empty($_POST['WIDout_trade_no'])&& trim($_POST['WIDout_trade_no'])!=""){
   //根据订单id获取订单编号和付款金额
   $order=\DB::table('order_info')->where('order_id',$orderId)->first();   
   
   //商户订单号，商户网站订单系统中唯一订单号，必填
            $out_trade_no =$order->orde_sn;
        
            //订单名称，必填
            $subject ='粉红珍珠';
        
            //付款金额，必填
            $total_amount =$order->order_price;
        
            //商品描述，可空
            $body = $_POST['WIDbody'];
        
            //超时时间
            $timeout_express="1m";
        
            $payRequestBuilder = new AlipayTradeWapPayContentBuilder();
            $payRequestBuilder->setBody($body);
            $payRequestBuilder->setSubject($subject);
            $payRequestBuilder->setOutTradeNo($out_trade_no);
            $payRequestBuilder->setTotalAmount($total_amount);
            $payRequestBuilder->setTimeExpress($timeout_express);
        
            $payResponse = new AlipayTradeService($config);
            $result=$payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);
        
            return ;
    }
}
