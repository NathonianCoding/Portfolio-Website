function checkWantsToClear(e){
    let validChoice = false;
    while (!validChoice){
        let choice = window.prompt("Are you sure you want to clear this form? (y/n)");
        if (choice == 'y' || choice == 'n'){
            validChoice = true;
        }
    }
    if (choice == 'n'){
        e.preventDefault();
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
        body.style.backgroundColor = 'white';
    }
}

document.getElementById('clearButton').addEventListener('click', checkWantsToClear);