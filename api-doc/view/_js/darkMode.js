$("#darkMode").click(function(){
    darkMode();
});

function darkMode(){
    $("body").css({
        backgroundColor: "#1C1C1C"
    });

    $("#info").css({
        color: "#fff"
    });

    $("span#info").css({
        color: "#00BFFF",
        fontWeight: "bold"
    });

    $("p#info").css({
        color: "#fff"
    });

    $(".card-body").css({
       backgroundColor: "#363636" 
    });

    $(".modal fade").css({
       backgroundColor: "#696969" 
    });

    $(".card-header").css({
        color: "#F8F8FF"
    });

    $("#labelM").css({
        color: "#fff"
    });

    $("#light").css({
        color: "#fff"
    });

    $(".link").css({
        color: "#00BFFF"
    });

    $("#dark").addClass('darkMode');

}