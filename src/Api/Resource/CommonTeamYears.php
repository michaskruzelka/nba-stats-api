<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getTeamYears
 * @method array getTeamYearsByTeamId($int)
 * @method array getTeamYearsByAbbreviation($string)
 */
class CommonTeamYears extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonteamyears';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'TeamYears'
    ];

    /**
     * @param string $year
     * @return array
     */
    public function getTeamYearsSince($year)
    {
        $resultSet = $this->getResultSet('TeamYears');
        return array_values(array_filter($resultSet, function($item) use($year) {
            return (int) $item['MIN_YEAR'] >= (int) $year;
        }));
    }
}
