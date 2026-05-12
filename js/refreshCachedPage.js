function refresh(e){
    if (e.persisted){// if page is cached in the browser refresh page
        
       
        window.location.reload();

    }
}

window.addEventListener("pageshow", refresh);
console.log(window.location);