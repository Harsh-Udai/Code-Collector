document.getElementById("checking").onclick=function(){
    var name_user=document.getElementById("name").value;
    var email_user=document.getElementById("email").value;
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    };
    function isname(name){
        a=false;
        if(name.length>=4){
            a=true;
        }
        return a;
    };
    var changer=0;
    if(isname(name_user)){
        changer+=1;
        document.getElementById("box-2").style.borderBottomColor="green";
    }    
    else{
        document.getElementById("box-2").style.borderBottomColor="red";
    }

    if(isEmail(email_user)){
        changer+=1;
        document.getElementById("box-3").style.borderBottomColor="green";
    }    
    else{
        document.getElementById("box-3").style.borderBottomColor="red";
    }
};
document.getElementById("button").onclick=function(){
    var name_user=document.getElementById("name").value;
    var email_user=document.getElementById("email").value;

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    };

    function isname(name){
        a=false;
        if(name.length>=4){
            a=true;
        }
        return a;
    };
    if(isname(name_user)){
        if(isEmail(email_user)){
            alert("You are all set!");
            window.location.replace("otpchecker.php");
        }
        else{
            window.location.replace("newsignup2.php");
        }
    }
    else{
        window.location.replace("newsignup2.php");
    }
}