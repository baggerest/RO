<?php
//////////////////////////////////////////////////////////////
// Ragnarok Online Control Panel - Kuraun CP                //
// Version: v1.1 (2010/11/21)                               //
// ���X�ӷ�: Federico Ram�rez (fedekiller - www.php4all.org)//
// ���X����: BlackRO                                        //
// �~��:Kuraun (Kuraun�޳N�y - Kuraun.uni.cc                //
// �޳N�䴩:Kuraun (Kuraun�޳N�y - Kuraun.uni.cc            //
// ����:http://blog.yam.com/kuraun							//
// ��s�䴩:Kuraun (Kuraun�޳N�y - Kuraun.uni.cc            //
// ����:http://blog.yam.com/kuraun							//
// ����䴩:Kuraun (Kuraun�޳N�y - Kuraun.uni.cc            //
// ����:http://blog.yam.com/kuraun							//
// RO�p�A�����~��,�������~��,�}���~�� Kuraun.uni.cc         //
// ����:http://blog.yam.com/kuraun							//
//////////////////////////////////////////////////////////////
ob_start();
session_start();
include("config.php");
if($config_gzip == true)
{
	ob_start("ob_gzhandler");
}
if($config_debug_mode == true)
{
	error_reporting(E_ALL ^ E_NOTICE);
}
else
{
	error_reporting(null);
}
include("functions.php");
$func = new func();
$func->sec();
$language_include = include('languages/'.$config_language.'.php');
if(!$language_include)
{
	die('�y�t�ɿ��~�A�z�S�� languages/'.$config_language.'.php<br />�ЦA���T�{!');
}
$chosen_template = $_COOKIE['template'];
if(!empty($_COOKIE['template']))
{
	$temp = $_COOKIE['template'];
}
else
{
	$temp = 'Our Ro';
}
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>'.$config_site_title.'</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />';

echo '<link rel="stylesheet" href="templates/'.$temp.'/style.css" type="text/css" />';
echo '</head>
<body>
<div id="all">
<div id="header">
<div id="header-sep"></div>
<div id="header-status"><br />
<br />
<br />
<strong>���A�����A:</strong><br />
<br />';
foreach($config_server_port as $k => $v)
{
	$func->server_status($config_server_ip, $v, $k);
}
echo '<br />';
echo '<strong>'.$lang['usr_online'].':</strong> '.$func->users_online();
echo '</div>
</div>
<div id="maincontent">
<div id="menu"><span class="menu-header">'.$lang['menu_title'].'</span>';
foreach($lang_menu as $k => $v)
{
	echo $v;
}
if(isset($_SESSION['user']) && isset($_SESSION['pass']))
{
	$ok = mysql_fetch_array(mysql_query("SELECT * FROM `login` WHERE `userid`='$user' AND `user_pass`='$pass'"));
	if($ok)
	{
		echo '<br /><span class="menu-header">'.$lang['menu_personal'].'</span>';
		foreach($lang_personal_menu as $k => $v)
		{
			echo $v;
		}
	}
}
echo '</div>
<div id="sep">&nbsp;</div>
<div id="content">';
if(isset($_GET['fd']) && isset($_GET['nav']) && file_exists($_GET['fd'].'/'.$_GET['nav'].".php"))
{
	include ($_GET['fd']."/".$_GET['nav'].".php");
}
else if(isset($_GET['nav']) && file_exists($_GET['nav'].".php"))
{
	include ($_GET['nav'].".php");
}
else if (empty($_GET['nav']))
{
	include("main.php");
}
else
{
	echo $lang['404'];
}
echo '</div>
</div>
<div id="footer"><br />
<br />
<br />
<br />
<br />
<span class="copyright">';

	echo $lang['copyright'];

echo '</span></div>
</div>
</body>
</html>';
ob_end_flush();
?>