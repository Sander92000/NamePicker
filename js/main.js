//Variables
let names = [];

// Eventlisteners
document.getElementById('randomNumber').addEventListener('click', printName);

function loadNames(){
    //let gender = setGender()
    console.log('Executed');
    let request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            names = this.responseText;
            console.log(names);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
    request.open("GET","php/getNames.php", true );
    request.send();
}

function setGender(){
    if(document.getElementById('').value == true){
        return gender = "Male";
    }else{
        return gender = "Female";
    }
}

function randomNumber(){
    let randomNumber = Math.floor(Math.random() * names.length);
    return randomNumber;
}

function printName(){
    let index = randomNumber();
    document.getElementById("result").innerHTML = names[index];
}