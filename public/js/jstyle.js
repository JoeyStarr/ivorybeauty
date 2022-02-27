setInterval(function(){
    $(document).ready(function() {
    if($(window).width() < 500) {
      $("#img1").attr("src","/shooting/dove_b.png")
      $("#img2").attr("src","img/de.png")
      $("#img3").attr("src","img/bingerak.png")
    }else{
      $("#img1").attr("src","/shooting/dove_b.png")
      $("#img2").attr("src","img/de.png")
      $("#img3").attr("src","img/bingerak.png")
    }
  });
},1000)


//POUR DESKTOP
$(document).ready(function() {
    $("#menu").click(function() {
    $("#menmen").show(300);
    $("#menpan").hide();
  });
    $("#croixmen").click(function() {
    $("#menmen").hide();
  });
})

$(document).ready(function() {
    $("#panier").click(function() {
    $("#menpan").show(300);
    $("#menmen").hide();
  });
    $("#croixpan").click(function() {
    $("#menpan").hide();
  });
})

//POUR MOBILE 
$(document).ready(function() {
    $("#menumob").click(function() {
    $("#menmen").show(300);
    $("#menpan").hide();
  });
    $("#croixmen").click(function() {
    $("#menmen").hide(300);
  });
})

$(document).ready(function() {
    $("#paniermob").click(function() {
    $("#menpan").show(300);
    $("#menmen").hide();
  });
    $("#croixpan").click(function() {
    $("#menpan").hide(300);
  });
})

//box whatsapp

$(document).ready(function() {
    $(".whalog").click(function() {
    $(".whaDis").show(300);
    $(".whalog").hide(600);
  })
})

$(document).ready(function() {
    $(".croixWha").click(function() {
    $(".whaDis").hide(600);
    $(".whalog").show(600);
  })
})

