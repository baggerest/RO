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
echo "
<TABLE width=\"100%\" height=\"100%\" align=\"center\" border=\"0\" cellspacing=\"1\" cellpadding=\"5\">
	<TBODY>
		<TR class=>
			<TD width=\"100%\" height=\"25\" vAlign=\"top\"><center><h4>�ɮפU���t��</h4></center></TD>
		</TR>
		<TR class=\"topic_title6\" height=\"100%\">
			<TD class=\"title_face4\" vAlign=\"top\">
";
				include("download.html");

echo "			</TD>
		</TR>
		
		<TR>
			<TD width=\"100%\" height=\"25\"></TD>
		</TR>
	<TBODY>
</TABLE>
";

?>