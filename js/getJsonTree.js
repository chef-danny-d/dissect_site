$(function() {
    $.ajax({
        async : true,
        type : "GET",
        url : "/vd",
        dataType : "json",

        success : function(json) {
            createTree(json);
        };

        error : function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        }
    });
});
