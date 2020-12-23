<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use http\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{


    public function store(Request $request)
    {
        $client = new Clients();
        $client->name = $request->input_name;
        $client->surname = $request->input_surname;
        $client->date_birth = $request->input_dob;
        $client->phone = $request->input_phone;
        $client->id_type = $request->input_docType;
        $client->id_number = $request->input_docNumber;

        $client->save();
        return response()->json($client, 200);

    }

}
