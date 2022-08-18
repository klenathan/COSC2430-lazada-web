let password = document.getElementById("signupPassword");

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

function checkPassword (passwordInput) {
    if (passwordInput){
        // Check & feedback for lowercase
        if (lowercaseCheck.test(passwordInput)){
            lowercasePass.style.backgroundColor = greenColor
        } else {
            lowercasePass.style.backgroundColor = redColor
        }
        // Check & feedback for uppercase   
        if (uppercaseCheck.test(passwordInput)){
            uppercasePassed.style.backgroundColor = greenColor
        } else {
            uppercasePassed.style.backgroundColor = redColor
        }
        // Check & feedback for number   
        if (numberCheck.test(passwordInput)){
            numberPassed.style.backgroundColor = greenColor
        } else {
            numberPassed.style.backgroundColor = redColor
        }
        // Check & feedback for special characters   
        if (specialCharCheck.test(passwordInput)){
            specialCharPassed.style.backgroundColor = greenColor
        } else {
            specialCharPassed.style.backgroundColor = redColor
        }
        // Check & feedback for length check   
        if (lengthCheck.test(passwordInput)){
            lengthPassed.style.backgroundColor = greenColor
        } else {
            lengthPassed.style.backgroundColor = redColor
        }
    } else {
        lowercasePass.style.backgroundColor = "transparent"
        uppercasePassed.style.backgroundColor = "transparent"
        numberPassed.style.backgroundColor = "transparent"
        specialCharPassed.style.backgroundColor = "transparent"
        lengthPassed.style.backgroundColor = "transparent"
    }
}

// password.addEventListener("keyup", () => {
//     checkPassword(password.value)
// })
