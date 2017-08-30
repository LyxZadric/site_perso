// SLICK - COMPETENCES
$(document).ready(function(){
  $('.competence').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    adaptiveWidth : true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
    {
      breakpoint: 1090,
      settings: {
        arrows : false
      }
    },]
  });
});

// SLICK - FACT
$(document).ready(function(){
  $('.fact').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
  });
});

//MENU RESPONSIVE
$(".burger").click(function(){
    $(".nav_responsive").css("display", "block");
});
$(".nav_responsive").hover(function(){}, function(){
  $(".nav_responsive").css("display", "none");
});

//EMAIL - CONTACT

$("#mail").hover(function(){
  $("#mail").html("deborah.boodhoo@gmail.com");
},function(){
  $("#mail").html("Me contacter !");
});
/*
$("#mail").click(function(){
    $(".form").css("display", "block");
    $(".form").hover("",function(){
      $(".form").css("display", "none");
    });
    return false;
});*/
