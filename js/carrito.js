var cookieData = undefined;
if (getCookie('productos')){
	 cookieData = JSON.parse(getCookie('productos'));
}
var datos = cookieData ? cookieData : [];

function agregarCarrito(id) {
	alert('Se agrego al carrito!');
	let producto = existe(id)
	if (!producto){
		producto = { id, cantidad:1 }
		datos.push(producto);
 		setCookie('productos', JSON.stringify(datos), 31);
	}
	else{
		producto.cantidad += 1;
		const foundIndex = datos.findIndex(producto => {return producto.id === id});
    datos[foundIndex] = producto;
		setCookie('productos', JSON.stringify(datos), 31);
	}
}


function comprar(){
	alert("Gracias por su compra");
	deleteCookie('productos');
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


function deleteCookie(cname) {
  document.cookie = cname + "=;" + 'expires=Thu, 01 Jan 1970 00:00:00 UTC' + ";path=/";
  location.reload(true);
}
