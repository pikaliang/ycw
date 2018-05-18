// $.ajax({
//     url:$("#address").attr("data-src"),
//     success:function (r) {
//         console.log(r);
//     }
// });
// $.get($("#address").attr("data-src"),function(r){
//     console.log(r);
// });
//
// []
//  [{name:"山西"},city:[{name:"太原",area:["小店区"]},{}]]
$.getJSON($("#address").attr("data-src"), function (r) {
    let data=r;
    let str="<option value='未选择'>请选择省份</option>";
    let name=$("#province").val();
    data.forEach(function(val,index){
        if(name==val.name) {
            str += `<option selected>${val.name}</option>`
        }else{
            str += `<option>${val.name}</option>`
        }
    });
    $("#province").html(str);
    let pindex;
    $("#province").change(function(){
        pindex=this.selectedIndex-1;
        let city=data[pindex].city;
        let str="<option value='未选择'>请选择市</option>"
        city.forEach(function(val,index){
            str+=`<option>${val.name}</option>`;
        });
        $("#city").html(str);
    });
    $("#city").change(function(){
       let cindex=this.selectedIndex-1;
       let area=data[pindex].city[cindex].area;
       let str="<option value='未选择'>请选择区</option>";
       area.forEach(function(val,index){
           str+=`<option>${val}</option>`;
       });
       $("#area").html(str);
    });
})