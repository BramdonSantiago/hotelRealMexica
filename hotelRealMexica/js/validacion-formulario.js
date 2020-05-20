(function() {
    let nombreInput = document.getElementById('nombre');
    let apellidosInput = document.getElementById('apellidos');
    let emailInput = document.getElementById('email');
    let telefonoInput = document.getElementById('telefono');
    let tipoHabitacionSelect = document.getElementById('tipo-habitacion');
    let fechaLlegadaInput = document.getElementById('fecha-llegada');
    let fechaSalidaInput = document.getElementById('fecha-salida');
    let numeroPersonasSelect = document.getElementById('numero-personas');
    let botonEnviar = document.getElementById('boton-enviar');
    let sugerenciaHabitaciones =document.getElementById('sugerencia-habitaciones');

    function eventListeners() {
        document.addEventListener("DOMContentLoaded", inicioFormulario);
        nombreInput.addEventListener("blur", validarCampoVacio);
        apellidosInput.addEventListener("blur", validarCampoVacio);
        emailInput.addEventListener("blur", validarCampoVacio);
        telefonoInput.addEventListener("blur", validarCampoVacio);
        tipoHabitacionSelect.addEventListener("blur", validarCampoVacio);
        fechaLlegadaInput.addEventListener("onchange", validarCampoVacio);
        fechaSalidaInput.addEventListener("onchange", validarCampoVacio);
        numeroPersonasSelect.addEventListener("blur", validarCampoVacio);

        
    }
    eventListeners();

    function inicioFormulario() {
        botonEnviar.disabled = true;
    }
    
    function validarCampoVacio() {
        if (nombreInput.value !== '' && apellidosInput.value !== '' && emailInput.value !== '' && telefonoInput.value !== '' && tipoHabitacionSelect.value !== '' && fechaLlegadaInput.value !== '' && fechaSalidaInput.value !== '' && numeroPersonasSelect.value !== '') {
            botonEnviar.classList.remove("disabled");
            botonEnviar.disabled = false;
        } else {
            botonEnviar.classList.add("disabled");
            botonEnviar.disabled = true;
        }

        validarLongitud(this);
        mensajeValidacion(this);

        if (this.id === 'tipo-habitacion') {
            validarHabitacion(this);
        }

        if (this.id === 'numero-personas') {
            validarNumeroPersonas(this);
        }
    }

    function validarLongitud(campo) {
        if (campo.value === '') {
            campo.classList.add("active-borde");
        } else {
            campo.classList.remove("active-borde");
        }     
    }

    function mensajeValidacion(campo) {
        if (campo.value === '') {
            
            let mensajeValidacion = document.querySelectorAll('.mensaje-validacion');

            for (let i = 0; i < mensajeValidacion.length; i++) {
                if (campo.id === 'nombre') {
                    mensajeValidacion[0].classList.add("active");
                    break;
                } else if(campo.id === 'apellidos') {
                    mensajeValidacion[1].classList.add("active");
                    break;
                } else if(campo.id === 'email') {
                    mensajeValidacion[2].classList.add("active");
                    break;
                } else if(campo.id === 'telefono') {
                    mensajeValidacion[3].classList.add("active");
                    break;
                } else if(campo.id === 'tipo-habitacion') {
                    mensajeValidacion[4].classList.add("active");
                    break;
                } else if(campo.id === 'fecha-llegada') {
                    mensajeValidacion[5].classList.add("active");
                    break;
                } else if(campo.id === 'fecha-salida') {
                    mensajeValidacion[6].classList.add("active");
                    break;
                } else if(campo.id === 'numero-personas') {
                    mensajeValidacion[7].classList.add("active");
                    break;
                }
            }
        } 
        else if (campo.value !== '') {
            
            let mensajeValidacion = document.querySelectorAll('.mensaje-validacion');

            for (let i = 0; i < mensajeValidacion.length; i++) {
                if (campo.id === 'nombre') {
                    mensajeValidacion[0].classList.remove("active");
                    break;
                } else if(campo.id === 'apellidos') {
                    mensajeValidacion[1].classList.remove("active");
                    break;
                } else if(campo.id === 'email') {
                    mensajeValidacion[2].classList.remove("active");
                    break;
                } else if(campo.id === 'telefono') {
                    mensajeValidacion[3].classList.remove("active");
                    break;
                } else if(campo.id === 'tipo-habitacion') {
                    mensajeValidacion[4].classList.remove("active");
                    break;
                } else if(campo.id === 'fecha-llegada') {
                    mensajeValidacion[5].classList.remove("active");
                    break;
                } else if(campo.id === 'fecha-salida') {
                    mensajeValidacion[6].classList.remove("active");
                    break;
                } else if(campo.id === 'numero-personas') {
                    mensajeValidacion[7].classList.remove("active");
                    break;
                }
            }
        } 
    }

    function validarHabitacion(habitacion) {
        obtenerPrecio(habitacion);
        if (habitacion.value === '1' || habitacion.value === '2') {
            sugerenciaHabitaciones.classList.add("active-sugerencia-habitaciones");
            for (let i = 3; i < numeroPersonasSelect.length; i++) {
                numeroPersonasSelect[i].disabled = true;
            }
              
        } else {
            sugerenciaHabitaciones.classList.remove("active-sugerencia-habitaciones");
            for (let i = 1; i < numeroPersonasSelect.length; i++) {
                numeroPersonasSelect[i].disabled = false;
            }
        }
    }

    function validarNumeroPersonas(numeroPersonas) {
        if (numeroPersonas.value === '3' || numeroPersonas.value === '4' || numeroPersonas.value === '5' || numeroPersonas.value === '6') {
            for (let i = 1; i <= 2; i++) {
                tipoHabitacionSelect[i].disabled = true;
            }
        } else {
            for (let i = 1; i < tipoHabitacionSelect.length; i++) {
                tipoHabitacionSelect[i].disabled = false;
            }
        }
    }

    function obtenerPrecio(habitacion) {
        let precioInput = (document.getElementById('precio'));
        // let llegada = moment(document.getElementById('fecha-llegada').value);
        // let salida = moment(document.getElementById('fecha-salida').value);
        // let dias = salida.diff(llegada, "days");
        // console.log(dias);
        let precio;

        if (habitacion.value === '1') {
            precio = 1900;
            precioInput.value = precio;
        } else if (habitacion.value === '2') {
            precio = 2400;
            precioInput.value = precio;
        } else if (habitacion.value === '3') {
            precio = 3900;
            precioInput.value = precio;
        } else if (habitacion.value === '4') {
            precio = 4700;
            precioInput.value = precio;
        } else if (habitacion.value === '5') {
            precio = 5200;
            precioInput.value = precio;
        }
    }

})();