<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script>
	function show1()
	{
		$("#nav11").animate({opacity:"1"},"slow");
	}
	function hide1()
	{
		$("#nav11").animate({opacity:"0"},"slow");
	}
</script>
</head>
<body>
<!--这个是那个左边的哈-->
	<div class="left">
    	<div class="nav1">
        	<a href="javascript:show1()"></a>
        </div>	
   		<div class="nav2"><a href=""></a></div>
   		<div class="nav3"><a href=""></a></div>
    	<div class="nav4"><a href=""></a></div>
    	<div class="nav5"><a href=""></a></div>
    	<div class="nav6"><a href=""></a></div>
    </div>
    <!---下面就是那个div哈-->
    <div class="nav11" id="nav11">
    	<div class="nav11div1">
        	<a href="javascript:hide1()"><img src="image/icoleft.png" /></a>
            <span>用户登录</span>
        </div>
    	<div class="nav22div2">
        	<form action="" method="post">
            	<span>用户名</span><input type="text" name="username" />
                <span>密&nbsp;&nbsp;码</span><input type="password" name="pwd" />
                <p><input type="image" src="image/ok.png" style="height:25px;"/></p>
            </form>        
        </div>
        <div class="nav11div1">
        	<a href="javascript:hide1()"><img src="image/icoleft.png" /></a>
            <span>用户注册</span>
        </div>
          <div class="nav22div2">
        	<form action="" method="post">
            	<span>用户名</span><input type="text" name="username" />
                <span>密&nbsp;&nbsp;码</span><input type="password" name="pwd" />
               <span>密&nbsp;&nbsp;码</span><input type="password" name="pwd" />
                <p><input type="image" src="image/ok.png" style="height:25px;"/></p>
            </form>        
        </div>
    </div>
</body>
</html>