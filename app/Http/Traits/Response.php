<?php
namespace App\Http\Traits;

trait Response {
    public function response($status, $message, $status_code = null) {
        
        return response()->json([
            'status' => $status,
            'message' => $message
        ], $status_code);
    }
}