<?php

namespace InputValidation;

/**
 * Form options list interface
 *
 * @author Michael Mayer <michael@lastzero.net>
 * @license MIT
 */
interface OptionsInterface
{
    public function get(string $listName);
}