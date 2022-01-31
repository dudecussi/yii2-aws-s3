<?php

namespace dudecussi\yii2\aws\s3\base\commands;

use dudecussi\yii2\aws\s3\interfaces\Bus;
use dudecussi\yii2\aws\s3\interfaces\commands\ExecutableCommand as ExecutableCommandInterface;

/**
 * Class ExecutableCommand
 *
 * @package dudecussi\yii2\aws\s3\base\commands
 */
abstract class ExecutableCommand implements ExecutableCommandInterface
{
    /** @var \dudecussi\yii2\aws\s3\interfaces\Bus */
    private $bus;

    /**
     * ExecutableCommand constructor.
     *
     * @param \dudecussi\yii2\aws\s3\interfaces\Bus $bus
     */
    public function __construct(Bus $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->bus->execute($this);
    }
}
