<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getCommonTeamRoster
 * @method array getCommonTeamRosterByPlayer($string)
 * @method array getCoaches
 * @method array getCoachesByCoachName($string)
 * @method array getCoachesByCoachType($string)
 */
class CommonTeamRoster extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'commonteamroster';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'CommonTeamRoster',
        'Coaches'
    ];

    /**
     * @return array
     */
    public function getHeadCoach()
    {
        return $this->getCoachesByCoachType('Head Coach');
    }

    /**
     * @return array
     */
    public function getAssistantCoaches()
    {
        return $this->getCoachesByCoachType('Assistant Coach');
    }

    /**
     * @return array
     */
    public function getTrainers()
    {
        return $this->getCoachesByCoachType('Trainer');
    }
}
