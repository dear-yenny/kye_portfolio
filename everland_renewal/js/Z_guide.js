$(function(){
  $('.tab li a').click(function(){
    $('p img').attr('src',$(this).attr('href'))

    return false;

  });

  $("ul.z-attr li:not("+$("ul.tab li a.z-selected").attr("href")+")").hide();
  /*class 속성이 setected 가 설정되어 있는 a 태그의 href 속성을 가져온(#tab1)패널 이외에는 비표시상태*/
  $("ul.tab li a").click(function(){
  $("ul.tab li a").removeClass("selected");
  $(this).addClass("selected");
  /*탭이 클릭되면 모든 탭(ul.tab li a)의  class 속성값 "selected"를 일단 삭제하고 클릭된 탭에 class속성 "selected"를 넣는 처리를 하여 클릭된 탭만을 선택된 상태(selected)로 변경*/
  $("ul.z-attr li").hide();
  $($(this).attr("href")).show();
  /*모든 패널을 일단 hide()로 비표시로 설정하고 $(this).attr("href")로 클릭된 a태그의 href 속성값을 가져와 값과 같은 이름의 id속성을 가진 패널을 show()로 표시함=> 탭에서 선택된 패널만 표시*/
    return false;
  });


  $("ul.z-attr button:not("+$("ul.tab button a.z-selected").attr("href")+")").hide();
  /*class 속성이 setected 가 설정되어 있는 a 태그의 href 속성을 가져온(#tab1)패널 이외에는 비표시상태*/
  $("ul.tab button a").click(function(){
  $("ul.tab button a").removeClass("selected");
  $(this).addClass("selected");
  /*탭이 클릭되면 모든 탭(ul.tab li a)의  class 속성값 "selected"를 일단 삭제하고 클릭된 탭에 class속성 "selected"를 넣는 처리를 하여 클릭된 탭만을 선택된 상태(selected)로 변경*/
  $("ul.z-attr button").hide();
  $($(this).attr("href")).show();
  /*모든 패널을 일단 hide()로 비표시로 설정하고 $(this).attr("href")로 클릭된 a태그의 href 속성값을 가져와 값과 같은 이름의 id속성을 가진 패널을 show()로 표시함=> 탭에서 선택된 패널만 표시*/
    return false;
  });

  $(".z-atrbtn > .z-act1").click(function(){
    $("#one").attr('src',"../Z-img/icon/ico_act1_1.png");
  });


});



