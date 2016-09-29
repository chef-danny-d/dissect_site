$(document).ready(function(){
    $("#close").click(function(){
        $("#acc").show();
    });
    $("#close").click(function(){
        $("#close").hide();
    });
    $("#close").click(function(){
        $("#open").show();
    });
    $("#open").click(function(){
        $("#acc").hide();
    });
    $("#open").click(function(){
        $("#open").hide();
    });
    $("#open").click(function(){
        $("#close").show();
    });

});

//$(document).ready(function(){
//  $(function(){
//    $(".table-striped tr").addClass("det_display");
//  });
//});

$(document).ready(function(){
    $(".det_display").click(function(){
        $("#det").show();
    });
    $("#exit").click(function(){
        $("#det").hide();
    });
    $(".det_display").click(function(){
        $("#overlay").show();
    });
    $("#overlay").click(function(){
        $("#det").hide();
    });
    $("#overlay").click(function(){
        $("#overlay").hide();
    });
    $("#exit").click(function(){
        $("#overlay").hide();
    });
    $(".toolbar").click(function(){
        $("#overlay").hide();
    });
    $(".toolbar").click(function(){
        $("#det").hide();
    });
});

$(document).ready(function(){
    $("#account_tab").click(function(){
        $("#account_tab_content").show();
    });
    $("#account_tab").click(function(){
        $("#connect_tab_content").hide();
    });
    $("#account_tab").click(function(){
        $("#warning_tab_content").hide();
    });
    $("#account_tab").click(function(){
        $("#account_tab").addClass("active");
    });
    $("#account_tab").click(function(){
        $("#warning_tab").removeClass("active");
    });
    $("#account_tab").click(function(){
        $("#connect_tab").removeClass("active");
    });


    $("#connect_tab").click(function(){
        $("#connect_tab_content").show();
    });
    $("#connect_tab").click(function(){
        $("#account_tab_content").hide();
    });
    $("#connect_tab").click(function(){
        $("#warning_tab_content").hide();
    });
    $("#connect_tab").click(function(){
        $("#connect_tab").addClass("active");
    });
    $("#connect_tab").click(function(){
        $("#warning_tab").removeClass("active");
    });
    $("#connect_tab").click(function(){
        $("#account_tab").removeClass("active");
    });



    $("#warning_tab").click(function(){
        $("#warning_tab_content").show();
    });
    $("#warning_tab").click(function(){
        $("#connect_tab_content").hide();
    });
    $("#warning_tab").click(function(){
        $("#account_tab_content").hide();
    });
    $("#warning_tab").click(function(){
        $("#warning_tab").addClass("active");
    });
    $("#warning_tab").click(function(){
        $("#account_tab").removeClass("active");
    });
    $("#warning_tab").click(function(){
        $("#connect_tab").removeClass("active");
    });
});
