<style type="text/css">
	.btnNomor {
  cursor: pointer;
  box-shadow: 0 8px 10px rgba(0, 0, 0, 0.3); 
  height: 40px;
  width: 40px;
  margin: 0 2px;
  border-radius: 50%;
  border: 5px solid white;
  color: #f2f2f2;
  font-size: 20px;
  text-align: center;
  font-family: Alpha Echo;
  display: inline-block;
  transition: background-color 0.6s ease;
  text-shadow:  0px 1px 5px blue;  
}

#a1, #a2,#a3,#a4,#a5,#a6 {
  background-color: red;   
}

.aktif{
  border: 5px solid lightblue;
}

.btnNomor:hover {
  border: 5px solid lightblue;
  box-shadow: 0 12px 15px rgba(0, 0, 0, 0.3);
}

.huruf{
	min-width: 68px;
	min-height: 69px;
	border: 2px solid lightblue;
	border-radius: 10%;
}

.pilihanHuruf{
	padding-left: 65px;
}

.carousel-item{
	background-repeat: no-repeat; 
	height: 410px;
}

.kotakPilihanHuruf{
	
	min-height: 410px;

}

.kotakSoal{
	
	min-height:410px;
}

.plus20poinA1, .plus20poinA2, .plus20poinA3, .plus20poinA4, .plus20poinA5, .plus20poinA6{
	padding-left: 360px; 
	padding-top: 20px; 
    visibility: hidden;
}

.plus20poinTampil{
	padding-left: 360px; 
	padding-top: 20px; 
	visibility: visible;
	 -webkit-animation: fadein 3s;
	 animation: fadein 1s;
}

#toastBenar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    text-align: center;
    position: fixed;
    z-index: 1;
    left: 50%;
    top: 200px;
}

#toastBenar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

.popUpBenarSemua {
	text-align: center;
    position: absolute; 
	z-index: 20; 
	padding-top: 200px; 
	visibility: hidden;
}

.popUpBenarSemuaMuncul {
	text-align: center;
    position: absolute; 
	z-index: 20; 
	padding-top: 200px; 
    visibility: visible;
    -webkit-animation: muncul 2s;
    animation: muncul 2s;
}

.popUpWaktuHabis{
	position: absolute; 
	z-index: 16; 
	padding-top: 190px; 
	visibility: hidden;
}

.popUpWaktuHabisTampil {
    visibility: visible;
    position: absolute; 
    z-index: 16; 
    padding-top: 190px;
     -webkit-animation: tampil 1s;
	 animation: tampil 1s;
}

.tutupWaktu{
	position: absolute; z-index: 25; padding-left: 640px;
	padding-top: 510px; visibility: hidden;
	opacity: 0;
}

.tutupWaktuTampil{
	position: absolute; z-index: 25; padding-left: 640px;
	padding-top: 510px; visibility: visible;
	transition: all 2s ease-in-out; 
	opacity: 1;
}

.droppable{
	border: 3px solid lightblue;
	border-radius: 10%;
}

.card-body{
	max-width: 250px;
	margin-left: 35px;
	padding-top: 40px;
}

@-webkit-keyframes tampil {
    from {top: 0px; opacity: 0;} 
    to {top: 0px; opacity: 1;}
}

@keyframes tampil {
    from {top: 0px; opacity: 0;}
    to {top: 0px; opacity: 1;}
}

@-webkit-keyframes fadein {
    from {top: 100px; opacity: 0;} 
    to {top: 200px; opacity: 1;}
}

@keyframes fadein {
    from {top: 100px; opacity: 0;}
    to {top: 200px; opacity: 1;}
}

@-webkit-keyframes muncul {
    from {top: 0px; opacity: 0;} 
    to {top: 50px; opacity: 1;}
}

@keyframes muncul {
    from {top: 0px; opacity: 0;}
    to {top: 50px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 200px; opacity: 1;} 
    to {top: 100px; opacity: 0;}
}

@keyframes fadeout {
    from {top: 200px; opacity: 1;}
    to {top: 100px; opacity: 0;}
}
.dropArea div{
	float: left;
}
.waktu{
	font-family: Alpha Echo; 
	font-size: 30px; 
	color:white; text-shadow:  0px 2px 10px blue;
}
.waktuMerah{
	font-family: Alpha Echo; 
	font-size: 30px; 
	color:#ff202c; text-shadow:  0px 2px 10px blue;
}

#poinAngka{
	font-family: Alpha Echo; font-size: 30px;
	color:white; text-shadow:  0px 2px 10px blue;
	padding-top: 15px; padding-left: 15px
}
#container-drop-1{
	padding-left: 12px;
	padding-top: 210px;
}
#container-drop-2{
	padding-left: 290px;
	padding-top: 210px;
}
#container-drop-3{
	padding-left: 290px;
	padding-top: 210px;
}
#container-drop-4{
	padding-left: 250px;
	padding-top: 210px;
}
#container-drop-5{
	padding-left: 215px;
	padding-top: 210px;
}
#container-drop-6{
	padding-left: 180px;
	padding-top: 210px;
}
</style>

<body style="background-color: #2bff1e;">
	<audio autoplay loop id="audioBermain">
   		<source src="gameAudio/bermain1.mp3" type="audio/mp3">
   	</audio>
   	<audio autoplay loop id="audioDetik">
    	<source src="gameAudio/60detik.mp3" type="audio/mp3">
    </audio>
	<audio id="audioHabisWaktu">
   		<source src="gameAudio/habisWaktu.wav" type="audio/wav">
   	</audio>
   	<audio id="audioBenar">
   		<source src="gameAudio/plusPoin.wav" type="audio/wav">
   	</audio>
   	<audio id="audioBenarSemua">
   		<source src="gameAudio/benarSemua.mp3" type="audio/mp3">
   	</audio>

  <div class="text-center" style="position: absolute; z-index: -1;">
    <img src="gambar/latarMateri/materiEnamDanTujuh.png" class="img-fluid" alt="Responsive image" >
  </div>

  <div class="col-md-12" id="toastBenar">
    <img src="gambar/penghargaan/popUpBenar.png" class="img-fluid" alt="Responsive image" >
  </div>

  <div class="col-md-12 text-center popUpWaktuHabis">
    <img src="gambar/penghargaan/popUpWaktuHabis.png" class="img-fluid" alt="Responsive image" >
    <br>
  </div>
  <div class="col-md-12 text-center popUpBenarSemua" id="popUpBenarSemua">
    <img src="gambar/penghargaan/benarSemuaa.png" class="img-fluid" alt="Responsive image" style="height: 400px; width: 400px;">
    <br>
  </div>

  <div class="col-md-12 tutupWaktu">
  	<a onclick="klikAudio(), simpanPoin()"><img src="./gambar/tombolPilihan/tutup.png" class="tombolBiru text-right">
  	</a>
  </div>

  <div class="row col-md-12" style="padding-top: 25px;">
  	<div class="col-md-4">
  		<a style="padding-left: 20px" onclick="klikAudio()"><img src="./gambar/tombolPilihan/keluar.png" class="tombolBiru text-right" data-toggle="modal" data-target="#konfirmasiKeluar">
  		</a>
  	</div>
  </div>

  <div class="container" style="padding-top: 3%">
  	<div class="row">
	  	<div class="col-md-3 text-left">
			<img src="gambar/tulisan/poinKecil.png" class="img-fluid" alt="Responsive image">
			<h2 id="poinAngka">0</h2>
	  	</div>
	  	<div class="col-md-6">
	  		<ol class="carousel-indicators">
	  			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" onclick="plusSlides(-1); klikAudio()">
				    <span aria-hidden="true"><img src="./gambar/tombolPilihan/prev.png"></span>
			 	</a>
			    <span data-target="#carouselExampleIndicators" data-slide-to="0" id="a1" class="btnNomor" onclick="currentSlide(1); klikAudio()">
			    	<b>1</b>
			    </span> 
			    <span data-target="#carouselExampleIndicators" data-slide-to="1" id="a2" class="btnNomor" onclick="currentSlide(2); klikAudio()">
			    	<b>2</b>
			    </span>
			    <span data-target="#carouselExampleIndicators" data-slide-to="2" id="a3" class="btnNomor" onclick="currentSlide(3); klikAudio()">
			    	<b>3</b>
			    </span>
			    <span data-target="#carouselExampleIndicators" data-slide-to="3" id="a4" class="btnNomor" onclick="currentSlide(4); klikAudio()">
			    	<b>4</b>
			    </span>
			    <span data-target="#carouselExampleIndicators" data-slide-to="4" id="a5" class="btnNomor" onclick="currentSlide(5); klikAudio()">
			    	<b>5</b>
			    </span>
			    <span data-target="#carouselExampleIndicators" data-slide-to="5" id="a6" class="btnNomor" onclick="currentSlide(6); klikAudio()">
			    	<b>6</b>
			    </span>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" onclick="plusSlides(1); klikAudio()">
				    <span aria-hidden="true"><img src="./gambar/tombolPilihan/next.png"></span>
			 	</a>
	 		</ol>
	  	</div>
	  	<div class="col-md-3 text-right">
	  		<img src="gambar/tulisan/waktu.png" class="img-fluid" alt="Responsive image" style="padding-right: 6px;">
			<h2 class="waktu">
				<text id="menit">6</text>:<text id="detik">00</text>
			</h2>
	  	</div>
  	</div>
  </div>
    
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false" style="padding-top: 15px;">
	<div class="carousel-inner">
	    <div class="carousel-item active" style="background-image: url('./gambar/latarMateri/materiF1.png');">
		  <div class="row">
			<div class="col-md-3">
				<div class="col-md-12 kotakPilihanHuruf">
					<div class="row card-body">
						<div class="dropArea" id="dropzone-holder-1" >
							<!-- bagian kotak pilihan huruf -->
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-9 kotakSoal">
				<div class="row col-md-12">
					<img src="./gambar/tulisan/plus20poin.png" class="plus20poinA1">
				</div>
				<div class="row col-md-12" id="container-drop-1">
					<!-- bagian kotak jawaban -->
				</div>
			</div>	 
		  </div>
	    </div>
	    <div class="carousel-item" style="background-image: url('./gambar/latarMateri/materiF2.png');">
		  <div class="row">
			<div class="col-md-3 text-left">
				<div class="col-md-12 kotakPilihanHuruf">
					<div class="row card-body">
						<div class="dropArea" id="dropzone-holder-2" >
							<!-- bagian kotak pilihan huruf -->
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-9 kotakSoal">
				<div class="row col-md-12">
					<img src="./gambar/tulisan/plus20poin.png" class="plus20poinA2">
				</div>
				<div class="row col-md-12" id="container-drop-2">
					<!-- bagian kotak jawaban -->
				</div>
			</div>	 
		  </div>
	    </div>
	    <div class="carousel-item" style="background-image: url('./gambar/latarMateri/materiF3.png');">
		  <div class="row">
			<div class="col-md-3 text-left">
				<div class="col-md-12 kotakPilihanHuruf">
					<div class="row card-body">
						<div class="dropArea" id="dropzone-holder-3" >
							<!-- bagian kotak pilihan huruf -->
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-9 kotakSoal">
				<div class="row col-md-12">
					<img src="./gambar/tulisan/plus20poin.png" class="plus20poinA3">
				</div>
				<div class="row col-md-12" id="container-drop-3">
					<!-- bagian kotak jawaban -->
				</div>
			</div>	 
		  </div>
	    </div>
	    <div class="carousel-item" style="background-image: url('./gambar/latarMateri/materiF4.png');">
		  <div class="row">
			<div class="col-md-3 text-left">
				<div class="col-md-12 kotakPilihanHuruf">
					<div class="row card-body">
						<div class="dropArea" id="dropzone-holder-4" >
							<!-- bagian kotak pilihan huruf -->
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-9 kotakSoal">
				<div class="row col-md-12">
					<img src="./gambar/tulisan/plus20poin.png" class="plus20poinA4">
				</div>
				<div class="row col-md-12" id="container-drop-4">
					<!-- bagian kotak jawaban -->
				</div>
			</div>	 
		  </div>
	    </div>
	    <div class="carousel-item" style="background-image: url('./gambar/latarMateri/materiF5.png');">
		  <div class="row">
			<div class="col-md-3 text-left">
				<div class="col-md-12 kotakPilihanHuruf">
					<div class="row card-body">
						<div class="dropArea" id="dropzone-holder-5" >
							<!-- bagian kotak pilihan huruf -->
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-9 kotakSoal">
				<div class="row col-md-12">
					<img src="./gambar/tulisan/plus20poin.png" class="plus20poinA5">
				</div>
				<div class="row col-md-12" id="container-drop-5">
					<!-- bagian kotak jawaban -->
				</div>
			</div>	 
		  </div>
	    </div>
	    <div class="carousel-item" style="background-image: url('./gambar/latarMateri/materiF6.png');">
		  <div class="row">
			<div class="col-md-3 text-left">
				<div class="col-md-12 kotakPilihanHuruf">
					<div class="row card-body">
						<div class="dropArea" id="dropzone-holder-6" >
							<!-- bagian kotak pilihan huruf -->
						</div>
					</div>
				</div>
			</div>	
			<div class="col-md-9 kotakSoal">
				<div class="row col-md-12">
					<img src="./gambar/tulisan/plus20poin.png" class="plus20poinA6">
				</div>
				<div class="row col-md-12" id="container-drop-6">
					<!-- bagian kotak jawaban -->
				</div>
			</div>	 
		  </div>
	    </div>
	</div>
  </div>

  <div class="modal fade" id="konfirmasiKeluar">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content" style="background-color: #76c115;">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="color: white; font-family: Mangal;">Yakin ingin keluar ?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:blue"  onclick="klikAudio()">&times;</button>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <a  onclick="klikAudio()"><img src="./gambar/tombolPilihan/tidak.png" class="tombolBiru" data-dismiss="modal"></a>
          <a href="/bebio/materi"  onclick="klikAudio()"><img src="./gambar/tombolPilihan/ya.png" class="tombolBiru"></a>
        </div>
        
      </div>
    </div>
  </div> 
</body>

<script>
var focus_index=0;
var kebenaran=false;
var poin = 0;
//var asw=['markisanaga','mangis',''];
var db=[
	{
		no:1,
		anw:'karbondioksida',
		status:false,
		score:0
	},
	{
		no:2,
		anw:'hidung',
		status:false,
		score:0
	},
	{
		no:3,
		anw:'faring',
		status:false,
		score:0
	},
	{
		no:4,
		anw:'bronkus',
		status:false,
		score:0
	},
	{
		no:5,
		anw:'alveolus',
		status:false,
		score:0
	},
	{
		no:6,
		anw:'diafragma',
		status:false,
		score:0
	}
];

function update_focus_index(n){
	focus_index=n;
	//console.log('focus_index '+ focus_index);
	initialization_app();
}

function initialization_app(){
	var kebenaran=false;
	//console.log('initialization_app run........');
	//console.log('ini start focus '+ db[focus_index].anw);
	var gg=db[focus_index].anw.split('');
	if(db.score!=0){
		// $('.c-drag-'+focus_index)[0].removeAttribute('ondragstart');
		// $('.c-drag-'+focus_index)[0].removeAttribute('draggable');
		// $('.draggable').removeAttribute('ondragstart');
		// $('.draggable').removeAttribute('draggable');

	}

	$('#container-drop-'+(focus_index+1)).html('');
	if(!db[focus_index].status){
		for(var i in gg){
			$('#container-drop-'+(focus_index+1)).append('<div id="div-'+(focus_index+1)+'-'+(i+1)+'" class="cheking-'+(focus_index+1)+' huruf dropzone" ondrop="drop(event)" ondragover="allowDrop(event)"></div>');
		}	
	}
	
	$('#dropzone-holder-'+(focus_index+1)).html('');
	if(db[focus_index].status!=true){
		gg.sort();
		for(var i in  gg){
			$('#dropzone-holder-'+(focus_index+1)).append('<div  class="droppable " id="drag-container-'+focus_index+'-'+i+'"  ondrop="drop(event)" ondragover="allowDrop(event)"  style="width:64px;height:65px; border:1px solid #fff;" ><img class="draggable c-drag-'+focus_index+'" id="drag-'+(focus_index+1)+'-'+(i+1)+'" draggable="true" ondragstart="drag(event)" src="./gambar/huruf/huruf'+gg[i]+'.png" value="'+gg[i]+'"></img></div>');
		}	
	}else{
		for(var i in  gg){
			$('#container-drop-'+(focus_index+1)).append('<div id="div-'+(focus_index+1)+'-'+(i+1)+'" class="cheking-'+(focus_index+1)+' huruf dropzone" ><img class="draggable" id="drag-'+(focus_index+1)+'-'+(i+1)+'"  src="./gambar/huruf/huruf'+gg[i]+'.png" value="'+gg[i]+'"></div>');

			$('#dropzone-holder-'+(focus_index+1)).append('<div    style="width:64px;height:65px; border:1px solid #fff;" ></div>');
		}	
	}
}
/*
$(document).ready(function () {
    $('body').on('mouseenter', stopNavigate)
        .on('mouseout', function () {
        $(window).on('beforeunload', windowBeforeUnload);
    });

});
function stopNavigate(event) {
    $(window).off('beforeunload');
}
function windowBeforeUnload() {
    return 'Are you sure you want to leave?';
}
$(window).on('beforeunload', windowBeforeUnload);
*/
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {

	update_focus_index(n-1);
	  var i;
	  var slides = document.getElementsByClassName("carousel-item");
	  var dots = document.getElementsByClassName("btnNomor");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" aktif", "");
	  }
	   
	  dots[slideIndex-1].className += " aktif";
	  //console.log(n);
	  //console.log('--------');
}

</script>

 <script type="text/javascript">
 
initialization_app();


function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {

    ev.dataTransfer.setData("text", ev.target.id);
    ev.dataTransfer.setData("p_id", $($(ev.target).parent()).attr('id'));
    //console.log($($(ev.target).parent()).attr('id'));
}

function drop(ev){
	audioDragDrop();
    // ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var p_id = ev.dataTransfer.getData("p_id");
   	var jawaban= db[focus_index].anw.split('');
 	var tot_count=jawaban.length;
 	var count=0;
   	var count_true=0;
	//console.log( $('#'+ev.target.id+''));
   //	console.log(ev.target.id);

   	if(($('#'+ev.target.id+'').hasClass('draggable')==false)){
   		 var target=$(ev.target).html(document.getElementById(data));
   	}
	ev.stopPropagation();



   	$('.cheking-'+(focus_index+1)+' img').each(function(e,dom){
   		count=count+1;
   		// if(count>=tot_count){
			if($(dom).attr('value')==jawaban[e]){
				//console.log('row ke '+ e);
				//console.log($(dom).attr('value')+' anda input '+jawaban[e]+' = benar');
				count_true+=1;

			}else{
				//console.log('row ke '+ e);
				//console.log($(dom).attr('value')+' anda input '+jawaban[e]+' = salah');
				count_true-=1;

			}
   		// }else{
   		// 	console.log('data belum lengkap untuk di check');
   		// }
   	});

   	if(count>=tot_count){
   		if((count_true+1)>=tot_count){
   			setTimeout(function(){
   				//alert('anda benar');
   				var x = document.getElementById("toastBenar");
			    x.className = "show";
			    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
			    var nomor=db[focus_index].no;
	   			$("#a"+nomor).css({"background-color":"#5aea00"});
	   			$('.plus20poinA'+nomor).addClass('plus20poinTampil').removeClass('plus20poinA'+nomor);
	   			var audioBenar = document.getElementById("audioBenar"); 
    			audioBenar.play();
    			$('#poinAngka').html(poin=poin+20);
    			if (poin==120) {
   					clearTimeout(timeout);	
					var audioBenarSemua = document.getElementById("audioBenarSemua"); 
					var audioBermain = document.getElementById("audioBermain");
					audioBermain.pause(); 
				    audioBenarSemua.play(); 
					audioDetik.pause(); 
					$('.popUpBenarSemua').addClass('popUpBenarSemuaMuncul').removeClass('popUpBenarSemua');
				    $('.tutupWaktu').addClass('tutupWaktuTampil').removeClass('tutupWaktu');
   				}

   			},300);
   			kebenaran=true;
   			db[focus_index].status=true;
   			initialization_app();
   			db[focus_index].score=20;
   		}else{
   			//alert('anda salah');

   			//console.log("slah jawaban anda salah");
   		}	
   	}
}

	var time_range=360;
	var menit=5;
	var detik=60;

function timing(){

	timeout= setTimeout(function(){
		time_range-=1;
		detik-=1;
		$('#menit').html(menit);
			$('#detik').html(detik);
		if(menit==1 && detik==0 ){
			$('.waktu').addClass('waktuMerah').removeClass('waktu');
		}
		if(detik==0){
			detik=60; menit-=1;
		}
		if(time_range<=0){
			audioDetik.pause(); 
			menit=0; detik=0;
			clearTimeout(timeout);	
			var audioHabisWaktu = document.getElementById("audioHabisWaktu"); 
			var audioBermain = document.getElementById("audioBermain");
		    audioHabisWaktu.play(); 
			$('.popUpWaktuHabis').addClass('popUpWaktuHabisTampil').removeClass('popUpWaktuHabis');
		    $('.tutupWaktu').addClass('tutupWaktuTampil').removeClass('tutupWaktu');
		    audioBermain.pause(); 
		    $('#menit').html(menit);
			$('#detik').html(detik);
		}else{
			timing();
			var nilai=0;
			for(var i in db){
				if(db[i].status){
					if(db[i].score!=0){
						nilai+=db[i].score;

					}
				}
				
			}
		}
	},1000);

}

timing();

function simpanPoin() 
{
		location.href= 'materiEnam/cekPoin' + '/' + poin;
}


  </script>

<!--<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">*/
 </script>-->
  


<!-- <script src="./myjs/halamanPermainan.js"></script> -->