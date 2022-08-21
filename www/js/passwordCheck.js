function checkPassword (passwordInput) {
    let lowercaseCheck = new RegExp('(?=.*[a-z])');
    let uppercaseCheck = new RegExp('(?=.*[A-Z])');
    let numberCheck = new RegExp('(?=.*[0-9])');
    let specialCharCheck = new RegExp('(?=.*[^A-Za-z0-9])');
    let lengthCheck = new RegExp('(?=.{8,})');

    let lowercasePass = document.getElementById("lowercasePassed");
    let uppercasePassed = document.getElementById("uppercasePassed");
    let numberPassed = document.getElementById("numberPassed");
    let specialCharPassed = document.getElementById("specialCharPassed");
    let lengthPassed = document.getElementById("lengthPassed");
    let greenColor = "DarkSeaGreen";
    let redColor = "coral";
    
    
    if (passwordInput){
        // Check & feedback for lowercase
        if (lowercaseCheck.test(passwordInput)){
            lowercasePass.style.color = greenColor
        } else {
            lowercasePass.style.color = redColor
        }
        // Check & feedback for uppercase   
        if (uppercaseCheck.test(passwordInput)){
            uppercasePassed.style.color = greenColor
        } else {
            uppercasePassed.style.color = redColor
        }
        // Check & feedback for number   
        if (numberCheck.test(passwordInput)){
            numberPassed.style.color = greenColor
        } else {
            numberPassed.style.color = redColor
        }
        // Check & feedback for special characters   
        if (specialCharCheck.test(passwordInput)){
            specialCharPassed.style.color = greenColor
        } else {
            specialCharPassed.style.color = redColor
        }
        // Check & feedback for length check   
        if (lengthCheck.test(passwordInput)){
            lengthPassed.style.color = greenColor
        } else {
            lengthPassed.style.color = redColor
        }
    } else {
        textColor = "black";
        lowercasePass.style.color = textColor
        uppercasePassed.style.color = textColor
        numberPassed.style.color = textColor
        specialCharPassed.style.color = textColor
        lengthPassed.style.color = textColor
    }
}


document.getElementById("signupPassword").addEventListener("input", () => {
    checkPassword(signupPassword.value);
    // document.getElementById("message").style.display = "block";
})

document.getElementById("signupPassword").addEventListener("focus", () => {
    document.getElementById("message").style.display = "block"
})

document.getElementById("signupPassword").addEventListener("blur", () => {
    document.getElementById("message").style.display = "none"
})

// document.getElementById("message").addEventListener("blur", () => {
//     document.getElementById("message").style.display = "none";
// })