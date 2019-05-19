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