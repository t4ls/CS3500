
function validateNew() {
  //  alert("The username does not exist");
    var x = document.forms["newuser"]["username"].value;
    if (x == "" || x==null) {
        alert("A username is required");
        return false;
    }
    
        var users = <?php echo json_encode($arr); ?>;
        for (jj=0; jj < users.length; jj++){
        if (users[jj]==x) {
        alert("That username already exists");
        return false;
        }
    }    
    var x = document.forms["newuser"]["email"].value;
    var atpos = x.length
    if (atpos>15) {
        alert("Username limit is 15 characters");
        return false;
    }
    return false;

      
}