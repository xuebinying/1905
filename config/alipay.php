<?php
return array (	
		//应用ID,您的APPID。
		'app_id' => "2016100100643363",

		//商户私钥
		'merchant_private_key' => "MIIEowIBAAKCAQEApfTGu2XiIIwVyE0YrEGodDis2pkqOIUSEWcPmxTarGPuwKd8Chw32yliCgYhZ5pV7AMDOE0lL9G2PL88YFM1ZUetF/L00AE2eW7c9yuUbp7FDEqgBi8j6+xzEX+jaP9sI5mAOc3bR1NEHz/3Ax3ffq0Nyukjg92pAw2GZKhOxOBjGAMWhfHo6eLOLuZEntGm8HB7nTR8uvKsiKjjqU1DFa5YtxHbJ2FMzdGRqEWKVu6ZDOTEhnQa6ybEWQIjpPakgTPv5MZrIqx1khskpxD9iMkOabaHOvGA9XzRL2E09gE/DkhF+7DYrl/Kd1O+hoB9yURZheiURmC6BcKC0NyTXwIDAQABAoIBAGY07Df5tVxqKfgkUy+zeDWrufkfH3uTqN8C4/+UxmApY59PBvuLCXN2dyTJRcVyrbwe1trT2DUtKNkcxehlFpt7m0UGonOAa7Y56uhm9JF0QtMhGpD0c2EXTH7YZyGBPW5nWStAdu3kgC3mzRAkU8LGfZocH31VBIQWzlArv+dLdEiMCcmipD3/0s1TXIVFCS/aKOzlXYIgNaHx04aQhUFGn1qVYnmglwQegj3wuOGa2VBPC06Lm2FqmBYHre1jxQN8yHN01WMs1z6TVNa83TLDIoashNlSEwipoSdnbnfe/i32Uk+2bT9F1fIOf7kNfSEgNHsuihMIgcG6wUMKixECgYEA2KSl2yQvxg2p3N37VzroytqrKuO0A8oVZhStcLTwYy1r6xpiO9DSrd72ILwXzopK+1e4u1lccS5VbgtnwnuK8Wm72f83+q0NroesuTz6p/oqcYvgUg1P7pMNb61z54a/ai7BTxhtkGViHNkqJxGck+sXL3EobooJD9jAziPGl8MCgYEAxBrYRrl5SS2cOYARSc+FXeZVDx9s8oTghi65dshyQ1XMBUGGh0FT+RuM12DJneX14uxp7esSpyFv14K3q4DCnbJLEO9uFjEHp/P5kTdCcOik8nrscqoXqzRr8cHOUDeSko/Cbk5VesLtR/wUs1QuHu0ZM0td14JA042tZMX5uDUCgYEA0leyTT4qQGKdzTueQEiLJAIB9SeWbaN0+WMULv0O9UxxnphETo1nMLftQ0U83CV7veOjEgwmbCGvgqQCP1sSQWkGohdhs7r4ML+8XTIusI99TDeiOiiAtkQC5K6FfYNgMGlq+S/fmTZGd3oGql44J4o3PbHhrsnJGKC8OqmTtV8CgYA5ROmyRcoQv9wmwqrJ1mvJT1G51+CWNo3nQc/xy3nrBixNwKQL7d0bG5uW7nISxax4N7h7vbG100L5OfhvgmvTZ9UaPgH1Qx5MQyi36t5hYN+C3Lkeh2PgILABayrYLFKGsKsEUaYO8swewJQ/Bq9tYqqAW1sta6GI5pAjpNlXnQKBgG+p4jBqBgjra2qM4beYDSR8r6BPUz0hvQRyIQvbaO8dzc+BGrw6eaZuz/UNY8ro6FMb7nuELt9DSCrpUMJLkMlpLC3M0c4JCAyfZJw6/DE9HyKMzQNXsUjIQSvkr2FRe4g1vAR/ZX/VUg7ehxYPoidnks/vxOwvEFDDia78msMM",
		
		//异步通知地址
		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://localhost/alipay/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAm7KbFcDw6WnMq4O8GIOLhRi4AyVmORDF9CF5GQScY+VkbhNgO5fosjrVmk4Hx2qT2pAZw240VYAYTMsiADScU6zqPeO+pxfAwwODB62kc+zb1NkKTeH8Bx2x+iWb5QgNbe2udpMWYuL+3lk0IvlkgZmSP1luSANabaAWM3tVaaOeg6J0sMVJeejfGOakKV78+x07w8+0gofwmbusbRmEtLJkCB47aI/GkozcoE0Qchj4kadW26+PaQZu/CguQXPPRzdH5sG/uTx63/eOQMjW1u2n83xN069cLXHhsLcQoVL6guBKEyjrLscWBVPeHXEmjUISOkjDkKnAQ0LYPEIu7QIDAQAB",
    
    );