<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class BoxScorePlayerTrack extends EndpointDefault
{
    /**
     * @var string
     */
    protected $point = 'boxscoreplayertrackv2';

    /**
     * @var string
     */
    protected $gameID;

    /**
     * BoxScore constructor.
     * @param string $gameID
     */
    public function __construct($gameID)
    {
        $this->gameID = $gameID;
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'GameID' => $this->gameID
        ];
    }
}
