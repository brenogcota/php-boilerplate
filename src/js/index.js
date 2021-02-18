// 2021 - Projeto Processos Unificados

const APP = {
    init() {
        console.log('Welcome to fight club..')
        this.list()
    },

    getProducts() {
        let data = fetch('http://127.0.0.1:5500/src/service/data.json')
            .then(res => res.json())
            .then(data => data)

        return data
    },
    async list() {
        const data = await this.getProducts()
        let ul = document.querySelector('#_list-products')
        
        data.map(item => {
            let li = document.createElement('li')

            li.innerHTML = `
                             <div class="item" data-id="${item['Codigo']}" data-name="${item['Descricao']}">
                                <p class="item-description">Descrição: ${item['Descricao']}</p>
                                <span class="item-price">Preço: ${Number(item['Venda Un.']).toFixed(2)}</span>

                                <div class="buttons">
                                    <button>✔</button>
                                    <button>❤</button>
                                </div>
                             </div>

                            `;
            ul.appendChild(li)
        })

        this.search()
    },
    search() {
        let input = document.querySelector('.search')
        let items = document.querySelectorAll('.item')
        
        input.addEventListener('keyup', function(e) {
            
            Array.from(items).forEach(item => {
                let name = item.dataset.name.toUpperCase()
                let value = e.target.value.toUpperCase()
                
                if(!name.includes(value)) {
                    item.style.display = 'none'
                } else {
                    item.style.display = 'block'
                }
            })
        })
    },
    orderByCategory() {},
    orderByPrice() {},
    createList() {},
    addToList() {},
    removeFromList() {},
    updateList() {},
    shareList() {},
    calculateTotal() {},
    changeQuantity() {},
    calculateTime() {},
    shippingValue() {},
    addAddress() {},
    updateAddress() {}
}

APP.init();
