// 2021 - Projeto Processos Unificados

const APP = {
    init() {
        console.log('Welcome to fight club..')
        this.render()
    },

    async render(){
        const data = await this.getProducts()

        this.list(data)

        document.addEventListener('click', (e) => {
            let filter = e.target.classList
            console.log('render..')

            switch(true) {
                case filter.contains('OrderByPrice'):
                    this.orderBy(data, 'Venda Un.')
                    break;
                case filter.contains('OrderByName'):
                    this.orderBy(data, 'Descricao')
                    break;
                case filter.contains('show'):
                    this.paginate(19)
                    break;
                default:
                    
                    break;
            }
        })

    },

    getProducts() {
        let data = fetch('http://127.0.0.1:5500/src/service/data.json')
            .then(res => res.json())
            .then(data => data)

        return data
    },
    list(data) {
        
        let ul = document.querySelector('#_list-products')

        ul.innerHTML = ''
        
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

        this.paginate()
        this.search()
    },
    paginate(perPage = 19) {
        let items = document.querySelectorAll('.item')
        let itemsVisible = document.querySelectorAll('.item.is-visible')

        perPage += itemsVisible.length;

        Array.from(items).forEach((item, index) => {
            
            if(index > perPage) {
                item.classList.remove('is-visible')
            } else {
                item.classList.add('is-visible')
            }
        })
    },
    search() {
        let input = document.querySelector('.search')
        let items = document.querySelectorAll('.item')
        
        input.addEventListener('keyup', (e) => {
            let value = e.target.value.toUpperCase()

            Array.from(items).forEach(item => {
                let name = item.dataset.name.toUpperCase()
                
                if(!name.includes(value)) {
                    item.classList.remove('is-visible')
                } else {
                    item.classList.add('is-visible')
                }
            })

        })
    },
    orderBy(data, type) {
        let filterData = data.sort(function (a, b) {
                                        return a[type].localeCompare(b[type])
                                  });

        this.list(filterData)
    },
    orderByCategory() {},
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
