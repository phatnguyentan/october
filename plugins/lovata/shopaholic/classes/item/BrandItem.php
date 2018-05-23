<?php namespace Lovata\Shopaholic\Classes\Item;

use Lovata\Toolbox\Classes\Item\ElementItem;

use Lovata\Shopaholic\Plugin;
use Lovata\Shopaholic\Models\Brand;

/**
 * Class BrandItem
 * @package Lovata\Shopaholic\Classes\Item
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @see \Lovata\Shopaholic\Tests\Unit\Item\BrandItemTest
 * @link https://github.com/lovata/oc-shopaholic-plugin/wiki/BrandItem
 *
 * @property int    $id
 * @property string $name
 * @property string $slug
 * @property string $code
 *
 * @property string $preview_text
 * @property \System\Models\File $preview_image
 *
 * @property string $description
 * @property \October\Rain\Database\Collection|\System\Models\File[]  $images
 */
class BrandItem extends ElementItem
{
    const CACHE_TAG_ELEMENT = 'shopaholic-brand-element';

    /** @var Brand */
    protected $obElement = null;

    /**
     * Set element object
     */
    protected function setElementObject()
    {
        if (!empty($this->obElement) && !$this->obElement instanceof Brand) {
            $this->obElement = null;
        }

        if (!empty($this->obElement) || empty($this->iElementID)) {
            return;
        }

        $this->obElement = Brand::active()->find($this->iElementID);
    }

    /**
     * Get cache tag array for model
     * @return array
     */
    protected static function getCacheTag()
    {
        return [Plugin::CACHE_TAG, self::CACHE_TAG_ELEMENT];
    }

    /**
     * Set element data from model object
     *
     * @return array
     */
    protected function getElementData()
    {
        if (empty($this->obElement)) {
            return null;
        }

        $arResult = [
            'id'            => $this->obElement->id,
            'name'          => $this->obElement->name,
            'slug'          => $this->obElement->slug,
            'code'          => $this->obElement->code,
            'preview_text'  => $this->obElement->preview_text,
            'preview_image' => $this->obElement->preview_image,
            'description'   => $this->obElement->description,
            'images'        => $this->obElement->images,
        ];

        return $arResult;
    }
}
