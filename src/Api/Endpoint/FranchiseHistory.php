<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class FranchiseHistory extends EndpointDefault
{
    /**
     * @var string
     */
    protected $point = 'franchisehistory';

    /**
     * @var string
     */
    protected $leagueID;

    /**
     * FranchiseHistory constructor.
     * @param null|string $leagueID
     */
    public function __construct($leagueID = null)
    {
        $this->leagueID = $leagueID ? $leagueID : static::getDefaultLeagueID();
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'LeagueID' => $this->leagueID
        ];
    }
}