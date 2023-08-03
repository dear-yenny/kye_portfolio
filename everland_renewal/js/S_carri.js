$(function(){
  $('.tab li a').click(function(){
    $('p img').attr('src',$(this).attr('href'))

    return false;

  });

  $("ul.S-attr li:not("+$("ul.tab li a.S-selected").attr("href")+")").hide();
  /*class 속성이 setected 가 설정되어 있는 a 태그의 href 속성을 가져온(#tab1)패널 이외에는 비표시상태*/
  $("ul.tab li a").click(function(){
  $("ul.tab li a").removeClass("selected");
  $(this).addClass("selected");
  /*탭이 클릭되면 모든 탭(ul.tab li a)의  class 속성값 "selected"를 일단 삭제하고 클릭된 탭에 class속성 "selected"를 넣는 처리를 하여 클릭된 탭만을 선택된 상태(selected)로 변경*/
  $("ul.S-attr li").hide();
  $($(this).attr("href")).show();
  /*모든 패널을 일단 hide()로 비표시로 설정하고 $(this).attr("href")로 클릭된 a태그의 href 속성값을 가져와 값과 같은 이름의 id속성을 가진 패널을 show()로 표시함=> 탭에서 선택된 패널만 표시*/
    return false;
  });


  $("ul.S-attr button:not("+$("ul.tab button a.S-selected").attr("href")+")").hide();
  /*class 속성이 setected 가 설정되어 있는 a 태그의 href 속성을 가져온(#tab1)패널 이외에는 비표시상태*/
  $("ul.tab button a").click(function(){
  $("ul.tab button a").removeClass("selected");
  $(this).addClass("selected");
  /*탭이 클릭되면 모든 탭(ul.tab li a)의  class 속성값 "selected"를 일단 삭제하고 클릭된 탭에 class속성 "selected"를 넣는 처리를 하여 클릭된 탭만을 선택된 상태(selected)로 변경*/
  $("ul.S-attr button").hide();
  $($(this).attr("href")).show();
  /*모든 패널을 일단 hide()로 비표시로 설정하고 $(this).attr("href")로 클릭된 a태그의 href 속성값을 가져와 값과 같은 이름의 id속성을 가진 패널을 show()로 표시함=> 탭에서 선택된 패널만 표시*/
    return false;
  });

  
  function listMore(){

    let size_li = $("#S-attrctn span a").size();

    win = $(window).width();

    if(win <= 300) {
        let x = 2;
        $("#S-attrctn span a:lt("+x+")").show();

        $(".more_btn").click(function(){
            x = (x+2 <= size_li) ? x+2 : size_li;
            $("#S-attrctn span a:lt("+x+")").show();
        });
    // } else if (win>640 && win<=768) {
    //     let x = 3;
    //     $(".bestseller_box ul li:lt("+x+")").show();
    //     $(".more_btn").click(function(){
    //         x = (x+3 <= size_li) ? x+3 : size_li;
    //         $(".bestseller_box ul li:lt("+x+")").show();
    //     });
    // } else {
    //     let x = 4;
    //     $(".bestseller_box ul li:lt("+x+")").show();
    //     $(".more_btn").click(function(){
    //         x = (x+4 <= size_li) ? x+4 : size_li;
    //         $(".bestseller_box ul li:lt("+x+")").show();
        // });
    }
  }
  listMore();
  $(window).on("resize", function(){
    listMore()
    location.reload();
  });


});



