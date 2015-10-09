$(document).ready(function(){
    $("hidden").click(function(){
        $(this).hide();
    });
});
//because identity is in base
ocpu.seturl("//public.opencpu.org/ocpu/library/base/R")
//actual handler
$("#submitbutton").on("click", function(){
    //arguments
    var mysnippet = new ocpu.Snippet($("#input").val());
    
    //disable button
    $("button").attr("disabled", "disabled");
    //perform the request
    var req = ocpu.rpc("do.call", {
        what : mysnippet,
        args : {
//            x : [1,2,3,4,5],
//            n : 3
        }
    }, function(output){
      $("#output").text(output); 
    });
        
    //if R returns an error, alert the error message
    req.fail(function(){
        alert("Server error: " + req.responseText);
    });      
    
    req.always(function(){
        $("button").removeAttr("disabled");    
    });
}); 
