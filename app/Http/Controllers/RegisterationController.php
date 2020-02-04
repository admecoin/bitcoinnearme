<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Input;
use DB;
use Redirect;
use Alert;
use Mail;
use Location;
use Session;
use Cookie;
use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\DeviceParserAbstract;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Routing\UrlGenerator;
use Exception;
use Torann\GeoIP\Support\HttpClient;
use Torann\GeoIP\Services\AbstractService;
use RegistersUsers;

class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_username()
    {
        $users = DB::table('a_users')->where('user_name','LIKE','%@%')->get();

        foreach ($users as $user) {
            $end = strrpos($users[0]->email, '@');
            $username = substr($user->email, 0, $end);
            
            DB::table('a_users')->where('id',$user->id)->update(['user_name' => $username ]);
        }

        return $users;
    }

}
