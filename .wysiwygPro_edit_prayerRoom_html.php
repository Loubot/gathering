<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "DN3Xcgn3H8_ZEZAFVZ6sXMOODazu9rLRzdtmyvtrhcw1z28w93D4sC30BkBCh_nEJkOlaX5WRR4evJH58ZWpG6KViPhklLef4EWG21mY89GFFXripDsx0WqNw39836DRCo_wvUp2bQ6jfhyiTGPgIbvKCWC4VVfwlNRvlrt9syMUYFFVTjCt4L1SRN8L94A4BKNVTBYTd2uD7WyYcGGDvATriiuhRUip1YbbFqdlwwx3rTXFY2ASSXgAQxFEOERS") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing prayerRoom.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">body {background-color:threedface; border: 0px 0px; padding: 0px 0px; margin: 0px 0px}</style>
</head>
<body>
<div align="center">
<script language="javascript">
<!--//
// this function updates the code in the textarea and then closes this window
function do_save() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name=mform action="http://www.gathering.ie:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html"><input type="hidden" name="file" value="prayerRoom.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.gathering.ie:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html"><input type="hidden" name="file" value="prayerRoom.html">Aborting Edit&nbsp;....</form></html>');
	document.close();
	document.mform.submit();
}
//-->
</script>
<?php
// make sure these includes point correctly:
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/config.php');
include_once ('/usr/local/cpanel/base/3rdparty/WysiwygPro/editor_files/editor_class.php');

// create a new instance of the wysiwygPro class:
$editor = new wysiwygPro();

// add a custom save button:
$editor->addbutton('Save', 'before:print', 'do_save();', WP_WEB_DIRECTORY.'images/save.gif', 22, 22, 'undo');

// add a custom cancel button:
$editor->addbutton('Cancel', 'before:print', 'do_abort();', WP_WEB_DIRECTORY.'images/cancel.gif', 22, 22, 'undo');

$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>










  
  
  
  
  
  
  
  
  
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />







  

  

  


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <title>Gathering - Welcome to the Prayer Room</title>
  <style type="text/css">
<!--
body {
	background-image: url();
	background-repeat: no-repeat;
	background-color: #99CCCC;
}
#Layer1 {
	position:absolute;
	left:149px;
	top:63px;
	width:638px;
	height:206px;
	z-index:1;
}
#Layer2 {
	position:absolute;
	left:87px;
	top:296px;
	width:753px;
	height:166px;
	z-index:2;
}
#Layer3 {
	position:absolute;
	left:93px;
	top:275px;
	width:745px;
	height:89px;
	z-index:3;
}
#Layer4 {
	position:absolute;
	left:147px;
	top:394px;
	width:643px;
	height:38px;
	z-index:4;
}
#Layer5 {
	position:absolute;
	left:51px;
	top:25px;
	width:787px;
	height:403px;
	z-index:1;
}
#Layer6 {
	position:absolute;
	left:8px;
	top:7px;
	width:728px;
	height:468px;
	z-index:1;
}
#Layer7 {
	position:absolute;
	left:250px;
	top:118px;
	width:462px;
	height:128px;
	z-index:1;
}
#Layer8 {
	position:absolute;
	left:263px;
	top:325px;
	width:430px;
	height:105px;
	z-index:1;
}
.style6 {	font-size: small;
	color: #006699;
}
a:link {
	color: #006699;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #006699;
}
a:hover {
	text-decoration: none;
	color: #0099CC;
}
a:active {
	text-decoration: none;
	color: #006699;
}
.style8 {font-size: medium}
.style9 {color: #0066FF}
.style10 {
	color: #666666;
	font-style: italic;
}
.style11 {
	color: #FFFFFF;
	font-style: italic;
}
-->
  </style>
  
  
  
  
  
  
  
  
  
  <script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
  </script>
  
  
  
  
  
  
  
  
  
  <script type="text/javascript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
  </script>
  
  
  
  
  
  
  
  
  
  <meta name="Keywords" content="Irish Church, Christian Churches, Christian communities, Celtic church, Celtic Spirituality, Celtic community, Indigenous Christian churches, Spirituality, prayer, meditation, Biblical Study and Teachings, Scared space, Galway, Ireland, west of Ireland, Free downloads, Christian music, songs. Irish Christian Music. St. Patrick, early Christian church in Ireland, Gathering" />










  
  
  
  
  
  
  
  
  
  <meta name="Description" content="Gathering is a spiritual resource....
\'We in the Gathering live in the west of Ireland. 
We are committed to support each other to live an authentic Christian life consistent with our Christian and Celtic heritage. " />
</head>


<body onload="MM_preloadImages(\'images/nav/yourCommentsOver.jpg\',\'images/navBar/prayerRoomOver.jpg\',\'images/navBar/studyRoomOver.jpg\',\'images/navBar/musicRoomOver.jpg\',\'images/navBar/aboutUsOver.jpg\',\'images/navBar/faqOver.jpg\',\'images/navBar/yourCommentsOver.jpg\',\'images/navBar/homeOver.jpg\',\'images/prayerRoom/presenceOver.gif\',\'images/prayerRoom/ourFatherOver.gif\',\'images/prayerRoom/wisdomOver.gif\',\'images/prayerRoom/healing2.gif\',\'images/prayerRoom/spirituallyOver.gif\',\'images/prayerRoom/cityOver.gif\',\'images/prayerRoom/healingOver.gif\',\'images/prayerRoom/hearanddoOver.gif\',\'images/prayerRoom/freshBlessingOver.gif\',\'images/prayerRoom/difficultOver.gif\',\'images/prayerRoom/stubornOver.gif\',\'images/prayerRoom/ingrainedOver.gif\',\'images/prayerRoom/obviousOver.gif\',\'images/prayerRoom/loveOver.gif\',\'images/prayerRoom/seeAndHearOver.gif\',\'images/prayerRoom/personalMeaningOver.gif\',\'images/prayerRoom/guidelinesPOver.gif\')">










<table align="center" cellspacing="0" width="924">










  <tbody>









    <tr>










    <td colspan="3" bgcolor="#336699">
      
      
      
      
      
      
      
      
      
      <table border="0" cellpadding="0" cellspacing="0">










      <tbody>









          <tr bgcolor="#6699ff">










        <td bgcolor="#6699ff"><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'rightCorner\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'rightCorner\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="rightCorner.jpg" alt="" name="rightCorner" id="rightCorner" onload="" border="0" height="65" width="33" /></a></td>










        <td bgcolor="#6699ff"><a href="index.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'home\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'home\',\'images/navBar/homeOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img name="home" src="home.jpg" alt="" onload="" border="0" /></a></td>










        <td bgcolor="#6699ff"><a href="prayerRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'prayerRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'prayerRoom\',\'images/navBar/prayerRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="prayerRoom.jpg" alt="" name="prayerRoom" id="prayerRoom" onload="" border="0" height="65" width="132" /></a></td>










        <td bgcolor="#6699ff"><a href="studyRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'studyRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'studyRoom\',\'images/navBar/studyRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="studyRoom.jpg" alt="" name="studyRoom" id="studyRoom" onload="" border="0" height="65" width="120" /></a></td>










        <td bgcolor="#6699ff"><a href="musicRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'musicRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'musicRoom\',\'images/navBar/musicRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="musicRoom.jpg" alt="" name="musicRoom" id="musicRoom" onload="" border="0" height="65" width="123" /></a></td>










        <td bgcolor="#6699ff"><a href="aboutUs.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'aboutUs\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'aboutUs\',\'images/navBar/aboutUsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="aboutUs.jpg" alt="" name="aboutUs" id="aboutUs" onload="" border="0" height="65" width="110" /></a></td>










        <td bgcolor="#6699ff"><a href="faq.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'faq\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'faq\',\'images/navBar/faqOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="faq.jpg" alt="" name="faq" id="faq" onload="" border="0" height="65" width="67" /></a></td>










        <td bgcolor="#6699ff"><a href="yourComments.html" target="_parent" class="style9" onclick="MM_nbGroup(\'down\',\'group1\',\'yourComments\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'yourComments\',\'images/navBar/yourCommentsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="yourComments.jpg" alt="" name="yourComments" id="yourComments" onload="" border="0" height="65" width="161" /></a></td>










        <td><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'leftSide\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'leftSide\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="leftSide.jpg" alt="" name="leftSide" id="leftSide" onload="" border="0" height="65" width="35" /></a></td>










      </tr>










    
        
        
        
        
        
        
        
        
        
        </tbody>
      
      
      
      
      
      
      
      
      
      </table>









    </td>










  </tr>










  <tr>










    <td background="pagesRight.jpg" bgcolor="#ffffff" valign="top" width="228">
      
      
      
      
      
      
      
      
      
      <div align="center">
      
      
      
      
      
      
      
      
      
      
      <p>&nbsp;</p>










      
      
      
      
      
      
      
      
      
      
      <p>&nbsp;</p>










      
      
      
      
      
      
      
      
      
      
      <p>&nbsp;</p>










      
      
      
      
      
      
      
      
      
      
      <p>&nbsp;</p>










      
      
      
      
      
      
      
      
      
      
      <p>&nbsp;</p>










      
      
      
      
      
      
      
      
      
      
      <p>&nbsp;</p>










      
      
      
      
      
      
      
      
      
      
      <p class="style11"><a href="yourComments.html" target="_parent"><em>Please enter your <br />










Prayer Requests<br />










and comments </em></a><a href="yourComments.html"><em>here... </em></a></p>










    </div>









      </td>










    <td align="center" bgcolor="#ffffff" nowrap="nowrap" valign="top" width="478">
      
      
      
      
      
      
      
      
      
      <p>&nbsp;</p>










      
      
      
      
      
      
      
      
      
      
      <table align="center" border="0" cellpadding="10" cellspacing="0" width="80">










      <tbody>









          <tr>










        <td width="356">
            
            
            
            
            
            
            
            
            
            <div align="center"><img src="prayerRoomTitle.gif" height="41" width="356" /></div>









            </td>










      </tr>










      <tr>










        <td>
            
            
            
            
            
            
            
            
            
            <div align="center"><span class="style10">read slowly, pause often <br />










            and listen for the whispered wind words<br />









            </span>_______________</div>









            </td>










      </tr>










      <tr>










        <td>
            
            
            
            
            
            
            
            
            
            <div align="center">
          
            
            
            
            
            
            
            
            
            
            <p><img src="prayerTheme.gif" height="36" width="318" /><span class="style10"><br />









            </span></p>










          </div>









            </td>










      </tr>






          <tr>






            <td>
            
            
            
            <span style="color: rgb(0, 153, 204);">1 - Guidelines on how to&nbsp;pray<a href="faq.html" target="_parent"><br />






                </a></span><br />

            <span style="color: rgb(0, 153, 204);">2 - A Prayer to choice God\'s presence <br />

&nbsp; &nbsp; &nbsp; as the most important thing in my life<br />






                </span><br />

            <span style="color: rgb(0, 153, 204);">3 - A Prayer to find pesonal meaning<br />

&nbsp; &nbsp; &nbsp; and direction<br />






                </span><br />

            <span style="color: rgb(0, 153, 204);">4 - A Prayer to see and hear you more<br />

&nbsp; &nbsp; &nbsp; clearly<br />






                &nbsp;</span><br />

            <span style="color: rgb(0, 153, 204);">5 - A Prayer of pesonal response to&nbsp;<br />

&nbsp; &nbsp; &nbsp; your love for me<br />


                </span><br />

            <span style="color: rgb(0, 153, 204);">6 - A Prayer for forgivenss fo my <br />

&nbsp; &nbsp; &nbsp;obvious sin</span><br />





                <span style="color: rgb(0, 153, 204);">
                </span><br />

            <span style="color: rgb(0, 153, 204);">7 - A Prayer for forgiveness for my<br />

&nbsp; &nbsp; &nbsp; ingrained sin <br />






                </span><br />

            <span style="color: rgb(0, 153, 204);">8 - A Prayer to change my stubborn heart<br />






                </span>
              <br />

            <span style="color: rgb(0, 153, 204);">9 - A Prayer for right attitude in thing<br />

&nbsp; &nbsp; &nbsp; challenging situation<br />






                </span><br />

            <span style="color: rgb(0, 153, 204);">10 - A Prayer for fresh blessing<br />





                </span><br />

            <span style="color: rgb(0, 153, 204);">11 - APrayer to both hear and do your will<br />



                <br />




                </span><span style="color: rgb(0, 153, 204);"></span><span style="color: rgb(0, 153, 204);">12 - A Prayer in my desperate situation</span><br />

            <span style="color: rgb(0, 153, 204);">&nbsp; &nbsp; &nbsp; &nbsp; -Financial, Health, Emotional need<br />

            </span><br />

            <span style="color: rgb(0, 153, 204);">13 - A Prayer to face life\'s challenges <br />

&nbsp; &nbsp; &nbsp; &nbsp; and grow spiritually<br />




                </span><br />

            <span style="color: rgb(0, 153, 204);">14 - A Prayer for healing<br />




                </span><br />

            <span style="color: rgb(0, 153, 204);">15 - Praying the Our Father <br />





                </span><br />

            <span style="color: rgb(0, 153, 204);"><br />

            </span><span style="color: rgb(0, 153, 204);"></span>



            </td>






          </tr>










      



      



      



      



      



      



      



      



      



      



      



      



      



      



      



      



      



    
        
        
        
        
        
        
        
        
        
        </tbody>
      
      
      
      
      
      
      
      
      
      </table>









      </td>










    <td align="left" background="pagesLeft.jpg" bgcolor="#ffffff" width="210">
      
      
      
      
      
      
      
      
      
      <div align="right"></div>









      </td>










  </tr>










  <tr>










    <td colspan="3">&nbsp;</td>










  </tr>










  
  
  
  
  
  
  
  
  
  </tbody>
</table>










</body>
</html>
';

$editor->set_code($body);

// add a spacer:
$editor->addspacer('', 'after:cancel');

// print the editor to the browser:
$editor->print_editor('100%',450);

?>
</div>
</body>
</html>
<?php ob_end_flush() ?>
