<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

class BoxScore extends EndpointDefault
{
    /**
     * @var string
     */
    protected $gameID;

    /**
     * @var int
     */
    protected $startPeriod;

    /**
     * @var int
     */
    protected $endPeriod;

    /**
     * @var int
     */
    protected $startRange;

    /**
     * @var int
     */
    protected $endRange;

    /**
     * @var int
     */
    protected $rangeType;

    /**
     * BoxScore constructor.
     * @param string $gameID
     * @param int $startPeriod
     * @param int $endPeriod
     * @param int $startRange
     * @param int $endRange
     * @param int $rangeType
     */
    public function __construct(
        $gameID,
        $startPeriod = 1,
        $endPeriod = 4,
        $startRange = 0,
        $endRange = 0,
        $rangeType = 0
    ) {
        $this->gameID = $gameID;
        $this->startPeriod = $startPeriod;
        $this->endPeriod = $endPeriod;
        $this->startRange = $startRange;
        $this->endRange = $endRange;
        $this->rangeType = $rangeType;
    }

    /**
     * Implements Resource interface
     * @return array
     */
    public function getParams()
    {
        return [
            'GameID' => $this->gameID,
            'StartPeriod' => $this->startPeriod,
            'EndPeriod' => $this->endPeriod,
            'StartRange' => $this->startRange,
            'EndRange' => $this->endRange,
            'RangeType' => $this->rangeType
        ];
    }
}
