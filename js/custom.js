jQuery(function($){
    var updateHikashopCart = function () {
        if ($(".jollyany-hikacart").length){
            $('.jollyany-hikacart-icon > i').html('<span class="cart-count">'+$('.jollyany-hikacart .hikashop_cart_module tbody tr').length+'</span>');
        }
    };
    var removeHikashopItem = function () {
        if ($('.hikashop_cart_module_product_delete_value').length) {
            $('.hikashop_cart_module_product_delete_value > a').on('click', function (e) {
                setTimeout(
                    function() {
                        updateHikashopCart();
                        removeHikashopItem();
                    }, 3000);
            });
        }
        if ($('.hikashop_cart_product_quantity_delete').length) {
            $('.hikashop_cart_product_quantity_delete > a').on('click', function (e) {
                setTimeout(
                    function() {
                        updateHikashopCart();
                        removeHikashopItem();
                    }, 3000);
            });
        }
    };
    $(document).ready(function(){
        if ($(".jollyany-hikacart").length){
            $(".jollyany-hikacart-icon").on("click", function(e){
                e.preventDefault();
            });
            updateHikashopCart();
            removeHikashopItem();
            if ($('.hikacart').length) {
                $('.hikacart').on('click', function (e) {
                    setTimeout(
                        function() {
                            updateHikashopCart();
                            removeHikashopItem();
                        }, 3000);
                });
            }
        }
        if ($(".jollyany-login").length){
            $(".jollyany-login-icon").on("click", function(e){
                e.preventDefault();
            });
        }
    });
});