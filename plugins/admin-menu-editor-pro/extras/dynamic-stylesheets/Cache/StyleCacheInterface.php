<?php

namespace YahnisElsts\AdminMenuEditor\DynamicStylesheets\Cache;

/**
 * A cut-down version of the PSR-16 Simple Cache Interface.
 */
interface StyleCacheInterface {
	/**
	 * Fetches a value from the cache.
	 *
	 * @param string $key    The unique key of this item in the cache.
	 * @param mixed $default Default value to return if the key does not exist.
	 *
	 * @return mixed The value of the item from the cache, or $default in case of cache miss.
	 */
	public function get($key, $default = null);

	/**
	 * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
	 *
	 * @param string $key                   The key of the item to store.
	 * @param mixed $value                  The value of the item to store. Must be serializable.
	 * @param null|int|\DateInterval $ttl   Optional. The TTL value of this item. If no value is sent and
	 *                                      the driver supports TTL then the library may set a default value
	 *                                      for it or let the driver take care of that.
	 *
	 * @return bool True on success and false on failure.
	 */
	public function set($key, $value, $ttl = null);

	/**
	 * Delete an item from the cache by its unique key.
	 *
	 * @param string $key The unique cache key of the item to delete.
	 *
	 * @return bool True if the item was successfully removed. False if there was an error.
	 */
	public function delete($key);
}