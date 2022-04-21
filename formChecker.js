function canSubmit(){
    var username = document.getElementById("username")
    var password = document.getElementById("password")
    var shipping = document.getElementsByName("shipping")
    var choice1 = document.getElementById("one")
    var choice2 = document.getElementById("two")
    var choice3 = document.getElementById("three")
    //username check
    var foundAt = false;
    var foundPeriod = false;
    var validEnd = false;
    for(var i = 0; i < username.value.length; i++){
        var letter = username.value.charAt(i)
        if(letter == '@'){
            foundAt = true;
        }
        if(foundAt){
            if(letter == '.'){
                foundPeriod = true;
            }
        }
        if(foundPeriod){
            var ending = username.value.substring(i, username.value.length)
            if(ending == "com" || ending == "org" || ending == "edu"){
                validEnd = true;
                break;
            }
        }
    }
    if(!(foundAt && foundPeriod && validEnd)){
        alert("please enter a valid email")
        return(false)
    }

    //password check
    if(password.value == ""){
        alert("please enter a valid password")
        return(false)
    }

    if(choice1.value == ""){
        alert("please fill out the chiefs hats selection")
        return(false)
    }
    if(Number(choice1.value)<(0)){
        alert("please enter a valid number for chiefs hats")
        return(false)
    }
    if(choice2.value == ""){
        alert("please fill out the royals hats selection")
        return(false)
    }
    if(Number(choice2.value)<(0)){
        alert("please enter a valid number for royals hats")
        return(false)
    }
    if(choice3.value == ""){
        alert("please fill out the jayhawk hats selection")
        return(false)
    }
    if(Number(choice3.value)<(0)){
        alert("please enter a valid number for jayhawk hats")
        return(false)
    }


    var check = false;
    for(var i = 0; i < shipping.length; i++){
        if(shipping[i].checked){
            check = true;
        }
    }

    if(!check){
        alert("please select a shipping option");
        return(false);
    }




    return(true)
}