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
$lang['wel_title'] = '�w��!';
$lang['welcome'] = '�w��Ө� '.$config_server_name.'���U��!';
$lang['con_error'] = '�L�k�s����SQL��Ʈw�A!';
$lang['reg'] = '���U';
$lang['login'] = '�n�J';
$lang['exit'] = '�n�X';
$lang['usr_online'] = 'Users Online';
$lang['404'] = 'Error 404. �o�������s�b';
$lang['menu_title'] = '�D�n���';
$lang['menu_personal'] = '�ӤH���';
$lang_menu = array(
'<a href="?nav=main">����</a><br />',
'<a href="?fd=functions&nav=register">���U</a><br />',
'<a href="?fd=functions&nav=login">�n�J</a><br />',
'<a href="?fd=functions&nav=recoverpass">�ѰO�K�X</a><br />',
'<a href="?fd=functions&nav=database">��Ƭd��</a><br />',
'<a href="?fd=functions&nav=ppl_online">�b�u�ϥΪ�</a><br />',
'<a href="?fd=functions&nav=ranking">�ӤH�ƦW</a><br />',
'<a href="?fd=functions&nav=guildranking">���|�ƦW</a><br />',
'<a href="?fd=functions&nav=download">�U���M��</a>'
);
$lang_personal_menu = array(
'<a href="?fd=functions&nav=char">����޲z�t��</a><br />',
'<a href="?fd=functions&nav=changepass">���K�X</a><br />',
'<a href="?fd=functions&nav=changetemplate">��ﭺ������</a><br />',
'<a href="?fd=functions&nav=logout">�n�X</a>'
);
$lang['db'] = '��Ƭd��';
$y = $func->check_year();
$lang['copyright'] = 'Code From BlackRO '.$y.' Kuraun CP v1.1 - All Rights Reserved - Server: '.$config_server_name;
$lang['username'] = '�b��';
$lang['pass'] = '�K�X';
$lang['email'] = '�q�l�H�c';
$lang['gender'] = '����ʧO';
$lang['male'] = '�k';
$lang['female'] = '�k';
$lang['sec_code'] = '���ҽX';
$lang['register'] = '�e�X';
$lang['login'] = '�n�J';
$lang['code_err'] = '���ҽX��J���~!';
$lang['reg_msg'] = '���U';
$lang['reg_err'] = '�Ҧ���Ƴ�������g';
$lang['reg2_err'] = '�п�J���Ī��q�l�H�c<br />�ڭ̤��|�o�e����H��A���u�O�ΨӧR������';
$lang['reg3_err'] = '�z���b���ΫH�c�w�g�s�b<br />�ЦA����ܨ�L�b���ΫH�c';
$lang['reg4_err'] = '���U�t�ΥX���A��ƵL�k�g�J�A���p���޲z��';
$lang['succ_reg'] = '���U���\<br />�C���r��!';
$lang['err_login'] = '�z���b���αK�X���~�A�ЦA����J<br />�Ϊ̱z�٨S���U�ӱb��';
$lang['succ_login'] = '�n�J���\ Welcome';
$lang['al_log'] = '�z�w�g�n�J';
$lang['logout'] = '�z�w�g�n�X';
$lang['nologout'] = '�z�S���n�J�A�L�k�n�X';
$lang['pag1'] = '�U�@��';
$lang['pag2'] = '�W�@��';
$lang['pag3'] = '�S�����';
$lang['rank_name'] = '�ӤH�Ʀ�';
$lang['rank1'] = '����W��';
$lang['rank2'] = '�򥻵���';
$lang['rank3'] = '¾�~����';
$lang['rank4'] = '����';
$lang['rank_ord'] = '�ƦC�覡';
$lang['rank_ord_desc'] = '����';
$lang['rank_ord_asc'] = '�ɧ�';
$lang['usr_total'] = '��������';
$lang['usr_online'] = '�b�u����';
$lang['db_text_1'] = '�M��';
$lang['db_text_2'] = '���~';
$lang['db_text_3'] = '�Ǫ�';
$lang['db_text_4'] = '�s���d��';
$lang['db_text_5'] = '�W�٬d��';
$lang['db_text_6'] = '�d�����O';
$lang['db_text_7'] = '�W��';
$lang['db_text_8'] = '�s��';
$lang['db_text_9'] = '�򥻸g��';
$lang['db_text_10'] = '¾�~�g��';
$lang['db_text_11'] = '����';
$lang['db_text_12'] = '�ɧ�';
$lang['db_text_13'] = '�M��';
$lang['db_text_14'] = '���q';
$lang['db_text_15'] = '�ʶR����';
$lang['db_text_16'] = '��X����';
$lang['db_text_17'] = '�}��';
$lang['db_text_18'] = '���m�O';
$lang['db_text_19'] = '�]�k���m�O';
$lang['db_text_20'] = '�����t��';
$lang['db_err1'] = '�z�u��νs�� <strong>��</strong> �W�ٴM��';
$lang['db_err2'] = '�z������ܽs���ΦW�ٴM��';
$lang['db_err3'] = '�b�d�ߪ��~�ɡA�z�����ܰ�/¾�~�g��Ƨ�';
$lang['char_err1'] = '�z�����n�J�~��d��';
$lang['char_text_1'] = '���������';
$lang['char_text_2'] = '�v��/��A�C��ק�';
$lang['char_text_3'] = '�v��ק�';
$lang['char_text_4'] = '�d�I�۱�';
$lang['char_text_5'] = '�ಾ����';
$lang['char_text_6'] = '�w��Ө�z���}��޲z�t��';
$lang['char_text_7'] = '�d�ݨ����T';
$lang['char_text_8'] = '�z�٨S���b��';
$lang['char_text_9'] = '�z�٨S�����󨤦�';
$lang['char_text_10'] = '���������';
$lang['char_text_11'] = '���';
$lang['char_text_12'] = '�o���O�z���}��';
$lang['char_text_13'] = '�z����L����b�o�����<br />�п�ܨ�L���.';
$lang['char_text_14'] = '���������즨�\.';
$lang['char_text_15'] = '�o�Ϳ��~�A���p���޲z��.';
$lang['char_text_16'] = '�d��۱Ϧ��\.';
$lang['char_text_17'] = '�۱ϥ��ѡA���p���޲z��.';
$lang['char_text_18'] = '�z������ܨ���!';
$lang['char_text_19'] = '�q';
$lang['char_text_20'] = '���';
$lang['char_text_21'] = '�ಾ���⥲�����P<br />�z�����ಾ�����ܬۦP����';
$lang['char_text_22'] = '�e�X';
$lang['char_text_23'] = '����';
$lang['char_text_24'] = '�z������ܨ�Ө���.';
$lang['char_text_25'] = '�z���������ಾ<br />GM�w�g����^���A�ФŦA������';
$lang['char_text_26'] = '�ಾ���\!';
$lang['char_text_27'] = '�ಾ���ѡA���p���޲z��.';
$lang['char_text_28'] = '�u���J�Ʀr!';
$lang['char_text_29'] = '�Y�v�C��';
$lang['char_text_30'] = '�Y�v�y��';
$lang['char_text_31'] = '��A�C��';
$lang['char_text_32'] = '��';
$lang['char_text_33'] = '�s';
$lang['char_text_34'] = '��令�\.';
$lang['char_text_35'] = '�o�Ϳ��~�A�Ц^���޲z��.';
$lang['char_text_36'] = '�Ҧ���ƥ�����J�A�Y���Q���зӭ�ȿ�J.';
$lang['char_text_37'] = '�Ҧ���ƥ�����J�A�z�����J0.';
$lang['change_pass_1'] = '�K�X���';
$lang['change_pass_2'] = '�e�X';
$lang['change_pass_3'] = '�±K�X';
$lang['change_pass_4'] = '�s�K�X';
$lang['change_pass_5'] = '�b���αK�X�����T.';
$lang['change_pass_6'] = '�K�X��令�\.';
$lang['recover_pass_1'] = '��^�K�X';
$lang['recover_pass_2'] = '��^�K�X';
$lang['recover_pass_3'] = '�b���ΫH�c���~';
$lang['recover_pass_4'] = '�K�X�N�ǰe��z���H�c';
$lang['recover_pass_5'] = '�o�O�z���K�X�A�аO�� ';
$lang['template_change_1'] = '��������';
$lang['template_change_2'] = '�ثe����';
$lang['template_change_3'] = '���ܭ���  to';
$lang['guild_rank_1'] = '���|�Ʀ�';
$lang['guild_rank_2'] = '���|�|��';
$lang['guild_rank_3'] = '���|����';
$lang['guild_rank_4'] = '��������';
$lang['guild_rank_5'] = '�Ӥ��|';
?>