<?php

namespace dudecussi\yii2\aws\s3\interfaces;

use dudecussi\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package dudecussi\yii2\aws\s3\interfaces
 */
interface Service
{
    /**
     * @param \dudecussi\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \dudecussi\yii2\aws\s3\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
