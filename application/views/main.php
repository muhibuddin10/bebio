<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./mycss/mycss.css">
    <script src="./jquery/jquery.min.js"></script>
    <script src="./js/jquery.dataTableScrol.min.js"></script>
    <title>Bebio Game</title>
  </head>
  <audio id="audioKlik">
    <source src="gameAudio/klik.wav" type="audio/wav">
  </audio>
  <audio id="audioDragDrop">
    <source src="gameAudio/dragNdrop.wav" type="audio/wav">
  </audio>
  <?php $this->load->view($halaman); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./popper/popper.min.js"></script>+
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./myjs/mainJs.js"></script>
    
</html>