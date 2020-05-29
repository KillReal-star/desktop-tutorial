var cart ={};
function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        showCart();
    }
        else {
            $('.main-cart').html('Корзина пуста!');
        
    }
}

function showCart() {
    $.getJSON('goods.json', function (data) {
        var goods = data;
        var out = "";
        for (var id in cart) {
            out += `<img src="images\\${goods[id].img}">`;
            out += `${goods[id].name  }`;
        }
        $('.main-cart').html(out);
    });
}

$(document).ready(function () {
    loadCart();
});