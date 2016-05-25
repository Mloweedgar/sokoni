<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Most recent</h3>
  </div>
  <div class="panel-body most-recent-product">
      @for($i = 1; $i <= 5; $i++)
      <div class="row" style="border-bottom: solid 1px #ddd;">
        <div class="col-sm-3">
          <img src="{{asset('photos/fashonista.png')}}" alt="" height="50px" class="img-rounded"/>
        </div>
        <div class="col-sm-9">
          <ul class="list-unstyled">
            <li><strong>product name</strong></li>
            <li><small>200&nbsp;available</small></li>
          </ul>
        </div>
      </div>
      @endfor
  </div>
</div>
