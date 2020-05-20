$(document).ready(function() {
    $( ".menu-icon" ).click(function() {
        $( "header nav" ).toggle("slow");
    });

let menuPrincipal = document.querySelector('.menu-principal');
let umbralDeDesplazamiento = menuPrincipal.getBoundingClientRect().top;
let logoHotel = document.getElementById('logo');

    window.addEventListener("scroll", function() {
        if (window.scrollY >= umbralDeDesplazamiento) {
            let menuPrincipalAltura = document.querySelector('.menu-principal').clientHeight;
            
            
            menuPrincipal.style.position = "fixed";  
            menuPrincipal.style.width = "100%";
            menuPrincipal.style.top = "0"; 
            menuPrincipal.style.borderBottom = "2px solid #d39f59";
            document.querySelector('body').style.marginTop = menuPrincipalAltura + "px";
            logoHotel.style.width = "65px";  
            // document.querySelector('body').style.marginTop = `${menuPrincipalAltura + "px"}`;  
        } else {
            menuPrincipal.style.position = "static";
            menuPrincipal.style.borderBottom = "2px solid transparent";
            // menuPrincipal.style.borderBottom = "none";   
            document.querySelector('body').style.marginTop = "0";
            logoHotel.style.width = "90px";     
        }
    });

// let imagenCuarto = document.querySelectorAll('.imagen-cuarto');
// let cuadroCaracterisiticasCuartoHover = document.querySelectorAll('.cuadro-caracterisiticas-cuarto-hover');
//     for (let i = 0; i < imagenCuarto.length; i++) {
//         console.log(imagenCuarto)
//         imagenCuarto[i].addEventListener("mouseover", function() {
            
//                 for (let x = 0; x < cuadroCaracterisiticasCuartoHover.length; x++) {
//                     cuadroCaracterisiticasCuartoHover[i].classList.add("activo");
                    
//                     imagenCuarto[i].addEventListener("mouseout", function() { 
//                     cuadroCaracterisiticasCuartoHover[i].classList.remove("activo");
//                     })   
//                 }
//         })

        
//     }

    
    

});

