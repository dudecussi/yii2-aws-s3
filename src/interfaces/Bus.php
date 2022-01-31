<?php

namespace dudecussi\yii2\aws\s3\interfaces;

use dudecussi\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package dudecussi\yii2\aws\s3\interfaces
 */
interface Bus
{
    /**
     * @param \dudecussi\yii2\aws\s3\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
