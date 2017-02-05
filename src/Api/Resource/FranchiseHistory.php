<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getFranchiseHistory
 * @method array getFranchiseHistoryByTeamId($int)
 * @method array getFranchiseHistoryByTeamCity($string)
 * @method array getFranchiseHistoryByTeamName($string)
 * @method array getDefunctTeams
 */
class FranchiseHistory extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'franchisehistory';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'FranchiseHistory',
        'DefunctTeams'
    ];

    /**
     * @param string $year
     * @return array
     */
    public function getFranchiseHistoryStarting($year)
    {
        $resultSet = $this->getResultSet('FranchiseHistory');
        return array_values(array_filter($resultSet, function($item) use($year) {
            return $item['START_YEAR'] >= (int) $year;
        }));
    }
}
