<?php

namespace dudecussi\yii2\aws\s3\interfaces\commands;

/**
 * Interface HasBucket
 *
 * @package dudecussi\yii2\aws\s3\interfaces\commands
 */
interface HasBucket
{
    /**
     * @param string $name
     */
    public function inBucket(string $name);
}
