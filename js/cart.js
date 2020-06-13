var cart = {};
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
    if (!isEmpty(cart)) {
        $('.main-cart').html('Корзина пуста!');
    }
    else {
    $.getJSON('goods.json', function (data) {
        var goods = data;
        var out = "";
        for (var id in cart) {
            
            out += `<img src="images\\${goods[id].img}">`;
            out += `${goods[id].name}  `;
            out += `Кол-во:  ${cart[id]  }`;
            out +=`<button data-id="${id}" class="minus-goods">-</button>  `;
            out +=`<button data-id="${id}" class="plus-goods">+</button>  `;
            out +=`${cart[id]*goods[id].cost  } Руб`;
            out +=`<button data-id="${id  }" class="del-goods">x</button>`;
            out += '<br>';
        }
        $('.main-cart').html(out);
        $('.del-goods').on('click', delGoods);
        $('.plus-goods').on('click', plusGoods);
        $('.minus-goods').on('click', minusGoods);
    });
}
}
function delGoods(){
    var id = $(this).attr('data-id');
    delete cart[id];
    saveCart();
    showCart();
}

function plusGoods(){
    var id = $(this).attr('data-id');
    cart[id]++;
    saveCart();
    showCart()
}
function minusGoods(){
    var id = $(this).attr('data-id');
    if (cart[id]==1){
        delete cart[id];
    }
    else{
        cart[id]--;
    }
    saveCart();
    showCart()
}

function saveCart(){
    localStorage.setItem('cart', JSON.stringify(cart));
}

function isEmpty(object) {
    for (var key in object)
    if (object.hasOwnProperty(key)) return true;
    return false;
}

function sendEmail() {
    var ename = $('#ename').val();
    var email = $('#email').val();
    var ephone = $('#ephone').val();
    if (ename!='' && email!='' && ephone!='') {
        if (isEmpty(cart)) {
            $.post(
                "core/mail.php",
                {"ename" : ename,
                "email" : email,
                "ephone" : ephone,
                "cart" : cart
                },
                function(data){
                    if (data==1) {
                        alert('Заказ отправлен');
                    }
                    else {
                        alert('Повторите заказ');
                    }
                }
            );

        }
        else {
            alert('Корзина пуста');
        }

    }
    else{
        alert('Заполните поле');
    }
}

$(document).ready(function () {
    loadCart();
    $('.send-email').on('click', sendEmail);
});
