<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonAllPlayers
 * @method array getCommonAllPlayersByPersonId($int)
 * @method array getCommonAllPlayersByDisplayFirstLast($string)
 * @method array getCommonAllPlayersByTeamId($int)
 * @method array getCommonAllPlayersByTeamCity($string)
 * @method array getCommonAllPlayersByTeamName($string)
 * @method array getCommonAllPlayersByTeamAbbreviation($string)
 * @method array getCommonAllPlayersByTeamCode($string)
 */
class CommonAllPlayers extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonallplayers';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'CommonAllPlayers'
    ];

    /**
     * @param string $year
     * @return array
     */
    public function getCommonAllPlayersSince($year)
    {
        $resultSet = $this->getResultSet('CommonAllPlayers');
        return array_values(array_filter($resultSet, function($item) use($year) {
            return (int) $item['FROM_YEAR'] >= (int) $year;
        }));
    }

    /**
     * @param string $year
     * @return array
     */
    public function getCommonAllPlayersUntil($year)
    {
        $resultSet = $this->getResultSet('CommonAllPlayers');
        return array_values(array_filter($resultSet, function($item) use($year) {
            return (int) $item['TO_YEAR'] <= (int) $year;
        }));
    }
}
