<?php

namespace dudecussi\yii2\aws\s3\interfaces;

use dudecussi\yii2\aws\s3\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package dudecussi\yii2\aws\s3\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \dudecussi\yii2\aws\s3\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
