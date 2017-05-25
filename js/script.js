//event
$('.page-scroll').on('click', function(e){

	//ambil isi href

	var tujuan = $(this).attr('href');

	//tangkap elemen ybs

	var elemenTujuan = $(tujuan);

	//pindahkan scroll
	$('body').animate({
		scrollTop: elemenTujuan.offset().top - 50
	}, 1250, 'easeInOutExpo');

	//.preventDefault();



});

$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown(5000);
    });
    $("#stop").click(function(){
        $("#panel").stop();
    });
});

$(document).ready(function(){
    $("#btn1").click(function(){
        alert("Text: " + $("#test").text());
    });
    $("#btn2").click(function(){
        alert("HTML: " + $("#test").html());
    });
});