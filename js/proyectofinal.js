function mostrarCabecera(){
    var menu = document.getElementById("menu-button");
    console.log(menu)
    if(menu.style.display == 'block'){
        menu.style.display = 'none';
        console.log('paso if');
    }
    else{
        menu.style.display = 'block';
        console.log('paso else');
    }
}