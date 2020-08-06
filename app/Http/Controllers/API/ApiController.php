<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\Service;
use App\Booking;
use Illuminate\Support\Carbon;
use GuzzleHttp\Client;


class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Services()
    {
        $services = Service::get();
        
         return response()->json($services);
    }
    public function Booking()
    {
        $booking = Booking::get();
        
         return response()->json($booking);
    }
  


  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function BookingStore(Request $request)
    {

        $message_sms = 'New booking '.$request['full_name'].' needs '.$request['service'].' booking date '.$request['booking_date'].' number '.$request['number'];
        $client = new Client();
                $res = $client->request('POST', 'https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=nwYZdg8eE2EL5LMloQxTimOuFxa88d2EzmDFuAixOjhTS5CQ6x5GoBB4qCJp&from=Empire Homes&to=+2347044888413&body='.$message_sms.'&dnd=2', [
                'form_params' => [
                'client_id' => 'test_id',
                'secret' => 'test_secret',
            ]
        ]);
      
        # code...
        $booking = Booking::create([
            'fullname' => $request['full_name'],
            'service' => $request['service'],
            'booking_date' => $request['booking_date'],
            'number' => $request['number'],

            ]);
        return response()->json($booking);
    }
   
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function MealDelete($id)
    {
        $meal = Meal::find($id)->delete();
        // DB::table('projects')->where('id', '', 100)->delete();

        return $id;
    }
    public function ProjectDelete($id)
    {
        $project = Project::find($id)->delete();
        // DB::table('projects')->where('id', '', 100)->delete();

        return $id;
    }
    public function DonateDelete($id)
    {
        $donation = Donation::find($id)->delete();
        // DB::table('projects')->where('id', '', 100)->delete();

        return $id;
    }
    public function GalleryDelete($id)
    {
        $gallery = Gallery::find($id)->delete();
        return $id;
    }
    public function ArticleDelete($id)
    {
        $article = Article::find($id)->delete();
        return $id;
    }
    public function destroy($id)
    {
        //
    }
}
