function confirmarBaja(){
    var mensaje = 'Si pulsa el botón "Aceptar" se eliminará el producto seleccionado';
    if (confirm(mensaje)){
        return true;
    }
    //Redirección
    window.location = 'index.php';
    return false;
}