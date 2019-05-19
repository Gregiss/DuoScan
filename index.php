<?php require 'functions/funcao.php';?>
<!DOCTYPE html>

<html dir="ltr" mozdisallowselectionprint>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google" content="notranslate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DuoScan</title>


    <link rel="stylesheet" href="viewer.css">
    <link rel="stylesheet" href="/assets/css/style.css">


    <!-- This snippet is used in production (included from viewer.html) -->
    <link rel="resource" type="application/l10n" href="locale/locale.properties">
    <script src="../build/pdf.js"></script>

    <datapdf id="dataview" style="display: none;" data-pdf="/pdf/One Punch Man 105 - Yusuke Murata.pdf"></datapdf> <!-- Get data pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="viewer.js"></script>    

  </head>

  <body tabindex="1" class="loadingInProgress">
      <?php autoload(); ?>
  </body>

  <script src="/assets/js/loading.js?version=1"></script>
  <script src="/assets/js/pace.min.js"></script>

  </html>