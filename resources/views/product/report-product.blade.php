<div class="panel panel-default" id="report-product-block">
  <div class="panel-heading">
    <h3 class="panel-title">Report product</h3>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <form class="form-horizontal" action="" method="post" id="report-product-form">
          {!! csrf_field() !!}
          <input type="hidden" name="product_id" value="1">
          <div class="form-group">
            <textarea name="description" autofocus="autofocus" rows="5" cols="40" class="form-control" placeholder="Write your Complains here.."></textarea>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-default btn-block">Submit complain</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
