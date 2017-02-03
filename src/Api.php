<?php

namespace Michaskruzelka\NBA;

use Michaskruzelka\NBA\Api\Client;
use Michaskruzelka\NBA\Api\Endpoint;
use Michaskruzelka\NBA\Api\Resource;

final class Api
{
    /**
     * @var Api
     */
    protected static $instance;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Api constructor.
     */
    protected function __construct()
    {
        $this->client = new Client();
    }

    protected function __clone()
    {
        // Forbidden outside
    }

    /**
     * @return Api
     */
    public static function instance()
    {
        return static::$instance ? static::$instance : (static::$instance = new static);
    }

    /**
     * @param null|string $leagueID
     * @return Resource\FranchiseHistory
     */
    public function franchiseHistory($leagueID = null)
    {
        return $this->client->send(
            new Endpoint\FranchiseHistory($leagueID),
            new Resource\FranchiseHistory()
        );
    }
}
