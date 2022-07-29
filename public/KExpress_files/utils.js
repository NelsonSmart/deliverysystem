function enableLoading(id) {
    if(id){
        id.classList.add("spinner-border");
        id.textContent = "";
    }
}

function disableLoading(id, textContent){
    if(id){
        id.classList.remove("spinner-border");
        id.textContent = textContent;
    }
}