<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://192.1680.2:3000/',
            // You can set any number of default request options.
            //'timeout'  => 2.0,
        ]);

        $response = $client->get('http://192.168.0.2:3000/users');
        
        $users = json_decode($response->getBody()->getContents());
        
        return view('users.index', compact('users'));
        // return $users;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $client = new Client([
                // Base URI is used with relative requests
                'base_uri' => 'http://192.168.0.2:3000/',
                // You can set any number of default request options.
                //'timeout'  => 2.0,
        ]);
        $response = $client->post(
            'http://192.168.0.2:3000/users',
            [
                'json' => $request->all()
            ]
        );
        // dd($response);
        
        return redirect()->action('User\UserController@index')->with('msjc', 'Usuario creado.');
    }

    /**
     * Display the specified resource.P
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://192.168.0.2:3000/',
            // You can set any number of default request options.
            //// 'timeout'  => 2.0,
        ]);

        // $response = $client->get("http://192.168.0.2:8000/users/{$id}");

        $response = $client->request('GET', "users/{$id}");
        
        // dd($response->getBody()->getContents());
        $user = json_decode($response->getBody()->getContents());
        // return $user;
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://192.168.0.2:3000/',
            // You can set any number of default request options.
            //'timeout'  => 2.0,
        ]);
        $response = $client->request('GET', "users/{$id}");
        $user = json_decode($response->getBody()->getContents());
        
        return view('users.edit', compact('user'));


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
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://192.168.0.2:3000/',
            // You can set any number of default request options.
            //'timeout'  => 2.0,
        ]);
        $response = $client->put(
            "http://192.168.0.2:3000/users/{$id}",
            [
                'json' => $request->all()
            ]
        );
        // dd($response);
        return redirect()->action('User\UserController@index')->with('msje', 'Usuario editado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'http://192.168.0.2:8000/',
            // You can set any number of default request options.
            //'timeout'  => 2.0,
        ]);
        $response = $client->request('DELETE', "users/{$id}");
        
        
        return redirect()->action('User\UserController@index')->with('msjd', 'Usuario eliminado.');
    }
}
