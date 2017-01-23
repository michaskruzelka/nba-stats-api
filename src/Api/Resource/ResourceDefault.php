<?php

namespace Michaskruzelka\NBA\Api\Resource;

/**
 * Class ResourceDefault
 * @package Michaskruzelka\NBA\Api\Resource
 */
class ResourceDefault implements Resource
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var array
     */
    protected $resultSets = [];

    /**
     * @var array
     */
    protected $resultSetNames = [];

    /**
     * @param $name
     * @param array|null $arguments
     * @return array
     */
    public function __call($name, array $arguments = null)
    {
        list(,$resultSetName) = explode('get', $name);
        if ( ! in_array($resultSetName, $this->getResultSetNames())) {
            return [];
        }
        return $this->getResultSet($resultSetName);
    }

    public function getResultSetNames()
    {
        return $this->resultSetNames;
    }

    public function setResultSetNames($resultSetNames)
    {
        $this->resultSetNames = $resultSetNames;
        return $this;
    }

    /**
     * @return array
     */
    public function getResultSets()
    {
        return $this->resultSets;
    }

    /**
     * @param array $resultSets
     * @return $this
     */
    public function setResultSets(array $resultSets)
    {
        $this->resultSets = $resultSets;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $params
     * @return $this
     */
    public function setParameters(array $params)
    {
        $this->parameters = $params;
        return $this;
    }

    /**
     * @param $name
     * @return array
     */
    public function getResultSet($name)
    {
        $resultSets = array_filter($this->resultSets, function($resultSet) use ($name) {
            return $resultSet['name'] === $name;
        });
        return $resultSets ? $this->toAssociative(array_values($resultSets)[0]) : [];
    }

    /**
     * @param array $resultSet
     * @return array
     */
    protected function toAssociative(array $resultSet)
    {
        $associative = [];
        $keys = $resultSet['headers'];
        foreach ($resultSet['rowSet'] as $rowSet) {
            $associative[] = array_combine($keys, $rowSet);
        }
        return $associative;
    }
}
