<?php

namespace dudecussi\yii2\aws\s3\handlers;

use dudecussi\yii2\aws\s3\base\handlers\Handler;
use dudecussi\yii2\aws\s3\commands\GetUrlCommand;

/**
 * Class GetUrlCommandHandler
 *
 * @package dudecussi\yii2\aws\s3\handlers
 */
final class GetUrlCommandHandler extends Handler
{
    /**
     * @param \dudecussi\yii2\aws\s3\commands\GetUrlCommand $command
     *
     * @return string
     */
    public function handle(GetUrlCommand $command): string
    {
        return $this->s3Client->getObjectUrl($command->getBucket(), $command->getFilename());
    }
}
