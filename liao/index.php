<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8; X-Wap-Proxy-Cookie=none" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Xewl</title>
    
</head>
<body>
<div class="top"><span class="name">聊天室</span></div>
<link type="text/css" href="app/style/chat.css?v=1.2" rel="stylesheet" />
<?php
require_once 'app/app.php';
if(empty(@$_COOKIE[KEYS.'_name'])){
	echo '<div class="write login">                
                <input type="text" value="'.rand_nick().'" id="nick" maxlength="5" placeholder="输入昵称..." />                
                <a href="javascript:;" id="login" class="write-link send">进入</a>
</div>';	      
} 
echo '<div class="talk mk-chat-box">     
</div>
<div class="talk write">                
                <input type="text" id="msg" maxlength="14000" placeholder="聊点什么..." />                
                <a href="javascript:;" id="send" class="write-link send" onclick="send()">发送</a>
</div>'; 
?>
<div class="foot"><a href="">© Xewl</a><a href="/"></a></div>
<script src="app/style/jquery.min.js"></script>
<script src="app/style/chat.min.js"></script>
<link type="text/css" href="app/style/chat.css?v=1.2" rel="stylesheet" />
<script src="https://myhkw.cn/api/player/158382436416" id="myhk" key="158382436416" m="1"></script>
</body>
</html>