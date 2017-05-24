<?php

namespace PiotrKwiecinski\ImageResizeFix\Model\Product;


use Magento\Catalog\Model\Product\Image as BaseImage;

class Image extends BaseImage
{
    /**
     * {@inheritdoc}
     */
    public function setKeepAspectRatio($keep)
    {
        $this->_keepAspectRatio = $keep && $keep !== 'false';
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setConstrainOnly($flag)
    {
        $this->_constrainOnly = $flag && $flag !== 'false';
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setKeepFrame($keep)
    {
        $this->_keepFrame = $keep && $keep !== 'false';
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setKeepTransparency($keep)
    {
        $this->_keepTransparency = $keep && $keep !== 'false';
        return $this;
    }
}