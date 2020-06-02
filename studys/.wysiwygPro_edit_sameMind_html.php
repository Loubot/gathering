<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "VI0KofxkmlfRt2ZsNvCvUO9AvOPADTL4IkKro0JlWWSKszTd9EYXhA_b_88ZgyJJYID2X874aGoKyGwEKiqiZSzJAgOph4keOjjcIpyucKiBhicixgh4yXmWFFlbL6jsQqcmybdKcBIdWiA__EUA8vNXPnApphjrrAbyO1CWXiL_MJgOexe_6XH6PBqzgcSEfujij_stNN0l0SVx65VyU6kI2D3FOFIxTEilTZlFaalPGORDdbZgSc11L9h1rQia") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing sameMind.html</title>
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
	document.write('<html><form METHOD="POST" name=mform action="http://www.gathering.ie:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="sameMind.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.gathering.ie:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="sameMind.html">Aborting Edit&nbsp;....</form></html>');
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

      
      
      <p style="text-align: left;"><strong>Be of the same mind as Christ&hellip;</strong><br />
Paul is man of the prisons. He spent time in prison and in a number of
different prisons. In the first prison he sang and praised God seeing
the prison doors open, his jailer converted to Paul\'s way, and the town
officials bend to his will. <em>(See Act. 16)</em>
Clearly, all you have to do when you are in prison is praise God to
escape and all will be well. But before we are allowed to be comforted
by this suggestion, Paul ends up in prison again. And because he is the
great apostle that he is, he doesn\'t think to reduce God to some
-cause-and-effect -idol-God, he allows the Lord to speak to him of
things other than escape. </p>
      <p style="text-align: left;">In Paul\'s letter to the Philippians,
you can see what has been squeezed out of Paul in the vice of prison.
He calls on all of us to be of the same mind. In fact calling on us to
be of the same mind as Christ - "<em>not viewing equality with God as
something to be exploited. Rather Jesus took the path of the cross and
humiliation: humiliation that goes with doing not your own will but the
will of someone else - the will of the Father</em>." Paul, under the
pressure of imprisonment, sees humility as apart of the journey to
Jerusalem. This journey to the Jerusalem was also pilgrimage to the New
Jerusalem, a journey through death of his will for a life following
God\'s will. Paul calls on us to be of the same mind.</p>
      <p style="text-align: left;">This road to imprisonment is for
Paul a prophetic road - a road that he is told lies ahead of him. It is
a road that he is warned of by his close associates, but having looked
his future in the eye he is determine to walk into it. The reason why
Paul is prepared and determined to follow this course is clear - he has
been told 2 things: firstly, that imprisonment lies ahead of him and
secondly that Jesus will be with him in it. <em>(see Act. 21,23)</em></p>
      <p style="text-align: left;">He wants us all to be of the same
mind. He wants us all to choice the path that leads to humility knowing
that those who are humble will be exalted. But Paul is of this mind not
as one might believe in philosophy as a formula that says - if you are
humble you will be exalted, rather that, the way of Christ was one of
death and resurrection. If we are led by the same Spirit as Jesus and
are of the same mind as Jesus, then we will be prepared to look into
our personal prison and say \'yes\'. We are called to say \'yes\' knowing
little more than this is the way for us to go and also, and critically,
that Jesus will be there with us. Therefore we will be exalted from our
prison into the presence of God, because he will be there with us. </p>
      <p style="text-align: left;">Paul has this insight which he wants
to write about from his prison cell to those on the outside. He wants
all of us, who are now on the outside, to be of the same mind - a mind
that will view our personal prisons as places where God maybe leading
us into and where he wants us to be of the mind that understands
God&rsquo;s presence to be sufficient. To be of this mind is to see
ourselves as part of a God-drama where this world-view is not
sufficient and where the divine-view (the view of Christ: being of the
same mind as Christ) gives the true perspective. A view, that is from
the throne and a view that is clear because it has been enlightened by
the light of the one who has entered this world as - the light of the
world.</p>
      <p style="text-align: left;">Paul would have us have this
liberating perspective on life here: a beyond the cosmic perspective
that sees our small prison cells as part of a beyond-the-cosmos drama. </p>
      <p style="text-align: left;">This is no airy-fairy perspective.
It is the very real perspective that sees release from jail and the
cheating of death as a reality. It is a view that sees the gospel
message not curtailed by its chief advocate being silenced in prison.
It is a view that sees the reality of Paul\'s mission being extended
into another sphere of society through his imprisonment. Paul is living
victoriously and in the freedom that comes with doing the will of God.
This he wants us all to realise was brought about by being of the same
mind as Christ, who didn\'t exploit his rights, but humbled himself
under the will of the Father. Paul wants us all to be lead by the
spirit into our own personal prisons and see the presence of God there
lifting us all, thus proving that as we follow his plan we will see
what he has planned is for our good and not for our harm.</p>
      <ul style="font-family: Faerie;">
        <li><a href="../prayerRoomfs/challenge.html" target="_parent">Prayer to have the right attitude in difficult personal situations.</a></li>
      </ul>

      
      <ul style="font-family: Faerie;">
        <li><a href="../prayerRoomfs/spiritul.html" target="_parent">Prayer to be empowered to take on the challenges of life with a view to grow spiritually in them.</a></li>
      </ul>
      <p><a href="../studyRoom.html" target="_parent" onmouseover="MM_swapImage(\'back\',\'\',\'../images/prayerRoom/backOver.gif\',1)" onmouseout="MM_swapImgRestore()"><img src="../images/prayerRoom/back.gif" alt="backToList" name="back" id="back" border="0" height="17" width="87" /></a></p>

      
      <p class="style11">&nbsp;</p>
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
