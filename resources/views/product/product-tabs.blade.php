<div class="col-sm-5">
  <ul class="nav nav-tabs app-tabs">
    <li class="active"><a href="#product-details" data-toggle="tab">Product details</a></li>
    <li><a href="#feedback" data-toggle="tab">Feedback <span class="badge">123</span></a></li>
    <li><a href="#delivery" data-toggle="tab">Delivery</a></li>
  </ul>
  <div class="tab-content app-tab-content">
    <div id="product-details" class="tab-pane fade in active">
      <ul class="list-inline product-links">
        <li>
          <a href="#" id="add-wishlist" class="text-primary">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <small>wishllist</small>
          </a>
        </li>
        <li>
          <a href="#" id="rate-product">
            <i class="fa fa-star" aria-hidden="true"></i>
            <small>rate</small>
          </a>
        </li>
        <li>
          <a href="#" id="report-product">
            <i class="fa fa-bug" aria-hidden="true"></i>
            <small>report</small>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-share-alt" aria-hidden="true"></i>
            <small>share</small>
          </a>
        </li>
      </ul>

      <div class="row">
        <div class="col-sm-12" id="app-view">
          @include('product.rate-product')
          @include('product.report-product')
        </div>
      </div>
      <h4>Product Name</h4>
      <p>
        Price:&nbsp;
        <strong style="font-size: 15px; text-decoration: line-through;" class="text-warning">TSH&nbsp;3000000</strong>&nbsp;
        <strong style="font-size: 17px;"><span class="featured-price">Tsh&nbsp;750000</span></strong>
      </p>
      <p>{{rating(4)}}</p>
      <h4>Description</h4>
      <p>
        You can't afford what you are dying for? Dont give up on yourself!
          Earn shopping points for unlimited shopping discount.
          All you need is to tell a friend to tell a friend
      </p>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><strong>Quantity</strong></span>
          <input type="number" min="1" max="20" class="form-control" style="width: 70px;">
        </div>
        <p class="text-primary"><small>20 items left</small></p>
      </div>

      <ul class="list-inline">
        <li><button type="button" class="btn btn-primary">Buy Now</button></li>
        <li>
          <button type="button" class="btn btn-info">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
            &nbsp;Add to Cart
          </button>
        </li>
      </ul>
    </div>
    <div id="feedback" class="tab-pane fade">
      @include('product.product-review')
    </div>
    <div id="delivery" class="tab-pane fade">

    </div>
  </div>
</div>
