$(function(){
    function listMore(){
        let size_li = $('.k-special_box li').size();
        win=$(window).width();
        if(win <= 640){
            let x=1;
            $('.k-special_box li:lt('+x+')').show();
            $('.k-more_btn').click(function(){
                x= (x+6 <= size_li) ? x+6 : size_li;
                $('.k-special_box li:lt('+x+')').show();  //1개 노출
            });
        }else{
            let x=6;
            $('.k-special_box li:lt('+x+')').show();
            $('.more_btn').click(function(){
                x= (x+6 <= size_li) ? x+6 : size_li;       //6개 노출
            $('.k-special_box li:lt('+x+')').show();    
            });
        }
    }
    listMore();
    $(window).on("resize",function(){
        listMore()
        location.reload();
    });

});

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


