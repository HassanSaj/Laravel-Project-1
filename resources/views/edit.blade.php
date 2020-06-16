@extends('layouts.app')

@section('content')
<div class="container"  style="background-color: #fafafa; border-radius: 20px;">
    {{--<h3 class="align-middle">Cars Data</h3>--}}
    <div class="row">
        <div class="col-md-12" style="padding-top: 20px;">
            <h1>
                {{ trans('sentence.EditCar') }}
                <a href="{{ route('home') }}" style="float:right;" class="btn btn-primary pull-right">{{ trans('sentence.Back') }}</a>
            </h1>

        </div>
    </div>
    <form method="post" action="{{ route('update') }}" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="id" value="{{ $car->id }}">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">{{ trans('sentence.CarSellerName')}}</label>
            <input type="text" name="car_seller" value="{{ $car->car_seller }}" class="form-control" id="validationDefault01" placeholder="Car Seller Name" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">{{ trans('sentence.SellerAddress')}}</label>
            <input type="text" name="seller_address" value="{{ $car->seller_address }}" class="form-control" id="validationDefault02" placeholder="Seller Address" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">{{ trans('sentence.SellerContactNo')}}</label>
            <input type="text" name="seller_contact_no" value="{{ $car->seller_contact_no }}" class="form-control" id="validationDefaultUsername" placeholder="Seller Contact No" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">{{ trans('sentence.CarPrice')}}</label>
            <input type="text" name="car_price" value="{{ $car->car_price }}" class="form-control" id="validationDefault01" placeholder="Car Price" value="Car Price" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">{{ trans('sentence.CarEngine')}}</label>
            <input type="text" name="car_engine" value="{{ $car->car_engine }}" class="form-control" id="validationDefault02" placeholder="Car Model" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">{{ trans('sentence.Year')}}</label>
            <input type="text" name="year" value="{{ $car->year }}" class="form-control" id="validationDefaultUsername" placeholder="Year" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">{{ trans('sentence.Color')}}</label>
            <input type="text" name="color" value="{{ $car->color }}" class="form-control" id="validationDefault01" placeholder="Color" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">{{ trans('sentence.Maker')}}</label>
            <input type="text" name="maker" value="{{ $car->maker }}" class="form-control" id="validationDefault02" placeholder="Maker" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">{{ trans('sentence.MeterReading')}}</label>
            <input type="text" name="reading" value="{{ $car->reading }}" class="form-control" id="validationDefaultUsername" placeholder="Meter Reading" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4" style="padding-bottom: 20px;">
            <button class="btn btn-primary" type="submit">{{ trans('sentence.Update')}}</button>
        </div>
    </div>
    </form>

</div>
@endsection
