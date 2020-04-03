$(document).ready(function(){
    $(".COD").click(function(){
        $(this).css("background-color","rgba(31,122,61, 0.349)");
        $(this).css("border","1px solid green");
        $("#dcbtn").attr("disabled",true);
        $("#ccbtn").attr("disabled",true);

    });
    $('#paybtn1').click(function(){
        $("#dcbtn").css("background-color","rgba(31,122,61, 0.349)");
        $(".COD").css("background-color", "#f1f1f1");
        $(".COD").css("border","1px solid transparent");
        $("#ccbtn").attr("disabled",true);
        $(".COD").attr("disabled",true);
    });
    $('#paybtn2').click(function(){
        $("#ccbtn").css("background-color","rgba(31,122,61, 0.349)");
        $(".COD").css("background-color", "#f1f1f1");
        $(".COD").css("border","1px solid transparent");
        $("#dcbtn").attr("disabled",true);
        $(".COD").attr("disabled",true);
    });
    $('.done').click(function(){
        $(this).css("background-color","rgba(31,122,61, 0.349)"); 
        var address= $('.input').val();
        $('.info').html("<b>" + address +"</b>");
    });
});

