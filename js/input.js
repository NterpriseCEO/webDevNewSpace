function validateForm() {
    var inputs = document.querySelectorAll("input[type = 'text'], input[type = 'email']");
    var counter = 0;
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(inputs[2].value)) {
        counter++;
        alert("You have entered an invalid email address!");
    }
    if(counter > 0) {
        return false;
    }
}
