const product = [
    {
        id: 0,
        image: '../amazon/dress7.jpg',
        title: 'Rebons Hoodie',
        price: 1700,
    }
    // {
    //     id: 1,
    //     image: '../amazon/dress1.jpg',
    //     title: 'ASTR Label Womens Gaia Dress',
    //     price: 2000,
    // },
    // {
    //     id: 2,
    //     image: '../amazon/dress8.jpg',
    //     title: 'Highly Relax Shirt',
    //     price: 1200,
    // },
    // {
    //     id: 3,
    //     image: '../amazon/dress4.jpg',
    //     title: 'Spaghetti Strap Cowl Neck Ruffle',
    //     price: 1400,
    // },
    // {
    //     id: 4,
    //     image: '../amazon/dress9.jpg',
    //     title: 'Codi Hidden Shirt',
    //     price: 1400,
    // },
    // {
    //     id: 4,
    //     image: '../amazon/dress12.jpg',
    //     title: 'Cataline Solid Sleeveless fit',
    //     price: 1200,
    // }
];

const categories = [...new Set(product.map((item) => { return item }))]
let i = 0;
document.getElementById('root').innerHTML = categories.map((item) => {
    var { image, title, price } = item;
    return (
        `<div class='box'>
                  <div class='img-box'>
                    <img class='images' src=${image}></img>
                    </div> 
                    <div class ='bottom'>
                    <p>${title}</p>
                    <h2>Rs ${price}.00</h2>` +
        "<button onclick= 'addtocart(" + (i++) + ")'>Add to cart</button>" +
        `</div>
                 </div>`
    )
}).join('')

var cart =[];

function addtocart(id){
  cart.push({...categories[id]});
  displaycart();
}

function delElement(id){
    cart.splice(id, 1);
    displaycart();
}

function displaycart(id){
    let j = 0, total=0;
    document.getElementById("count").innerHTML= cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your Cart is empty";
        document.getElementById("total").innerHTML = "Rs "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total= total+price;
            // document.getElementById("total").innerHTML = "Rs "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                  <img class='rowimg' src=${image}>
                </div>
                <p style= 'font-size: 12px; '>${title}</p>
                <h2 style= 'font-size: 15px;'>Rs ${price}.00</h2>` +
                "<i class= 'fa-solid fa-trash' onclick='delElement(" + (j++) + ")'></i></div>"
            );
        }).join('');
    }
}

