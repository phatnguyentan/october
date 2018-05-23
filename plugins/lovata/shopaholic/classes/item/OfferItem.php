<?php namespace Lovata\Shopaholic\Classes\Item;

use Lovata\Toolbox\Classes\Item\ElementItem;

use Lovata\Shopaholic\Plugin;
use Lovata\Shopaholic\Models\Offer;
use Lovata\Shopaholic\Models\Settings;

/**
 * Class OfferItem
 * @package Lovata\Shopaholic\Classes\Item
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @see \Lovata\Shopaholic\Tests\Unit\Item\OfferItemTest
 * @link https://github.com/lovata/oc-shopaholic-plugin/wiki/OfferItem
 *
 * @property             $id
 * @property string      $name
 * @property string      $code
 * @property int         $product_id
 * @property ProductItem $product
 *
 * @property string      $preview_text
 * @property \System\Models\File $preview_image
 *
 * @property string      $description
 * @property \October\Rain\Database\Collection|\System\Models\File[]  $images
 *
 * @property string      $price
 * @property string      $old_price
 * @property float       $price_value
 * @property float       $old_price_value
 * @property string      $currency
 *
 * @property int         $quantity
 *
 * Properties for Shopaholic
 * @see \Lovata\PropertiesShopaholic\Classes\Event\OfferModelHandler::extendOfferItem
 * @property \Lovata\PropertiesShopaholic\Classes\Collection\PropertyCollection|\Lovata\PropertiesShopaholic\Classes\Item\PropertyItem[] $property
 */
class OfferItem extends ElementItem
{
    const CACHE_TAG_ELEMENT = 'shopaholic-offer-element';

    /** @var Offer */
    protected $obElement = null;

    public $arRelationList = [
        'product' => [
            'class' => ProductItem::class,
            'field' => 'product_id',
        ],
    ];

    /**
     * Set element object
     */
    protected function setElementObject()
    {
        if (!empty($this->obElement) && !$this->obElement instanceof Offer) {
            $this->obElement = null;
        }

        if (!empty($this->obElement) || empty($this->iElementID)) {
            return;
        }

        $this->obElement = Offer::active()->find($this->iElementID);
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
            'id'              => $this->obElement->id,
            'product_id'      => $this->obElement->product_id,
            'name'            => $this->obElement->name,
            'code'            => $this->obElement->code,
            'preview_text'    => $this->obElement->preview_text,
            'preview_image'   => $this->obElement->preview_image,
            'description'     => $this->obElement->description,
            'images'          => $this->obElement->images,
            'price'           => $this->obElement->price,
            'old_price'       => $this->obElement->old_price,
            'price_value'     => $this->obElement->getPriceValue(),
            'old_price_value' => $this->obElement->getOldPriceValue(),
            'quantity'        => $this->obElement->quantity,
        ];

        return $arResult;
    }

    /**
     * Get currency value
     * @return null|string
     */
    protected function getCurrencyAttribute()
    {
        return Settings::getValue('currency');
    }
}
