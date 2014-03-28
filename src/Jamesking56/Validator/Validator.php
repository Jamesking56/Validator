<?php namespace Jamesking56\Validator;

use Validator as V;

/**
 * Class Validator
 * @package Jamesking56\Validator
 */
abstract class Validator implements ValidatorInterface
{
    /**
     * @var array
     */
    protected $rules = array();

    /**
     * @var array
     */
    protected $updateRules = array();

    /**
     * Validate against a ruleset.
     *
     * @param $input
     * @param $rules
     * @return bool
     * @throws ValidatorException
     */
    public function validate($input, $rules)
    {
        $validation = V::make($input, $rules);

        if ($validation->fails()) {
            throw new ValidatorException($validation->errors());
        }

        return true;
    }

    /**
     * Validate against default ruleset.
     *
     * @param $input
     * @return bool
     */
    public function validateForCreate($input)
    {
        return $this->validate($input, $this->rules);
    }

    /**
     * Validate against update ruleset.
     *
     * @param $input
     * @return bool
     */
    public function validateForUpdate($input)
    {
        return $this->validate($input, $this->updateRules);
    }
}
