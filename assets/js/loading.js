const stateObj = { foo: "bar" };

$("href").click(function(){
    var href = $(this).data("href");
    if(href == ""){
        console.log("Return blank page");
    }
    else{
        history.pushState(stateObj, "DuoScan", href);
        location.reload();
    }
});

$(".manga_a").hover(function(){
    $(this).css("box-shadow", "10px 10px 5px 0px rgba(0,0,0,0.65)");
});

$(".manga_a").mouseout(function(){
    $(this).css("box-shadow", "10px 10px 5px 0px rgba(0,0,0,0.35)");
});