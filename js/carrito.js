var localStorageData = JSON.parse(localStorage.getItem('productos'));
var datos = localStorageData ? localStorageData : [];

function agregarCarrito(id) {
	alert(id);
	datos.push(id);
	let datosJSON = JSON.stringify(datos);
	localStorage.setItem('productos', datosJSON);
	console.log(datosJSON);
	console.log(localStorageData);
}
