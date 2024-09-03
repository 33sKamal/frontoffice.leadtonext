<?php

namespace App\Traits\Logger;

use App\Enums\Log\LogFieldEnum;
use Illuminate\Support\Facades\App;
use Psr\Log\LoggerInterface;

trait LoggerTrait
{
    protected $startTime;

    protected array $extra = [];

    protected $endTime;

    protected $memoryUsageStart;

    protected $memoryUsageEnd;

    protected $logDetails = [];

    // Properly injecting the logger via constructor
    public function __construct(private $logger)
    {
    }

    public function initLogService()
    {
        $this->logger = App::make(LoggerInterface::class);
    }

    public function startLog()
    {
        $this->startTime = microtime(true);
        $this->memoryUsageStart = memory_get_usage();
        $this->logDetails['start_time'] = $this->startTime;
        $this->logDetails['memory_usage_start'] = $this->memoryUsageStart;
        $this->log(level: 'info', message: "Process started at {$this->logDetails['start_time']}");
    }

    public function log(string $level, string $message, array $extra = [])
    {
        $this->extra = [...$this->extra, ...$extra];
        count($this->extra) > 0 ? $this->logger->{$level}($message, $this->extra) : $this->logger->{$level}($message);
    }

    public function stopLog()
    {
        $this->endTime = microtime(true);
        $this->memoryUsageEnd = memory_get_usage();
        $this->logDetails['end_time'] = date('Y-m-d H:i:s', $this->endTime);
        $this->logDetails['memory_usage_end'] = $this->memoryUsageEnd;
        $this->logDetails['execution_time'] = $this->endTime - $this->startTime;
        $this->logDetails['memory_used'] = $this->memoryUsageEnd - $this->memoryUsageStart;

        // Assuming LogFieldEnum is imported properly
        $this->log(level: 'info', message: 'server usage', extra: [
            LogFieldEnum::DETAILS => [
                $this->logDetails,
            ],
        ]);

        $this->saveLog();
    }

    // Method to save logs, you need to implement this
    // as it's not provided in your code
    private function saveLog()
    {
        // Implement your logic to save the log here
    }
}
