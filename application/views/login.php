<body style="background-color: #2bff1e;">
  <audio autoplay loop>
    <source src="gameAudio/bermain2.mp3" type="audio/mp3">
  </audio>
  <div class="text-center" style="position: absolute; z-index: -1;">
    <img src="gambar/gambarLatar/latarLogin.png" class="img-fluid" alt="Responsive image" >
  </div>
    <div class="row col-md-12" style="padding-top: 30%">
      <div class="col-md-4"> </div>
      <div class="col-md-4 text-center">  
        <?php if($this->session->flashdata('daftar_berhasil')) : ?>
          <div class="alert alert-primary alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong> <span class="glyphicon glyphicon-ok-sign"></span><?php echo $this->session->flashdata('daftar_berhasil') ?> </strong>
          </div>
        <?php endif;?>   
        <?php if($this->session->flashdata('daftar_gagal')) : ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong> <span class="glyphicon glyphicon-ok-sign"></span><?php echo $this->session->flashdata('daftar_gagal') ?> </strong>
          </div>
        <?php endif;?>  
        <?php if($this->session->flashdata('masuk_gagal')) : ?>
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong> <span class="glyphicon glyphicon-ok-sign"></span><?php echo $this->session->flashdata('masuk_gagal') ?> </strong>
          </div>
        <?php endif;?>  
        <form class="form-horizontal" action="/bebio/login/validasiLogin" method="post">
          <div class="form-group row">
            <label class="col-md-4 text-left labelForm"><h3>Nama :</h3></label>
            <div class="col-md-8">
              <input type="text" name="nama" class="form-control nama" id="Text" placeholder="Nama" required="">
            </div>
          </div> 
          <div class="form-group row">
            <label class="col-md-4 text-left labelForm"><h3>Sandi :</h3></label>
            <div class="col-md-8">
              <input type="password" name="sandi" class="form-control sandi" id="inputPassword" placeholder="Sandi" required="">
            </div>
          </div> 
          <div class="form-group row" style="height: 15px;">
            <div class="col-md-6">
              <a href="/bebio/daftar" onclick="klikAudio()"><img src="./gambar/tombolPilihan/daftar.png" class="tombol text-right"></a>
            </div>
            <div class="col-md-6">
              <button type="submit" class="tombolMasuk text-left tombol" name="masuk" onclick="klikAudio()"></button>
            </div>
          </div> 
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
   <script src="./myjs/validasiForm.js"></script>
</body>
