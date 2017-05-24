<?php

namespace PiotrKwiecinski\ImageResizeFix\Helper;

use Magento\Catalog\Helper\Image as BaseImage;

class Image extends BaseImage
{
    /**
     * Retrieve image frame flag
     *
     * @return false|string
     */
    public function getFrame()
    {
        $frame = $this->getAttribute('frame');
        if ($frame === null) {
            $frame = $this->getConfigView()->getVarValue('Magento_Catalog', 'product_image_white_borders');
        }
        return $frame;
    }
}