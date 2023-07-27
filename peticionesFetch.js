
//  peticion barberos


export class ConexionApi{


responseBarberos (){
    
    
    
   const url = 'http://localhost:3307/barberia/barberos.php';
   // Hacemos la petición GET con fetch
   fetch(url)
   .then(response => response.text()) // Leemos la respuesta como texto
   .then(data => {
    /* console.log(data); */ // Aquí se mostrará la respuesta del servidor con el dato recibido
    // Puedes hacer lo que desees con el dato recibido en 'data'
    
    document.querySelector(".reserva").innerHTML = data;
    
    document.querySelector(".reserva div button").addEventListener('click', (e)=>{

      console.log("idBarbero = ", e.target.value);  
    })
    
    })
    .catch(error => {
     console.error('Error al realizar la petición:', error);
    });
 
}

responseServicios (){


}


responseHorarios(){}

response(){
    this.dataPhp;
}


}
