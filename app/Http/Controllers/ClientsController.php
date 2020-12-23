<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use http\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{


    public function store(Request $request)
    {
        $client = new Client();
        $client->name = $request->input_name;
        $client->surname = $request->input_name;
        $client->date_birth = $request->input_name;
        $client->phone = $request->input_name;
        $client->id_type = $request->input_name;
        $client->id_number = $request->input_name;

        $client->save();
        return response()->json($client, 200);

    }

}
