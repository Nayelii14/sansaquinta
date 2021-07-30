const getMedidores = async ()=>{
    let resultado = await axios.get("api/medidores/get");
    return resultado.data;
};