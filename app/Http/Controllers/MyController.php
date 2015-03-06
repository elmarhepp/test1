<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

class MyController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        Log::debug('MyController.index');
        return view('index');
    }


    /**
     * AJAX function
     */
    public function getTime()
    {
        $now = date('d.m.Y h:i:sa');

        $result['time'] = $now;
        $jsonResult = json_encode($result);
        Log::debug("MyController.getTime: jsonResult = $jsonResult");

        return $jsonResult;
    }

}
