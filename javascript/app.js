 
    function onContactFormSubmit(){
        var fName = document.getElementById("firstName").value;
        var lName = document.getElementById("lastName").value;
        var mail = document.getElementById("email").value;
        var telephone = document.getElementById("phone").value;
        if(fName === ""){
            alert("Hey you forgot to fill out firstname");
            
        }
        if(lName === ""){
            alert("hey you forgot to fill out lastname");
        }
        if(mail === ""){
            alert("Hey you forgot to fill out Email");
        }
        if(telephone === ""){
            alert("Hey you forgot to fill out Phone");
        }
        return false;
    }  
