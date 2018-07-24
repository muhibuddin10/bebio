<body style="background-color: #2bff1e;">
	<audio autoplay>
    	<source src="gameAudio/bintang2.wav" type="audio/wav">
  	</audio>
	<div class="text-center" style="position: absolute; z-index: -1;">
		<img src="gambar/penghargaan/bintangTiga.png" class="img-fluid" alt="Responsive image" >
	</div>
	<div class="col-md-12 text-center" style="padding-top: 30%;">
		<h2 style="font-family: Alpha Echo; font-size:40px; color:white; text-shadow:  0px 3px 8px blue;"><img src="gambar/tulisan/poin.png" class="img-fluid" alt="Responsive image"><?php echo $this->session->flashdata('poin'); ?></h2>
	</div>
	<div class="col-md-12 text-center" style="padding-top: 5%;">
		<a href="/bebio/materi" style="padding-right: 2px;" onclick="klikAudio()"><img src="./gambar/tombolPilihan/selanjutnya.png" class="tombolBiru text-right"></a>
	</div>
</body>
