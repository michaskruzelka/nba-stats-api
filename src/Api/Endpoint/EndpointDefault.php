<?php

namespace Michaskruzelka\NBA\Api\Endpoint;

abstract class EndpointDefault implements Endpoint
{
    /**
     * @var string
     */
    protected $point;

    /**
     * Magic method
     * @return string
     */
    public function __toString()
    {
        return (string) $this->point;
    }

    protected static function getDefaultLeagueID()
    {
        return '00';
    }

    protected static function getDefaultSeason()
    {
        $date = new \DateTime();
        $interval = new \DateInterval('P1Y');
        // New season starts in November
        if ($date->format('n') < 11) {
            $end = $date->format('y');
            $date->sub($interval);
            $start = $date->format('Y');
        } else {
            $start = $date->format('Y');
            $date->add($interval);
            $end = $date->format('y');
        }
        return $start . '-' . $end;
    }
}
