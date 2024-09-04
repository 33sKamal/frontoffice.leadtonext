<?php

namespace App\Services;


use App\Traits\Logger\LoggerTrait;
use Illuminate\Support\Facades\Auth;
use Laravel\Octane\Facades\Octane;

abstract class BaseCacheServiceOctane
{
    use LoggerTrait;

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

    public function initCacheInsatnce(string $cacheTable)
    {
        $this->cacheTable = $cacheTable;
        if ($this->isCacheActive()) {
            $this->octain = Octane::table($cacheTable);
        }
    }

    public function cacheItem($item)
    {
        $payload = serialize($item);

        return $this->octain->set($item->getKey(), ['item' => $payload]);
    }

    public function getCacheItem($id)
    {

        $foundItem = $this->octain->get($id);

        if ($foundItem !== false) {
            return unserialize($foundItem['item']);
        }

        return null;
    }

    public function deleteCacheItem($item)
    {
        return $this->octain->delete($item->getKey());
    }

    public function isCacheActive()
    {
        return in_array($this->cacheTable, config('cache.cached_tables'));
    }
}
