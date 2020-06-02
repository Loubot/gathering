<?php header("Content-type","text/html; charset=iso-8859-1"); ?>
<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "6Fgd6Em7zlV_wSDd8r0S0W0JqUuoGeqtQ63FXF7EuCCaHNZK0ns2NW3DZ1TAyKvoCPMwWttmsPOAdJcBqR2PSq3B9JEQfqo3ADYOQj5ty92rwVDicF2eLFvWecAsypI2NGVC5bKipcj2OTi3ZbbyOvkd0m3Ub5RfVeZRIyH_j6O9UULm9fGdw9uMRHK5LYPNITDl9WpaiuKPdeN00_8NBj8BQej2ty4cMi4gzM95zg9TdroYa1Xu9lqm3MCMTAOA") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing faq.html</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
	document.write('<html><form METHOD="POST" name=mform action="http://www.gathering.ie:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="udir" value="/home/gatherin/public_html"><input type="hidden" name="ufile" value="faq.html"><input type="hidden" name="dir" value="%2fhome%2fgatherin%2fpublic_html"><input type="hidden" name="file" value="faq.html"><input type="hidden" name="doubledecode" value="1">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.gathering.ie:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html"><input type="hidden" name="file" value="faq.html">Aborting Edit&nbsp;....</form></html>');
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



  



  
  
  
  
  
  
  
  <title>Gathering - Frequently Asked Questions</title>
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
//-->
  </script>
  
  
  
  
  <link href="css/gathering.css" rel="stylesheet" type="text/css" />





  
  
  
  
  <meta name="Keywords" content="Irish Church, Christian Churches, Christian communities, Celtic church, Celtic Spirituality, Celtic community, Indigenous Christian churches, Spirituality, prayer, meditation, Biblical Study and Teachings, Scared space, Galway, Ireland, west of Ireland, Free downloads, Christian music, songs. Irish Christian Music. St. Patrick, early Christian church in Ireland, Gathering" />





  
  
  
  
  <meta name="Description" content="Gathering is a spiritual resource....
\'We in the Gathering live in the west of Ireland. 
We are committed to support each other to live an authentic Christian life consistent with our Christian and Celtic heritage. " />
</head>


<body onload="MM_preloadImages(\'images/nav/yourCommentsOver.jpg\',\'images/navBar/prayerRoomOver.jpg\',\'images/navBar/studyRoomOver.jpg\',\'images/navBar/musicRoomOver.jpg\',\'images/navBar/aboutUsOver.jpg\',\'images/navBar/faqOver.jpg\',\'images/navBar/yourCommentsOver.jpg\',\'images/navBar/homeOver.jpg\')">





<table align="center" cellspacing="0" width="899">





  <tbody>




    <tr>





    <td colspan="5" bgcolor="#336699">
      
      
      
      
      <table border="0" cellpadding="0" cellspacing="0">





      <tbody>




          <tr bgcolor="#6699ff">





        <td bgcolor="#6699ff"><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'rightCorner\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'rightCorner\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/rightCorner.jpg" alt="" name="rightCorner" id="rightCorner" onload="" border="0" height="65" width="33" /></a></td>





        <td bgcolor="#6699ff"><a href="index.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'home\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'home\',\'images/navBar/homeOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img name="home" src="images/navBar/home.jpg" alt="" onload="" border="0" /></a></td>





        <td bgcolor="#6699ff"><a href="prayerRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'prayerRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'prayerRoom\',\'images/navBar/prayerRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/prayerRoom.jpg" alt="" name="prayerRoom" id="prayerRoom" onload="" border="0" height="65" width="132" /></a></td>





        <td bgcolor="#6699ff"><a href="studyRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'studyRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'studyRoom\',\'images/navBar/studyRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/studyRoom.jpg" alt="" name="studyRoom" id="studyRoom" onload="" border="0" height="65" width="120" /></a></td>





        <td bgcolor="#6699ff"><a href="musicRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'musicRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'musicRoom\',\'images/navBar/musicRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/musicRoom.jpg" alt="" name="musicRoom" id="musicRoom" onload="" border="0" height="65" width="123" /></a></td>





        <td bgcolor="#6699ff"><a href="aboutUs.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'aboutUs\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'aboutUs\',\'images/navBar/aboutUsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/aboutUs.jpg" alt="" name="aboutUs" id="aboutUs" onload="" border="0" height="65" width="110" /></a></td>





        <td bgcolor="#6699ff"><a href="faq.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'faq\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'faq\',\'images/navBar/faqOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/faq.jpg" alt="" name="faq" id="faq" onload="" border="0" height="65" width="67" /></a></td>





        <td bgcolor="#6699ff"><a href="yourComments.html" target="_parent" class="style9" onclick="MM_nbGroup(\'down\',\'group1\',\'yourComments\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'yourComments\',\'images/navBar/yourCommentsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/yourComments.jpg" alt="" name="yourComments" id="yourComments" onload="" border="0" height="65" width="161" /></a></td>





        <td><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'leftSide\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'leftSide\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="images/navBar/leftSide.jpg" alt="" name="leftSide" id="leftSide" onload="" border="0" height="65" width="35" /></a></td>





      </tr>





    
        
        
        
        
        </tbody>
      
      
      
      
      </table>




    </td>





  </tr>





  <tr>





    <td align="center" background="images/pagesRightFAQ.jpg" bgcolor="#b5e1bf" valign="top" width="227">
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p><a href="yourComments.html" target="_parent"><em><a href="yourComments.html" target="_blank">Please enter your<br />





        Questions, Prayers<br />





    and Comments here...</a> </em></a></p>




      </td>





    <td align="center" bgcolor="#ffffff" valign="top" width="20">
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p>&nbsp;</p>





      
      
      
      
      
      <p>&nbsp;</p>





    
      
      
      
      
      <p class="style10">&nbsp;</p>




      </td>





    <td align="center" bgcolor="#ffffff" valign="top" width="437"><br />



      
      
      
      <p style="text-align: left;"><img src="images/faqTitle.gif" height="73" width="445" /><strong style="font-weight: bold;"><em><br />
      </em></strong><span style="font-weight: bold;"><br />
      </span><br />




        </p>





      
      
      
      
      
      <div style="text-align: left;">
      <ul>




        



      
      
      
      
      </ul>
      <span style="font-weight: bold;">How would you suggest that one should start praying; are there guidelines?</span><br />
Prayer should start with a prayer. That is how it started in the
Gospels: they came to Jesus and asked him to teach them to pray, and
since any communication with God is prayer, then this is where
prayer&nbsp;starts &ndash; with a prayer to teach us to pray. &nbsp;<strong></strong><br />
      </div>




      

      
      
      
      
      
      <p style="text-align: left;">



So let&rsquo;s start Praying - &ldquo;<span style="font-style: italic;">Father teach me to pray now as
I&nbsp;acknowledge you as God and me as not God. I now ask to be taught
to pray&rdquo;</span><br />



Places of prayer are varied e.g.
mountains - Jesus went on his own to mountains, also&nbsp; isolated
marginal places like the desert, he brought his disciples to the shore
line to each them of the Kingdom of God, but He is also to be found in
the temple and the market place. You can meet with him
anywhere it&rsquo;s just that it can be easier to pray in some places
than others. The key place to meet with him is the &lsquo;now&rsquo;
place.&nbsp; <br />




Brother Lawrence a famous teacher on pray spoke of &lsquo;practicing
the presence of God&rsquo; and praying in all places at all times. But
he made this key point - unless you pray in this place at this time
then you will never pray.<br />
      </p>





      
      
      
      
      
      <div style="text-align: left;"><strong><em></em></strong>
      <ul>




        



      
      
      
      
      </ul>
      <span style="font-weight: bold;">In the study and meditation room like in the case of the Prayer room what approach would you recommend?</span><br />
As a studyguide I would recommend
that you read through the scripture texts referenced 3 times as
follows: Once for the facts&nbsp;and the overall sense of the story;
before you start to read the text a second pray for the |Holy Spirit to
speak to you as you read it stopping regularly to enter into the text,
engaging with your imagination and spirit, pausing to allow questions
and thoughts arise in you. Then read and meditate on the thoughts given
as&nbsp;a study before reading the text through again as a whole.
Remember, this is not just an exercise in gathering facts or
information but an engagement with the living Words. Jesus said to the
scholars of his day - \'You study the Scripture to find life yet you
refuse to come to me.\' Study the scriptures as part of approaching to
Him.
      
      
      
      



        <br />
      </div>




      
      
      
      
      <p style="text-align: left;"><strong><em><br />
What is the point to the website?</em></strong><br />
The
website is offered as a spiritual resource i.e. a time and space where
you can stop and be guided in prayer receive some spiritual teaching
related in most cases to the guided prayer themes. It is not meant to
be an evangelistic outreach or a way of promoting the Gathering as a
Christian community though it maybe be used as a resource for that too,
it is not the site\'s primary objective. The objective of the site is to
be an offering of a Holy well on the world wide web. Drink deeply.<strong><em></em></strong><br />
      </p>




      
      
      
      



      
      
      
      



      <strong><em></em></strong>
      
      
      
      



      
      
      
      



      



      
      
      
      



      
      
      
      
      <div style="text-align: left;">
      
      
      
      <strong></strong><strong><em></em></strong><strong><em></em></strong><strong><em>What is your key message?<br />
      </em></strong>Grow in intimacy with God!\' Most of us have some type of relationship
with God and all of us need to see it grow into all that it can be. Our
message is - go for it! Seek God first above everything else and that
growth in intimacy with him will follow.<strong><em></em></strong>
      <ul>




        



      
      
      
      
      </ul>
      <strong><em>What does it mean to talk of an indigenous or Celtic church
surely all churches are the planting of the Lord and have the quality
of Heaven and not Earth?</em></strong><br />
Church is nothing if it
doesn&rsquo;t have Christ at its head. But what is often forgotten is
His Church is made up of His people - God&rsquo;s creation who have
been called by God to be a part of His church. God&rsquo;s people are
to be
the living stones in the way&nbsp;He intended. It follows therefore that
they ought to be all that
they can be i.e. all that he intended them to be. So if the Lord has
called you to be a storyteller or Irish traditional musician or an
African drummer and a man in tune with nature then that is how you
should be when you gather to be his church. There are too many churches
in Ireland and I am sure elsewhere, which are just aping each other
with the same structures, musical expression, forms of teachings and
language. As a result there is little room for the unique and deeper
expressions of who we are
truly called to be in God. <br />




      <br />




The picture drawn for us of heaven in the bible is of a multi
coloured and languaged place. I think that the church on earth should
reflect that and learn to be like that before it goes to heaven where
it will be expected to be gloriously colourful.&nbsp;&nbsp;&nbsp;
      </div>




      
      
      
      
      <div style="text-align: left;"><strong><em><br />
In what way is the Gathering unique?</em></strong><br />
It is not unique in any way other
than the people who gather are unique and therefore the dealings of the
Lord with us will be an unique care. But that\'s true of all Churches.
What we see as part of our calling, which others may not yet see, is
that we are called to be&nbsp;Christian formed by God dealing with His
people in this space and time i.e. in the west of Ireland and in the
21st century. By allowing God to bring out the depths of his creation
plan in our lives we can be a part of the depths of colour and language
He plans for His Kingdom. &nbsp; </div>
      <ul style="text-align: left;">




        



      
      
      
      
      </ul>




      
      
      
      



      
      
      
      
      <p style="text-align: left;"><strong><em>Are there others in other part of Ireland or abroad that are exploring a similar approach to Church?</em></strong><br />




Yes there are others both throughout Ireland and abroad and I am sure
lots of other churches that we know nothing about. It\'s hoped that this
website may help to connect us with them.</p>




      
      
      
      
      <p style="text-align: left;"><strong><em>Is the Gathering connected to the Catholic Church in any way?</em></strong><br />




No, except that there are a number of the Gathering&rsquo;s members who
come from that background and hold it in high regard. They are also
some who see themselves as still part of the Catholic Church and there
are others who do not. It is a mixed bag. But \'no\' is the answer - the
gathering is not a part of the Catholic or Protestant
Churches.&nbsp;&nbsp;&nbsp; </p>




      
      
      
      
      <div style="text-align: left;"><strong><em>How do you view the Catholic Church now that you have left it?</em></strong><br />




They have had their difficulties but which church hasn&rsquo;t? The
greatest challenge that the existing structure of the Catholic Church
has for those who want to move into all that God has for them is the
structure that keeps ministry in the hands of a few men in their
gatherings. But what of those others who are called by God to be all
that they are meant to be in ministry? They are left with the question
of obeying the call on their lives or obeying the R.C. structure that
militates against that call. Some will wait it out to see if there are
changes in structure coming that will allow them to then follow
God&rsquo;s calling on their lives and there are others who have
decided that they must obey now.<br />




      <strong><em></em></strong><br />




      <strong><em>What does the Celtic cross mean to you and how would you use its imagery? </em></strong>The
Celtic cross depicts the Gathering as a Christian Community gathered
around the sacred space. We have presented this pictorially using
Celtic spirals Gathered to guard the Sacred Space occupied by the
Celtic symbol for the Trinity.<br />
      <br />
There are 12 spirals




        representing the 12 tribes that so to make-up the Christian community throughout the ages. 



      </div>




      
      
      
      
      <p>
  <img src="/images/clip_image002.png" alt="text" height="120" width="107" /><br />
      </p>





      
      
      
      
      
      <p style="text-align: left;">Like the New Jerusalem we have
depicted 12 gates into the sacred space where the fullness of God is.
Each gate is assigned to each of the tribes. There are figures at the
bottom of the cross, on their knees they are praying - "how long
Lord&hellip;"&nbsp; <br />
      </p>




      
      
      
      
      <div style="text-align: left;">



Like the traditional Celtic Cross it incorporates a circle - suggesting
Paul&rsquo;s view that the world is crucified to him and he to the
world.<br />





        The name - \'The Gathering\' comes from Jesus description of those who gather around Him - The Sacred Space. <br />




      </div>




      
      
      
      



      
      
      
      
      <div style="text-align: left;">
      
      
      
      
      <ul style="text-align: left;">




        <li><strong><em>Sampled questions that can be answered in the next release:</em></strong></li>




      
      
      
      
      </ul>




      
      
      
      
      <ul>




        <li>What does your meeting/gathering look like?</li>




        <li>
        What do you think of the role of women in the church?</li>




        <li>
        Where do you look to find authority and accountability? </li>




        <li>
        Who would feel most at home there?</li>




        <li>
        What is the relevance of Christianity to modern living?</li>




      
      
      
      
      </ul>




      </div>





      
      
      
      
      
      <p><strong><a href="yourComments.html" target="_self">If you have questions, comments or prayer requests please send them on here&hellip;</a></strong></p>





      
      
      
      
      
      <p>&nbsp;</p>




      </td>





    <td align="center" bgcolor="#ffffff" valign="top" width="18">&nbsp;</td>





    <td align="right" background="images/pagesLeftFAQ.jpg" bgcolor="#b5e1bf" valign="top" width="209">&nbsp;</td>





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

$editor->set_charset('iso-8859-1');

// print the editor to the browser:
$editor->print_editor('100%','450');

?>
</div>
</body>
</html>
<?php ob_end_flush() ?>
