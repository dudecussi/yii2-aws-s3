<?php

namespace dudecussi\yii2\aws\s3\interfaces;

use dudecussi\yii2\aws\s3\interfaces\commands\Command;
use dudecussi\yii2\aws\s3\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package dudecussi\yii2\aws\s3\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \dudecussi\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return \dudecussi\yii2\aws\s3\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
