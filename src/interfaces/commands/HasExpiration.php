<?php

namespace dudecussi\yii2\aws\s3\interfaces\commands;

/**
 * Interface HasExpiration
 *
 * @package dudecussi\yii2\aws\s3\interfaces\commands
 */
interface HasExpiration
{
    /**
     * @param int|string|\DateTime $expiration
     */
    public function withExpiration($expiration);
}
