<?php

function success($data = null) 
{
    return response()->json(['sucsess' => true, 'data' => $data]);
}

function fail($message = null, $code = 400) 
{
    return response()->json(['success' => false, 'message' => $message], $code);
}