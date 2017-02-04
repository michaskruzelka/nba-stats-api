<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class DraftHistory extends EndpointDefault
{
    /**
     * @var string
     */
    protected $point = 'drafthistory';

    /**
     * @var string
     */
    protected $leagueID;

    /**
     * @var int|null|string
     */
    protected $season;

    /**
     * @var int|null|string
     */
    protected $teamID;

    /**
     * @var int|null|string
     */
    protected $roundNum;

    /**
     * @var int|null|string
     */
    protected $roundPick;

    /**
     * @var int|null|string
     */
    protected $overallPick;

    /**
     * @var null|string
     */
    protected $topX;

    /**
     * @var null|string
     */
    protected $college;

    /**
     * DraftHistory constructor.
     * @param null|string $leagueID
     * @param null|string|int $season Full Year (2016)
     * @param null|string|int $teamID
     * @param null|string|int $roundNum
     * @param null|string|int $roundPick
     * @param null|string|int $overallPick
     * @param null|string $topX
     * @param null|string $college
     */
    public function __construct(
        $leagueID = null,
        $season = null,
        $teamID = null,
        $roundNum = null,
        $roundPick = null,
        $overallPick = null,
        $topX = null,
        $college = null
    ) {
        $this->leagueID = $leagueID ? $leagueID : static::getDefaultLeagueID();
        $this->season = $season;
        $this->teamID = $teamID;
        $this->roundNum = $roundNum;
        $this->roundPick = $roundPick;
        $this->overallPick = $overallPick;
        $this->topX = $topX;
        $this->college = $college;
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'LeagueID' => $this->leagueID,
            'Season' => $this->season,
            'TeamID' => $this->teamID,
            'RoundNum' => $this->roundNum,
            'RoundPick' => $this->roundPick,
            'OverallPick' => $this->overallPick,
            'TopX' => $this->topX,
            'College' => $this->college
        ];
    }
}
