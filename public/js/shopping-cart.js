$(document).ready(function() {

  var shoppingCart = (function() {
    /*
     * cacheDOM
     */
    var $inc_class = 'inc-item';
    var $dec_class = 'dec-item';
    var $inc_button = $('.' + $inc_class);
    var $dec_button = $('.' + $dec_class);
    var $del_button = '.del-item';
    var $quantity = '#quantity-';
    var $price = '#price-';
    var $sub_total = '#sub-total-';
    var $total_id = $('#total');

    var id = $($quantity + 1);
    var num = Number(id.text());

    /*
     * bindEvents
     */
    $inc_button.on('click', updateCartItem);
    $dec_button.on('click', updateCartItem);

    function render($id, $quantity) {
      $id.empty().append($quantity);
    }

    function updateCartItem() {
      //get item id
      var $id = getItemId($(this));
      var $sub_total_id = $($sub_total + $id);

      //get item quantity and price
      var $quantity_id = $($quantity + $id);
      var $item_quantity = getItemValue($quantity_id);

      //get item price
      var $price_id = $($price + $id);
      var $item_price = getItemValue($price_id);

      //get original sub total value
      var $original_sub_total = $item_quantity*$item_price;

      //get original total value
      var $original_total = getItemValue($total_id);

      //increment quantity
      if($(this).hasClass($inc_class)) {
        if($item_quantity < 20) {
          $item_quantity++;
        }

      } else if($(this).hasClass($dec_class)) {
        if($item_quantity > 1) {
          $item_quantity--;
        }

      }


      //Compute for sub total
      var $_sub_total = computeSubTotal($item_quantity, $item_price);

      //Compute total
      var $_total = computeTotal($original_sub_total, $_sub_total, $original_total);

      render($quantity_id, $item_quantity);
      render($sub_total_id, $_sub_total);
      render($total_id,$_total)


      console.log($original_total);

    }

    function getItemId($item) {
      var $parent = $item.closest("tr");
      return $($parent).attr('id');
    }

    function getItemValue($id) {
      return Number($id.text());
    }


    function computeSubTotal($quantity, $price) {
      return $quantity*$price;
    }

    function computeTotal($original_sub_total, $new_sub_total, $original_total) {
      return $original_total + $new_sub_total - $original_sub_total;
    }



  })();
});
