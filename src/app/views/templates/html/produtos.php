<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
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

    .shelf {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        background: #eee;
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

    .add-to-cart, .buy-button {
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

    .add-to-cart:hover, .buy-button:hover {
        opacity: 1;
        transition: all 0.5s;
    }

    .shelf-payment, .shelf-qtd {
        box-sizing: border-box;
        margin: 0.4rem 0;
        border: none;
        outline: none;
        padding: 0.5rem;
        border: 4px;
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

</style>
<body>
    <header class="_flex _ac _sb">
        <h1>Shop</h1>

        <div class="mini-cart">Cart
        
            <div class="cart-items">
                <ul class="list-items">
                    
                </ul>

                <div class="cart-empty _flex _ac _jc">
                    <span>:( Seu carrinho está vazio</span>
                </div>

                <div class="summary-box _flex _ac _sb _fdc">
                    <div class="summary-items _flex _ac _sb">
                        <span>Total: </span>
                        <strong>R$ 99.99</strong>
                    </div>
                    <button class="buy-button">Fechar pedido</button>
                </div>
            </div>
        </div>
    </header>
    <section class="search-result">
        <ul class="grid">
            <?php foreach($data as $produto) { ?>
                <li class="shelf" data-id="<?php echo $produto['id_produto'] ?>">
                    <img class="shelf-img" src="/src/assets/img/<?php echo $produto['imagem'] ?>" alt="<?php echo $produto['nome'] ?>" data-src="/src/assets/img/<?php echo $produto['imagem'] ?>">
                    <h4 class="shelf-name"><?php echo $produto['nome'] ?></h4>
                    <h3 class="shelf-price"><?php echo $produto['preco'] ?></h3>

                    <input class="shelf-qtd" name="quantidade" placeholder="0" type="number" value="1" min="1" max="100"/>
                    <select class="shelf-payment" name="pagamento">
                        <option value="">Forma de pagamento</option>
                        <option value="cartão">Cartão</option>
                        <option value="cartão">Em dinheiro</option>
                    </select>

                    <button class="add-to-cart">Adicionar ao carrinho</button>
                </li>
            <?php } ?>
        </ul>
    </section>
    
</body>
<script>
    let buttons = document.querySelectorAll('.add-to-cart');
    Array.from(buttons).map(button => {
        button.addEventListener('click', (e) => {
            // let id =  e.target.parentNode.dataset.id;
            // let quantidade = e.target.parentNode.querySelector('.shelf-qtd').value;
            // let pagamento = e.target.parentNode.querySelector('.shelf-payment').value;
            
            // const dt = {
            //     id,
            //     quantidade,
            //     pagamento
            // }

            // let formBody = [];
            // for (let property in dt) {
            //     let encodedKey = encodeURIComponent(property);
            //     let encodedValue = encodeURIComponent(dt[property]);
            //     formBody.push(encodedKey + "=" + encodedValue);
            // }
            // let form = formBody.join("&");

            // fetch('/test', 
            //      {
            //          method: 'POST',
            //          headers: {
            //             'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8'
            //         }, 
            //          body: form 
            //       })
            //     .then(function(response) {
            //         return response.json();
            //     })
            //     .then(function(data) {
            //         console.log(data);
            //     });

            let id =  e.target.parentNode.dataset.id;
            let image = e.target.parentNode.querySelector('.shelf-img').dataset.src;
            let name = e.target.parentNode.querySelector('.shelf-name').textContent;
            let price = e.target.parentNode.querySelector('.shelf-price').textContent;

            
            const listItems = document.querySelector('.list-items');

            let $li = document.createElement('li')
            $li.innerHTML = `
                                <div class="_flex _ac"><img class="cart-img" src="${image}" alt="">
                                    <div class="_flex _jc _fdc">
                                        <p class="cart-name">${name}</p>
                                        <span class="cart-price">${price}</span>
                                    </div>
                                </div>

                                <button class="remove-to-cart">X</button>
                                `;

            listItems.appendChild($li);
            document.querySelector('.cart-empty').style.display = 'none';

            
        })
    })

    let minicart = document.querySelector('.mini-cart')

    minicart.addEventListener('click', (e) => {
        let cart = document.querySelector('.cart-items')
        //cart.style.display == 'none' ? cart.style.display = 'block' : cart.style.display = 'none'
        cart.style.display = 'block'
        
    })

    
</script>
</html>