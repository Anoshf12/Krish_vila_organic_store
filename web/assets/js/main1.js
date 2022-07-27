let carts = document.querySelectorAll('.add-cart');
let products = [
    {
        name: 'Pumpkin',
        tag: 'vegetable0',
        price: 200,
        inCart:0
    },
    {
        name: 'Beetroot',
        tag: 'vegetable01',
        price: 196,
        inCart:0
    },
    {
        name: 'Cabbage',
        tag: 'vegetable02',
        price: 337,
        inCart:0
    },
    {
        name: 'Manioc',
        tag: 'vegetable03',
        price: 364,
        inCart:0
    },
    {
        name: 'Tomatoes',
        tag: 'vegetable04',
        price: 143,
        inCart:0
    },
    {
        name: 'Potatoes',
        tag: 'vegetable05',
        price: 164,
        inCart:0
    },
    {
        name: 'Ladiesfinger',
        tag: 'vegetable06',
        price: 139,
        inCart:0
    },
    {
        name: 'Carrot',
        tag: 'vegetable07',
        price: 162,
        inCart:0
    },
    {
        name: 'Greenbean',
        tag: 'vegetable08',
        price: 230,
        inCart:0
    },
    {
        name: 'Capsicum',
        tag: 'vegetable09',
        price: 253,
        inCart:0
    },
    {
        name: 'Leeks',
        tag: 'vegetable10',
        price: 195,
        inCart:0
    },
    {
        name: 'Bellpepper',
        tag: 'vegetable11',
        price: 1414,
        inCart:0
    },
    {
        name: 'Cauliflower',
        tag: 'vegetable12',
        price: 892,
        inCart:0
    },
    {
        name: 'Cucumber',
        tag: 'vegetable13',
        price: 248,
        inCart:0
    },
    {
        name: 'Ashplantain',
        tag: 'vegetable14',
        price: 123,
        inCart:0
    },
    {
        name: 'Coconut',
        tag: 'vegetable15',
        price: 82,
        inCart:0
    },
    {
        name: 'papaya',
        tag: 'vegetable16',
        price: 550,
        inCart:0
    },
    {
        name: 'Banana',
        tag: 'vegetable17',
        price: 250,
        inCart:0
    },
    {
        name: 'Watermelon',
        tag: 'vegetable18',
        price: 405,
        inCart:0
    },
    {
        name: 'Avacado',
        tag: 'vegetable19',
        price: 417,
        inCart:0
    },
    {
        name: 'Mango',
        tag: 'vegetable20',
        price: 602,
        inCart:0
    },
    {
        name: 'Woodapple',
        tag: 'vegetable21',
        price: 410,
        inCart:0
    },
    {
        name: 'Pineapple',
        tag: 'vegetable22',
        price: 390,
        inCart:0
    },
    {
        name: 'Guava',
        tag: 'vegetable23',
        price: 330,
        inCart:0
    },
    {
        name: 'Soursop',
        tag: 'vegetable24',
        price: 585,
        inCart:0
    },
    {
        name: 'Lemon',
        tag: 'vegetable25',
        price: 505,
        inCart:0
    },
    {
        name: 'Jackfruit',
        tag: 'vegetable26',
        price: 400,
        inCart:0
    },
    {
        name: 'Jambu',
        tag: 'vegetable27',
        price: 200,
        inCart:0
    },

];

for (let i=0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem
    ('cartNumbers');

    if(productNumbers) {
        document.querySelector('.header-cart span').textContent = productNumbers;
    }
}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if( productNumbers ) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.header-cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.header-cart span').textContent =1;
    }

    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null) {

        if(cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify
    (cartItems));
}

function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');
    
    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost);

    if(cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + 
        product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}
function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector
    (".products-container");

    console.log(cartItems);
    if( cartItems && productContainer ) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <ion-icon name="close-circle"></ion-icon>
                <img src="./images/${item.tag}.jpg">
                <span>${item.name}</span>
            </div>
            <div class="price">${item.price}</div>
            <div class="quantity">
                <ion-icon class="decrease"
                name="arrow-dropleft-circle"></ion-icon>
                <span>${item.incart}</span>
                <ion-icon class="increase"
                name="arrow-dropright-circle"></ion-icon>
            </div>
            <div class="total">
                ${item.incart * item.price},00
            </div>    
            `

        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h4 class="

        `
    }
}

onLoadCartNumbers();