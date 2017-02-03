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
        $filterPos = strrpos($resultSetName, 'By');
        $filter = null;
        if ($arguments && $filterPos) {
            $filterClause = substr($resultSetName, $filterPos+2);
            $filterClause = preg_replace('/[A-Z]([A-Z](?![a-z]))*/', '_$0', $filterClause);
            $filterClause = ltrim(strtoupper($filterClause), '_');
            $resultSetName = substr($resultSetName, 0, $filterPos);
            $filter = [$filterClause => $arguments[0]];
        }
        if ( ! in_array($resultSetName, $this->getResultSetNames())) {
            return [];
        }
        return $this->getResultSet($resultSetName, $filter);
    }

    /**
     * @return array
     */
    public function getResultSetNames()
    {
        return $this->resultSetNames;
    }

    /**
     * @param array $resultSetNames
     * @return $this
     */
    public function setResultSetNames(array $resultSetNames)
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
     * @param string $name
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
     * @param string $name
     * @param array $filter
     * @return array
     */
    public function getResultSet($name, array $filter = null)
    {
        foreach ($this->resultSets as $resultSet) {
            if ($resultSet['name'] === $name) {
                return $this->toAssociative($resultSet, $filter);
            }
        }
        return [];
    }

    /**
     * @param array $resultSet
     * @param array $filter
     * @return array
     */
    protected function toAssociative(array $resultSet, array $filter = null)
    {
        $associative = [];
        $keys = $resultSet['headers'];
        foreach ($resultSet['rowSet'] as $rowSet) {
            if ($filter) {
                $index = array_search(key($filter), $keys);
                if (false === $index || $rowSet[$index] !== current($filter)) {
                    continue;
                }
            }
            $associative[] = array_combine($keys, $rowSet);
        }
        return $associative;
    }
}
