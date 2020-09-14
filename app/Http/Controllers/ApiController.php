<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function index(){
        $user = 'uername@isian.cuy'; // username / email github
        $pass = 'password'; // password github

        try {
            $client = new Client();
            $res = $client->request('GET', 'https://api.github.com/user', [
            'auth' => [$user, $pass]
        ]);
            // $content = $res->getBody()->getContents();
        } catch (\Exception $e) {
            // return 'password salah';
            return $e->getMessage();
        }
        $response = json_decode($res->getBody());

        return view('getApi',['user' => $response]);
    }
}
