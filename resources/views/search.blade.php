@extends('layouts.app')

@section('content')
    <div class="container"  style="background-color: #fafafa; border-radius: 20px;">
        <h3 class="align-middle" style="padding-top: 20px;">{{ trans('sentence.CarsData')}}</h3>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('create') }}" class="btn btn-primary float-lg-right"><i class="fa fa-plus fa-1x"></i> {{ trans('sentence.AddCar')}}</a>
            </div>
        </div>

        <form method="post" action="{{ route('search') }}" enctype="application/x-www-form-urlencoded">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4">
                    <label for="validationDefault01">{{ trans('sentence.CarSellerName')}}</label>
                    <input type="text" name="car_seller" class="form-control" id="validationDefault01" placeholder="{{ trans('sentence.CarSellerName')}}" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02">{{ trans('sentence.CarEngine')}}</label>
                    <input type="text" name="car_engine" class="form-control" id="validationDefault02" placeholder="{{ trans('sentence.CarEngine')}}" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefaultUsername">{{ trans('sentence.Year')}}</label>
                    <input type="text" name="year" class="form-control" id="validationDefaultUsername" placeholder="{{ trans('sentence.Year')}}" aria-describedby="inputGroupPrepend2">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="validationDefault01">{{ trans('sentence.CarPrice')}}</label>
                    <input type="text" name="car_price" class="form-control" id="validationDefault01" placeholder="{{ trans('sentence.CarPrice')}}" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">{{ trans('sentence.Color')}}</label>
                    <input type="text" name="color" class="form-control" id="validationDefault01" placeholder="{{ trans('sentence.Color')}}" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02">{{ trans('sentence.Maker')}}</label>
                    <input type="text" name="maker" class="form-control" id="validationDefault02" placeholder="{{ trans('sentence.Maker')}}" value="">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">{{ trans('sentence.Search')}}</button>
                </div>
            </div>
        </form>
        <br/>

        <div class="row justify-content-center">
            {{--<div class="col-md-12">--}}
            {{--<div class="card">--}}
            {{--<div class="card-header">Cars</div>--}}

            {{--<div class="card-body">--}}
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{--You are logged in!--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ trans('sentence.SellerName')}}</th>
                    <th scope="col">{{ trans('sentence.Address')}}</th>
                    <th scope="col">{{ trans('sentence.ContactNo')}}</th>
                    <th scope="col">{{ trans('sentence.Price')}}</th>
                    <th scope="col">{{ trans('sentence.Engine')}}</th>
                    <th scope="col">{{ trans('sentence.Year')}}</th>
                    <th scope="col">{{ trans('sentence.Color')}}</th>
                    <th scope="col">{{ trans('sentence.Maker')}}</th>
                    <th scope="col">{{ trans('sentence.MeterReading')}}</th>
                    <th scope="col" style="width: 15%;">{{ trans('sentence.Action')}}</th>
                </tr>
                </thead>
                <tbody>
                @if($cars->count() > 0)
                    @foreach($cars as $key => $car)
                        <tr style="background: #9ebf7c;">
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $car->car_seller }}</td>
                            <td>{{ $car->seller_address }}</td>
                            <td>{{ $car->seller_contact_no }}</td>
                            <td>{{ $car->car_price }}</td>
                            <td>{{ $car->car_engine }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $car->color }}</td>
                            <td>{{ $car->maker }}</td>
                            <td>{{ $car->reading }}</td>
                            <td>
                                <button class="btn btn-warning"><a style="color: green;" href="{{ route('edit',$car->id) }}"><i class="fa fa-edit fa-1x"></i></a></button>
                                <button class="btn btn-danger"><a href="{{ route('delete',$car->id) }}"><i class="fa fa-trash fa-1x"></i></a></button>
                            </td>

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="11" class="btn-danger"> No Data Found !</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>

    </div>
@endsection
