<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />
  <style type="text/css">
/*<![CDATA[*/
  .centeredImage
    {
    text-align:center;
    margin-top:0px;
    margin-bottom:0px;
    padding:0px;
    }
  /*]]>*/
  </style>
  <style type="text/css">
/*<![CDATA[*/
    th,td
    {
    padding:5px;
    }
  /*]]>*/
  </style>

  <title></title>
</head>

<body>
  <p class="centeredImage"><img alt="Articulate" border="0" src=
  "articulateLogo_blue_small.jpg" /></p>

  <p style="font-family:Arial, Helvetica, sans-serif; text-align:center;">244 5th Avenue
  #2960<br />
  New York, NY 10001<br />
  Phone: (800) 861-4880 | Fax: (800) 858-9916</p>
  <hr />

  <p style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:20px;"><strong>PRICE
  QUOTATION</strong></p>
  <p style="font-family:Arial, Helvetica, sans-serif; text-align:center;"><strong>Quote Created Date:</strong>
  <?php echo date("F j\, Y"); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Quote
  Valid Until:</strong> <?php echo date("F t\, Y"); ?><br />
  <br />
  <strong>Quote Prepared for</strong>:<br />
  <br />
  <?php echo $_POST["name"]; ?><br />
  <?php echo $_POST["company"]; ?><br />
  <?php echo $_POST["phone"]; ?><br />
  <?php echo $_POST["email"]; ?><br />
  <br /></p>

  <table summary="Price Quotation" align="center" style="font-family:Arial, Helvetica, sans-serif; text-align:center; border-collapse:collapse;">
    <tr style="border:1px solid black; border-collapse:collapse;">
      <th style="background-color: #BDD6EE; border:1px solid black; border-collapse:collapse;">Product Name</th>

      <th style="background-color: #BDD6EE; border:1px solid black; border-collapse:collapse;">Price</th>

      <th style="background-color: #BDD6EE; border:1px solid black; border-collapse:collapse;">Quantity</th>

      <th style="background-color: #BDD6EE; border:1px solid black; border-collapse:collapse;">Extended Price</th>
    </tr>

    <tr style="border:1px solid black; border-collapse:collapse;">
      <td style="border:1px solid black; border-collapse:collapse;">Articulate Storyline</td>

      <td style="border:1px solid black; border-collapse:collapse;"><?php
                  $sl12price=1398;
                  setlocale(LC_MONETARY,"en_US");
                  echo money_format("%n", $sl12price); ?></td>

      <td style="border:1px solid black; border-collapse:collapse;"><?php echo $_POST["sl12qty"]; ?></td>

      <td style="border:1px solid black; border-collapse:collapse;"><?php
                  $sl12price=1398;
                  setlocale(LC_MONETARY,"en_US");
                  echo money_format("%n", ($sl12price*$_POST["sl12qty"])); ?></td>
    </tr>

    <tr>
      <td border=""></td>

      <td border=""></td>

      <td style="background-color: #BDD6EE; border:1px solid black; border-collapse:collapse;"><strong>Quote Total:</strong></td>

      <td style="background-color: #BDD6EE; border:1px solid black; border-collapse:collapse;"><strong><?php
                  $sl12price=1398;
                  setlocale(LC_MONETARY,"en_US");
                  echo money_format("%n", ($sl12price*$_POST["sl12qty"])); ?></strong></td>
    </tr>
  </table>
  <br />
  <p style="font-family:Arial, Helvetica, sans-serif; text-align:center; color:#2E74B5;"><strong>Your Articulate Studio '13 or Articulate Storyline purchase also includes
  Articulate Replay and the Articulate Volume 1 Character Bundle at no additional charge if purchased prior
  to the quote expiration date.</p>


  <p style="font-family:Arial, Helvetica, sans-serif; text-align:center; font-size:12px;">ALL QUOTED AMOUNTS ARE IN US $ AND EXCLUDE TAXES. IF APPLICABLE, SALES AND USE TAX WILL
  BE INCLUDED IN THE INVOICED AMOUNT. ARTICULATE DOES NOT COLLECT VALUE ADDED TAX (VAT).
  UPGRADE QUOTES &amp; PRICES ASSUME THAT YOU MEET UPGRADE QUALIFICATIONS. ARTICULATE PRODUCTS
  ARE DISTRIBUTED BY ELECTRONIC DOWNLOAD FOR IMMEDIATE ACCESS. CD-ROM DISTRIBUTION IS NOT
  AVAILABLE.</strong><br />
  <br />
  Please place your order at our online store: <a href=
  "http://www.articulate.com/store/store.php">www.articulate.com/store/store.php</a><br /></p>

  <br />
  <hr />

  <p style="font-family:Arial, Helvetica, sans-serif; text-align:center;"><a href=
  "http://www.articulate.com">www.articulate.com</a></p>
</body>
</html>
