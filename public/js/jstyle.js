setInterval(function(){
    $(document).ready(function() {
    if($(window).width() < 500) {
      $("#img1").attr("src","img/aa.jpg")
      $("#img2").attr("src","img/bb.jpg")
      $("#img3").attr("src","img/cc.jpg")
    }else{
      $("#img1").attr("src","img/a.jpg")
      $("#img2").attr("src","img/b.jpg")
      $("#img3").attr("src","img/c.jpg")
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

