<?php
  function connect($host = DB_HOST, $user =DB_USER,$password = DB_PASSWORD,$database = DB_DATABASE,$port = DB_PORT)
  {
    $link = @mysqli_connect($host, $user, $password, $database, $port)
      or die("数据库连接失败: " . mysqli_connect_error());

	  mysqli_set_charset($link, "SET NAMES utf8");	  
    return $link;
  }
	//return result
  function execute_sql($link, $sql)
  {		 
    $result = mysqli_query($link, $sql);
		if(mysqli_errno($link)){
      exit(mysqli_error($link));
    }
    return $result;
  }
  //return bool
  function execute_bool($link,$sql)
  {
    $bool = mysqli_real_query($link,$sql);
    if(mysqli_errno($link)){
      exit(mysqli_error($link));
    }
    return $bool;
  }
  //一次执行多行
  function execute_multi($link,$arr_sqls,&$error){
    $sqls=implode(';',$arr_sqls).';';
    if(mysqli_multi_query($link,$sqls)){
      $data=array();
      $i=0;//计数
      do {
        if($result=mysqli_store_result($link)){
          $data[$i]=mysqli_fetch_all($result);
          mysqli_free_result($result);
        }else{
          $data[$i]=null;
        }
        $i++;
        if(!mysqli_more_results($link)) break;
      }while (mysqli_next_result($link));
      if($i==count($arr_sqls)){
        return $data;
      }else{
        $error="sql语句执行失败：<br />&nbsp;数组下标为{$i}的语句:{$arr_sqls[$i]}执行错误<br />&nbsp;错误原因：".mysqli_error($link);
        return false;
      }
    }else{
      $error='执行失败！请检查首条语句是否正确！<br />可能的错误原因：'.mysqli_error($link);
      return false;
    }
  }
  //获取记录数
  function num($link,$sql_count){
    $result=execute_sql($link,$sql_count);
    $count=mysqli_fetch_row($result);
    return $count[0];
  }
  //数据入库之前进行转义，确保，数据能够顺利的入库
  function toString($link,$a){
    if(is_string($a)){
      return mysqli_real_escape_string($link,$a);
    }
    if(is_array($a)){
      foreach ($a as $key=>$val){
        $a[$key]=toString($link,$val);
      }
    }
    return $a;
  }
  //关闭与数据库的连接
  function close($link){
    mysqli_close($link);
  }
  function is_login($link){
    if(isset($_COOKIE['name'])){
      $query="select * from user where name='{$_COOKIE['name']}' and sha1(pw)='{$_COOKIE['pw']}'";
      $result=execute_sql($link,$query);
      if(mysqli_num_rows($result)==1){
        $data=mysqli_fetch_assoc($result);
        return $data['id'];
      }else{
        return false;
      }
    }else{
      return false;
    }
  }
  function setcookienull(){
    if(isset($_COOKIE['name'])){
      setcookie('name',null,time()-3600);
      setcookie('pw',null,time()-3600);
      setcookie('occupation',"",time()-3600);
    }else{
      return false;
    }
  }
//加密解密函数
  function keyED($txt,$encrypt_key){       
    $encrypt_key =    md5($encrypt_key);
    $ctr=0;       
    $tmp = "";       
    for($i=0;$i<strlen($txt);$i++)       
    {           
        if ($ctr==strlen($encrypt_key))
        $ctr=0;           
        $tmp.= substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1);
        $ctr++;       
    }       
    return $tmp;   
}    
function encrypt($txt,$key)   {
    $encrypt_key = md5(mt_rand(0,100));
    $ctr=0;       
    $tmp = "";      
     for ($i=0;$i<strlen($txt);$i++)       
     {
        if ($ctr==strlen($encrypt_key))
            $ctr=0;           
        $tmp.=substr($encrypt_key,$ctr,1) . (substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1));
        $ctr++;       
     }       
     return keyED($tmp,$key);
} 
    
function decrypt($txt,$key){       
    $txt = keyED($txt,$key);       
    $tmp = "";       
    for($i=0;$i<strlen($txt);$i++)       
    {           
        $md5 = substr($txt,$i,1);
        $i++;           
        $tmp.= (substr($txt,$i,1) ^ $md5);       
    }       
    return $tmp;
}
function encrypt_url($url,$key){
    return rawurlencode(base64_encode(encrypt($url,$key)));
}
function decrypt_url($url,$key){
    return decrypt(base64_decode(rawurldecode($url)),$key);
}
function geturl($str,$key){
    $str = decrypt_url($str,$key);
    $url_array = explode('&',$str);
    if (is_array($url_array))
    {
        foreach ($url_array as $var)
        {
            $var_array = explode("=",$var);
            $vars[$var_array[0]]=$var_array[1];
        }
    }
    return $vars;
}
 
$key_url_md_5 = 'mdaima.com-123-scc';
?>
