function enviar(){
    const precio_actual = document.getElementById('precio_actual').value;
    const precio = document.getElementById('precio').value;
    const valor = window.confirm(`EL PRECIO DEL AGUA CAMBIARA A ${precio} Bs.`);
    if(!valor){
        event.preventDefault();
    }
}