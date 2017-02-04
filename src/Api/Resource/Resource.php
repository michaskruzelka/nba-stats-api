<?php

namespace Michaskruzelka\NBA\Api\Resource;

interface Resource
{
    /**
     * @param array $resultSets
     * @return $this
     */
    public function setResultSets(array $resultSets);

    /**
     * @return array
     */
    public function getResultSets();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return array
     */
    public function getParameters();

    /**
     * @param array $params
     * @return $this
     */
    public function setParameters(array $params);
}
