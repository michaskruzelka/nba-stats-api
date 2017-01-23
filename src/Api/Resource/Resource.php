<?php

namespace Michaskruzelka\NBA\Api\Resource;

interface Resource
{
    public function setResultSets(array $resultSets);

    public function getResultSets();

    public function getName();

    public function setName($name);

    public function getParameters();

    public function setParameters(array $params);
}