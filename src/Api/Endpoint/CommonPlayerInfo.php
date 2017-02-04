<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class CommonPlayerInfo extends EndpointDefault
{
    /**
     * @var string
     */
    protected $point = 'commonplayerinfo';

    /**
     * @var int|string
     */
    protected $playerID;

    /**
     * CommonPlayerInfo constructor.
     * @param string|int $playerID
     */
    public function __construct($playerID) {
        $this->playerID = $playerID;
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'PlayerID' => $this->playerID
        ];
    }
}
