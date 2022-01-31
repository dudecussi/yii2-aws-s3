<?php

namespace dudecussi\yii2\aws\s3\interfaces\commands;

/**
 * Interface ExecutableCommand
 *
 * @package dudecussi\yii2\aws\s3\interfaces\commands
 */
interface ExecutableCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute();
}
