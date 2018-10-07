<?php

namespace App\Exceptions;

use Exception;

class ExcelImportErrorException extends Exception
{
    public function render()
    {
        return redirect('/')->with('error', $this->message);
    }
}
