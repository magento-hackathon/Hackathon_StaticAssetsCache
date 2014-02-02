<?php

class Hackathon_StaticAssetsCache_Block_Html_Asset
    extends Mage_Core_Block_Template
{

    /**
     * Check to see if cache tag is active and return
     * timestamp if set
     *
     * @param $src full HTTP url to asset
     * @return string
     */
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