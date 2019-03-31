function addGoodsCart(id){
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
function addGoodsCartInc(id){
    $.ajax({
        type: 'POST',
        url: 'models/add_goods_cart_inc.php',
        data: 'id='+id,
        success: function(data){
            alert("Вы добавили товар в корзину!");
            $(".cart_shop").html(data);
        }
    });
}
function decGoodsCart(id){
    $.ajax({
        type: 'POST',
        url: 'models/dec_goods_cart.php',
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
            $(".modal").html(data);
            //$(".popup").html(data);
        }
    });
}
function f_open_cart(){
    //$(".cart_shop").css({'display':'block','cursor':'pointer'});
    $(".cart-overlay").fadeIn(500).css({'display':'table'});
    //$(".cart-overlay").fadeIn();
}
function f_close_cart(){
    //$(".cart_shop").css({'display':'none'});
    $(".cart-overlay").fadeOut(500);
}