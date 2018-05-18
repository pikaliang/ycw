$(".tuijian_wenzi h1").click(function(){
      $(this).css("color","red").siblings().css("color","#000");
      $.ajax({
          url:"index.php?m=index&c=category&a=gettypes",
          data:{cid:$(this).attr("data-id")},
          dataType:"json",
          success:function(r){
              let str="";
              $.each(r,function(index,data){
                 str+=` <a href="index.php?m=index&c=category&a=showlist&tid=${data.tid}" class="remen_neirong_item">
                    <img src="${data.tthumb}" alt="">
                    <h1>${data.tname}</h1>
                </a>`;
              });
              $(".remen_neirong").html(str);
          }
      })
});