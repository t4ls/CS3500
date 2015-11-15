<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="../twig/bower_components/opencpu.js/opencpu-0.4.js"></script>
    <script>
    //init this script when the page has loaded
$(document).ready(function(){
      $("#submitbutton").on("click", function(){
        //disable the button to prevent multiple clicks
        $("#submitbutton").attr("disabled", "disabled");
        
        //read the value for 'myname'
        var myname = $("#namefield").val();
        
        //perform the request
        var req = ocpu.rpc("hello", {
          myname : myname
        }, function(output){
          $("#output").text(output.message);
        });
        
        //if R returns an error, alert the error message
        req.fail(function(){
          alert("Server error: " + req.responseText);
        });
        
        //after request complete, re-enable the button 
        req.always(function(){
          $("#submitbutton").removeAttr("disabled")
        });
      });
    });
    </script>
    
    <style>
      #output{
        height: 80px;
        width: 500px;
        border: 1px solid gray;
        padding: 3px;
      }
    </style>
    
  </head>




  <div class="container">
      <br>
          <h2 align="center"><b>graph thing</b></h2>
          <div class="row" style="text-align:center;">

    <b>Your name: </b> <input type="text" id="namefield">
    
    <button id="submitbutton" type="button">Submit to server!</button>
    
    <p id="output"></p>
  
    <br />







    </div>






    </div>



<script>
//on page ready:
$(function() {
  var req = $("#plotdiv").rplot("rollcorr").fail(function(){
    alert(req.responseText);
  });
  
  //optional, requires jquery-ui.
  $("#plotdiv").resizable()    
});
</script>

<style>
#plotdiv {
  margin-left: 10px;
  margin-top: 10px;
  width: 900px;
  height: 600px;
  border: solid gray 1px;
}
</style>
</head>

<body>
  
  <h1>Rollcorr OpenCPU App</h1>
  
  <p>This is an example of a minimal OpenCPU app.</p>
  
  <div id="plotdiv"></div>
  
</body>
</html>
