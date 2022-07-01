// A $( document ).ready() block.
$(document).ready(function() {
    $("#escanear").click(function() {
        $.ajax({
            url: "api/post.php",
            success: function(result) {
                $("#tabla_resultado").html(result);
                console.log(result);
            }
        });
    });
});