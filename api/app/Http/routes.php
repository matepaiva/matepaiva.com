<?php

# app/Http/routes.php

use App\Models\Job;
use App\Models\Course;
use App\Models\User;
use App\Models\Listing;

$app->get('/profile', function () {
    $user = User::find(1);
    return response()->json($user);
});
$app->get('/outofthebox', function () {
    $listing = Listing::all();
    return response()->json($listing);
});
$app->get('/courses', function () {
    $courses = Course::all();
    return response()->json($courses);
});
$app->get('/jobs/{jobType}', function ($jobType) {
    $jobs = Job::with('images')->where("type", $jobType)->get();
    return response()->json($jobs);
});
$app->get('/job/{id}', function ($id) {
    $job = Job::with("images")->find($id);
    return response()->json($job);
});
