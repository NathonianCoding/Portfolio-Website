function checkWantsToClear(e){
    let validChoice = false;
    let choice;

    while (!validChoice){
        choice = window.prompt("Are you sure you want to clear this form? (y/n)")
        if (choice == 'y' || choice == 'n'){
            validChoice = true;
        }
    }
    console.log(choice);
    if (choice == 'n'){
        e.preventDefault();
    }
    else{
        sessionStorage.clear();
    }
}

function checkFieldsNotEmpty(e){
    
    let title = document.getElementById('blogTitle');
    let body = document.getElementById('blogText');
   
    if (title.value.trim() == ""){
        e.preventDefault();
        title.style.backgroundColor = 'red';
    }
    else{
        title.style.backgroundColor = 'white';
    }

    if (body.value.trim() == ""){
        e.preventDefault();
        body.style.backgroundColor = 'red';
    }
    else{
        sessionStorage.setItem("title", title.value);
        sessionStorage.setItem("text", body.value);
        body.style.backgroundColor = 'white';
    }
}

function fillEntries(){
    let title = document.getElementById('blogTitle');
    let body = document.getElementById('blogText');
   
    if (sessionStorage.getItem("title")!=null){
        title.value = sessionStorage.getItem("title");
    }
    if (sessionStorage.getItem("text")!=null){
        body.value = sessionStorage.getItem("text");
    }
}
// fills entries of the entry boxes were previously entered
fillEntries();
document.getElementById('clearButton').addEventListener('click', checkWantsToClear);
document.getElementById('blogForm').addEventListener('submit', checkFieldsNotEmpty);
