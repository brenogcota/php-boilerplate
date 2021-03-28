// 2021 - Projeto Processos Unificados

const APP = {
    init() {
        console.log('Welcome to fight club..')
        this.render()
        this.createList('list')
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

    renderMiniCart() {
        let items = JSON.parse(localStorage.getItem('@App/list'));
        let ul = document.querySelector('._minicart-items');
        ul.innerHTML = '';
        items.map(item => {
            let li = document.createElement('li')

            li.innerHTML = `
                            <div class="cart-item" data-id="${item.id}" data-name="${item.name}" data-price="${item.price}">
                                <span>desc: ${item.name}</span>
                                <span>preço: ${item.price}</span>
                                <span>quantidade: ${item.quantidade}</span>
                            </div>

                            `;
            ul.appendChild(li)
        })
        
        this.openMinicart();
        this.closeModal();
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
                             <div class="item" data-id="${item['Codigo']}" data-name="${item['Descricao']}" data-price="${Number(item['Venda Un.']).toFixed(2)}">
                                <p class="item-description"> ${item['Descricao']}</p>
                                <span class="item-price"> ${Number(item['Venda Un.']).toFixed(2)}</span>

                                <div class="buttons">
                                    <button class="add">✔</button>
                                    <button>❤</button>
                                </div>
                             </div>

                            `;
            ul.appendChild(li)
        })

        this.paginate()
        this.search()
        this.addToList()
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
                
                if(name.includes(value)) {
                    item.classList.add('is-visible')
                } else {
                    item.classList.remove('is-visible')
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
    createList(name) {
        localStorage.setItem('@App/'+name, JSON.stringify(''));
    },
    addToList() {
        let addButton = document.querySelectorAll('.add');

        addButton.forEach( item => {
            item.addEventListener('click', ({target}) => {
                const {id, name, price} = target.closest('.item').dataset;
                let localList = JSON.parse(localStorage.getItem('@App/list'));
                let quantidade = 1;
                if(localList != '') {
                    localList.map((item, idx) => {
                        if(item.id == id){
                            quantidade = item.quantidade+1
                            localList.splice(idx, 1)
                        }
                    })
                }

                let newList = [...localList, ...[{id, name, price, quantidade}]];
                localStorage.setItem('@App/list', JSON.stringify(newList))

                this.renderMiniCart();
                this.convertCSV();
            })
        })
    },
    removeFromList() {},
    updateList() {},
    convertCSV() {
        const items = JSON.parse(localStorage.getItem('@App/list'));
        const replacer = (key, value) => value === null ? '' : value 
        const header = Object.keys(items[0])
        const csv = "data:text/csv;charset=utf-8,"+[
            header.join(','),
            ...items.map(row => header.map(fieldName => JSON.stringify(row[fieldName], replacer)).join(','))
        ].join('\r\n')

        let encodedUri = encodeURI(csv);
        let aEL = document.querySelector(".btn > a ");
        aEL.setAttribute("href", encodedUri);
        aEL.setAttribute("download", "lista.csv");

    },
    shareList() {},
    calculateTotal() {},
    changeQuantity() {},
    calculateTime() {},
    shippingValue() {},
    addAddress() {},
    updateAddress() {},
    openMinicart() {
        document.querySelector('.modal').style.display = 'flex';
        document.querySelector('.modal').style.top = `${window.scrollY}px`;
    },
    closeModal() {
        setTimeout(() => {
            document.querySelector('.modal').style.display = 'none';
        }, 1500);
    }
}

APP.init();
