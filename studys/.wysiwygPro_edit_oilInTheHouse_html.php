<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "MMmDPYkloI9Qq5YHjwEdJE7gpQ8rg7OKKjFjy8qyH2Sgrhv3b6cewmIplJcwezdIOdXFxUsyqb0tF0MJs_iouGrjFoOEZFAMcG0d42dkfDjChmKF9QopWRTT_XRfu3t_PjYhxcjXStE1CF2kxTjH5a2IROEzDSG05xp3upc0EsvyuKvu8JjRpKA3u_L3ZKM49RrZdNPXGsKsPhVXNYRsRSn0JNdJO41JkwONziSOTM_bJSzoEYQV7wUhvzFd7ndI") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing oilInTheHouse.html</title>
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
	document.write('<html><form METHOD="POST" name=mform action="http://www.gathering.ie:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="oilInTheHouse.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.gathering.ie:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="oilInTheHouse.html">Aborting Edit&nbsp;....</form></html>');
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
<table width="899" align="center" cellspacing="0">
  <tr>
    <td colspan="5" bgcolor="#336699"><table border="0" cellpadding="0" cellspacing="0">
      <tr bgcolor="#6699FF">
        <td bgcolor="#6699FF"><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'rightCorner\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'rightCorner\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/rightCorner.jpg" alt="" name="rightCorner" width="33" height="65" border="0" id="rightCorner" onload="" /></a></td>
        <td bgcolor="#6699FF"><a href="javascript:;" target="_top" onClick="MM_nbGroup(\'down\',\'group1\',\'home\',\'\',1)" onMouseOver="MM_nbGroup(\'over\',\'home\',\'../images/navBar/homeOver.jpg\',\'\',1)" onMouseOut="MM_nbGroup(\'out\')"><img name="home" src="../images/navBar/home.jpg" border="0" alt="" onLoad="" /></a></td>
        <td bgcolor="#6699FF"><a href="../prayerRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'prayerRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'prayerRoom\',\'../images/navBar/prayerRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/prayerRoom.jpg" alt="" name="prayerRoom" width="132" height="65" border="0" id="prayerRoom" onload="" /></a></td>
        <td bgcolor="#6699FF"><a href="../studyRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'studyRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'studyRoom\',\'../images/navBar/studyRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/studyRoom.jpg" alt="" name="studyRoom" width="120" height="65" border="0" id="studyRoom" onload="" /></a></td>
        <td bgcolor="#6699FF"><a href="../musicRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'musicRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'musicRoom\',\'../images/navBar/musicRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/musicRoom.jpg" alt="" name="musicRoom" width="123" height="65" border="0" id="musicRoom" onload="" /></a></td>
        <td bgcolor="#6699FF"><a href="../aboutUs.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'aboutUs\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'aboutUs\',\'../images/navBar/aboutUsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/aboutUs.jpg" alt="" name="aboutUs" width="110" height="65" border="0" id="aboutUs" onload="" /></a></td>
        <td bgcolor="#6699FF"><a href="../faq.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'faq\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'faq\',\'../images/navBar/faqOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/faq.jpg" alt="" name="faq" width="67" height="65" border="0" id="faq" onload="" /></a></td>
        <td bgcolor="#6699FF"><a href="../yourComments.html" target="_parent" class="style9" onclick="MM_nbGroup(\'down\',\'group1\',\'yourComments\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'yourComments\',\'../images/navBar/yourCommentsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/yourComments.jpg" alt="" name="yourComments" width="161" height="65" border="0" id="yourComments" onload="" /></a></td>
        <td><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'leftSide\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'leftSide\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="../images/navBar/leftSide.jpg" alt="" name="leftSide" width="35" height="65" border="0" id="leftSide" onload="" /></a></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td width="227" valign="top" bgcolor="#B5E1BF"><img src="../images/pagesRight.jpg" width="226" height="1171" /></td>
    <td width="20" align="center" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p class="style10">&nbsp;</p></td>
    <td width="437" align="center" valign="top" bgcolor="#FFFFFF"><p>&nbsp;</p>
      <p><img src="../images/studyRoomTitle.gif" width="336" height="42" /></p>
      <p><strong>God uses what little we have &ndash; Holy Spirit, family and Community, and blesses us in times of crisis&hellip; </strong><br />
        There was a story told of a prophet whose identity has not been shared with us. The teller of the story didn\'t think it important to tell us his name. How he is identified is as the dead prophet of a widow. And just in case the reader might jump to the wrong conclusion and think this man was of poor reputation we are told that he was a good man. After his death his widow comes to the head of the band of prophets to let the headman know of the death of the one of his prophets and that this good dead prophet had left his wife and children indebted to another. The response of the headman prophet was not what you would expect. <em>(See 2Kings 4)</em></p>
      <p>Imagine a more contemporary scene: a manager of a small to medium sized company has one of his partners\' die on the job. His widow comes to the manager and tells him that his faithful partner has died and left her and his children penniless. The response I would have expected from a good manager would be empathy and a trust fund for the kids. </p>
      <p>What this widow gets is a question: &quot;What do you want me to do about it?&quot; </p>
      <p>Surprise, surprise; God doesn\'t give the answer we want or expect, maybe that is because his ways are not quite the same as ours. That in turn might come from the obvious fact that he is God and we are not. Yet this answer that our widow of this story gets is not what we find readily acceptable. We want a particular type of miraculous solution - a solution we may have come to expect from all the miracles that went before and will come after this story.</p>
      <p>It is not God\'s way to always give us the answers we expect and certainly not always in the way that he expect them. In fact, it is often his way to gives us questions instead of the answers we want. Remember the manna story: in the desert part of the pilgrim journey God feeds his people on manna. (Manna translates &quot;what is this?&quot; a question.) God often feeds us on questions not answers when we are in our metaphorical desert. </p>
      <p>Can God act alone and do things, fix things?&nbsp; - Yes. Does God want to act alone and do things and fix things? - No. the graciousness of god i.e. his love for us requires him to share his doings and fixings with us. Therefore the question - &quot;what do you want me to do for you?&rdquo;Let us decide on want needs to be done together&quot;. &quot;What do you have in your house?&quot; &quot;Let\'s use what you have that I have already given you.&quot;&nbsp; </p>
      <p>When all is lost, we look to God to dig us out of the hole. That is what we should do: look to God. What God often what us to do first when we are in this hole - is to stop digging, stop telling him how bad and hopeless everything is, and be with the questions he has placed in us. In the case of this widow it was - &lsquo;what have you got in your house?&rsquo; </p>
      <p>In this story she had a little oil. That is what God uses to dig her out. Oil is hugely symbolic. It speaks of the Holy Spirit and was used at the time in the temple rituals. It was also used as the fuel to bring light into the darkness. All you good bible students would have known all that. But did you over look those other things had she had and was to use? She was to borrow contains from all the neighbours and not just a few and fill them and leave them aside. When she had filled all the containers she borrowed she was to sell the oil, clear her debts and live on the residue. What else did she have? Not containers for she had to borrow them. What then did she have? - Neighbours. Relationships. &nbsp;Community. Why should this symbolism be so easily missed by most of us? If the oil points to The Holy Spirit, surely, family, community and neighbours point to the Trinity: the triune God of the Father, Son and Holy Spirit living in community.</p>
      <p>&nbsp;&nbsp;</p>
      <p align="center"><a href="../studyRoom.html" target="_parent" onmouseover="MM_swapImage(\'back\',\'\',\'../images/prayerRoom/backOver.gif\',1)" onmouseout="MM_swapImgRestore()"><img src="../images/prayerRoom/back.gif" alt="backToList" name="back" width="87" height="17" border="0" id="back" /></a></p>
      <p class="style11">&nbsp;</p></td>
    <td width="18" align="center" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="209" align="right" valign="top" bgcolor="#B5E1BF"><img src="../images/pagesLeft.jpg" width="208" height="1171" />j</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#CFEED9">&nbsp;</td>
  </tr>
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
