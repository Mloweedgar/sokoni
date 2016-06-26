@extends('layouts.app')

@section('content')
    @include('phones.show_fields')

    <div class="form-group">
           <a href="{!! route('phones.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
