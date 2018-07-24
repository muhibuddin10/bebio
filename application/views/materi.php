 <audio autoplay loop>
    <source src="gameAudio/bermain2.mp3" type="audio/mp3">
  </audio>
<body style="background-color: #8de400;">
  <div class="text-center" style="position: absolute; z-index: -1;">
    <img src="gambar/gambarLatar/latarMateri.png" class="img-fluid" alt="Responsive image" >
  </div>
  <div class="header" style="padding-top: 30px;">
	  <div class="col-md-12 position-absolute">
	    <div class="text-center" style="z-index: 1;">
	      <?php
	      	if($perunggu==1 && $perak==1 && $emas==1){
      			echo '<img src="gambar/header/headerD.png" class="img-fluid" alt="Responsive image" style="box-shadow:  0px 7px 20px green; border-radius: 10px; background-color: #008aff;">';
      		}elseif ($perunggu==1 && $perak==1 && $emas==0) {
      			echo '<img src="gambar/header/headerC.png" class="img-fluid" alt="Responsive image" style="box-shadow:  0px 7px 20px green; border-radius: 10px; background-color: #008aff;">';
      		}elseif ($perunggu==1 && $perak==0 && $emas==0) {
      			echo '<img src="gambar/header/headerB.png" class="img-fluid" alt="Responsive image" style="box-shadow:  0px 7px 20px green; border-radius: 10px; background-color: #008aff;">';
      		}else{
      			echo '<img src="gambar/header/headerA.png" class="img-fluid" alt="Responsive image" style="box-shadow:  0px 7px 20px green; border-radius: 10px; background-color: #008aff;">';
      		}
	      ?>
	    </div>     
	  </div> 
	  <div class="row col-md-12 position-absolute infoHeader" style="z-index: 2;">
	    <div class="col-md-6" style="padding-left: 205px;">
	      <h2><img src="gambar/tulisan/poin.png" class="img-fluid" alt="Responsive image"> <?php echo $totalJumlahPoin; ?></h2>
	    </div> 
      <div class="col-md-6 text-center" style="padding-top: 50px;">
       <a href="/bebio/dataPredikat" onclick="klikAudio()"><img src="./gambar/tombolPilihan/lainnya.png" class="tombolBiru text-right"></a>
      </div> 
	  </div> 
  </div>
  <div class="row col-md-12" style="padding-top: 160px;">
  	 <div class="row col-md-5 text-right">
  	 	<div class="col-sm-6">
  	 	    <?php if($bintangM1==1){
  	 	    		echo '<img src="./gambar/bintang/bintang1.png" style="padding-left: 120px;">';
  	 	    	}elseif($bintangM1==2){
  	 	    		echo '<img src="./gambar/bintang/bintang2.png" style="padding-left: 120px;">';
  	 	    	}elseif($bintangM1==3){
  	 	    		echo '<img src="./gambar/bintang/bintang3.png" style="padding-left: 120px;">';
  	 	    	}else{
  	 	    		echo '<img src="./gambar/bintang/bintang0.png" style="padding-left: 120px;">';
  	 	    	}  
  	 	    ?> 
  	 		<a style="padding-left: 120px"  onclick="klikAudio()"><img src="./gambar/tombolMateri/1satu.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriSatu"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 180px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> <?php echo $poinM1; ?> </text> Poin</text>
	    	</div>
  	 	</div>
  	 	<div class="col-sm-6">
        <?php if($bintangM2==1){
              echo '<img src="./gambar/bintang/bintang1.png" style="padding-left: 80px;">';
            }elseif($bintangM2==2){
              echo '<img src="./gambar/bintang/bintang2.png" style="padding-left: 80px;">';
            }elseif($bintangM2==3){
              echo '<img src="./gambar/bintang/bintang3.png" style="padding-left: 80px;">';
            }else{
              echo '<img src="./gambar/bintang/bintang0.png" style="padding-left: 80px;">';
            }  
        ?> 
  	 		<a style="padding-left: 80px" onclick="klikAudio()"><img src="./gambar/tombolMateri/22dua.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriDua"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 140px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> <?php echo $poinM2; ?> </text> Poin</text>
	    	</div>
  	 	</div>
	    <div class="col-sm-6" style="padding-top: 10px">
        <?php if($bintangM3==1){
              echo '<img src="./gambar/bintang/bintang1.png" style="padding-left: 120px;">';
            }elseif($bintangM3==2){
              echo '<img src="./gambar/bintang/bintang2.png" style="padding-left: 120px;">';
            }elseif($bintangM3==3){
              echo '<img src="./gambar/bintang/bintang3.png" style="padding-left: 120px;">';
            }else{
              echo '<img src="./gambar/bintang/bintang0.png" style="padding-left: 120px;">';
            }  
        ?> 
  	 		<a style="padding-left: 120px" onclick="klikAudio()"><img src="./gambar/tombolMateri/3tiga.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriTiga"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 180px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> <?php echo $poinM3; ?> </text> Poin</text>
	    	</div>
  	 	</div>
  	 	<div class="col-sm-6" style="padding-top: 10px">
        <?php if($bintangM4==1){
              echo '<img src="./gambar/bintang/bintang1.png" style="padding-left: 80px;">';
            }elseif($bintangM4==2){
              echo '<img src="./gambar/bintang/bintang2.png" style="padding-left: 80px;">';
            }elseif($bintangM4==3){
              echo '<img src="./gambar/bintang/bintang3.png" style="padding-left: 80px;">';
            }else{
              echo '<img src="./gambar/bintang/bintang0.png" style="padding-left: 80px;">';
            }  
        ?> 
  	 		<a style="padding-left: 80px" onclick="klikAudio()"><img src="./gambar/tombolMateri/4empat.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriEmpat"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 140px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> <?php echo $poinM4; ?> </text> Poin</text>
	    	</div>
  	 	</div>
	 </div>
	 <div class="row col-md-2">
	 	<?php
	      	if($selesai==1){
      			echo '<img src="./gambar/piala/selesai.png" style="padding-left:15px;">';
      		}else{
      			echo '<img src="./gambar/piala/tandaTanya.png" style="padding-left:15px;">';
      		}
	      ?>
	    
	    <div class="col-md-12">
			<a style="padding-left: 83px" onclick="klikAudio()"><img src="./gambar/tombolPilihan/keluar.png" class="tombolBiru text-right" data-toggle="modal" data-target="#konfirmasiKeluar"></a>
		 </div> 
	 </div>
	 <div class="row col-md-5 text-right">
	 	<div class="col-sm-6">
        <?php if($bintangM5==1){
              echo '<img src="./gambar/bintang/bintang1.png" style="padding-left: 97px;">';
            }elseif($bintangM5==2){
              echo '<img src="./gambar/bintang/bintang2.png" style="padding-left: 97px;">';
            }elseif($bintangM5==3){
              echo '<img src="./gambar/bintang/bintang3.png" style="padding-left: 97px;">';
            }else{
              echo '<img src="./gambar/bintang/bintang0.png" style="padding-left: 97px;">';
            }  
        ?> 
  	 		<a style="padding-left: 97px" onclick="klikAudio()"><img src="./gambar/tombolMateri/5lima.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriLima"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 160px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> <?php echo $poinM5; ?> </text> Poin</text>
	    	</div>
  	 	</div>
  	 	<div class="col-sm-6">
  	 		 <?php if($bintangM6==1){
              echo '<img src="./gambar/bintang/bintang1.png"';
            }elseif($bintangM6==2){
              echo '<img src="./gambar/bintang/bintang2.png"';
            }elseif($bintangM6==3){
              echo '<img src="./gambar/bintang/bintang3.png"';
            }else{
              echo '<img src="./gambar/bintang/bintang0.png"';
            }  
        ?> 
  	 		<a onclick="klikAudio()"><img src="./gambar/tombolMateri/6enam.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriEnam"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 120px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> <?php echo $poinM6; ?> </text> Poin</text>
	    	</div>
  	 	</div>
	    <div class="col-sm-6" style="padding-top: 10px;">
        <?php if($bintangM7==1){
              echo '<img src="./gambar/bintang/bintang1.png" style="padding-left: 97px;">';
            }elseif($bintangM7==2){
              echo '<img src="./gambar/bintang/bintang2.png" style="padding-left: 97px;">';
            }elseif($bintangM7==3){
              echo '<img src="./gambar/bintang/bintang3.png" style="padding-left: 97px;">';
            }else{
              echo '<img src="./gambar/bintang/bintang0.png" style="padding-left: 97px;">';
            }  
        ?> 
  	 		<a style="padding-left: 97px" onclick="klikAudio()"><img src="./gambar/tombolMateri/7tujuh.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriTujuh"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 160px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> <?php echo $poinM7; ?> </text> Poin</text>
	    	</div>
  	 	</div>
  	 	<div class="col-sm-6" style="padding-top: 10px;">
        <?php if($bintangM8==1){
              echo '<img src="./gambar/bintang/bintang1.png"';
            }elseif($bintangM8==2){
              echo '<img src="./gambar/bintang/bintang2.png"';
            }elseif($bintangM8==3){
              echo '<img src="./gambar/bintang/bintang3.png"';
            }else{
              echo '<img src="./gambar/bintang/bintang0.png"';
            }  
        ?> 
  	 		<a onclick="klikAudio()"><img src="./gambar/tombolMateri/8delapan.png" class="tombolLevel" data-toggle="modal" data-target="#mainMateriDelapan"></a>
	    	<div class="row bayangHijau" style="padding-top: 5px;">
	    		<text id="poinLevel" style="padding-left: 120px; color:white; font-family: Alpha Echo; letter-spacing: 2px; font-size: 15px;"><text> 200 </text> Poin</text>
	    	</div>
  	 	</div>
	 </div>
  </div>
  <!-- Modal konfirmasi Keluar -->
  <div class="modal fade" id="konfirmasiKeluar">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Yakin ingin keluar ?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue" onclick="klikAudio()">&times;</button>
        </div>      
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/tidak.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/login/keluar"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru" onclick="klikAudio()"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Materi Satu -->
  <div class="modal fade" id="mainMateriSatu">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiSatu" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Materi Dua -->
  <div class="modal fade" id="mainMateriDua">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiDua" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Materi Tiga -->
  <div class="modal fade" id="mainMateriTiga">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiTiga" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Materi Empat -->
  <div class="modal fade" id="mainMateriEmpat">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiEmpat" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Materi Lima -->
  <div class="modal fade" id="mainMateriLima">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiLima" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Materi Enam -->
  <div class="modal fade" id="mainMateriEnam">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiEnam" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Materi Tujuh -->
  <div class="modal fade" id="mainMateriTujuh">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiTujuh" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Materi Delapan -->
  <div class="modal fade" id="mainMateriDelapan">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Mulai Permainan?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        <div class="modal-body">
          <h6 class="modal-title" style="color: white; font-family: Mangal; text-align: center;">
            Setiap materi permainan terdiri dari enam soal dengan batas waktu menjawab enam menit!
          </h6>
        </div>
        <div class="modal-footer">
          <a onclick="klikAudio()"><img src="./gambar/tombolPilihan/batal.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materiDelapan" onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
      </div>
    </div>
  </div>
</body>
