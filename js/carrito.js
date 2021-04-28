var cookieData = undefined;
if (getCookie('productos')){
	 cookieData = JSON.parse(getCookie('productos'));
}
var datos = cookieData ? cookieData : [];

function agregarCarrito(id) {
	alert(id);
	let producto = existe(id)
	if (!producto){
		producto = { id, cantidad:1 }
		datos.push(producto);
 		setCookie('productos', JSON.stringify(datos), 31);
	}
	else{
		producto.cantidad += 1;
		datos = datos.filter(producto => {return producto.id !== id});
		datos.push(producto);
		setCookie('productos', JSON.stringify(datos), 31);
	}
}

function existe(id) {
	return datos.find(producto => {
		return producto.id === id;
	});
}

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}