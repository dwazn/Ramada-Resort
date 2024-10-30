<?
/*******************************************
/*  „ ≈‰‘«¡ Â–Â «·»—„ÃÌ… »Ê«”ÿ… 
/* dwazn
/* »≈” Œœ«„ »—‰«„Ã ’«‰⁄ ‰„«–Ã «·„—«”·…
/*
/*
/* 
/*
/* »≈„ﬂ«‰ﬂ Õ–› „« ”»ﬁ
/*
/*******************************************

/*  »≈„ﬂ«‰ﬂ «· ⁄œÌ· »«·„⁄·Ê„«  «· «·Ì… ﬂ„«  ‘«¡ */

//≈”„ «·„Êﬁ⁄ ﬂ„« ”ÌŸÂ— ›Ì «·‰„Ê–Ã
$sitename = "Ramada Almukalla Hotel";

//»—Ìœ «·„Êﬁ⁄ «·–Ì ” —”· «·—”«·… ≈·ÌÂ
$siteemail = "info@ramada-almukalla.com";

//⁄‰Ê«‰ «·—”«·… «· Ì ” ’· ≈·Ï »—Ìœ «·„Êﬁ⁄
$email_title="—”«·… ⁄»— „Êﬁ⁄ —„«œ« «·„ﬂ·«¡";

//—”«·… «·‰ ÌÃ…
$e_msg="Thank you for your contact
at the Ramada Almukalla



Reception department";

//Ì—ÃÏ ⁄œ„ «· ⁄œÌ· »⁄œ Â–« «·”ÿ— ≈·« ≈–« ﬂ‰   ⁄·„ „«  ›⁄·

/*****************************************************/
if($_GET['send']!="Done"){
$code= $_POST['code'];
$v1= $_POST['v1'];
$v2= $_POST['v2'];
$v3= $_POST['v3'];
$v4= $_POST['v4'];

if(!$code){
?>
<html dir="ltr">
<head>
<meta http-equiv="Content-Language" content="ar-sy">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title><? echo $sitename ?></title>
<style>
<!--
a, a.visited, a.hover, a.active {
        font-family: MS Sans Serif;
        text-decoration: none;
}

body,td {
        font-family: tahoma;
        font-size: 10pt;
}

-->
</style>
</head>
<body bgcolor="#696B6D" text="#7B0002">

<font color="#FFFFFF">

<b>

<!-- ############ »œ¡ ﬂÊœ ’›Õ… «·≈—”«· ############ -->
<!--  „ ≈‰‘«¡ Â–« «·‰„Ê–Ã ¬·Ì« »Ê«”ÿ… »—„ÃÌ… ’«‰⁄ ‰„«–Ã «·„—«”·… „‰ „Êﬁ⁄-->
<!-- dwazn -->
<!-- »≈„ﬂ«‰ﬂ Õ–› „« ”»ﬁ -->
</b>
</font>
<form name="sendform" action="<? echo $PHP_SELF ?>" onsubmit="javascript:checkform()" method="post">
<font color="#FFFFFF">
<input type="hidden" name="code" value="send" style="font-weight: 700">
</font><b><font color="#FFFFFF">
<br>
<br>

                                </font>

                                </b>

                                <center>
                                <table id="tbody" border="1" style="border-collapse: collapse" bordercolor="#CACACA" cellpadding="4">

                                    <tr>
                                        <td ><font color="#FFFFFF"><b>Name* :
                                        </b>
                                        </font>
                                        </td>
                                        <td><font color="#FFFFFF">
										<input name="v1" style="border:1px solid #AAAAAA; padding:0; background-color: #FFFFFF; font-weight:700"><b>
										</b>
										</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><font color="#FFFFFF"><b>E-mail* :
                                        </b>
                                        </font>
                                        </td>
                                        <td><font color="#FFFFFF">
										<input name="v2" style="border:1px solid #AAAAAA; padding:0; background-color: #FFFFFF; font-weight:700"><b>
										</b>
										</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><font color="#FFFFFF"><b>Contact info.* :
                                        </b>
                                        </font>
                                        </td>
                                        <td><font color="#FFFFFF">
										<input name="v3" style="border:1px solid #AAAAAA; padding:0; background-color: #FFFFFF; font-weight:700"><b>
										</b>
										</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><font color="#FFFFFF"><b>Your message* :
                                        </b>
                                        </font>
                                        </td>
                                        <td><font color="#FFFFFF">
										<textarea cols="26" name="v4" style="border:1px solid #AAAAAA; padding:0; background-color: #FFFFFF; font-weight:700" rows="6"></textarea><b>
										</b>
										</font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" colspan="2">
                                                                                        <table border="0" cellpadding="3" style="border-collapse: collapse">
                                                                                                <tr>
                                                                                                        <td><font color="#FFFFFF"><input type="button" onclick="javascript:checkform();" value="Send" style="border:1px solid #666666; padding:0; background-color: #D4D0C8; font-weight:700"></font></td><td><font color="#FFFFFF"><input type="reset" value="Reset" style="border:1px solid #666666; padding:0; background-color: #D4D0C8; font-weight:700"></font></td>
                                                        </form>
                                                </tr>
                                                                                        </table>
                                            </td>
                                    </tr>
                                                                </table>
                                </center>
                                <font color="#FFFFFF">
                                <b>
                                <br></b><center></font></center>&nbsp;<p>
<font color="#FFFFFF"><b><br>
                                <br>                                                </td>
        </tr>
</table>
<script>
function checkform(){
var error_msg='';
var second_error_msg='You didn\'t fill this fields rightly:\n';
var done='';
var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
if(sendform.v1.value == '') error_msg=error_msg+'    - Name .\n';
if(sendform.v2.value == '') error_msg=error_msg+'    - E-mail .\n';
if(sendform.v3.value == '') error_msg=error_msg+'    - Contact info. .\n';
if(sendform.v4.value == '') error_msg=error_msg+'    - Your message .\n';
if(sendform.v1.value !='' && sendform.v2.value !='' && sendform.v3.value !='' && sendform.v4.value !='') done=1;
else alert('Please fill this fields :\n'+error_msg);
if(done==1){
   var returnval2=emailfilter.test(sendform.v2.value);
     if(returnval2==false) second_error_msg = second_error_msg+'   - E-mail (You must write a correct Email) .\n';
   if(second_error_msg!='You didn\'t fill this fields rightly:\n') alert(second_error_msg);
   else sendform.submit();
}
}
</script>
<!-- ############ ‰Â«Ì… ﬂÊœ ’›Õ… «·≈—”«· ############ -->

<?
//«· Õﬁﬁ »—„ÃÌ« „‰ «œŒ«· Ã„Ì⁄ «·„ ÕÊ·«  «·«·“«„Ì…
}else if(!$v1 or !$v2 or !$v3 or !$v4){
$e_msg="Sorry ... you didn't fill all the Marked fields.<br><br><a href=\"javascript:history.go(-1)\">Back</a>";
// „ ≈œŒ«· ﬂ«›… «·„⁄·Ê„«  «·„ÿ·Ê»… »‰Ã«Õ
}else{

$header ="From: ".$v2."\nMessage-ID: <" . md5(uniqid(time())) . "@" . $SERVER_NAME . ">\nMIME-Version: 1.0\nContent-type: text/html; charset=windows-1256\nContent-transfer-encoding: 8bit\nDate: " . date("r", time()) . "\nX-Priority: 3\nX-MSMail-Priority: Normal\nX-Mailer: PHP\n";
$msg = "
<html dir=\"ltr\">
<head>
<style>
<!--
body,td {
        font-family: tahoma;
        font-size: 10pt;
}
-->
</style>
</head>
<table border=\"1\" style=\"border-collapse: collapse\" cellpadding=\"4\">
<tr><td bgcolor=\"#F9F9F9\">Name :</td><td bgcolor=\"#F9F9F9\">".nl2br($v1)."</td></tr>
<tr><td>E-mail :</td><td>".nl2br($v2)."</td></tr>
<tr><td bgcolor=\"#F9F9F9\">Contact info. :</td><td bgcolor=\"#F9F9F9\">".nl2br($v3)."</td></tr>
<tr><td>Your message :</td><td>".nl2br($v4)."</td></tr>
<tr><td bgcolor=\"#F9F9F9\">IP :</td><td bgcolor=\"#F9F9F9\">".$REMOTE_ADDR."</td></tr>
</table>
";
mail($siteemail,$email_title,$msg,$header);
header("Location:".$PHP_SELF."?send=Done");
}
}
if($_GET['send']=="Done" or $code){
		?>
<html dir="ltr">
<head>
<meta http-equiv="Content-Language" content="ar-sy">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256">
<title><? echo $sitename ?></title>
<style>
<!--
a, a.visited, a.hover, a.active {
        font-family: MS Sans Serif;
        text-decoration: none;
}

body,td {
        font-family: tahoma;
        font-size: 10pt;
}

-->
</style>
</head>
<body bgcolor="#696B6D" text="#7B0002">
<!-- ############ »œ¡ ﬂÊœ ’›Õ… «·‰ ÌÃ… ############ -->

                                <br><br>
                                </b>
                                </p>
                                <center><b><? echo nl2br($e_msg)?></b></center>
                                <b>
                                <br><br>

<!-- ############ ‰Â«Ì… ﬂÊœ ’›Õ… «·‰ ÌÃ… ############ -->
</b>
</font>
</body></html>
<? } ?>