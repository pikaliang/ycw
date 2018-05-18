$(".shaixuan_item a").click(function () {
    $(this).css("color", "#e11b4c").parent().siblings().find('a').css("color","");
    if ($(this).hasClass("price")) {
        var url = "index.php?m=index&c=category&a=getpricelist";
    } else if($(this).hasClass("order")) {
        var url="index.php?m=index&c=category&a=getorderlist";
    }else if($(this).hasClass("new")){
        var url="index.php?m=index&c=category&a=getnewlist";
    }

        $.ajax({
            url,
            data: {tid: $(".top").attr("id")},
            dataType: "json",
            success: function (r) {
                let str = "";
                $.each(r, function (index, data) {
                    str += ` <a href="index.php?m=index&c=category&a=showcontent&gid=${data['gid']}" class="content_item">
                <img src="${data.gthumb}" alt="">
                <div class="content_wenzi">
                    <h1>${data.gname}</h1>
                    <h2>${data.gdescription}</h2>
                </div>
                <div class="content_wenzi content_wenzi2">
                    <h1>￥${data.gprice}</h1>
                </div>
            </a>`;
                });
                $(".content_zong").html(str);
            }
        })
});