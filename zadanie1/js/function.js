function addGoods(id){
    $.ajax({
        type: 'POST',
        url: 'models/add_goods_cart.php',
        data: 'id='+id,
        success: function(data){
            alert("Вы добавили товар в корзину!");
            $(".cart_shop").html(data);
        }
    });
}
function cart(){
    $.ajax({
        type: 'POST',
        url: 'controllers/cart.php',
        success: function(data){
            //alert("Вы добавили товар в корзину!");
            //$(".cart_shop").html(data);
            $(".popup").html(data);
        }
    });
}
function f_open_cart(){
    $(".cart_shop").css({'display':'block','cursor':'pointer'});
}
function f_close_cart(){
    $(".cart_shop").css({'display':'none'});
}