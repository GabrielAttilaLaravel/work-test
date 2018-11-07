$( ".flag" ).click(function() {
    $("#content-flag").attr("style", "display:block!important");
});

function selectedPrefix(obj){
    var prefix = $(obj).data('prefix-flag');
    var pais = $(obj).data('pais');
    var host = "http://"+window.location.host;

    $("#content-flag").attr("style", "display:none!important");

    document.getElementById("phone").value = prefix;
    $(".flag img").attr("src", host+"/img/flags/"+pais+".png");
    //document.getElementById("flag").src = host+"/img/flags/"+pais+".png";
}