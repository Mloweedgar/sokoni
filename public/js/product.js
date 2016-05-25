var wishlist = (function() {
  /*
   * Cache DOM
   */
   var $anchor = $('#add-wishlist');
   var $messageBox = $('#message');

   /*
    * Bind events
    */
    $anchor.on('click', getAlert);

    render();

    function render($data) {
      $messageBox.empty().append($data);
    }

    function getAlert() {
      /*
       * Set parameters for get requested
       */
      var alert = 'info';
      var message = 'Added to wishlist';
      var url = '/alert/' + alert + '/' + message;
      /*
       * Get request
       */
      $.get(url, function(data) {
        var $data = data;
        render($data);
      });

    }

})();

var productLinkStates = (function() {
  /*
   * Cache DOM
   */
   var $report_button = $('#report-product');
   var $rate_button = $('#rate-product');
   var $report_block = $('#report-product-block');
   var $rate_block = $('#rate-product-block');

   /*
    * Define views
    */
   var $views = {
     'report': $report_block,
     'rate': $rate_block
   }

   /*
    * Bind events
    */
    $report_button.on('click',toggleReportBlock);
    $rate_button.on('click', toggleRateBlock);

    function toggleReportBlock(e) {
      e.preventDefault();
      $.each($views, function(index, value) {
        if(value == $report_block) {
          value.toggle(500);
        } else {
          value.hide(500);
        }

      });
    }

    function toggleRateBlock(e) {
      e.preventDefault();
      $.each($views, function(index, value) {
        if(value == $rate_block) {
          value.toggle(500);
        } else {
          value.hide(500);
        }

      });
    }

})();

var productRating = (function() {
  /*
   * Cache DOM
   */
   var $star_1 = $('#star-1');
   var $star_2 = $('#star-2');
   var $star_3 = $('#star-3');
   var $star_4 = $('#star-4');
   var $star_5 = $('#star-5');
   var $rate_num = $('#rate-number');
   var $rate_ul = $('#rate-product-list');

   /*
    * Bind events
    */
    $star_1.on('click', addOneStar);
    $star_2.on('click', addTwoStar);
    $star_3.on('click', addThreeStar);
    $star_4.on('click', addFourStar);
    $star_5.on('click', addFiveStar);

    function addOneStar(e) {
      e.preventDefault();
      $star_1.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_2.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $star_3.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $star_4.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $star_5.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $rate_num.empty().append('1');
      if ($rate_ul.hasClass('text-warning')) {
        $rate_ul.addClass('text-danger');
        $rate_ul.removeClass('text-warning');
      } else if ($rate_ul.hasClass('text-success')) {
        $rate_ul.addClass('text-danger');
        $rate_ul.removeClass('text-success');
      }

    }

    function addTwoStar(e) {
      e.preventDefault();
      $star_1.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_2.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_3.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $star_4.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $star_5.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $rate_num.empty().append('2');
      if ($rate_ul.hasClass('text-warning')) {
        $rate_ul.addClass('text-danger');
        $rate_ul.removeClass('text-warning');
      } else if ($rate_ul.hasClass('text-success')) {
        $rate_ul.addClass('text-danger');
        $rate_ul.removeClass('text-success');
      }

    }

    function addThreeStar(e) {
      e.preventDefault();
      $star_1.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_2.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_3.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_4.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $star_5.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $rate_num.empty().append('3');
      if ($rate_ul.hasClass('text-danger')) {
        $rate_ul.addClass('text-warning');
        $rate_ul.removeClass('text-danger');
      } else if ($rate_ul.hasClass('text-success')) {
        $rate_ul.addClass('text-warning');
        $rate_ul.removeClass('text-success');
      }

    }

    function addFourStar(e) {
      e.preventDefault();
      $star_1.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_2.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_3.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_4.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_5.empty().append('<i class="fa fa-star-o fa-3x"></i>');
      $rate_num.empty().append('4');
      if ($rate_ul.hasClass('text-danger')) {
        $rate_ul.addClass('text-success');
        $rate_ul.removeClass('text-danger');
      } else if ($rate_ul.hasClass('text-warning')) {
        $rate_ul.addClass('text-success');
        $rate_ul.removeClass('text-warning');
      }

    }

    function addFiveStar(e) {
      e.preventDefault();
      $star_1.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_2.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_3.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_4.empty().append('<i class="fa fa-star fa-3x"></i>');
      $star_5.empty().append('<i class="fa fa-star fa-3x"></i>');
      $rate_num.empty().append('5');
      if ($rate_ul.hasClass('text-danger')) {
        $rate_ul.addClass('text-success');
        $rate_ul.removeClass('text-danger');
      } else if ($rate_ul.hasClass('text-warning')) {
        $rate_ul.addClass('text-success');
        $rate_ul.removeClass('text-warning');
      }

    }

})();
