<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    //
    public function index(){
    	return view('welcome');
    }

     public function getSearchCities( string $term)
    {
        // rooms.object.photos  for json mobile
        return  Location::where('city_name', 'LIKE', $term . '%')->get();
    } 

     public function searchAutoCities($request)
    {
        $term = $request->input('term');

        $results = array();

        $queries = $this->getSearchCities($term);

        foreach ($queries as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->city_name];
        }

        return $results;
    } 

     public function searchCities(Request $request)
    {

        $results = $this->searchAutoCities($request);

        return response()->json($results);
    }

    public function timeZone($city){

   
    /* $timezone = DB::table('locations')->where('city_name', $city)->get();
     /*dd($timezone);*/
       /* foreach ($timezone as $key => $zone){
            
            echo '<option value = "'.$zone->time_zone.'"> '.$zone->time_zone.'  </option>';
            
        }*/


         $timezone = DB::table('locations')->where('city_name', $city)->get();
        return json_encode($timezone);

    }
}
