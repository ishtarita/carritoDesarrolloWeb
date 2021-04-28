function mostrar(){
    var menu = document.getElementById("menu");

    if(menu.style.display == 'block'){
        menu.style.display = 'none';
        console.log('paso if');
    }
    else{
        menu.style.display = 'block';
        console.log('paso else');
    }
}