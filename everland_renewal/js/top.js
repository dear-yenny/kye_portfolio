$(function(){
  const defaultTop = parseInt($("#Y_top a").css("top"));

  // $(window).on("scroll", function(){
  //   const scv = $(window).scrollTop();
  //   $("#Y_top").stop().animate({
  //       top : scv + defaultTop + "px"
  //   }, 800);
  // });
    
  $("#Y_top a").click(function(){
    $.scrollTo(this.hash || 0, 2000);
    e.preventDefault();
  });
});