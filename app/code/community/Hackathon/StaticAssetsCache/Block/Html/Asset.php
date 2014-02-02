<?php

class Hackathon_StaticAssetsCache_Block_Html_Asset
    extends Mage_Core_Block_Template
{
    public function getAsset($src)
    {
        $cache_helper = 'hackathon_staticassetscache/cache';

        if(false === $this->helper($cache_helper)->isCacheAvailable())
        {
            return $src;
        }

        if(false === ($load = $this->helper($cache_helper)->load($src))) {
            $this->helper($cache_helper)->save($src);

            $load = $this->helper($cache_helper)->load($src);
        }

        return $src . '?v=' . $load;
    }
} 