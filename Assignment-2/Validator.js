
function validateNew() {
    var x = document.forms["newuser"]["username"].value;
    if (x == "" || x==null) {
        alert("A username is required");
        return false;
    }
    
        for (jj=0; jj < users.length; jj++){
        if (users[jj]==x) {
        alert("That username already exists");
        return false;
        }
    }    
    var x = document.forms["newuser"]["username"].value;
    var atpos = x.length
    if (atpos>15) {
        alert("Username limit is 15 characters");
        return false;
    }
    return true;

      
}
