var url = "http://ec2-18-222-178-32.us-east-2.compute.amazonaws.com/FinalProject/php"
function continueWithoutLogin(){
    location.href = "/";
}

function login(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    
    var params = 'username=' + username + '&password=' + password;
    
    http = new XMLHttpRequest();
    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            window.location.replace("/FinalProject/");
        }
    } 
    http.open("POST", url + "/login.php", true);
    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    http.send(params);
}