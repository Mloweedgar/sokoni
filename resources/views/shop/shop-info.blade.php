<div class="panel panel-default">
  <div class="panel-body">
    <ul class="list-unstyled text-center">
      <li><strong>{{$shop->shop_name}}</strong></li>
      <li>&nbsp;</li>
      <li><span class="badge shop-badge">A</span></li>
      <li>&nbsp;</li>
      <li><small>Selling for 1 year</small></li>
      <li>{{rating($shop->averageRating)}}</li>
      <li class="shop-review">
        <a href="{{url('/shop/reviews/'.$shop->id)}}">
          <span class="badge">{{$shop->reviewCount}}</span>
          reviews
        </a>
      </li>
    </ul>
    <hr>
    <ul class="list-inline product-links text-center">
      <li>
        <a href="#" id="chat">
          <i class="fa fa-comment-o" aria-hidden="true"></i>
          <small>chat</small>
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
  </div>
</div>
