<?php ob_start() ?>
<?php
if ($_GET['randomId'] != "Sr1SoiV2xzG5ZkdNkIsO4kO5hwNdZS6oYjlghr7l0iDI30cUpIPyCnzcF6CE6PASVnHWr0ugDzvJqoOgTuIwe9nHIj0Gx0e_5FQYnlwFKDN0i3oPjJYXd17qJ_p4dubNhQMntgC_Ym7IEJDeRdl6KAEsxgEzwRB4_aPTW_ZW9B2eufM_4CvCkZN7OSWBaqR_qTpKJmd1U7S2rewDYjb0s6xNg9kneQJhpsQo4o0Gc8dlu3GwAE7mZYrvdEWwT62x") {
    echo "Access Denied";
    exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Editing 2Brothers.html</title>
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
	document.write('<html><form METHOD="POST" name=mform action="http://www.gathering.ie:2082/frontend/x/files/savehtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="2Brothers.html">Saving&nbsp;....<br /><br ><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><textarea name=page rows=1 cols=1></textarea></form></html>');
	document.close();
	document.mform.page.value = code;
	document.mform.submit();
}
function do_abort() {
	var code =  htmlCode.getCode();
	document.open();
	document.write('<html><form METHOD="POST" name="mform" action="http://www.gathering.ie:2082/frontend/x/files/aborthtmlfile.html"><input type="hidden" name="dir" value="/home/gatherin/public_html/studys"><input type="hidden" name="file" value="2Brothers.html">Aborting Edit&nbsp;....</form></html>');
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
  
  
  
  <link href="gathering.css" rel="stylesheet" type="text/css" />
</head>


<body onload="MM_preloadImages(\'../images/nav/yourCommentsOver.jpg\',\'../images/navBar/prayerRoomOver.jpg\',\'../images/navBar/studyRoomOver.jpg\',\'../images/navBar/musicRoomOver.jpg\',\'../images/navBar/aboutUsOver.jpg\',\'../images/navBar/faqOver.jpg\',\'../images/navBar/yourCommentsOver.jpg\',\'../images/navBar/homeOver.jpg\',\'../images/prayerRoom/backOver.gif\')">




<table align="center" cellspacing="0" width="899">




  <tbody>



    <tr>




    <td colspan="5" bgcolor="#336699">
      
      
      
      <table border="0" cellpadding="0" cellspacing="0">




      <tbody>



          <tr bgcolor="#6699ff">




        <td bgcolor="#6699ff"><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'rightCorner\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'rightCorner\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="rightCorner.jpg" alt="" name="rightCorner" id="rightCorner" onload="" border="0" height="65" width="33" /></a></td>




        <td bgcolor="#6699ff"><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'home\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'home\',\'../images/navBar/homeOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img name="home" src="home.jpg" alt="" onload="" border="0" /></a></td>




        <td bgcolor="#6699ff"><a href="../prayerRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'prayerRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'prayerRoom\',\'../images/navBar/prayerRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="prayerRoom.jpg" alt="" name="prayerRoom" id="prayerRoom" onload="" border="0" height="65" width="132" /></a></td>




        <td bgcolor="#6699ff"><a href="../studyRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'studyRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'studyRoom\',\'../images/navBar/studyRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="studyRoom.jpg" alt="" name="studyRoom" id="studyRoom" onload="" border="0" height="65" width="120" /></a></td>




        <td bgcolor="#6699ff"><a href="../musicRoom.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'musicRoom\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'musicRoom\',\'../images/navBar/musicRoomOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="musicRoom.jpg" alt="" name="musicRoom" id="musicRoom" onload="" border="0" height="65" width="123" /></a></td>




        <td bgcolor="#6699ff"><a href="../aboutUs.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'aboutUs\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'aboutUs\',\'../images/navBar/aboutUsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="aboutUs.jpg" alt="" name="aboutUs" id="aboutUs" onload="" border="0" height="65" width="110" /></a></td>




        <td bgcolor="#6699ff"><a href="../faq.html" target="_parent" onclick="MM_nbGroup(\'down\',\'group1\',\'faq\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'faq\',\'../images/navBar/faqOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="faq.jpg" alt="" name="faq" id="faq" onload="" border="0" height="65" width="67" /></a></td>




        <td bgcolor="#6699ff"><a href="../yourComments.html" target="_parent" class="style9" onclick="MM_nbGroup(\'down\',\'group1\',\'yourComments\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'yourComments\',\'../images/navBar/yourCommentsOver.jpg\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="yourComments.jpg" alt="" name="yourComments" id="yourComments" onload="" border="0" height="65" width="161" /></a></td>




        <td><a href="javascript:;" target="_top" onclick="MM_nbGroup(\'down\',\'group1\',\'leftSide\',\'\',1)" onmouseover="MM_nbGroup(\'over\',\'leftSide\',\'\',\'\',1)" onmouseout="MM_nbGroup(\'out\')"><img src="leftSide.jpg" alt="" name="leftSide" id="leftSide" onload="" border="0" height="65" width="35" /></a></td>




      </tr>




    
        
        
        
        </tbody>
      
      
      
      </table>



    </td>




  </tr>




  <tr>




    <td bgcolor="#b5e1bf" valign="top" width="227"><img src="pagesRight.jpg" height="1171" width="226" /></td>




    <td align="center" bgcolor="#ffffff" valign="top" width="20">
      
      
      
      <p>&nbsp;</p>




      
      
      
      
      <p>&nbsp;</p>




      
      
      
      
      <p>&nbsp;</p>




    
      
      
      
      <p class="style10">&nbsp;</p>



      </td>




    <td align="center" bgcolor="#ffffff" valign="top" width="437">
      
      
      
      <p>&nbsp;</p>




      
      
      
      
      <p><img src="studyRoomTitle.gif" height="42" width="336" /></p>



      
      
      
      <p style="text-align: left; font-weight: bold;">There\'re 2 brothers but one person. And these brothers can be found in all of us: the prodigal and the elder brother.</p>



      
      
      
      <p style="text-align: left;">Jesus
is sitting, eating with notorious sinners. Notorious in that they are
commonly known to be people of low repute. He is questioned by the
respectable people of the day as to why he was socialising with such
low lives. As was Jesus custom with those, who couldn\'t or wouldn\'t
hear what he had to say, he started to tell them stories. He tells 3
parables, the third of which is the best known and most often repeated.
This story tells of a son asking for his inheritance, immediately
leaving home and spending all he got on loose living i.e. public sin.
The elder son stays working away for the Father, while the younger
brother lives the high life until the funds run out. When the funds do
run out the first son wises-up and returns home to where his Father
kills the fatted calf to celebrate the return of the prodigal. </p>



      
      
      
      <p style="text-align: left;">Often
this story is told to tell of the grace of a God taking back the public
sinner and the second half of the drama is forgotten. Yet this misses
the point for telling the story in the first place - the stories are
being told to a group of people who are giving-out about Jesus sitting
having food with the public sinners. </p>



      
      
      
      <p style="text-align: left;">The
point of the story is then to be found in the developing drama as the
elder brother refuses to join in the dinner party for the returning
prodigal. The Father leaves the dinner to tell the elder son that <em>they</em> have to celebrate: <em>they</em>
must go in together and eat with the public sinner. This mirrors what
Jesus is doing: eating with the sinners; and those criticising Jesus
and refusing to join in the meal, mirror the elder brother\'s behaviour.
&nbsp;&nbsp;</p>



      
      
      
      <p style="text-align: left;">Here is the challenge for
us all. In our lives we are both the prodigal and the elder brother. We
have sin that we need to deal with and get forgiveness for and we have
ingrained attitudes that demand their place in our lives. It is these
attitudes that God also wants to deal with. And as we continue our
pilgrim walk Jesus will put his finger on things in our lives he wants
us to let go of. These may be reasonable attitudes, but nevertheless he
wants rid of them. You may find that he will talk to you of them over a
prolonged period, maybe many years. &nbsp;These are the blockages in
all our lives that stop us entering into what the Father has for us - "<strong><em>we</em></strong><em> must celebrate the return of your brother." </em></p>




      
      
      
      
      <p style="text-align: left;">It
would be a mistake to view this parable as speaking to the people of
Jesus\' time only and whether Jesus ought to be eating or not with
public sinners. It is important that we see this parable speaking, not
alone today but also into any and all areas that the Lord might point
to in our lives, areas he wants us to change. It is important that we
recognise that this parable is speaking particularly to us who see
ourselves as being right with God. It\'s speaking to us who have walked
in his discipline for a number of years.</p>



      
      
      
      <p style="text-align: left;">We
may have an equally dramatic conversion story as the prodigal son had
to tell, and but now we are living like the elder son - working hard
for the Father. Then it happens - Lord brings us to a crisis or
crossroads. He does this to create the conditions where we can deal
with the blockages that stop from entering into the fullness the Father
has for us. The key word in the dealings of the Father with the elder
son is <em>"we"</em>. "<em>We</em> must celebrate." "<em>We </em>must cry". "<em>We</em> must give up a position that we hold". Whatever it is that "<em>We"</em>
are invited to do with the Father is an act of graciousness on the part
of God - God is sharing a work, an emotion, a response to a situation
after his own heart. And He is using the "<em>we"</em> word i.e. You and God together doing something. </p>



      
      
      
      <p style="text-align: left;">This
shared activity between you and God at a deeper level than where you
have travelled to before, is not possible if you have dealt with just
the public sinner, i.e. like the prodigal in you, you must also deal
with the elder brother that is in you too. What the elder brother is
being challenged with is more challenging because it\'s at a deeper
level: it is at the level of our will -<em>\'we must&hellip;\'</em> </p>



      
      
      
      <p style="text-align: left;">It
is at the end of Jesus ministry on earth when he was challenged, and
demonstrates his heart \'yieldedness\' - "let not my will be done but
your will be done". This is the point of the prodigal son story - are
you able to say to the Father let not my will be done but yours - I
will do what you want?</p>



      
      
      
      <p style="text-align: left;">Luke\'s foreword
to this story of Jesus dealing the criticism of eating with the sinners
is to tell of the cost that discipleship exerts. Jesus says you must
hate your home and life itself or you can\'t be my disciple. He tells
those who would follow - be aware of what following me will cost you -
it will cost you everything, including life itself. When you add this
insight of the cost of following Jesus, to the prodigal son story, then
the divine challenge to us clearly doesn\'t end with the conversion. God
continues and deepens the challenges made on us. This is seen most
clearly in the story when the Father coming out to those of us who
would think of ourselves as elder brothers. The Father invites us to
cross the threshold into the place he has prepared for us, where we are
to share in the plans he has for us, plans from his heart. This
threshold is death to our wilfulness. This threshold of death is the
cost of true discipleship and its point is that <em>we</em> i.e. God
and us can share in a particular part of his divine plan for us. This
is not a challenge for the faint-hearted it is a challenge the Lord
leads us to, after many miles of the pilgrim journey. It is the
challenge Jesus has for the mature and for the sake of maturation. The
death that we are being invited to take part in is the executing of our
will that would do its own thing, rather than summit to the will of the
Father.</p>



      
      
      
      <p style="text-align: left;">What are the plans the lord has
for us? They are hidden things, hidden since the foundation of the
world. They are to be found in the Kingdom of God, and the Holy Spirit
is constantly leading us to them. They are what Jesus was leading Peter
to when Jesus said to him - "come follow me", after telling Peter of
the type of death he would experience. </p>



      
      
      
      <p style="text-align: left;">Paul
prayed that we would know the length, breath, and dept of the love that
the Father has for us. Paul always wanted more for the people that God
had given him to minister to. He always wanted to see maturity grow in
his people that they may experience a deeper revelation of Jesus and
his kingdom. </p>



      
      
      
      <p style="text-align: left;">To walk in the Kingdom
of God while living in this world required spiritual disciple.
Spiritual disciple wasn\'t the end in itself but that we would be on the
way where we would experience the fullness of the grace that God was
Paul\'s goal. He talked of being back in child berth again and again to
bring about Christ fuller purpose for his people. Paul didn\'t want to
stamp the forehead of those he met with \'saved\', he want to see Christ
formed in everyone and felt empowered by God to bring this about.</p>


      
      
      <ul>


        <li style="text-align: left;">Pray for greater intimacy in your relationship with God <a href="gathering.ie/prayerRoomfs/intimacy.html"><span style="font-weight: bold; font-style: italic;">HERE...</span></a></li>


        <li style="text-align: left;">Pray for forgiveness for your hidden <a href="../prayerRoomfs/ingrained.html">sin <span style="font-style: italic;"><span style="font-weight: bold;">HERE...</span></span></a><a href="prayerRoomfs/ingrained.html"><span style="font-style: italic; font-weight: bold;"></span></a></li>


      
      
      </ul>




    
      
      
      
      <p class="style11"><a href="../studyRoom.html" target="_parent" onmouseover="MM_swapImage(\'back\',\'\',\'../images/prayerRoom/backOver.gif\',1)" onmouseout="MM_swapImgRestore()"><img src="back.gif" alt="backToList" name="back" id="back" border="0" height="17" width="87" /></a></p>




    
      
      
      
      <p class="style11">&nbsp;</p>



      </td>




    <td align="center" bgcolor="#ffffff" valign="top" width="18">&nbsp;</td>




    <td align="right" bgcolor="#b5e1bf" valign="top" width="209"><img src="pagesLeft.jpg" height="1171" width="208" />j</td>




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
