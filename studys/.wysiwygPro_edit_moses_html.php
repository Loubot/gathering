<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "Uz2mVGPvn2YQsMXh_yFsZFlXB3AyahatP0yE2EDhBDW6RBsIa50UbA5yDW7GlDp1mpQJiA4bG2DNFQZozwoeEa2sNPC_0iWlDaMRatTqjjddUCC8QHtfFGu94OcovUO45HU3st6C8BegQo_capnZ3Cy_HQq3QRD483vnFhrKoP9hsSjLWc3MhpVbkFDmnabfOdl_2cy4tUmadJ0dUlT4N4auyUb9AyLJoWLtcimtxVsW0Pclvm6e4LiQrcxbaMg6") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing moses.html</title>
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
	document.write('<html><form METHOD="POST" name=mform action="http://www.gathering.ie:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="moses.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.gathering.ie:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="moses.html">Aborting Edit&nbsp;....</form></html>');
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


  <title>Gathering</title>
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
.style9 {color: #0066FF}
.style10 {color: #006699}
.style11 {color: #006699; font-style: italic; }
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
  <link href="../css/gathering.css" rel="stylesheet" type="text/css" />
</head>


<body onload="MM_preloadImages(\'../images/nav/yourCommentsOver.jpg\',\'../images/navBar/prayerRoomOver.jpg\',\'../images/navBar/studyRoomOver.jpg\',\'../images/navBar/musicRoomOver.jpg\',\'../images/navBar/aboutUsOver.jpg\',\'../images/navBar/faqOver.jpg\',\'../images/navBar/yourCommentsOver.jpg\',\'../images/navBar/homeOver.jpg\',\'../images/prayerRoom/backOver.gif\')">

<table align="center" cellspacing="0" width="899">

  <tbody>
    <tr>

    <td colspan="5" bgcolor="#336699">
      <table border="0" cellpadding="0" cellspacing="0">

      <tbody>
          <tr bgcolor="#6699ff">

        <td bgcolor="#6699ff"><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'rightCorner\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'rightCorner\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/rightCorner.jpg" alt="" name="rightCorner" id="rightCorner" onload="" border="0" height="65" width="33" /></a></td>

        <td bgcolor="#6699ff"><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'home\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'home\',\'../images/navBar/homeOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img name="home" src="../images/navBar/home.jpg" alt="" onload="" border="0" /></a></td>

        <td bgcolor="#6699ff"><a href="../prayerRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'prayerRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'prayerRoom\',\'../images/navBar/prayerRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/prayerRoom.jpg" alt="" name="prayerRoom" id="prayerRoom" onload="" border="0" height="65" width="132" /></a></td>

        <td bgcolor="#6699ff"><a href="../studyRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'studyRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'studyRoom\',\'../images/navBar/studyRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/studyRoom.jpg" alt="" name="studyRoom" id="studyRoom" onload="" border="0" height="65" width="120" /></a></td>

        <td bgcolor="#6699ff"><a href="../musicRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'musicRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'musicRoom\',\'../images/navBar/musicRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/musicRoom.jpg" alt="" name="musicRoom" id="musicRoom" onload="" border="0" height="65" width="123" /></a></td>

        <td bgcolor="#6699ff"><a href="../aboutUs.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'aboutUs\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'aboutUs\',\'../images/navBar/aboutUsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/aboutUs.jpg" alt="" name="aboutUs" id="aboutUs" onload="" border="0" height="65" width="110" /></a></td>

        <td bgcolor="#6699ff"><a href="../faq.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'faq\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'faq\',\'../images/navBar/faqOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/faq.jpg" alt="" name="faq" id="faq" onload="" border="0" height="65" width="67" /></a></td>

        <td bgcolor="#6699ff"><a href="../yourComments.html" target="_parent" class="style9" onclick="MM_nbGroup(\'down\',\'group1\',\'yourComments\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'yourComments\',\'../images/navBar/yourCommentsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/yourComments.jpg" alt="" name="yourComments" id="yourComments" onload="" border="0" height="65" width="161" /></a></td>

        <td><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'leftSide\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'leftSide\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/leftSide.jpg" alt="" name="leftSide" id="leftSide" onload="" border="0" height="65" width="35" /></a></td>

      </tr>

    
        </tbody>
      </table>
    </td>

  </tr>

  <tr>

    <td bgcolor="#b5e1bf" valign="top" width="227"><img src="../images/pagesRight.jpg" height="1171" width="226" /></td>

    <td align="center" bgcolor="#ffffff" valign="top" width="20">
      <p>&nbsp;</p>

      
      <p>&nbsp;</p>

      
      <p>&nbsp;</p>

    
      <p class="style10">&nbsp;</p>
      </td>

    <td align="center" bgcolor="#ffffff" valign="top" width="437">
      <p>&nbsp;</p>

      
      <p><img src="../images/studyRoomTitle.gif" height="42" width="336" /></p>

      
      <p style="text-align: left;"><strong>Moses came to his crossroads and chose&hellip;</strong><br />
Moses travelled on Manna on his pilgrim journey and arrived safely at
Mount Sinai. But Mount Sinai proved to be more a crossroads than a
Mount. After Mount Sinai everything changes for Moses and the people
following him. They were never to be the same again. The thing about
coming to a crossroads in our life is, - you will not be on the same
path leading out of the crossroads as you travelled on into the
crossroads.&nbsp; Of course in the literal you can argue that going
straight through the crossroads is to travel down the same road on
which you travelled into it on. That is true. But it is different for
the metaphorical crossroads. This crossroads is by definition only a
crossroads of crisis if the option of just continuing straight ahead is
not tenable. A metaphorical crossroads says - \'I can\'t keep doing what
I am doing, I have to stop and be with the crossroads for a time before
I decide where to go next.\' Just continuing on is not an option. If it
were, then you would not be experiencing a crossroads at all.
Crossroads are by defined a crisis: a crisis of not being able to
travel on in a straight line. This is what faced the Israelite at Mount
Sinai - Crossroads. </p>
      <p style="text-align: left;">Moses goes up the mountain to pray,
to receive instruction and to meet with God. While he is up there the
people fall back into the superficial religion of paganism: they
construct their own religious practise. This is a time of grave crisis
and disillusion for the people who up to this point were being lead by
Moses and through Moses, by God. Their expectations of the easy life
were not being realised as they expected. And they were looking back
fondly to their lives before they started out on this journey. They
were deciding to retrace their steps, to travel backwards, to retrace
their pilgrim journey steps back to their former lives. But God, who
never gives up on his people, speaks to their leader Moses. God tells
Moses that the people can have all they were promised: all that
abundant life can bring. They can have spiritual success, land, health
and wealth, but he will not go with them. The reason why god decides
not to travel on with them is because their ways are at cross-purposes.
God is travelling in the deep holy and they, the people, are travelling
back to the surface superficiality of their own construct of god. God\'s
way and the people\'s way are not compatible. This is a critical turning
point in the spiritual walk of the people of Israel. Moses changes the
nature of the relationship with God by agreeing to follow God\'s lead to
a deeper place. Moses had to say \'no\' to the superficial. He had to get
off the surface of things for the deep places. He has to say that
having a God as a provider of the surface reality only, is not the
nature of the relationship that he wants with God. Moses tells God that
unless he goes with them then he - Moses, doesn\'t want to leave the
desert. All is now changed through Moses taking this
stand.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </p>
      <p style="text-align: left;"><strong>Turning point</strong><br />
Here is a critical turning point in the relationship between God and
man. God has brought man to the point of choosing the presence of God
over everything else. </p>
      <p style="text-align: left;">God responds, by telling Moses that
he will go with him and that Moses will see great and miraculous things
as they travel together. But for Moses the greatest miracle of them all
is to be in the presence of God, first on the Holy mountain and then in
the valleys. The people will start their pilgrim journey again through
the mountain experiences of the awesome presence of God and then down
thought the valleys of the everyday, where again he\'ll be there but
here to wash the everyday dusk and muck of their feet<strong>. </strong></p>
      <p style="text-align: left;"><strong>The choice is yours</strong><br />
You can continue to walk on the surface of things. The issue is not
believing in God or not, the choice is a surface relationship with God
or a growing intimacy that is only found in depth experiences i.e. in
living at a deeper level of intimacy with God.</p>

      
      <p><strong><a href="../prayerRoomfs/intimacy.html" target="_parent">Guided prayer for greater intimacy with your God&hellip;</a></strong></p>

      
      <p><a href="../studyRoom.html" target="_parent" onmouseover="MM_swapImage(\'back\',\'\',\'../images/prayerRoom/backOver.gif\',1)" onmouseout="MM_swapImgRestore()"><img src="../images/prayerRoom/back.gif" alt="backToList" name="back" id="back" border="0" height="17" width="87" /></a>&nbsp;&nbsp;</p>

      
      <p>&nbsp;</p>
      </td>

    <td align="center" bgcolor="#ffffff" valign="top" width="18">&nbsp;</td>

    <td align="right" bgcolor="#b5e1bf" valign="top" width="209"><img src="../images/pagesLeft.jpg" height="1171" width="208" />j</td>

  </tr>

  <tr>

    <td colspan="5" bgcolor="#cfeed9">&nbsp;</td>

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
