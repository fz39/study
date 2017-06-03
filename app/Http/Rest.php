<?php
namespace App\Http;
use Illuminate\Database\Eloquent\Model;
class Rest extends Model
{
    private $AccountSid;
	private $AccountToken;
	private $AppId;
	private $ServerIP;
	private $ServerPort;
	private $SoftVersion;
	private $Batch;  //时间戳
	private $BodyType = "xml";//包体格式，可填值：json 、xml
	private $enabeLog = false; //日志开关。可填值：true、
//	private $Filename="./log.txt"; //日志文件
//	private $Handle;
	function __construct()
	{
		$this->Batch = date("YmdHis");
		$this->ServerIP = 'app.cloopen.com';
		$this->ServerPort ='8883';
		$this->SoftVersion = '2013-12-26';
        $this->AccountSid = '8a216da85a25f2dc015a3b4d416f07ae';
        $this->AccountToken = 'cb44cba395934765b8d652d566293d70';
        $this->AppId = '8a216da85a25f2dc015a3b4d43a207b5';

//    	$this->Handle = fopen($this->Filename, 'a');
	}
    
    /**
     * 发起HTTPS请求
     */
     function curl_post($url,$data,$header,$post=1)
     {
       //初始化curl
       $ch = curl_init();
       //参数设置  
       $res= curl_setopt ($ch, CURLOPT_URL,$url);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
       curl_setopt ($ch, CURLOPT_HEADER, 0);
       curl_setopt($ch, CURLOPT_POST, $post);
       if($post)
          curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
       curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
       $result = curl_exec ($ch);
       //连接失败
       if($result == FALSE){
          if($this->BodyType=='json'){
             $result = "{\"statusCode\":\"172001\",\"statusMsg\":\"网络错误\"}";
          } else {
             $result = "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?><Response><statusCode>172001</statusCode><statusMsg>网络错误</statusMsg></Response>"; 
          }    
       }

       curl_close($ch);
       return $result;
     } 

	/**
	 * @brief 获取config用户配置
	 * @return array
	 */
//	public function getConfig()
//	{
//		$siteConfigObj = new Config("site_config");
//
//		return array(
//			'username' => $siteConfigObj->sms_username,
//			'userpwd'  => $siteConfigObj->sms_pwd,
//		);
//	}

	/**
	 * @brief 发送短信
	 * @param string $mobile
	 * @param string $content
	 * @return
	 */
	public function send($mobile,$content)//抽象方法规定，不能改参数
	{
        $to = $mobile;
        $datas = array('0'=>$content,'1');
        $tempId = 1;
		//主帐号鉴权信息验证，对必选参数进行判空。
        $auth =$this->accAuth();
        if($auth!=""){
            return $auth;
        }
        // 拼接请求包体
        if($this->BodyType=="json"){
           $data="";
           for($i=0;$i<count($datas);$i++){
              $data = $data. "'".$datas[$i]."',";
           }
           $body= "{'to':'$to','templateId':'$tempId','appId':'$this->AppId','datas':[".$data."]}";
        }else{
           $data="";
           for($i=0;$i<count($datas);$i++){
              $data = $data. "<data>".$datas[$i]."</data>";
           }
           $body="<TemplateSMS>
                    <to>$to</to> 
                    <appId>$this->AppId</appId>
                    <templateId>$tempId</templateId>
                    <datas>".$data."</datas>
                  </TemplateSMS>";
        }
//        $this->showlog("request body = ".$body);
        // 大写的sig参数
        $sig =  strtoupper(md5($this->AccountSid . $this->AccountToken . $this->Batch));
        // 生成请求URL
        $url="https://$this->ServerIP:$this->ServerPort/$this->SoftVersion/Accounts/$this->AccountSid/SMS/TemplateSMS?sig=$sig";
//        $this->showlog("request url = ".$url);
        // 生成授权：主帐户Id + 英文冒号 + 时间戳。
        $authen = base64_encode($this->AccountSid . ":" . $this->Batch);
        // 生成包头
        $header = array("Accept:application/$this->BodyType","Content-Type:application/$this->BodyType;charset=utf-8","Authorization:$authen");
        // 发送请求
        $result = $this->curl_post($url,$body,$header);
//        $this->showlog("response body = ".$result);
        if($this->BodyType=="json"){//JSON格式
           $datas=json_decode($result);
        }else{ //xml格式
           $datas = simplexml_load_string(trim($result," \t\n\r"));
        }
      //  if($datas == FALSE){
//            $datas = new stdClass();
//            $datas->statusCode = '172003';
//            $datas->statusMsg = '返回包体错误';
//        }
        //重新装填数据
        if($datas->statusCode==0){
         if($this->BodyType=="json"){
            $datas->TemplateSMS =$datas->templateSMS;
            unset($datas->templateSMS);   
          }
        }
		return $this->response($datas);
	}

	/**
	 * @brief 解析结果
	 * @param $result 发送结果
	 * @return string success or fail
	 */
	public function response($result)
	{
		if($result->statusCode == 0)
		{
			return 1;
		}
		else
		{
			return 2;
//			return $result->statusCode;
		}
	}

	/**
	 * @brief 获取参数
	 */
	public function getParam()
	{
		return array(
			"username" => "用户名",
			"userpwd"  => "密码",
			"usersign" => "短信签名",
		);
	}

    function showlog($log)
    {
        if ($this->enabeLog) {
            fwrite($this->Handle, $log . "\n");
        }
    }

	//返回消息提示
	public function getMessage($code)
	{
		$messageArray = array(
			-1 =>"用户名或者密码不正确或用户禁用",
			2  =>"余额不够或扣费错误",
			3  =>"扣费失败异常（请联系客服）",
			6  =>"有效号码为空",
			7  =>"短信内容为空",
			8  =>"无签名，必须，格式：【签名】",
			9  =>"没有Url提交权限",
			10 =>"发送号码过多,最多支持200个号码",
			11 =>"产品ID异常或产品禁用",
			12 =>"参数异常",
			13 =>"30分种重复提交",
			14 =>"用户名或密码不正确，产品余额为0，禁止提交，联系客服",
			15 =>"Ip验证失败",
			19 =>"短信内容过长，最多支持500个",
			20 =>"定时时间不正确：格式：20130202120212(14位数字)",
		);
		return isset($messageArray[$code]) ? $messageArray[$code] : "未知错误";
	}

	 /**
    * 主帐号鉴权
    */   
   function accAuth()
   {
       if($this->ServerIP==""){
            $data = new stdClass();
            $data->statusCode = '172004';
            $data->statusMsg = 'IP为空';
          return $data;
        }
        if($this->ServerPort<=0){
            $data = new stdClass();
            $data->statusCode = '172005';
            $data->statusMsg = '端口错误（小于等于0）';
          return $data;
        }
        if($this->SoftVersion==""){
            $data = new stdClass();
            $data->statusCode = '172013';
            $data->statusMsg = '版本号为空';
          return $data;
        } 
        if($this->AccountSid==""){
            $data = new stdClass();
            $data->statusCode = '172006';
            $data->statusMsg = '主帐号为空';
          return $data;
        }
        if($this->AccountToken==""){
            $data = new stdClass();
            $data->statusCode = '172007';
            $data->statusMsg = '主帐号令牌为空';
          return $data;
        }
        if($this->AppId==""){
            $data = new stdClass();
            $data->statusCode = '172012';
            $data->statusMsg = '应用ID为空';
          return $data;
        }   
   }
}