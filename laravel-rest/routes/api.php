<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*

1. Create Meeting - RED - POST --> Title, Description, Time, UserID <-- Message, Summary, URL, Users /api/v1/meeting
2. Update Meeting - RED - PATCH --> Meeting Data, UserID, MeetingID <-- Message, Summary, URL, User /api/v1/meeting
3. Delete Meeting - RED - DELETE --> MeetingID, UserID <--Message /api/v1/meeting

4. Register - RED - POST -->UserID, MeetingID <-- Message, User, Meeting URL /api/v1/meeting/registration
5. Unregister - RED - DELETE --> Name, E-mail, Password <--Message, User, Meeting URL /api/v1/meeting/user

6. Create User - BLUE - POST --> Name, E-mail, Password <-- Message, User, MeetingURL /api/v1/meeting/user
7. Get List of all Meetings - BLUE - GET  -->(null) <-- List of Meetings, URL /api/v1/meeting
8. Get Meeting - BLUE - GET --> MeetingID <-- MeetingInfo, URL /api/v1/meeting
9. User Signin - BLUE - POST --> Email, Password <-- ??? /api/v1/user/signin

 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});