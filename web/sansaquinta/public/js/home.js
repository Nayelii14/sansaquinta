const cargarMedidas = async()=>{
    let resultado = await getMedidas();
    let medidas = resultado.data;
    let medidasSelect = document.querySelector("#medidas-select");
    medidas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidasSelect.appendChild(option);
    });
    
};

const cargarMedidor = async()=>{
    let resultado = await getMedidores();
    let medidor = resultado.data;
    let medidorSelect = document.querySelector("#medidor-select");
    medidor.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        medidorSelect.appendChild(option);
    });
    
};

document.addEventListener("DOMContentLoaded", ()=>{
    cargarMedidas();
    cargarMedidor();
});


document.querySelector("#registrar-btn").addEventListener("click", async ()=>{
    let fecha = document.querySelector("#fecha-txt").value.trim();
    let hora = document.querySelector("#hora-txt").value.trim();
    let medidor = document.querySelector("#medidor-select").value.trim();
    //let direccion = document.querySelector("#direccion-txt").value.trim();
    let valor = document.querySelector("#valor-txt").value.trim();
    //let medidas = document.querySelector("#medidas-select").value.trim();

    let medicion = {};
    medicion.fecha = fecha;
    medicion.hora = hora;
    medicion.medidor = medidor;
    //medicion.direccion = direccion;
    medicion.valor = valor;
    //medicion.medidas = medidas;

    let res = await crearMedicion(medicion); 
    await Swal.fire("Medicion Creada", "Medicion creada exitosamente.", "info");

    window.location.href = "mediciones";
});