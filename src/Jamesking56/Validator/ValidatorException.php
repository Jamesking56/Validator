<?php namespace Jamesking56\Validator;

use Exception;

class ValidatorException extends Exception
{
    protected $errors;

    public function __construct($errors, $message = '', $code = 0, Exception $previous = null)
    {
        $this->errors = $errors;

        parent::__construct($message, $code, $previous);
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
