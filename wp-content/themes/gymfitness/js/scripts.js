function gymWordPress(){
    if ( document.querySelector('.swiper') ) {
        const opciones = {
            loop: true , //slide infinito
            autoplay: {
                delay: 3000
            }
        }
        new Swiper('.swiper', opciones)
    }
}

document.addEventListener('DOMContentLoaded', gymWordPress)