var t=60;
$(".yanzhengma").click(function () {
    if (!$("[name=phone]").val()) {
        return;
    }
    if(t!=60){
        return;
    }
    $(this).css({
        background: "#ccc",
        color: "#999",
        fontSize: "12px",
        lineHeight:"0.6rem"
    }).html("60s后可以重新发送");
    var st=setInterval(function () {
        t--;
        $(".yanzhengma").html(t + "s后可以重新发送");
        if(t==0){
            clearInterval(st);
            $(".yanzhengma").html("获取验证码").css({
                background:"",color:"",fontSize:"",lineHeight:""
            });
            t=60;
        }
    }, 1000);
    return;
    $.ajax({
        url: "index.php?m=index&c=personal&a=checkphone",
        data: {phone: $("[name=phone]").val()}
    })
});