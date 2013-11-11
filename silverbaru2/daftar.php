<?php
include_once("db.php");
?>

<!DOCTYPE html>
<head>
<title>Unique Silver Jewelry</title>
<link href="image/data/insert%20image/favicon.png" rel="icon" />
<link rel="stylesheet" type="text/css" href="style/stylesheet/stylesheet.css" />
</head>
<body>

  <?php
if (isset($_POST['save']))
{
  // pengecekan validasi
  $error = '';
  //$kota = trim(md5($_POST['kota']));
  if ( empty ( $_POST['nama_depan'] )){
          $error .= "Silahkan Masukan nama depan";
           } 
  if ( empty ( $_POST['nama_belakang'] )){
          $error .= "Silahkan Masukan nama belakang";
           } 
  if ( empty ( $_POST['email'] )){
          $error .= "Silahkan Masukan email";
           } 
    if ( empty ( $_POST['telepon'] )){
          $error .= "Silahkan Masukan nomor telepon";
            } 
  if ( empty ( $_POST['password'] )){
          $error .= "Silahkan Masukan PASSWORD";
           } 
  if ( empty ( $_POST['confirm'] )){
          $error .= "Silahkan Masukan CONFIRMASI PASSWORD";
           } 
   if ( empty ( $_POST['agree'] )){
          $error .= "Silahkan men-checklist";
           } 
  if (  $_POST['confirm']<>$_POST['password']){
          $error .= "PASSWORD DAN CONFIRMASI PASSWORD BERBEDA";
           } 

  if (empty($error) ) {
  // simpan
  // cari id sekarang
  $num = mysql_num_rows(mysql_query("select * from user")) ;
  $num ++;
      $nama_depan = $_POST["nama_depan"];
      $nama_belakang = $_POST["nama_belakang"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $telepon = $_POST["telepon"];
      $confirm = $_POST["confirm"];
      $agree = $_POST["agree"];
      mysql_query("INSERT INTO user (id_user,nama_depan,nama_belakang,password,email,telepon) VALUES('2', '$nama_depan', '$nama_belakang', md5('$password'),'$email','$telepon')") ; /*yg idnya 2 itu user*/
  //echo menghilangkan pengisian form setelah berhasi dikirim           
    $nama_depan = " ";
    $nama_belakang = " ";
    $password = "";
    $email = "";
    $confirm = "";
    $telepone = "";
    $agree = "";
      echo "<div class='success'>Data berhasil disimpan</div><br>";

  }
else
  {
   echo "<div class='notice'>
    <font color=red><b>ERROR:</b></font>
    <ul>".nl2br($error)."</ul>
    </div>";

  }
// akhir validasi
}
?>

    <div id="container">
      <div id="header">
        <div id="container2">
          <div class="div1">
          <div class="div2"><a href="index.php"><img src="image/data/logo/logo.gif" title="Unique Silver Jewelry" alt="Unique Silver Jewelry" /></a></div>
          <div class="div14"></div>
          <div class="div3">
         <a href="keranjang.php">KERANJANG<div class="div15"></div></a><a href="akun.php">AKUN</a><a href="daftar.php">DAFTAR</a>
        </div>
        <div id="search">
          <div class="div8">Cari : <input type="text" placeholder="Kata Kunci" id="filter_keyword"/></div>
          <div class="div10"><a onclick="moduleSearch();" class="button" ><span>GO</span></a></div>
        </div>
        <div class="div4">
          <div><a class="hide" href="index.php">BERANDA</a><a class="hide" href="aboutus.php">TENTANG KAMI</a><a class="hide" href="contactus.php">HUBUNGI KAMI</a><a class="hide" href="order.php">INFO ORDER</a><a class="hide" href="shipping.php">INFO PENGIRIMAN</a></div>
        </div>
      </div>
    </div>
    <div class="div6">
      <div id="header-background">
        <div class="div5">
        <div class="left"></div>
        <div class="right"></div>  
      </div>
    </div>
    <div id="container2">
      <div id="breadcrumb-wrap">
        <div class="breadcrumb-wrap-left">
          <div id="breadcrumb">
            </div></div>
            <div class="breadcrumb-wrap-right"></div>
            <div class="clear" style="clear:both;"></div>
          </div>
        </div>
      </div>
    </div>
    <div id="container2">
      <div id="column_left">
        <div class="box">
          <div class="top">PRODUK</div>
          <div class="middle">
            <table cellpadding="2" cellspacing="0" style="width: 100%;">
              <tr>
                <td valign="top" width="1"><a href="gelang.php"><img src="image/data/chace/gl.jpg" alt="Gelang" /></a></td>
                <td valign="center"><a href="gelang.php">Gelang</a>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="anting.php"><img src="image/data/chace/ant.jpg" alt="Anting" /></a></td>
                <td valign="center"><a href="anting.php">Anting</a>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="kalung.php"><img src="image/data/chace/kl.jpg" alt="Kalung" /></a></td>
                <td valign="center"><a href="kalung.php">Kalung</a>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cincin.php"><img src="image/data/chace/cn.jpg" alt="cincin" /></a></td>
                <td valign="center"><a href="cincin.php">Cincin</a>
              </tr>
            </table>
          </div>
          <div class="bottom">&nbsp;</div>
        </div>
        <div class="box">
          <div class="top">Informasi</div>
          <div id="information" class="middle">
            <ul>
              <li><a href="order.php">Cara Berbelanja</a></li>
              <li><a href="syarat.php">Syarat &amp; Ketentuan</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="contactus.php">Hubungi Kami</a></li>
              <li><a href="map.php">Peta Situs</a></li>
            </ul>
          </div>
          <div class="bottom">&nbsp;</div>
        </div>    
        <div class="box">
          <div class="top">Customer Service</div>
          <div class="middle" style="text-align: left;">
            <p>
               No Handphone :<br />
               +6281391192520<br />
               <br>(Monday- Sunday)<br />
               9 am - 9 pm wib)</p>
            <p>
          </div>
          <div class="bottom">&nbsp;</div>
        </div>
      </div>
    </div>
    <div id="container2">
      <div id="column_right">
        <div id="module_cart" class="box">
          <div class="top"><img src="style/image/cart.png" alt="" />Keranjang</div>
          <div class="middle">
            <div style="text-align: center;">0 items</div>
          </div>
          <div class="bottom">&nbsp;</div>
        </div>
        <div class="box">
          <div class="top">Produk Baru</div>
          <div class="middle">
            <table cellpadding="2" cellspacing="0" style="width: 100%;">
              <tr>
                <td valign="top" width="1"><a href="an0001.php"><img src="image/data/chace/AN0001.jpg"/></a></td>
                <td valign="center"><a href="an0001.php"><span style="font-size: 11px;">Rectanglular Pave</span></a>
                  <br />
                  <span style="font-size: 11px; color: #900;">Rp.160,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0001.php"><img src="image/data/chace/CN0001.jpg"/></a></td>
                <td valign="center"><a href="cn0001.php"><span style="font-size: 11px;">Sterling Silver Huggie</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.155,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="gl0001.php"><img src="image/data/chace/GL0001.jpg"/></a></td>
                <td valign="center"><a href="gl0001.php"><span style="font-size: 11px;">Rope Link Bracelet</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.135,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0002.php"><img src="image/data/chace/CN0002.jpg"/></a></td>
                <td valign="center"><a href="cn20001.php"><span style="font-size: 11px;">Cluster Cocktail Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.172,000.00</span>
                /td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0003.php"><img src="image/data/chace/CN0003.jpg"/></a></td>
                <td valign="center"><a href="cn20003.php"><span style="font-size: 11px;">Natural Amethyst Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.153,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0004.php"><img src="image/data/chace/CN0004.jpg"/></a></td>
                <td valign="center"><a href="cn20004.php"><span style="font-size: 11px;"> Blue Topaz Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.189,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0005.php"><img src="image/data/chace/CN0005.jpg"/></a></td>
                <td valign="center"><a href="cn20005.php"><span style="font-size: 11px;"> Silver Filigree Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.389,000.00</span>
                </td>
              </tr>
            </table>
          </div>
          <div class="bottom">&nbsp;</div>
        </div>
        <div class="box">
          <div class="top">FAVORIT</div>
          <div class="middle">
            <table cellpadding="2" cellspacing="0" style="width: 100%;">
              <tr>
                <td valign="top" width="1"><a href="kl0002.php"><img src="image/data/chace/KL0002.jpg"/></a></td>
                <td valign="center"><a href="kl0002.php"><span style="font-size: 11px;">Light of Om</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.260,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0006.php"><img src="image/data/chace/CN0006.jpg"/></a></td>
                <td valign="center"><a href="cn0006.php"><span style="font-size: 11px;">Filigree Solitaire Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.205,000.00</span>
                </td>
              </tr>
            </table>
          </div>
          <div class="bottom">&nbsp;</div>
        </div>
      </div>
    </div>
    <div id="container2">
      <div id="content">
        <div class="top">
          <div class="left"></div>
          <div class="right"></div>
          <div class="center">
           <h1>Buat Akun</h1>
    </div>
  </div>
  <div class="middle">
        <form action="daftar.php" method="post" target = "">
          <b style="margin-bottom: 2px; display: block;">Detail Informasi Anda</b>
          <div style="background: #F7F7F7; border: 1px solid #DDDDDD; padding: 10px; margin-bottom: 10px;">
            <table>
              <tr>
                <td width="150"><span class="required">*</span> Nama Depan:</td>
                <td><input id="nama_depan" type="text" name="nama_depan"/></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Nama Belakang:</td>
                <td><input id="nama_belakang" type="text" name="nama_belakang"/></td>
              </tr>
              <tr>
                <td><span class="required">*</span> E-Mail:</td>
                <td><input id="email" type="text" name="email"/></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Telepon / HP:</td>
                <td><input id="telepon" type="text" name="telepon"/></td>
              </tr>
            </table>
            </div>
          <b style="margin-bottom: 2px; display: block;">Password Anda</b>
          <div style="background: #F7F7F7; border: 1px solid #DDDDDD; padding: 10px; margin-bottom: 10px;">
            <table>
              <tr>
                <td width="150"><span class="required">*</span> Password:</td>
                <td><input id="password" type="password" name="password"/></td>
              </tr>
              <tr>
                <td><span class="required">*</span> Konfirmasi Password:</td>
                <td><input id="confirm" type="password" name="confirm"/> </td>
              </tr>
            </table>
          </div>
        <div class="buttons">
        <table>
          <tr>
            <td align="right" style="padding-right: 5px;">Saya telah membaca dan setuju dengan <a href="syarat.php"<b>Syarat & Ketentuan</b></a></td>
            <td width="5" style="padding-right: 10px;"><input type="checkbox" name="agree" value="1"></td>
            <td align="right" width="5"><td colspan="2"><input type="submit" name="save" value="Lanjut"/></td>
          </tr>
        </tbody></table>
      </div>
          </form>
  </div>
  <div class="bottom">
    <div class="left"></div>
    <div class="right"></div>
    <div class="center"></div>
  </div>
</div>
</div>
</div>
    <div id="footer">
      <div class="div3">
        <b>Follow Us :</b>
        <a href="http://www.twitter.com"><img src="style/image/twitter.png"/></a>
        <a href="https://www.facebook.com"><img src="style/image/facebook.png"/></a>
      </div>
      <div class="div4">
        <a href="faq.php">FAQ</a>
        <a href="map.php">SITE MAP</a>
        <a href="syarat.php">SYARAT &amp; KETENTUAN</a>
      </div>
    </div>
    <div class="div2" style="background-color:#000000; margin-top: -2px;padding-top: 1px;padding-left: 5px;padding-bottom: 10px;">
    Copyright &copy; 2013 <a href="index.php" target="_blank" alt="Unique Silver Jewelry" title="Unique Silver Jewelry">Unique Silver Jewelry</a><br /></div>
</html> 