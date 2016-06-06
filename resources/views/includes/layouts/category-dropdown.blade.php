<div class="category-dropdown">
  <button type="button" class="btn category-dropdown-btn">
    <i class="fa fa-list" aria-hidden="true"></i>&nbsp;
    CATEGORIES
    <span class="caret"></span>
  </button>
  <div class="category-dropdown-content">
    <div class="row">
      <div class="col-sm-3">
        <ul class="nav nav-tabs dropdown-category-tabs">
          @for($j =1; $j <= 3; $j++)
            <li class="{{$j == 1 ? ' active': ''}}">
              <a href="#{{$j}}" data-toggle="tab">Category {{$j}}</a>
            </li>
          @endfor
        </ul>
      </div>
      <div class="col-sm-9">
        <div class="tab-content">
          @for($i = 1; $i <= 3; $i++)
          <div class="tab-pane{{$i == 1 ? ' active': ''}}" id="{{$i}}">
            <div class="row">
              @for($j = 1; $j <=9; $j++)
                <div class="col-sm-3">
                  <h4>Sub Category {{$j}}</h4>
                  <ul class="list-unstyled">
                    @for($a = 1; $a <=8; $a++)
                    <li><a href="{{url('/product')}}">product{{$a}}</a></li>
                    @endfor
                  </ul>
                </div>
              @endfor
            </div>
          </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
</div>
