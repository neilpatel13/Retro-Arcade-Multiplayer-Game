<?php
    //remember, API endpoints should only echo/output precisely what you want returned
    //any other unexpected characters can break the handling of the response
    $response = ["message" => "There was a problem saving your score"];
    http_response_code(400);
    $contentType = $_SERVER["CONTENT_TYPE"];

    error_log("Content type $contentType");
    if ($contentType === "application/json") {
        $json = file_get_contents('php://input');
        $data = json_decode($json, true)["data"];
    } else if ($contentType === "application/x-www-form-urlencoded") {
        $data = $_POST;
        $response = ["message" => "encoded"];
    }

    error_log(var_export($data, true));
    session_start();
    require_once(__DIR__ . "/../../../lib/functions.php");
    $user_id = get_user_id();
    $reject = false;

    if ($user_id <= 0){
        $reject = true;
        error_log("User not logged in");
        http_response_code(403);
        $response["message"] = "You must be logged in to save your score";
        flash($response["message"], "warning");
    }

    if (!$reject){
        $response["message"] = "not rejecting";
        $score = (int)se($data, "score", 0, false);
        save_score($user_id, $score, true);
        $response["message"] = "Score Saved!";
        error_log("Score of $score succesfully saved for $user_id");
        http_response_code(200);
    }

    echo json_encode($response);