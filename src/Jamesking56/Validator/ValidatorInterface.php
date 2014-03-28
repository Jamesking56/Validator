<?php  namespace Jamesking56\Validator;

/**
 * Interface ValidatorInterface
 * @package Jamesking56\Validator
 */
interface ValidatorInterface
{
    /**
     * Validate against a ruleset.
     *
     * @param $input
     * @param $rules
     * @return bool
     * @throws ValidatorException
     */
    public function validate($input, $rules);

    /**
     * Validate against default ruleset.
     *
     * @param $input
     * @return bool
     */
    public function validateForCreate($input);

    /**
     * Validate against update ruleset.
     *
     * @param $input
     * @return bool
     */
    public function validateForUpdate($input);
}
 