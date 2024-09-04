<?php

namespace App\Services;


use App\Traits\Logger\LoggerTrait;
use Illuminate\Support\Facades\Auth;

abstract class BaseService
{
    use LoggerTrait;

    protected $cacheTable;

    public function __construct()
    {
        $this->initLogService();
    }

    public function getAuthUser(): ?User
    {
        return Auth::user();
    }

    public function getAuthId(): ?int
    {
        return Auth::id();
    }

    public function setCacheTable(string $cacheTable)
    {
        $this->cacheTable = $cacheTable;
    }

    public function isCacheActive()
    {
        return in_array($this->cacheTable, config('octane.cache_tables'));
    }
}
