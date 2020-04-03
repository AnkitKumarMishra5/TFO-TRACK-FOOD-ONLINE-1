$(document).ready(function(){
    $('.def').css('z-index','0');
    $(".def").hover(function(){
        $(this).css({"height": "320px","width": "35%","z-index":"2"});
    }, 
    function () {
        $(this).css({"height": "310px","width": "33.33%","z-index":"0"});
    });
    $("#tfocheck").click(function(){
        $(".nonveg").toggle();
    });
    $("#tfochecknon").click(function(){
        $(".veggie").toggle();
    });
    $("#tfocheck1").change(function(){
        $(".breakfast").toggle();
    });
    $("#tfocheck3").change(function(){
        $(".snacks").toggle();
    });

    $("#tfocheck4").change(function(){
        $(".italian").toggle();
    });
    $("#tfocheck6").change(function(){
        $(".pizza").toggle();
    });
    $("#tfocheck7").change(function(){
        $(".drinks").toggle();
    });
    $("#tfocheck5").change(function(){
        $(".burger").toggle();
    });
    $("#codcheck").change(function(){
        $(".pay").toggle();
    });
});
