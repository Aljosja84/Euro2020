<?php

// get all entries and set timestamp

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

$current_time = Carbon::now();

$tweets = DB::table('tweets')->where('id', '>=', 318)->latest()->get();
echo count($tweets);
echo "<br>";

foreach($tweets as $tweet)
    {
        echo "<div style=\"color:#8r0433; padding-top:10px\">" . $tweet->userName . ': ' . $tweet->tweet . "</div><br>";
    }

