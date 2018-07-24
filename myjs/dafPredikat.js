var tabelPredikat;

$(document).ready(function() {
	console.log('data belum lengkap untuk di check');

   tabelPredikat = $("#tabelPredikat").DataTable( {
   		'ajax': 'dataPredikat/daftarPredikat',
		'orders': [],
        "scrollY":        "300px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
