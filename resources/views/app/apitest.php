<?php

$response = Unirest\Request::get("https://v2.api-football.com/events/292855",
    array(
        "X-RapidAPI-Host" => "api-football-v1.p.rapidapi.com",
        "X-RapidAPI-Key" => "b1ae4a3fca89630148dadaa295a0b5b7"
    )
);
echo $response->raw_body;

?>
