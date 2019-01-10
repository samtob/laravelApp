@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        <div class="row" style="margin-bottom:40px;">
          <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    Lagos Eyo Print Tee Shirt
                    ₦ 2,950
                </div>
            </p>
            <div class="form-group">
            <input type="email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif {{-- required --}}
            </div>
            <div class="form-group">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
            </div>
            <input type="text" name="orderID" value="345" disabled>
            <input type="text" name="amount" value="800"> {{-- required in kobo --}}
            <input type="text" name="quantity" value="3">
            <input type="text" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
            <input type="text" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
            <input type="text" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
    
             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
    
    
            <p>
              <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
              <i class="fa fa-plus-circle fa-lg"></i> Grab Us A Hot Coffee!
              </button>
            </p>
          </div>
        </div>
    </form>  
@endsection