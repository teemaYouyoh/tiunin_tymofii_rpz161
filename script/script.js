$(document).ready(function () {

  $('.sl').slick({
   	autoplay: true,
   	autoplaySpeed: 2500,
   	speed: 1000,
   	dots: false,
   	arrows: false,
   	pauseOnHover: true,/*
   	dotsClass: "my-dots sl-dots"*/
   	
   });

  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    speed: 1000,
    dots: true,
    arrows: true,
    pauseOnHover: true,/*
    dotsClass: "my-dots"*/
  });

  $("#e1").select2();


  loadGoods(); 
});

function loadGoods(){
  $.getJSON('goods.json', function(data){
    //console.log(data);
    var out = '';
    for (var key in data){
      out+='<h2>'+data[key]['name']+'</h2>';
      out+='<p>'+data[key]['cost']+'</p>';
    }
    $('.goods').html(out);
  })

}


/* $("[src='images/img-why1.png']").hover(function(){
 	$(this).effect("shake")},function(){
 		$(this).attr("src","images/why1.png");
});*/

/*$("[src='images/why1.png']").hover(function(){
 	$(this).attr("src","images/why1_hover.png")},function(){
 		$(this).attr("src","images/why1.png");
});

$("[src='images/why2.png']").hover(function(){
 	$(this).attr("src","images/why2_hover.png")},function(){
 		$(this).attr("src","images/why2.png");
});

$("[src='images/why3.png']").hover(function(){
 	$(this).attr("src","images/why3_hover.png")},function(){
 		$(this).attr("src","images/why3.png");
});

$("[src='images/why4.png']").hover(function(){
 	$(this).attr("src","images/why4_hover.png")},function(){
 		$(this).attr("src","images/why4.png");
});*/

