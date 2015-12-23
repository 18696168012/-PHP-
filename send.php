<?php
require 'sendMessage.php';
$se=new sendMessage();
//$token=$se->getToken('wx313dff800dfbe6d3','ba53e5ea64e2dcb0efd0169af143b4fc');
$appid='wx313dff800dfbe6d3';
$appsecret='ba53e5ea64e2dcb0efd0169af143b4fc';
//数据样例
$data=array(
	'first'=>array('value'=>urlencode("您好,恭喜您绑定成功"),'color'=>"#743A3A"),
	'keyword1'=>array('value'=>urlencode('成功')),
	'keyword2'=>array('value'=>urlencode('001')),
	'remark'=>array('value'=>urlencode('备注:有事请联系客服400'))
);
$touser='o1kcqxFwd2177UPu_Jbo_8lt4WO0';
$template_id='I2WAYWqZE-V9hHDa3nTsJEjBDnIl5SN-PAP4mJVfs7k';
$url='http://www.baidu.com';
$re=$se->StartSendMessage($appid,$appsecret,$touser,$template_id,$url,$data,$color='#7B68EE');	
var_dump($re);