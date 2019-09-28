<?php

namespace App\Http\Controllers;
use DB;
use App\Booking;
use DateTime;
use App\Accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    public function getAccomodation(){
        $accomodation=Accomodation::all();
        return response()->json($accomodation);
    }

    public function search_booking(Request $request){
        $accomodation_id=$request->accomodation;
        $requested_from_date=$request->book_from;
        $to_date=$request->book_to;
        // $person=$request->persons;

        $accomodation=Accomodation::find($accomodation_id);
        $total_strength_of_accomodation=$accomodation->strength*$accomodation->stock;
        $requested_date=new DateTime($requested_from_date);

        // $type=gettype($requested_date);

        // $booking=Booking::where(date_diff($requested_date,date('Y-m-d'))>0)->get();

        /*SELECT * FROM `bookings` WHERE datediff(from_date,CURDATE())>0 and datediff("2018-07-15",to_date)>=0*/

        $booking=$accomodation->booking;

        foreach($booking as $book){
            $from_date=new DateTime($book->from_date);

            $diff=date_diff($from_date,$requested_date);

            // $booking=$accomodation->book->where($diff);
            
            return response()->json($diff->d);
        }
        

        

        



        // $data=["accomodation"=>$accomodation,"from"=>$from,"to"=>$to,"person"=>$person];
        
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function show(Accomodation $accomodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function edit(Accomodation $accomodation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accomodation $accomodation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accomodation  $accomodation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accomodation $accomodation)
    {
        //
    }
}
