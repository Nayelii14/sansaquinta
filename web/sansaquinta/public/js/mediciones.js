const iniciarEliminacion = async function(){
    let id = this.idMedicion;
    let resp = await Swal.fire({title:"Estás seguro?", text:"Esta operación irremediable"
    , icon:"error", showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarMediciones(id)){
            let mediciones = await getMediciones();
            cargarTabla(mediciones);
            Swal.fire("Medicion Eliminada", "Medicion eliminada exitosamente", "info");
        }else {
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    } else {
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
};

const cargarTabla = (mediciones)=>{
    let tbody = document.querySelector("#tbody-medicion");
    tbody.innerHTML = ""; 
    for(let i=0; i < mediciones.length; ++i){
        let tr = document.createElement("tr");
        let tdFecha = document.createElement("td");
        tdFecha.innerText = mediciones[i].fecha;
        let tdHora = document.createElement("td");
        tdHora.innerText = mediciones[i].hora;
        let tdMedidor = document.createElement("td");
        tdMedidor.innerText  = Mediciones[i].medidor;
        let tdValor = document.createElement("td");
        tdValor.innerText  = Mediciones[i].valor;
        let tdAcciones = document.createElement("td");
        let botonDescartar = document.createElement("button");
        botonDescartar.innerText= "Descartar lectura";
        botonDescartar.classList.add("btn","btn-danger");
        botonDescartar.idMedicion = mediciones[i].id;
        botonDescartar.addEventListener("click", iniciarEliminacion);
        tdAcciones.appendChild(botonDescartar);
        tr.appendChild(tdFecha);
        tr.appendChild(tdHora);
        tr.appendChild(tdMedidor);
        tr.appendChild(tdValor);
        tr.appendChild(tdAcciones);
        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoaded", async ()=>{
    let mediciones = await getMediciones();
    console.log(mediciones);
});