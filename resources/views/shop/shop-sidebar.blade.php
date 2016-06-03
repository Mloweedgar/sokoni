<div class="col-sm-3">
  <div class="panel-group" id="sidebar">
    <div class="panel-group" id="">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#" href="#price-range">
              Price Range
            </a>
          </h4>
        </div>
        <div id="price-range" class="panel-collapse collapse in">
          <div class="panel-body text-center">
            <input id="ex2"
  								 type="text"
  								 value=""
  								 data-slider-min="10000"
  								 data-slider-max="1000000"
  								 data-slider-step="5"
  								 data-slider-value="[250,450]"
  						/>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#" href="#cat">
            Categories
          </a>
        </h4>
      </div>
      <div id="cat" class="panel-collapse collapse">
        <div class="panel-body">
          @for($i = 1; $i <= 5; $i++)
          <div class="checkbox">
            <label>
              <input type="checkbox" name="name" value="" {{$i ==1? 'checked': ''}}>&nbsp;
              Category {{$i}}
            </label>
          </div>
          @endfor
        </div>
      </div>

    </div>
  </div>
</div>
