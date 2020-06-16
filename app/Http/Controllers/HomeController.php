<?php

namespace App\Http\Controllers;

use App\Car;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    //this function index() it will Show the application dashboard.
    public function index()
    {
        //show the list of available cars
        $cars = Car::all();
        return view('home',compact('cars'));
    }

    //this function create() it will show add form of adding the car.
    public function create()
    {
        return view('create');
    }

    //this function store() it will save the car into database.
    public function store(Request $request)
    {
        $car = new Car();
        $car->car_seller = $request->car_seller;
        $car->seller_address = $request->seller_address;
        $car->seller_contact_no = $request->seller_contact_no;
        $car->car_price = $request->car_price;
        $car->car_engine = $request->car_engine;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->maker = $request->maker;
        $car->reading = $request->reading;
        $car->created_by = Auth::user()->id;
        $car->save();
        return redirect()->route('home')->with('status', 'Car information store successfully.');

    }

    //this function edit() it will show the car detail of the provided id.
    public function edit($id)
    {
        $car = Car::find($id);
        return view('edit',compact('car'));
    }

    //this function update() it will update the car information.
    public function update(Request $request)
    {
        $car = Car::find($request->id);
        $car->car_seller = $request->car_seller;
        $car->seller_address = $request->seller_address;
        $car->seller_contact_no = $request->seller_contact_no;
        $car->car_price = $request->car_price;
        $car->car_engine = $request->car_engine;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->maker = $request->maker;
        $car->reading = $request->reading;
        $car->created_by = Auth::user()->id;
        $car->save();
        return redirect()->route('home')->with('status', 'Car information updated successfully.');

    }

    //this function search() it will search the car by using the information provided
    public function search(Request $request)
    {
        $cars = Car::where('car_seller','LIKE','%'.$request->car_seller?:''.'%')
            ->where('car_price','LIKE','%'.$request->car_price?:''.'%')
            ->where('year','LIKE','%'.$request->year?:''.'%')
            ->where('car_engine','LIKE','%'.$request->car_engine?:''.'%')
            ->where('color','LIKE','%'.$request->color?:''.'%')
            ->where('maker','LIKE','%'.$request->maker?:''.'%')
            ->get();
        return view('search',compact('cars'));

    }

    //this function delete() it will delete the car information from database.
    public function delete($id)
    {
        $car = Car::find($id);
        $car->deleted_at = Carbon::now();
        $car->save();
        return redirect()->route('home')->with('status', trans('sentence.Cardeleted'));
    }


}
