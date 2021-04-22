<!DOCTYPE html>
<html lang="en" class="background">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .background{
        background-image: linear-gradient(to right, green, rgb(39, 174, 97) 50%, green);
        width: 100%;
        height: 100%;
        margin-top: 0px;
    }
    li {
        list-style: none;
    }

    .search-result {
        width: 90vw;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(3, 30%);
        grid-gap: 1rem;
        margin: 0 auto;
    }

    @media (max-width: 960px) {
        .grid {
            grid-template-columns: repeat(1, 90%);
        }
    }

    .shelf {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background: #eee;
        border-radius: 20px; 
    }

    .shelf:hover .shelf-img {
        transform: rotate(25deg);
        transition: all 0.6s;
    }

    .shelf:hover {
        background: #ddd;
        box-shadow: 0 0 1em #333;
        transition: all 0.6s;
    }

    .shelf-img {
        width: 200px;
        height: auto;
    }

    .add-to-cart, .buy-button, .share {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0.5rem 1rem;
        margin-top: auto;
        background: #008000;
        color: #FFF;
        outline: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        opacity: 0.8;
    }

    .add-to-cart:hover, .buy-button:hover, .share:hover {
        opacity: 1;
        transition: all 0.5s;
    }

    .cart-payment, .shelf-qtd {
        box-sizing: border-box;
        margin: 0.4rem 0;
        border: none;
        outline: none;
        padding: 0.5rem;
        border: 4px;
    }

    .cart-payment {
        margin-right: auto;
        padding-left: 0;
        border: 1px solid #ccc;
    }

    header {
        padding: 0 30px;
    }

    ._flex {
        display: flex;
    } ._jc {
        justify-content: center;
    } ._ac {
        align-items: center;
    } ._sb {
        justify-content: space-between;
    } ._fdc {
        flex-direction: column;
    }

    .cart-items {
        display: none;
        position: absolute;
        right: 35px;
        min-width: 235px;
        background: #FFF;
        border: 1px solid #eee;
        z-index: 250;
    }

    .cart-items ul {
        padding-left: 0;
    }

    .cart-item {
        border: 1px solid #eee;
        border-radius: 5%;
        padding: 0.5rem;
        margin: 0.5rem;
        width: 235px;
    }

    .cart-name {
        max-width: 209px;
    }

    .cart-img {
        width: 60px;
    }

    .remove-to-cart {
        position: relative;
        right: 0px;
        top: -70px;
        left: 87%;
        background-color: #aa0000;
        color: #fff
    }

    .summary-box {
        margin-top: 0.6rem;
        border-top: 1px solid #eee;
        padding: 0.5rem;
    }

    .summary-items {
        width: 100%
    }

    .buy-button {
        float: right;
        margin: 1rem 0;
        margin-left: auto;
    }

    .cart-empty {
        min-height: 300px;
    }

    .list-items {
        max-height: 300px;
        overflow-y: auto;
    }

<<<<<<< HEAD
    .mini-cart{
        position: fixed;
        top: 2%;
        right: 2%;
    }
    .cart{
        position: fixed;
        top: 3%;
        right: 5%;
        background-color: rgba(29,126,70,50);
        border-radius: 50%;
        border-color: #ffffff;
        width: 50px;
        height: 50px;
    }
    .cart img{
        height: 30px;
        width: 30px;
    }

    .footer{
        display: flex;
        background-image: linear-gradient(to bottom, green, rgb(39, 174, 97) 50%, green);
        border-radius: 40px 40px 0px 0px;
        position: fixed;
        bottom: 0px;
        left: 35%;
        width: 30%;
        height: 8%;
    }
    .shelf.is-invisible {
        display: none;
    }

    .search-bar {
        padding: 0.5rem 1rem;
        background: #ddd;
        border: 1px solid #bbb;
        border-radius: 4px;
        outline: none;
    }

    .modal-overlay {
        display: none;
        width: 99vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        overflow: hidden;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.8);
        z-index: 999;
    }

    .modal-overlay.open {
        display: flex;
    }

    .modal {
        padding: 1.5rem;
        background: #FFF;
    }

</style>
<body>
    <div class="background">
    <header class="_flex _ac _sb">
        <!--MINICART-->
        <button class="cart mini-cart"><img src="https://img.icons8.com/pastel-glyph/64/ffffff/shopping-cart--v1.png"/></button>
        <div class="mini-cart">
        <h1>Shop</h1>


        <div class="mini-cart">Carrinho

        <input type="text" placeholder="Buscar" class="search-bar" />

        <div class="mini-cart">Cart

        
            <div class="cart-items">
                <ul class="list-items">
                    
                </ul>

                <div class="cart-empty _flex _ac _jc">
                    <span>:( Seu carrinho está vazio</span>
                </div>

                <div class="summary-box _flex _ac _sb _fdc">

                    <select class="cart-payment" name="pagamento">
                        <option value="2">Em dinheiro</option>
                        <option value="1">Cartão</option>
                    </select>

                    <div class="summary-items _flex _ac _sb">
                        <span>Total: </span>
                        <strong class="summary-total">R$ 00.00</strong>
                    </div>
                    <button class="buy-button">Fechar pedido</button>
                </div>
            </div>
        </div>  <!--MINICART-->
    </header>
    <section class="search-result">
        <ul class="grid">
            <?php foreach($data as $produto) { ?>
                <li class="shelf" data-id="<?php echo $produto['id_produto'] ?>" data-name="<?php echo $produto['nome'] ?>">
                    <img class="shelf-img" src="/src/assets/img/<?php echo $produto['imagem'] ?>" alt="<?php echo $produto['nome'] ?>" data-src="/src/assets/img/<?php echo $produto['imagem'] ?>">
                    <h4 class="shelf-name"><?php echo $produto['nome'] ?></h4>
                    <h3 class="shelf-price"><?php echo $produto['preco'] ?></h3>


                    <input style="border: 1px solid black" class="shelf-qtd" name="quantidade" placeholder="0" type="number" value="1" min="1" max="100"/>

                    <input class="shelf-qtd" name="quantidade" placeholder="0" type="number" value="1" min="1" max="100"/>


                    <button class="add-to-cart">Adicionar ao carrinho</button>
                </li>
            <?php } ?>
        </ul>
    </section>

    <div style="height: 100px; margin-bottom: 30%;"></div>
    </div>

    <a href="/index">
        <div class="footer">
            <div style="margin: auto"><img src="https://img.icons8.com/metro/26/ffffff/home.png"/></div>
        </div>
    </a>



    <div class="modal-overlay">
       <div class="modal">
        <h2>Sua lista está pronta</h2>
        <a href="#" class="share">Compartilhar</a>
       </div>
    <div>

    
</body>
<script>
    let buttons = document.querySelectorAll('.add-to-cart');
    Array.from(buttons).map(button => {
        button.addEventListener('click', (e) => {

            let id =  e.target.parentNode.dataset.id;
            let image = e.target.parentNode.querySelector('.shelf-img').dataset.src;
            let name = e.target.parentNode.querySelector('.shelf-name').textContent;
            let price = e.target.parentNode.querySelector('.shelf-price').textContent;
            let qtd = e.target.parentNode.querySelector('.shelf-qtd').value;

            //let payment = e.target.parentNode.querySelector('.shelf-payment').value;



            if(qtd < 1) {
                alert('quantidade inválida!')
                return;
            }

            let items = document.querySelectorAll('.list-items li')
            const isInCart = Array.from(items).filter(item => {
                return item.dataset.id == id;
            })

            if (isInCart.length > 0) {
                alert('Esse produto já foi adicionado ao carrinho')

                return
            }

            let partialValue = Number(price) * Number(qtd);
            partialValue = partialValue.toFixed(2);
            
            const listItems = document.querySelector('.list-items');

            let $li = document.createElement('li')
            $li.innerHTML = `
                                <div class="_flex _ac"><img class="cart-img" src="${image}" alt="">
                                    <div class="_flex _jc _fdc">
                                        <p class="cart-name">${name}</p>
                                        <span class="cart-price">R$ ${partialValue}</span>
                                        <span class="cart-qtd">${qtd}x</span>
                                        <span>________________</span>
                                    </div>
                                </div>

                                <button class="remove-to-cart">X</button>
                                `;
            $li.dataset.id = id;
            $li.dataset.partialValue = partialValue;
            $li.dataset.qtd = qtd;
            //$li.dataset.pagamento = payment;




            listItems.appendChild($li);
            document.querySelector('.cart-empty').style.display = 'none';

            document.querySelector('.cart-items').style.display = 'block';

            items = document.querySelectorAll('.list-items li')
            let summaryTotal = Array.from(items).reduce((acc, cur) => {
                return Number(acc) + Number(cur.dataset.partialValue)
            }, 0)

            document.querySelector('.summary-total').textContent = Number(summaryTotal).toFixed(2)

            let removeBtns = document.querySelectorAll('.remove-to-cart')
            Array.from(removeBtns).map((btn, idx) => {
                btn.addEventListener('click', function(e) {
                    e.target.parentNode.remove()
                    let items = document.querySelectorAll('.list-items li')
                    if(items.length < 1) {
                        document.querySelector('.cart-empty').style.display = 'flex';
                        document.querySelector('.summary-total').textContent = '00.00'
                    } else {
                        let summaryTotal = Array.from(items).reduce((acc, cur) => {
                            return Number(acc) + Number(cur.dataset.partialValue)
                        }, 0)

                        document.querySelector('.summary-total').textContent = Number(summaryTotal).toFixed(2)
                    }
                })
            })
            
        })
    })

    let buyButton = document.querySelector('.buy-button')

    buyButton.addEventListener('click', function() {
        let items = document.querySelectorAll('.list-items li');
        let payment = document.querySelector('.cart-payment').value;

        let products = Array.from(items).reduce((acc, cur) => {
            let obj = { id: cur.dataset.id, quantidade: cur.dataset.qtd, pagamento: payment, parcial: cur.dataset.price, total: cur.dataset.partialValue };
            return [...acc, obj]
        }, [])

        if(products.length < 1) {
            alert('Seu carrinho está vazio!')
            return;
        }
        fetch('/test', 
                {
                    method: 'POST',
                    headers: {
                    'Content-Type': 'application/json'
                }, 
                    body: JSON.stringify(products)
                })
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                document.querySelector('.modal-overlay').classList.add('open')

                const items = data;
                const replacer = (key, value) => value === null ? '' : value 
                const header = Object.keys(items[0])
                const csv = "data:text/csv;charset=utf-8,"+[
                    header.join(','),
                    ...items.map(row => header.map(fieldName => JSON.stringify(row[fieldName], replacer)).join(','))
                ].join('\r\n')

                let encodedUri = encodeURI(csv);
                let aEL = document.querySelector(".share");
                aEL.setAttribute("href", encodedUri);
                aEL.setAttribute("download", "lista.csv");

                aEL.addEventListener('click', async function(e) {
                    document.querySelector('.list-items').innerHTML = '';
                    document.querySelector('.cart-empty').style.display = 'flex';
                    document.querySelector('.summary-total').textContent = '00.00'
                    aEL.textContent = 'Pronto!';
                })
                
            });
    })

    let overlay = document.querySelector('.modal-overlay')

    overlay.addEventListener('click', (e) => {
        if(e.target.classList.contains('modal-overlay')) {
            overlay.classList.remove('open')
        }
    })

    let minicart = document.querySelector('.mini-cart')

    minicart.addEventListener('click', (e) => {
        let cart = document.querySelector('.cart-items')

        if(e.target.classList.contains('mini-cart') && cart.style.display == 'block' ) {
            cart.style.display = 'none'
        } else {
            cart.style.display = 'block' 
        }
        
    })

    let searchBar = document.querySelector('.search-bar')

    searchBar.addEventListener('keyup', (e) => {
        let value = e.target.value.toUpperCase()
        let items = document.querySelectorAll('.grid .shelf')

        Array.from(items).forEach(item => {
            let name = item.dataset.name.toUpperCase()
            
            if(name.startsWith(value)) {
                item.classList.remove('is-invisible')
            } else {
                item.classList.add('is-invisible')
            }
        })

    })
    
</script>
</html>