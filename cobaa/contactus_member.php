<?php
include_once("user-session.php");
?>

<?php

  include_once("db.php");

  $valid=TRUE;
  
  if ( !empty($_POST['kirim']) )
    {
      if(trim($_POST['nama'])=="")
      {
        $valid = FALSE;
        $error_nama = 1;
      }
      if(trim($_POST['email'])=="")
      {
        $valid = FALSE;
        $error_email = 1;
      }
      if(trim($_POST['pesan'])=="")
      {
        $valid = FALSE;
        $error_pesan = 1;
      }
      if($valid)
      {
      //$num = mysql_num_rows(mysql_query("select * from bulutangkis")) ;
      //$num ++;
      $nama=$_POST['nama'];
      $email=$_POST['email'];
      $pesan=$_POST['pesan'];
      $tanggal=date('Y-m-d');
      /*$waktu=date('H:i:s');*/
      $query = "INSERT into hubungi (nama,email,pesan,tanggal) VALUES
      ('".$nama."','".$email."','".$pesan."','".$tanggal."')";
      if (mysql_query($query)) 
        header("location:hubungi_2_terimakasih.php");
      } 
    }
?>



<!DOCTYPE html>
<head>
<title>Unique Silver Jewelry</title>
<link href="image/data/insert%20image/favicon.png" rel="icon" />
<link rel="stylesheet" type="text/css" href="style/stylesheet/stylesheet.css" />
</head>
<body>
    <div id="container">
      <div id="header">
        <div id="container2">
          <div class="div1"><marquee><b>SELAMAT DATANG DI WEBSITE KAMI!! SELAMAT BERBELANJA!!</b></marquee>
    <div class="div2"><a href="index_member.php"><img src="image/data/logo/logo.gif" title="Unique Silver Jewelry" alt="Unique Silver Jewelry" /></a></div>
    <div class="div14"></div>
    <div class="div3">
              <a href="index.php" id="log out">log out</a> <a href="keranjang_member.php" id="tab_cart">KERANJANG<div class="div15"></div></a><a id="welcome">WELCOME :)</a>
    </div>
        <div id="search">
          <div class="div8">Cari : <input type="text" placeholder="Kata Kunci" id="filter_keyword"/></div>
          <div class="div10"><a onclick="moduleSearch();" class="button" ><span>GO</span></a></div>
        </div>
        <div class="div4">
          <div><a class="hide" href="index_member.php">BERANDA</a><a class="hide" href="aboutus_member.php">TENTANG KAMI</a><a class="hide" href="contactus_member.php">HUBUNGI KAMI</a><a class="hide" href="order_member.php">INFO ORDER</a><a class="hide" href="shipping_member.php">INFO PENGIRIMAN</a></div>
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
                <td valign="top" width="1"><a href="gelang_member.php"><img src="image/data/chace/gl.jpg" alt="Gelang" /></a></td>
                <td valign="center"><a href="gelang_member.php">Gelang</a>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="anting_member.php"><img src="image/data/chace/ant.jpg" alt="Anting" /></a></td>
                <td valign="center"><a href="anting_member.php">Anting</a>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="kalung_member.php"><img src="image/data/chace/kl.jpg" alt="Kalung" /></a></td>
                <td valign="center"><a href="kalung_member.php">Kalung</a>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cincin_member.php"><img src="image/data/chace/cn.jpg" alt="cincin" /></a></td>
                <td valign="center"><a href="cincin_member.php">Cincin</a>
              </tr>
            </table>
          </div>
          <div class="bottom">&nbsp;</div>
        </div>
        <div class="box">
          <div class="top">Informasi</div>
          <div id="information" class="middle">
            <ul>
              <li><a href="order_member.php">Cara Berbelanja</a></li>
              <li><a href="syarat_member.php">Syarat &amp; Ketentuan</a></li>
              <li><a href="faq_member.php">FAQ</a></li>
              <li><a href="contactus_member.php">Hubungi Kami</a></li>
              <li><a href="map_member.php">Peta Situs</a></li>
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
                <td valign="top" width="1"><a href="an0001_member.php"><img src="image/data/chace/AN0001.jpg"/></a></td>
                <td valign="center"><a href="an0001_member.php"><span style="font-size: 11px;">Rectanglular Pave</span></a>
                  <br />
                  <span style="font-size: 11px; color: #900;">Rp.160,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0001_member.php"><img src="image/data/chace/CN0001.jpg"/></a></td>
                <td valign="center"><a href="cn0001_member.php"><span style="font-size: 11px;">Sterling Silver Huggie</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.155,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="gl0001_member.php"><img src="image/data/chace/GL0001.jpg"/></a></td>
                <td valign="center"><a href="gl0001_member.php"><span style="font-size: 11px;">Rope Link Bracelet</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.135,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0002_member.php"><img src="image/data/chace/CN0002.jpg"/></a></td>
                <td valign="center"><a href="cn20001_member.php"><span style="font-size: 11px;">Cluster Cocktail Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.172,000.00</span>
                /td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0003_member.php"><img src="image/data/chace/CN0003.jpg"/></a></td>
                <td valign="center"><a href="cn20003_member.php"><span style="font-size: 11px;">Natural Amethyst Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.153,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0004_member.php"><img src="image/data/chace/CN0004.jpg"/></a></td>
                <td valign="center"><a href="cn20004_member.php"><span style="font-size: 11px;"> Blue Topaz Ring</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.189,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0005_member.php"><img src="image/data/chace/CN0005.jpg"/></a></td>
                <td valign="center"><a href="cn20005_member.php"><span style="font-size: 11px;"> Silver Filigree Ring</span></a>
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
                <td valign="top" width="1"><a href="kl0002_member.php"><img src="image/data/chace/KL0002.jpg"/></a></td>
                <td valign="center"><a href="kl0002_member.php"><span style="font-size: 11px;">Light of Om</span></a>
                    <br />
                    <span style="font-size: 11px; color: #900;">Rp.260,000.00</span>
                </td>
              </tr>
              <tr>
                <td valign="top" width="1"><a href="cn0006_member.php"><img src="image/data/chace/CN0006.jpg"/></a></td>
                <td valign="center"><a href="cn0006_member.php"><span style="font-size: 11px;">Filigree Solitaire Ring</span></a>
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
           <h1>Hubungi Kami</h1>
          </div>
      </div>
      <div class="middle">
        <form action="contactus_member.php" method="post">
          <div class="content">
            <div style="display: inline-block; width: 100%;">
            <div style="float: left; display: inline-block; width: 50%;"><b>Alamat:</b><br />
            Kotabaru<br />
            Yogyakarta</div>
            <div style="float: right; display: inline-block; width: 50%;">
              <b>Handphone</b><br />081933030424<br/>
              <br />
              <b>email</b><br />uniquesilverjewelry@yahoo.com                     
            </div>
          </div>
      </div>
      <div class="content">
         <h1>HUBUNGI KAMI</h1>
      <form method="post" action="contactus_member.php">
    <table><br>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" size="80"> <?php if (isset($error_nama)) echo "data tidak boleh kosong";?></td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>:</td>
        <td><input type="text" name="email" size="80"> <?php if (isset($error_email)) echo "data tidak boleh kosong";?> </td>
      </tr>
      <tr>

        <td>Pesan</td>
      <td>:</td>
        <td><textarea name="pesan" rows="5" cols="61"></textarea><?php if (isset($error_pesan)) echo "data tidak boleh kosong";?></td>
      </tr>
    </table>

    <input type="submit" name="kirim" value="Kirim" />
  </form>
      </div>
      <div class="buttons">
        <table>
          <tr>
           <td align="right"></td>
          </tr>
        </table>
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
  </div>
    <div id="footer">
      <div class="div3">
        <b>Follow Us :</b>
        <a href="http://www.twitter.com"><img src="style/image/twitter.png"/></a>
        <a href="https://www.facebook.com"><img src="style/image/facebook.png"/></a>
      </div>
      <div class="div4">
        <a href="faq_member.php">FAQ</a>
        <a href="map_member.php">SITE MAP</a>
        <a href="syarat_member.php">SYARAT &amp; KETENTUAN</a>
      </div>
    </div>
    <div class="div2" style="background-color:#000000; margin-top: -2px;padding-top: 1px;padding-left: 5px;padding-bottom: 10px;">
    Copyright &copy; 2013 <a href="index_member.php" target="_blank" alt="Unique Silver Jewelry" title="Unique Silver Jewelry">Unique Silver Jewelry</a><br /></div>
</html> 