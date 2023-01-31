getElementById("birthday").value = new Date().toDateInputValue();

function matchPW(p1, p2){
    if(p1 != p2){
        getElementById("message").innerHTML = "Passwords not matching"
        return false; 
    }
    else{
        return true;
    }
}

function submitForm(){
    if(matchPW(document.getElementById("password").value, document.getElementById("confirmPassword").value)){
        document.getElementById('submit_button').submit();
    }
}

function onChange() {
    const password = document.querySelector('input[id=password]');
    const confirm = document.querySelector('input[id=confirmPassword]');
    if (confirm.value === password.value) {
      confirm.setCustomValidity('');
    } else {
      confirm.setCustomValidity('Passwords do not match');
    }
  }


