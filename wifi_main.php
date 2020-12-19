<?php
include "lib/connect_db.php";
include "configs.php";

$mac = trim($_GET["mac"]);

$sql = "SELECT mac FROM user_mac_status WHERE mac = '$mac' ";
$result = $conn->query($sql);
if ($result->num_rows === 1) 
{
    header("Location:$MKGateway/login");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="th">
  <head>
    <title>MagicShine Hotspot (Thaphra)</title>

    <!-- META -->
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" /> 
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen,projection" href="css/master_wireless_att.css" />
    <style type="text/css" media="all">.searchNav2 ul {float:left;padding:4px 3px 4px 480px;list-style-type:none;}.searchNav2 ul li{float:left;}.searchNav2 ul li a{padding:0 10px;border-right:1px solid #cccccc;}.searchNav2 ul li.last a{padding:0 0 0 10px;border:0;}.searchNav2 ul li img{padding-right:5px;}.fewest{padding:15px 0px 15px 0px;}.box1{font-size:11px; padding:40px 10px 5px 10px;}.box2{font-size:11px; padding:3px 10px 0px 10px;}.box3{font-size:11px; padding:55px 10px 0px 30px;}.btn{padding:32px 10px 0px 50px;}.logo{ padding-left:0px; float:left;}
    </style>
  </head>
  <body>
    <!-- global nav -->
    <div id="page">
      <div id="header" style="padding-bottom:5px;"> <b> Welcome to MagicShineWiFi </b></div>
    </div>
    <div id="container">
      <div id="page" align="right"><br>
	  
	 
	  
	   
	   
	   <!-- global nav end-->
       <!-- body -->
<div id="content">
          <div class="mod_h">
            <div align="left" class="fewest">&nbsp; &nbsp; <img src="images/ms_logo.gif" border="0" alt="MagicShine WiFi"   align="absmiddle"  >
              <img src="images/selection_title.gif"   height="40"   align="absmiddle"  /><img src="images/btn_box_arrow_left.gif" border="0" alt="Login"   align="absmiddle"   />  
			  <a href="<?php echo $MKGateway;?>/login">LOGIN</a></div>

 <div align="left">
<table width="100%" cellspacing="0" cellpadding="0" border="0"  >
<tr>
  <td  width="471" ><img src="images/hilight.jpg" align="absbottom" alt="hi-speed intenet" border="0" hspace="0"  vspace="0" />
  </td>
	<td align="center" valign="top">
	<p><h1><b>Package Internet </b></h1>  
	
	<div style="padding:2px 3px 4px 20px" align="left">
     
 <img src="images/icon_3.jpg" > <font color="purple" size="-1" style="font-weight:bold">Silver Package</font> 25 บาท / 1 ชั่วโมง (ภายใน 1 เดือน, ใช้ได้ 1 เครื่อง)	<br>
 <img src="images/icon_3.jpg" > <font color="#33CCFF" size="-1" style="font-weight:bold">Ruby Package</font> 100 บาท / 1 วัน (ไม่จำกัดชั่วโมง, ใช้ได้ 1 เครื่อง) <br>
  <img src="images/icon_3.jpg" > <font color="red" size="-1" style="font-weight:bold">Platinum Package</font> 200 บาท / 12 ชั่วโมง (ภายใน 3 เดือน, ใช้ได้ 1 เครื่อง) <br>   
   <img src="images/icon_3.jpg" > <font color="blue" size="-1" style="font-weight:bold">Crystal Package</font> 300 บาท / 7 วัน (ไม่จำกัดชั่วโมง, ใช้ได้ 2 เครื่อง) <br>   
 <img src="images/icon_3.jpg" > <font color="#669900" size="-1" style="font-weight:bold">Gold Package</font> 700 บาท / 1 เดือน (ไม่จำกัดชั่วโมง, ใช้ได้ 3 เครื่อง) <br>
 <img src="images/icon_3.jpg" > <font color="#FF6600" size="-1" style="font-weight:bold">Diamond Package</font> ซื้อ <font color="#669900">Gold Package</font> 2 อัน ในราคาพิเศษ 1,200 บาท<br />
(Diamond 1 ซอง มี Gold Package 2 อัน) <br>
<img src="images/icon_3.jpg" > <font color="#660000" size="-1" style="font-weight:bold">Titanium Package</font> 3,000 บาท / 6 เดือน (ไม่จำกัดชั่วโมง, ใช้ได้ 5 เครื่อง)  <br>

            
</p>
 	 <div style="font-size:12px; height:15px;">ติดต่อซื้อรหัสผ่านได้ที่ สำนักงานนิติบุคคลอาคาร <b>Life @ Thaphra</b> </div>
		 <div style="font-size:12px; height:15px;"></div>
		 <div style="color:#663399; font-weight:300; height:20px; ">สอบถามสถานที่จำหน่ายบัตร Tel. 086-328-2378 (นิติบุคคลอาคาร)</div>
                 <!--div style="color:#663399; font-size:12px;  height:20px; ">ต้องการซื้อผ่านทาง SMS ติดต่อ 081-349-7774 (กมล)</div-->


 		
	  <div  style="color:#000000; padding:2px 0px 0px 5px;" >

	  </div>



 <div >

 <!--br>ตรวจสอบความเร็ว Internet : <a href="http://192.168.43.191/speedtest">Speed Test</a-->
 </div>
 
      </div>
      <span style="font-weight:bold; position:relative; top:20px; left:-25px; color:red;" >Buy Passcode Online (Coming soon...)</span>
      <div align="right" style="padding:0px 20px 0px 20px">		
		<a title="We accept Online Payment."  STYLE='text-decoration:none'  href="#">
		
		
		<img src="images/paypal/visa.gif"   />
		<img src="images/paypal/master.gif"   />
        <img src="images/paypal/jcb.gif"   />
		<img src="images/paypal/amex.gif"   />
		</a>
		</div>


	  
	 </td>
</tr>


</table>

</div>
            
          </div> 
        </div>
      </div>
      <div id="btmContainer">
      </div>
    </div>
    <!-- body end-->
    <p>      <div id="legalFtr">        </p>
     
	 
        
	 
        <p >  
        <div style="font-size:11px">หอพัก หรือ คอนโด ที่สนใจติดตั้งระบบ WiFi สามารถติดต่อได้ที่ หมายเลข  081-349-7774 </div>   
        </p>
    <div>
      <p>
        &#169;2008 MagicShine Network Corporation Limited <br />
      </p>
    </div>
    </div>

</body>
</html>