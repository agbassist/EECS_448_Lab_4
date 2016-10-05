

function checkForm(){

    var username = document.getElementsByName("username")[0].value;
    var valid_input = true;

    if(username.length == 0){
        alert("No username entered");
        valid_input = false;
    }
    else if(!(username.includes("@"))){
        alert("Username does not include '@' character");
        valid_input = false;
    }
    else if(!(username.includes(".com"))){
        alert("Username does not include '.com'");
        valid_input = false;
    }
    else if(document.getElementsByName("password")[0].value.length == 0){
        alert("Password cannot be blank");
        valid_input = false;
    }
    else{

        var shipping = document.getElementsByName("shipping");
        var selected = "none";
        for (var i = 0; i < shipping.length; i++){
            if (shipping[i].checked){
                selected = shipping.value;
            }
        }
        if(selected == "none"){
            alert("No shipping method selected");
            valid_input = false;
        }
        else{

            var apples = parseInt(document.getElementById("apples").value);
            var bananas = parseInt(document.getElementById("bananas").value);
            var pineapples = parseInt(document.getElementById("pineapples").value);

            if(apples+bananas+pineapples == 0){
                alert("Please select at least one item to purchase");
                valid_input = false;
            }
        }
    }

    return valid_input;
}
