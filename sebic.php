<?
/*******************************************
/* 
/* 
/* 
/*
/* بإمكانك تعديل كود الأتش تي إم إل
/* بنسخه إلى الفرونت بيج مثلا و تعديله كما تشاء
/* مع الإنتباه إلى عدم تغيير أسماء الحقول الداخلية
/*
/* 
/* 
/*
/* لا تنسونا من دعوة صالحة
/*
/* بإمكانك حذف ما سبق
/*
/*******************************************

/*  بإمكانك التعديل بالمعلومات التالية كما تشاء */

//إسم الموقع كما سيظهر في النموذج
$sitename = "ramada-almukalla.com";

//بريد الموقع الذي سترسل الرسالة إليه
$siteemail = "info@ramada-almukalla.com";

//عنوان الرسالة التي ستصل إلى بريد الموقع
$email_title="subscribe to Ramada resort list";

//رسالة النتيجة
$e_msg="You have been added to the list successfully";

//يرجى عدم التعديل بعد هذا السطر إلا إذا كنت تعلم ما تفعل

/*****************************************************/
if($_GET['send']!="Done"){
$code= $_POST['code'];
$v1= $_POST['v1'];
$v2= $_POST['v2'];

if(!$code){
?>
<html dir="ltr">
<head>
<meta http-equiv="Content-Language" content="ar-sy">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<body bgcolor="#696B6D">

<font color="#FFFFFF" face="Arial">

<b>

<!-- ############ بدء كود صفحة الإرسال ############ -->
<!-- -->
<!--  -->
<!-- بإمكانك حذف ما سبق -->
</b>
</font>
<form name="sendform" action="<? echo $PHP_SELF ?>" onsubmit="javascript:checkform()" method="post">
<font face="Arial" color="#FFFFFF">
<input type="hidden" name="code" value="send" style="font-weight: 700">
</font><b><font color="#FFFFFF" face="Arial">
<br>

</font></b>

<center>
<table border="0" width="80%" style="border-collapse: collapse">
        <tr>
                <td align="center"><b><font color="#FFFFFF" face="Arial">subscribe 
				and get our special offers</font></b></td>
        </tr>
</table>
</center>

                                <center>
                                <table id="tbody" border="1" style="border-collapse: collapse" bordercolor="#CACACA" cellpadding="4">

                                    <tr>
                                        <td ><b><font color="#FFFFFF" face="Arial">Name :
                                        </font>
                                        </b>
                                        </td>
                                        <td><font face="Arial" color="#FFFFFF">
										<input name="v1" style="border:1px solid #AAAAAA; padding:0; background-color: #FFFFFF; font-weight:700"><b>
										</b>
                                        </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td ><b><font color="#FFFFFF" face="Arial">E-mail* :
                                        </font>
                                        </b>
                                        </td>
                                        <td><font face="Arial" color="#FFFFFF">
										<input name="v2" style="border:1px solid #AAAAAA; padding:0; background-color: #FFFFFF; font-weight:700"><b>
										</b>
                                        </font>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" colspan="2">
                                                                                        <table border="0" cellpadding="3" style="border-collapse: collapse">
                                                                                                <tr>
                                                                                                        <td><font face="Arial" color="#FFFFFF"><input type="button" onclick="javascript:checkform();" value="SUBSCRIBE" style="border:1px solid #666666; padding:0; background-color: #D4D0C8; font-weight:700"></font></td>
                                                        </form>
                                                </tr>
                                                                                        </table>
                                            </td>
                                    </tr>
                                                                </table>
                                </center>
                                <b>
                                <font color="#FFFFFF" face="Arial">
                                <br></font>
</b>
<p><b><font color="#FFFFFF" face="Arial"><br>
                                <br>                                                </td>
        </tr>
</table>
<script>
function checkform(){
var error_msg='';
var second_error_msg='You didn\'t fill this fields rightly:\n';
var done='';
var emailfilter=/^\w+[\+\.\w-]*@([\w-]+\.)*\w+[\w-]*\.([a-z]{2,4}|\d+)$/i;
if(sendform.v2.value == '') error_msg=error_msg+'    - E-mail .\n';
if(sendform.v2.value !='') done=1;
else alert('Please fill this fields :\n'+error_msg);
if(done==1){
   var returnval2=emailfilter.test(sendform.v2.value);
     if(returnval2==false) second_error_msg = second_error_msg+'   - E-mail (You must write a correct Email) .\n';
   if(second_error_msg!='You didn\'t fill this fields rightly:\n') alert(second_error_msg);
   else sendform.submit();
}
}
</script>
<!-- ############ نهاية كود صفحة الإرسال ############ -->

<?
//التحقق برمجيا من ادخال جميع المتحولات الالزامية
}else if(!$v2){
$e_msg="Sorry ... you didn't fill all the Marked fields.<br><br><a href=\"javascript:history.go(-1)\">Back</a>";
//تم إدخال كافة المعلومات المطلوبة بنجاح
}else{

$header ="From: ".$v2."\nMessage-ID: <" . md5(uniqid(time())) . "@" . $SERVER_NAME . ">\nMIME-Version: 1.0\nContent-type: text/html; charset=utf-8\nContent-transfer-encoding: 8bit\nDate: " . date("r", time()) . "\nX-Priority: 3\nX-MSMail-Priority: Normal\nX-Mailer: PHP\n";
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
<tr><td>Name :</td><td>".nl2br($v1)."</td></tr>
<tr><td>E-mail :</td><td>".nl2br($v2)."</td></tr>
<tr><td>IP :</td><td>".$REMOTE_ADDR."</td></tr>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
<body bgcolor="#696B6D">
<!-- ############ بدء كود صفحة النتيجة ############ -->

                                <br><br>
                                </font></b></p>
                                <center><font color="#FFFFFF" face="Arial"><b><? echo nl2br($e_msg)?></b></font></center>
                                <b>
                                <font color="#FFFFFF" face="Arial">
                                <br><br>

<!-- ############ نهاية كود صفحة النتيجة ############ -->
</font>
</b>
</body></html>
<? } ?>