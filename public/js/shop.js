$(document).ready(function() {

var company = (function() {
  /*
   * cahcheDOM
   */
   var $checkbox = $('input[type=checkbox]');
   var $brand_area = $('.shop-brands');
   var $active_cat = $('.cat-active');
  /*
   * bind Events
   */

  $checkbox.on('change', action);

  checkOnload();

  function checkOnload() {
    var $id = $active_cat.attr('id');
    var $cat_id = $id.slice(4);
    var $url = '/get-brands/' + $cat_id;
    $.ajax({
      url: $url,
      type: 'get',
      dataType: 'json',
      success: function(data) {
        console.log(data);
        if(data != 404) {
          $brand_area.empty();
          $.each(data, function(index, value) {
            $brand_area.append('<div class="checkbox"><label><input type="checkbox" id="brand-'+value.id+'"/>'+ value.name+ '</label></div>');
          });
        } else {
          $brand_area.empty().append('<div class="alert alert-warning">No brands</div>')
        }
      }
    });

  }

  function getActiveBrandId() {

  }


  function action() {

    if($(this).is(':checked')) {
      var $id = $(this).attr('id');
      var $cat_id = $id.slice(4);
      $brand_area.empty().append('<div class="text-center"><i class="fa fa-spinner fa-pulse fa-fw fa-3x" aria-hidden="true"></i></div>');
      var $url = '/get-brands/' + $cat_id;
      $.ajax({
        url: $url,
        type: 'get',
        dataType: 'json',
        success: function(data) {
          console.log(data);
          if(data != 404) {
            $brand_area.empty();
            $.each(data, function(index, value) {
              $brand_area.append('<div class="checkbox"><label><input type="checkbox" id="brand-'+value.id+'"/>'+ value.name+ '</label></div>');
            });
          } else {
            $brand_area.empty().append('<div class="alert alert-warning">No brands</div>')
          }
        }
      });

    }

  }
})();
});
