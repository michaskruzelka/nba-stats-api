<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getFranchiseHistory
 * @method array getFranchiseHistoryByTeamId
 * @method array getFranchiseHistoryByTeamCity
 * @method array getFranchiseHistoryByTeamName
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
     * @param string|int $year
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
