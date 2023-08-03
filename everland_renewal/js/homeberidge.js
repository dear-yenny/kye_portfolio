$(function(){
    $(".k-box p").click(function(){
        $("k-click").css("display","none");
        // $(this).parent().next().css("display","block");
        $(this).parent().next().slideToggle();
    });
});

// 언어 아이콘 슬라이드
$(function(){
    $(".k-tmenu>ul>li>a").mouseenter(function(){
        $(this).next().stop().slideDown(400);
    });

    $(".k-tmenu>ul>li").mouseleave(function(){
        //$(".sub",this).stop().slideUp(500);
        //$("this").children(".sub").stop().slideUp(500);
        //위에 두가지로도 적용가능 밑에 값이랑 다 같은 의미
        $(this).find(".k-sub1").stop().slideUp(400);
    });
});