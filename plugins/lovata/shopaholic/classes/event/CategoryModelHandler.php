<?php namespace Lovata\Shopaholic\Classes\Event;

use Lovata\Toolbox\Classes\Event\ModelHandler;

use Lovata\Shopaholic\Models\Category;
use Lovata\Shopaholic\Classes\Item\CategoryItem;
use Lovata\Shopaholic\Classes\Store\CategoryListStore;

/**
 * Class CategoryModelHandler
 * @package Lovata\Shopaholic\Classes\Event
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 */
class CategoryModelHandler extends ModelHandler
{
    /** @var  Category */
    protected $obElement;

    /** @var  CategoryListStore */
    protected $obCategoryListStore;

    /**
     * CategoryModelHandler constructor.
     *
     * @param CategoryListStore $obCategoryListStore
     */
    public function __construct(CategoryListStore $obCategoryListStore)
    {
        $this->obCategoryListStore = $obCategoryListStore;
    }

    /**
     * Add listeners
     * @param \Illuminate\Events\Dispatcher $obEvent
     */
    public function subscribe($obEvent)
    {
        parent::subscribe($obEvent);

        $obEvent->listen('shopaholic.category.update.sorting', function () {
            $this->obCategoryListStore->clearTopLevelList();

            //Get category ID list
            $arCategoryIDList = Category::lists('id');
            if (empty($arCategoryIDList)) {
                return;
            }

            $sItemClass = $this->getItemClass();
            //Clear cache for all categories
            foreach ($arCategoryIDList as $iCategoryID) {
                $sItemClass::clearCache($iCategoryID);
            }
        });
    }

    /**
     * Get model class name
     * @return string
     */
    protected function getModelClass()
    {
        return Category::class;
    }

    /**
     * Get item class name
     * @return string
     */
    protected function getItemClass()
    {
        return CategoryItem::class;
    }

    /**
     * After save event handler
     */
    protected function afterSave()
    {
        parent::afterSave();
        $this->obCategoryListStore->clearTopLevelList();
    }

    /**
     * After delete event handler
     */
    protected function afterDelete()
    {
        parent::afterDelete();
        $this->obCategoryListStore->clearTopLevelList();

        //Clear parent item cache
        if (!empty($this->obElement->parent_id)) {
            $sItemClass = $this->getItemClass();
            $sItemClass::clearCache($this->obElement->parent_id);
        }
    }
}
