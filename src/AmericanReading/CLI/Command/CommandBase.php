<?php

namespace AmericanReading\CLI\Command;

/**
 * Class for building and running commands throw exec().
 */
abstract class CommandBase implements CommandInterface
{
    /** @var bool */
    public $passthru = false;
    /** @var int The exit code from the last command sent to exec() */
    private $statusCode;
    /** @var array List of lines output from the last command sent to exec() */
    private $results;

    /**
     * Execute the command. This will set results, and statusCode.
     */
    public function run()
    {
        if ($this->passthru) {
            passthru($this->getCommandLine(), $this->statusCode);
        } else {
            exec($this->getCommandLine(), $this->results, $this->statusCode);
        }
    }

    /**
     * @return array Array of lines output by the command.
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return int The exit status code from the last run command.
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
}
