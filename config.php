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
if (!eregi("index.php", $_SERVER['PHP_SELF']))
{
    die ("You can't access this file directly..."); 
}

$config_sql_host = '127.0.0.1'; // Sql Host Name ��ƮwIP (�����M�p�A�]�w�ۦP) �q�{:127.0.0.1 
$config_sql_user = 'baggerest'; // Sql Username ��Ʈw�b�� (�����M�p�A�]�w�ۦP)
$config_sql_pass = '0936970907'; // Sql Password ��Ʈw�K�X (�����M�p�A�]�w�ۦP)
$config_sql_db = 'ragnarok'; // Sql Database Name ��Ʈw�W�� (�����M�p�A�]�w�ۦP)
mysql_connect($config_sql_host, $config_sql_user, $config_sql_pass) or die ($lang['con_error']);
mysql_select_db($config_sql_db);
$config_language = 'chinese'; // �y�t�� �ثe�Ȥ䴩�c�餤��(BIG5)
$config_server_name = 'Kuraun �p�A'; //���A���W��
$config_site_title = 'Kuraun �p�A���U����'; // �������D
$config_data_download_1 = 'http://127.0.0.1'; //�p�A�ɤB���}1 �аȥ��[�Whttp://
//$config_data_download_2 = 'http://127.0.0.1'; //�p�A�ɤB���}2 (�ݭn�ϥνЧ� // �h��)
//$config_data_download_3 = 'http://127.0.0.1'; //�p�A�ɤB���}3 (�ݭn�ϥνЧ� // �h��)
//$config_data_download_4 = 'http://127.0.0.1'; //�p�A�ɤB���}4 (�ݭn�ϥνЧ� // �h��)
$config_server_ip = '127.0.0.1'; // no-ip or numeric ip �p�Aip
$config_server_port['Login'] = '6900'; // Login Server Port **�Фŧ��
$config_server_port['Char'] = '6121'; // Char Server Port **�Фŧ��
$config_server_port['Map'] = '5121'; // Map Server Port  **�Фŧ��
$config_gzip = true; // Allow GZIP. Change to false to deny it.
$config_gzip_lvl = '6'; // Level of compression for html, Max lvl 9.
$config_debug_mode = false; // Debug mode

?>