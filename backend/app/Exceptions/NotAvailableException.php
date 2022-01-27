<?php

namespace App\Exceptions;

use Exception;

class NotAvailableException extends Exception
{
    public function render($request)
    {
        return response()->json([
            'message' => [$this->getMessage()],
        ], 500);
    }
}
