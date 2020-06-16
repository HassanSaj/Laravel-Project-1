@extends('layouts.app')

@section('content')
<div class="container">
    {{--<h3 class="align-middle">Cars Data</h3>--}}
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('home') }}" type="button" class="btn btn-primary float-lg-right">Show ALL</a>
        </div>
    </div>
    <form method="post" action="{{ route('search') }}" enctype="application/x-www-form-urlencoded">
        {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Car Seller Name</label>
            <input type="text" name="car_seller" class="form-control" id="validationDefault01" placeholder="Car Seller Name" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Seller Address</label>
            <input type="text" name="seller_address" class="form-control" id="validationDefault02" placeholder="Seller Address" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Seller Contact No</label>
            <input type="text" name="seller_contact_no" class="form-control" id="validationDefaultUsername" placeholder="Seller Contact No" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Car Price</label>
            <input type="text" name="car_price" class="form-control" id="validationDefault01" placeholder="Car Price" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Car Engine</label>
            <input type="text" name="car_engine" class="form-control" id="validationDefault02" placeholder="Car Engine" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Year</label>
            <input type="text" name="year" class="form-control" id="validationDefaultUsername" placeholder="Year" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Color</label>
            <input type="text" name="color" class="form-control" id="validationDefault01" placeholder="Color" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Maker</label>
            <input type="text" name="maker" class="form-control" id="validationDefault02" placeholder="Maker" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Meter Reading</label>
            <input type="text" name="reading" class="form-control" id="validationDefaultUsername" placeholder="Meter Reading" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </div>
    </form>

</div>
@endsection
