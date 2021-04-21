// 2021 - Projeto Processos Unificados

const MAIN = {
    init() {
        this.openCart();
    },

    openCart() {
        let minicart = document.querySelector('.mini-cart')

        minicart.addEventListener('click', (e) => {
            let cart = document.querySelector('.cart-items')

            if(e.target.classList.contains('mini-cart') && cart.style.display == 'block' ) {
                cart.style.display = 'none'
            } else {
                cart.style.display = 'block' 
            }
        })
    }
}

MAIN.init();
