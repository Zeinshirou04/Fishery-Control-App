<?php

namespace App\Http\Controllers\Devices;

use App\Http\Controllers\Controller;
use App\Http\Requests\Device\EnvironmentDataRequest;
use App\Models\Data\EnvironmentData;

class DeviceDataController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(EnvironmentDataRequest $request)
    {
        try {
            EnvironmentData::create([
                'water_ph' => $request->water_ph,
                'water_temp' => $request->water_temp,
                'water_humid' => $request->water_humid,
                'device_id' => $request->device_id,
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Data saved'
            ], 201);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'failed',
                'message' => $th->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
