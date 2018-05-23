<?php namespace Lovata\Shopaholic\Classes\Collection;

use Lovata\Toolbox\Classes\Collection\ElementCollection;

use Lovata\Shopaholic\Classes\Item\CategoryItem;
use Lovata\Shopaholic\Classes\Store\CategoryListStore;

/**
 * Class CategoryCollection
 * @package Lovata\Shopaholic\Classes\Collection
 * @author Andrey Kharanenka, a.khoronenko@lovata.com, LOVATA Group
 *
 * @see \Lovata\Shopaholic\Tests\Unit\Collection\CategoryCollectionTest
 * @link https://github.com/lovata/oc-shopaholic-plugin/wiki/CategoryCollection
 *
 * Search for Shopaholic, Sphinx for Shopaholic
 * @method $this search(string $sSearch)
 */
class CategoryCollection extends ElementCollection
{
    /** @var CategoryListStore */
    protected $obCategoryListStore;

    /**
     * CategoryCollection constructor.
     * @param CategoryListStore $obCategoryListStore
     */
    public function __construct(CategoryListStore $obCategoryListStore)
    {
        $this->obCategoryListStore = $obCategoryListStore;
        parent::__construct();
    }

    /**
     * Set to element ID list top level category ID list
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\CategoryCollectionTest::testTreeMethod()
     * @return CategoryCollection
     */
    public function tree()
    {
        $this->arElementIDList = $this->obCategoryListStore->getTopLevelList();

        return $this->returnThis();
    }

    /**
     * Make element item
     * @see \Lovata\Shopaholic\Tests\Unit\Collection\CategoryCollectionTest::testCollectionItem()
     * @param int                                $iElementID
     * @param \Lovata\Shopaholic\Models\Category $obElement
     *
     * @return CategoryItem
     */
    protected function makeItem($iElementID, $obElement = null)
    {
        return CategoryItem::make($iElementID, $obElement);
    }
}
