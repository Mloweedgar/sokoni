@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <table class="table table-condensed">
          <thead>
            <tr>
              <th>#</th>
              <th>Product</th>
              <th class="text-center">Quantity</th>
              <th class="text-center">Unit Price (TZS)</th>
              <th class="text-center">Total (TZS)</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @for($i = 1; $i <= 4; $i++)
            <tr id="{{$i}}">
              <td>{{$i}}</td>
              <td>
                <table>
                  <tr>
                    <td>
                      <img src="{{asset('photos/fashonista.png')}}" alt="" height="70" width="70"/>
                    </td>
                    <td>
                      <ul class="list-unstyled" style="padding-left: 10px;">
                        <li><strong>Product name</strong></li>
                        <li><small>Product from shop name</small></li>
                      </ul>
                    </td>
                  </tr>
                </table>
              </td>
              <td class="text-center" id="quantity-{{$i}}">3</td>
              <td class="text-center"><strong id="price-{{$i}}">100000</strong></td>
              <td class="text-center"><strong id="sub-total-{{$i}}">300000</strong></td>
              <td>
                <a href="#" id="inc-cart-item-{{$i}}" class="inc-item btn btn-default btn-xs"><i class="fa fa-plus"></i></a>
                <a href="#" id="dec-cart-item-{{$i}}" class="dec-item btn btn-default btn-xs"><i class="fa fa-minus"></i></a>
                <a href="#" id="del-cart-item-{{$i}}" class="del-item btn btn-default btn-xs"><i class="fa fa-trash-o"></i></a>
              </td>
            </tr>
            @endfor
          </tbody>
      </table>
    </div>
    <div class="col-sm-3">
      <div class="panel panel-default" style="margin-top: 20px; position: sticky;">
        <div class="panel-body">
          <ul class="list-unstyled text-center">
            <li style="font-size: 20px;"><strong>Total</strong></li>
            <li style="font-size: 23px;"><strong id="total">2000000</strong></li>
            <hr>
            <li>
              <a href="#" class="btn btn-info">
                <i class="fa fa-shopping-cart"></i>&nbsp;
                Continue shopping
              </a>
            </li>
            <br>
            <li>OR</li>
            <br>
            <li>
              <a href="#" class="btn btn-primary btn-sm">
                <i class="fa fa-play"></i>&nbsp;Checkout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
