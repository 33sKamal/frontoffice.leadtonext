<?php

namespace App\Services;


use App\Traits\Logger\LoggerTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

abstract class BaseCacheService
{
    use LoggerTrait;

    protected const CACHE_TTL = 3600;

    protected $cacheTable;

    protected $octain;

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

    public function initCacheInsatnce(
        string $cacheTable
    ) {
        $this->cacheTable = $cacheTable;

        if ($this->isCacheActive()) {
        }
    }

    public function cacheItem($item)
    {
        $payload = serialize($item);

        return Cache::add($this->cacheTable.':'.$item->getKey(), $payload, self::CACHE_TTL);
    }

    public function getCacheItem($id)
    {

        $foundItem = Cache::get($this->cacheTable.':'.$id);

        if ($foundItem !== null) {
            return unserialize($foundItem);
        }

        return null;
    }

    public function deleteCacheItem($item)
    {
        return Cache::delete($this->cacheTable.':'.$item->getKey());
    }

    public function isCacheActive()
    {
        return in_array($this->cacheTable, config('cache.cached_tables'));
    }
}
