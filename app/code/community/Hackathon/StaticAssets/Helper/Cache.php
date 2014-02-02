<?php

class Hackathon_StaticAssets_Helper_Cache
    extends Mage_Core_Helper_Abstract
{
    const CACHE_TAG = 'STATIC_ASSETS';

    public function save($key)
    {
        $this->_saveCache(
            gmmktime(),
            $this->getCacheKey($key),
            $this->_getCacheTags()
        );
    }

    public function load($key)
    {
        return $this->_loadCache(
            $this->getCacheKey($key)
        );
    }

    public function isCacheAvailable()
    {
        $type = strtolower(self::CACHE_TAG);

        return (bool)Mage::app()->useCache($type);
    }

    public function getCacheKey($key)
    {
        return $this->_buildCacheKey($key);
    }

    public function setCacheKey($key)
    {
        return $this->_buildCacheKey($key);
    }

    protected function _buildCacheKey($key)
    {
        $key_data = array(
            'STATIC_ASSETS_KEY',
            $key,
            Mage::app()->getStore()->getCode()
        );

        return implode('|', $key_data);
    }

    protected function _getCacheTags()
    {
        return array(
            self::CACHE_TAG
        );
    }
} 