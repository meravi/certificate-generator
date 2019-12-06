<?php 
 include("dr-config.php");
 if(isset($_POST['dr-generate'])){
  $drfullname = $_POST['dr-fullname'];
 $drGender = $_POST['dr-gender'];
 $drSql ="INSERT INTO drinformation(drFullname,drGender) VALUES('$drfullname','$drGender')";
 $drConnect->exec($drSql);

 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Free Online Certificate Maker | Create Your Own Certificate Online - Developer Ravi Group</title>
  <link href="https://fonts.googleapis.com/css?family=Amaranth|Courgette|Pacifico|Philosopher:700" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://khadkaravi.com.np/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://khadkaravi.com.np/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://khadkaravi.com.np/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<link rel="alternate" href="http://preeti.khadkaravi.com.np" hreflang="ne-np" />
<link rel="alternate" href="http://preeti.khadkaravi.com.np" hreflang="en-us" />
<link rel="alternate" href="http://preeti.khadkaravi.com.np" hreflang="de-de" />
<link rel="alternate" href="http://preeti.khadkaravi.com.np" hreflang="vi-vn" />
  <meta http-equiv="description" content="No need to signup Preeti to unicode converter for free.sajilo sanga Preeti Fonts to unicode converter online.Developer ravi provide preeti to unicode converter. " />
  <meta property=og:title content='Free Online Professional Certificate Maker | Create Your Own Certificate Online - Developer Ravi Group'>                      
<meta property=og:description content='free online certificate maker helps you easily create your own certificate in seconds.create your own printable personalized certificates for free no need to signup.'>          
<meta property=og:image content=http://certificate.khadkaravi.com.np/developer-ravi-certificate-maker.jpg>   
<!--<meta property="og:url" content="http://khadkaravi.com.np"/> -->
<meta property="og:site_name" content="Free Online Professional Certificate Maker | Create Your Own Certificate Online - Developer Ravi Group"/>
<meta property="og:type" content="website"/>
<meta property ="fb:admins" content ="100024338484168" />
<meta name="description" content="free online certificate maker helps you easily create your own certificate in seconds.create your own printable personalized certificates for free no need to signup. ">
<meta name="author" content="Ravi Khadka">
<meta name="keywords" content="free online certificate maker,certificate maker in nepali,face certificate maker,preeti to unicode sajilo,conveter,preeti keyboard,English to Nepali Translation,
Nepali To English Translation, English to Nepali Typing, Nepali to English Typing, English to Nepali meaning,
online enlish to nepali conveter,tips & tricks in nepali,nepali tech and tips, developer ravi,ravi khadka,
latest technology in nepal, nepal latest news,latest news about technology in nepal,ict magazine,2018,2019,2075">
<meta property=”article:author” content="https://www.facebook.com/userfoundhere" />
<meta property=”article:publisher” content="https://www.facebook.com/srdeveloperravi/" />
</head>
<body>

  <div id="drConvert">
    <div id="dr_header">
      <div class="dr_top_ads"></div>
    </div>
  <form method="post">
    <div id="dr_u2p">
      <p class="dr_title">Certificate Generator</p> <br>
    <div class="drLeftAds">

    </div>
    <div class="drInput">
        <form method="post">
          <div>
      <label for="inputEmail4">Full Name</label>
      </div>
      <input type="text" class="form-control" id="inputEmail4" placeholder="FUll Name (Developer Ravi)" name="dr-fullname">
<br><br>
  <div class="input-group-prepend">

    <label class="input-group-text" for="inputGroupSelect01">Gender</label>
  </div>

  <select name="dr-gender">
    <option selected>Choose...</option>
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
<br><br><br>

      <input type="submit" class="btn btn-primary col-sm-6" value="Create" name="dr-generate">

</form>  
</div>
<div class="dr_right_ads">
        <nav class="drSideMenu">
        <ul>
          <li class="drCol1"><a href="#">Unicode To Preeti</a></li>
          <li><a href="#">Preeti To Unicode</a></li>
          <li><a href="#">Nepali Typing</a></li>
          <li><a href="#">Certificate Maker</a></li>
          <li><a href="#">QR Code Generator</a></li>
          <li><a href="#">Visit Blog</a></li>
          <li><a href="#">Youtube</a></li>
        </ul>
      </nav>
</div>
</div>
<div class="clearfix"></div>
  </form>
  <div class="clearfix"></div>
  <div id="drOutput">
<?php 
if(isset($_POST['generate'])){
$fullname = strtoupper($_POST['dr-fullname']);
$fullname_len = strlen($fullname);
$gender = $_POST['dr-gender'];
if($fullname=="" || $gender==""){
  echo "<div class='dr-alert'>* All Fields are required!!!</div>";
}
else {
  ?>
  <div class="drSuccess">
    <?php 
  echo "<h3 class='text-center'>Congratulations $fullname on your excellent success and good luck for more progress</h3>";
  
    ?>
  </div>
  <?php 
  if($gender=="male"){
  $imgsrc = "male.png";
}
else{
  $imgsrc = "her.png";
}
$createimg = imagecreatefrompng($imgsrc);
$output = "certificate/intern-certificate.png";
$white = imagecolorallocate($createimg, 205, 245, 255);
$black = imagecolorallocate($createimg, 0, 0, 0);
$rotation = 0;
$origin_x = 230;
$origin_y=440;
if($fullname_len<=7){
  $font_size = 50;
  $origin_x = 380;
}
elseif($fullname_len<=12){
  $font_size = 60;
}
elseif($fullname_len<=15){
  $font_size = 54;
}
elseif($fullname_len<=20){
   $font_size = 35;
}
elseif($fullname_len<=22){
  $font_size = 30;
}
elseif(fullname_len<=33){
  $font_size=23;
}
else {
  $font_size =20;
}

$certificate_text = $fullname;
$drFont = dirname(__FILE__)."/fonts/developer.ttf";
$text1 = imagettftext($createimg, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont, $certificate_text);
// $text1 = imagettftext($createimg, $font_size, $rotation, $origin_x+2, $origin_y, $white, 'sans-serif', $text);
imagepng($createimg,$output,9);
  ?>

<img src="<?php echo $output; ?>">
<br> <br>
<a href="<?php echo $output; ?>" class="drDownoadLink">Download My Internship Certificate</a>
<br><br>
<?php 
}
}
?>
  </div>

  <div class="drMobMenuFooter">
            <nav class="drSideMenu">
        <ul>
          <li class="drCol1"><a href="#">Unicode To Preeti</a></li>
          <li><a href="#">Preeti To Unicode</a></li>
          <li><a href="#">Nepali Typing</a></li>
          <li><a href="#">Certificate Maker</a></li>
          <li><a href="#">QR Code Generator</a></li>
          <li><a href="#">Visit Blog</a></li>
          <li><a href="#">Youtube</a></li>
        </ul>
      </nav>
  </div>
  <div class="dr_footer">
    All Right Reserved By Developer Ravi &copy; <?php echo date('Y'); ?>
  </div>
</div>
</body>
</html>