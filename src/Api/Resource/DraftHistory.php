<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * @method array getDraftHistory
 * @method array getDraftHistoryByPersonId(int)
 * @method array getDraftHistoryByPlayerName(string)
 * @method array getDraftHistoryBySeason(string)
 * @method array getDraftHistoryByRoundNumber(int)
 * @method array getDraftHistoryByRoundPick(int)
 * @method array getDraftHistoryByOverallPick(int)
 * @method array getDraftHistoryByTeamId(int)
 * @method array getDraftHistoryByTeamCity(string)
 * @method array getDraftHistoryByTeamName(string)
 * @method array getDraftHistoryByTeamAbbreviation(string)
 * @method array getDraftHistoryByOrganization(string)
 * @method array getDraftHistoryByOrganizationType(string)
 */
class DraftHistory extends ResourceDefault
{
    /**
     * @var string
     */
    protected $name = 'drafthistory';

    /**
     * @var array
     */
    protected $resultSetNames = [
        'DraftHistory'
    ];

    /**
     * @return array
     */
    public function getDraftHistoryFromCollege()
    {
        return $this->getDraftHistoryByOrganizationType('College/University');
    }

    /**
     * @return array
     */
    public function getDraftHistoryFromOtherTeam()
    {
        return $this->getDraftHistoryByOrganizationType('Other Team/Club');
    }
}
