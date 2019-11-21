<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016100100643363",

		//商户私钥
		'merchant_private_key' => "MIIEpAIBAAKCAQEA0mUqBr+tbPW6FCKIVSBQUuD0dIZ02hsJDLJIxlk0rtmDA69t5JeZpE9DM1KbAaJkgXD9Y8BU7vVgzp7AzggFScB1SzQThOE3PNvkMfgDLLaBX7ck8U+KmhMN8PlSQ9XrG2t2Y77XJvHij9OUJWqEaX7HmHUa6rkr6thzTgbFqsRUbN7WKoZDMAuYH7eATJbRmNwONhEKtwQn4Lc3xYdSIBxUV76fZ/2gICGgwXSe++vJrd1Zjl6bnr49MCxiEvPOUP+M6nnQfef7FM1LBxD+wMGyy5BIq/XfV3z51WArqd+oLQX+8gx05woyOqsxUI3Xku94T8VhYk2u4xIvF8GDkwIDAQABAoIBAQCMXKVe/z1p9b2AdVFSyU4NHLq5ioImh+bPq5lVimnVRJNdQAomeOUtcxu3/6IdwwMeQA0sIUIIcXd2IP8r9LnibB1UYJetDLtXRLPGillD2TYSbxKcUp57D787RnoVe39wOY8wGD9dYf3uSg8JrzhLUSNDmMyuT373HBRAt8/jjgUIE6+dNU6vLBUXHABDnksVtajpCrIPAcDSqv+KW/9tXb3WnR2omB2nmKru7N06FcVqjtb2Oc2FmxTyHg/Iv70XpthXyN30TPmiwIpIHei20GgeNV47tzO3cKs20bCvsHISDwH2xnWfSYtmRlFqCFur5YkVDU5FShpAv4ov28OxAoGBAPiX1/NUkz8QemOf+LfUvAaDnADTyl51ARcTUfu8CNF0EGbGsAB2lXly1a3DUh/qwnN1ZA2SBv9n6tI+6mO+b4lXZ+fVV1qr6OLNhZAmxPVluRSbSEwC0bi3L/oUVppwXiyJ95eknSs2cTvbHkgdwmDPouHP+p5C5nBgTfJZAp1VAoGBANip9rdEm1FiqbyZ+FTXp154L8VxbntMcm6cinjjSTXGwEWmWkek3oqRY5bbqSEe/E08oSZjpX9LBc3dTCWdFqlWFMIe29wsdBfkwo3Gl3hClmzBbxvQy7e2s079QieT1TOghUBy5MaGDwWrA3rlhP4lD9QvlefXxNYDrOGhYF1HAoGACdbow0bbtSlPztWsIIqZDqDy8c1wOyDidCldm1sr9i5j382Jdds7u1ziPEh43a6LF8rTtP3MrRtN3hiDaoNFIuiEwlZdaMdZJnEAEl6WeSgXlUs4J1oNNwR5L6rSarZ748NqO2RWnDlBbh8UKcKTyQUu60UyJEV9nYESVL9VLSkCgYA3Z6c+kF3Dfx52q0z0rT0QjF1y+SHOh+sPXBqQ9VZIWS3b4cFeZsu91ZYJAt0KKjlMqv9uqLauiYnPbhLF35jm7qtaRLfmYrvBTG9v/+PGDgkXgJOgIlGmBiNuRJdBNa2kiRzqMTdNiQSYZ3X5XG4Y63NTyGNmKSgdrkzsWe8hiwKBgQCAcuVBGdpyxRV3yJCxGlsldf3EqtVLdBnf10wwPkXxIC+e/T6LPacB7QiWmXADFu8aATXqLwyib6mCBd/qmlI1hckyd9EoEmG96zQ/UXUsRyLAA8otOhcQE87i2/Jpkgl9hnDG0rn1L8vz0tAXLWuPfa3w/MfG0lb/73p2yDcnDg==",
		
		//异步通知地址
		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
		
		//同步跳转
		'return_url' => "http://localhost/alipay.trade.wap.pay-PHP-UTF-8/return_url.php",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA0mUqBr+tbPW6FCKIVSBQUuD0dIZ02hsJDLJIxlk0rtmDA69t5JeZpE9DM1KbAaJkgXD9Y8BU7vVgzp7AzggFScB1SzQThOE3PNvkMfgDLLaBX7ck8U+KmhMN8PlSQ9XrG2t2Y77XJvHij9OUJWqEaX7HmHUa6rkr6thzTgbFqsRUbN7WKoZDMAuYH7eATJbRmNwONhEKtwQn4Lc3xYdSIBxUV76fZ/2gICGgwXSe++vJrd1Zjl6bnr49MCxiEvPOUP+M6nnQfef7FM1LBxD+wMGyy5BIq/XfV3z51WArqd+oLQX+8gx05woyOqsxUI3Xku94T8VhYk2u4xIvF8GDkwIDAQAB",
);