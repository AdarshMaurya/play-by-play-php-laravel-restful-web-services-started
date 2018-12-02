<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'meeting_id' => 'required',
            'user_id' => 'required'
        ]);

        $meeting_id = $request->input('meeting_id');
        $user_id = $request->input('meeting_id');

        $meeting = [
            'title' => 'Title',
            'description' => 'Description',
            'time' => 'Time',
            'user_id' => 'User Id',
            'view_meeting' => [
                'href' => 'api/v1/meeting/1',
                'method' => 'GET'
            ]
        ];

        $user = [
            'name' => 'Name'
        ];

        $response =[
            'msg' => 'List of all Meetings',
            'meeting' => $meeting,
            'user' => $user,
            'unregister' => [
                'href' => 'api/v1/meeting/registration/1',
                'method' => 'DELETE'
            ]
        ];

        return response()->json($response, 200);
       // return "It works";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meeting = [
            'title' => 'Title',
            'description' => 'Description',
            'time' => 'Time',
            'user_id' => 'User Id',
            'view_meeting' => [
                'href' => 'api/v1/meeting/1',
                'method' => 'GET'
            ]
        ];

        $user = [
            'name' => 'Name'
        ];

        $response =[
            'msg' => 'List of all Meetings',
            'meeting' => $meeting,
            'user' => $user,
            'unregister' => [
                'href' => 'api/v1/meeting/registration/1',
                'method' => 'DELETE'
            ]
        ];

        return response()->json($response, 200);
        //return "It works";
    }
}
