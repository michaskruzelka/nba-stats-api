<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

interface Endpoint
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * @return array
     */
    public function getParams();
}
