$("#darkMode").click(function(){
    var dark = darkMode();
    $.cookie('darkModeOn', dark);
});

function darkMode(){
    $("body").css({
        backgroundColor: "#1C1C1C"
    });

    $("#info").css({
        color: "#F8F8FF"
    });

    $("span#info").css({
        color: "#1E90FF",
        fontWeight: "bold"
    });

    $("p#info").css({
        color: "#F8F8FF"
    });

    $(".card-body").css({
        backgroundColor: "#363636" 
    });

    $(".modal-content").css({
        backgroundColor: "#696969" 
    });

    $(".modal fade").css({
       backgroundColor: "#696969" 
    });

    $(".card-header").css({
        color: "#F8F8FF"
    });

    $("#labelM").css({
        color: "#F8F8FF"
    });

    $(".modal-title").css({
        color: "#F8F8FF"
    });

    $(".modal-body").css({
        color: "#F8F8FF"
    });

    $("#light").css({
        color: "#F8F8FF"
    });

    $(".link").css({
        color: "#FFFF00"
    });

    $("#dark").addClass('darkMode');
    $(".dark2").addClass('darkMode3');
    $("#darkMode").html('Reload page for disable Dark Mode').addClass('darkMode2');
    $("#logoApi").attr('src', 'view/_img/apidoclogowhite.png');
}