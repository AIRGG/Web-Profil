//event saat di klik

$('.page-scroll').on('click' , function(e){

	var tujuan = $(this).attr('href');
	
	var elementTujuan = $(tujuan);
	
	$('body').animate({
	
		scrolltop: elementTujuan.offset().top - 50
	
	}, 1250 );
	
	e.preventdefault
	
});


//parallax
$(window).on('load', function(){
  $('.pkiri').addClass('pmuncul');
  $('.pkanan').addClass('pmuncul');
});
$(window).scroll(function (){
  var ws = $(this).scrollTop();
  
   $('.jumbotron h3').css({
      'transform' : 'translate(0px, '+ ws/4 +'%)'
   });
   
   //portfolio
   if(ws > $('.portfolio').offset().top) {
     $('.portfolio .thumbnail').each(function(i){
       setTimeout(function(){
         $('.portfolio .thumbnail').eq(i).addClass('muncul');
       }, 300 * i + 1);
     });
   }
   
   
   
});
