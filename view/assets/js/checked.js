$(document).ready(function (){
    $("#check-all").click(function (){
        $(":checkbox").prop("checked", true);
    });
    $("#clear-all").click(function (){
        $(":checkbox").prop("checked", false);
    });
    $("#btn_thanhtoan").click(function (){
        if($(":checked").length === 0){
            alert("Vui lòng chọn ít nhất một mục!");
            return false;
        }
    });
});



