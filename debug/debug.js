var borderdiv = $("body").append("<div id='borderdebug'></div>");
var commentdiv = $("body").append("<div id='commentdebug'></div>");

var bordertoggle = false;
$("#borderdebug").bind('click', function(){
    if(bordertoggle){
        $(".container").css("border-left", "none");
        $(".container").css("border-right", "none");
        bordertoggle = false;
    } else {
        $(".container").css("border-left", "1px solid red");
        $(".container").css("border-right", "1px solid red");
        bordertoggle = true;
    }
});


$("#commentdebug").bind('click', function(){
    var comment = prompt("Yorumunuzu Girin:");
    if(comment){
        $.ajax({
            type: "POST",
            url: "debug/comment.php",
            data: {
                comment: comment
            }
        }).done(function(msg){
            alert(msg);
        });
    }
});