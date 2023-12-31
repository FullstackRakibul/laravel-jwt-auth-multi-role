<?php


function send_error($message, $messages = [], $code = 404)
{

    $response = [
        'status' => false,
        'message' => $message
    ];
    !empty($messages) ? $response['errors'] = $messages : null;

    return response()->json($response, $code);
}

function send_response($message, $data)
{
    $response = [
        'status' => true,
        'message' => $message,
        'data' => $data
    ];
    return response()->json($response);
}


function suscription($key){
    if (! function_exists('env')) {
        function env($key, $default = null) {
            // ...
        }
    }
}
