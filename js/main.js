var cart ={};

function init(){
    //Вычитуем файл goods.json
   // $.getJSON("goods.json", goodsOut);
   $.post(
       "admin/core.php",
       {
       "action" : "loadGoods"
       },
       goodsOut
   );
}

    function goodsOut(data) {
        //Вывод товара на главную страницу
        data = JSON.parse(data);
        console.log(data);
        var out='';
        for (var key in data) {
            out +='<div class="cart">'
            out +=`<p class="name">${data[key].name}</p>`;
            out += `<img src="images/${data[key].img}" alt="">`;
            out += `<div class="cost">${data[key].cost} Руб</div>`;
            out += `<input id="datetime" type="datetime-local"></input>`;
            out += `<button class="add-to-cart" data-id="${key}">Забронировать</button>`;
            
            out +='</div>';
        }
        $('.goods-out').html(out);
        $('.add-to-cart').on('click', addToCart);
}
function addToCart(){
    var id = $(this).attr('data-id');
    if (cart[id]==undefined) {
        cart[id] = 1;
    }
    else {
        cart[id]++;
    }
    showMiniCart();
    saveCart()
}
function saveCart(){
    localStorage.setItem('cart', JSON.stringify(cart));
}
function showMiniCart(){
    var out="";
    for (var key in cart){
        out += key +'---' +cart[key]+'<br>' ;
    $('.mini-cart').html(out);
}}
function loadCart() {
    if (localStorage.getItem('cart')) {
        cart = JSON.parse(localStorage.getItem('cart'));
        showMiniCart();
    }
}

$(document).ready(function () {
    init();
    loadCart();

});