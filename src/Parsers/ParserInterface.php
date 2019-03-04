<?php

namespace App\Parsers;

/**
 * Interface ParserInterface
 * @package CoreBundle\Parsers
 */
interface ParserInterface
{
    /**
     * @return mixed
     */
    public function parse();
}