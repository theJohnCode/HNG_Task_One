<?php

namespace App\Http\Controllers;

use App\Http\Resources\DetailResource;
use App\Http\Resources\UserResource;
use App\Models\Detail;
use App\Models\User;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $detail = Detail::find(1);
     
        // return DetailResource::collection(Detail::all());
        return response()->json([
            'slackUsername' => $detail->slack_username,
            'backend' => $detail->backend == 1 ? true : false,
            'age' => $detail->age,
            'bio' => $detail->bio,
        ]);
    }
}
