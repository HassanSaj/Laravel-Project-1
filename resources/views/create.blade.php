@extends('layouts.app')

@section('content')
<div class="container" style="background-color: #fafafa; border-radius: 20px;">
    {{--<h3 class="align-middle">Cars Data</h3>--}}
    <div class="row">
        <div class="col-md-12">
        <h1 style="padding-top: 20px; font-family:inherit;">
            {{ trans('sentence.AddNewCar') }}
        <a href="{{ route('home') }}" style="float:right;" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i>{{ trans('sentence.Back') }}</a>
        </h1>

        </div>
    </div>
    <form method="post" action="{{ route('store') }}" enctype="application/x-www-form-urlencoded">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">{{ trans('sentence.CarSellerName')}}</label>
            <input type="text" name="car_seller" class="form-control" id="validationDefault01" placeholder="{{ trans('sentence.CarSellerName')}}" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">{{ trans('sentence.SellerAddress')}}</label>
            <input type="text" name="seller_address" class="form-control" id="validationDefault02" placeholder="{{ trans('sentence.SellerAddress')}}" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">{{ trans('sentence.SellerContactNo')}}</label>
            <input type="text" name="seller_contact_no" class="form-control" id="validationDefaultUsername" placeholder="{{ trans('sentence.SellerContactNo')}}" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">{{ trans('sentence.CarPrice')}}</label>
            <input type="text" name="car_price" class="form-control" id="validationDefault01" placeholder="{{ trans('sentence.CarPrice')}}" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">{{ trans('sentence.CarEngine')}}</label>
            <input type="text" name="car_engine" class="form-control" id="validationDefault02" placeholder="{{ trans('sentence.CarEngine')}}" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">{{ trans('sentence.Year')}}</label>
            <input type="text" name="year" class="form-control" id="validationDefaultUsername" placeholder="{{ trans('sentence.Year')}}" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">{{ trans('sentence.Color')}}</label>
            <input type="text" name="color" class="form-control" id="validationDefault01" placeholder="{{ trans('sentence.Color')}}" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">{{ trans('sentence.Maker')}}</label>
            <input type="text" name="maker" class="form-control" id="validationDefault02" placeholder="{{ trans('sentence.Maker')}}" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">{{ trans('sentence.MeterReading')}}</label>
            <input type="text" name="reading" class="form-control" id="validationDefaultUsername" placeholder="{{ trans('sentence.MeterReading')}}" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4" style="padding-bottom: 20px;">
            <button class="btn btn-success" type="submit">{{ trans('sentence.Submit') }}</button>
        </div>
    </div>
    </form>

</div>
@endsection
