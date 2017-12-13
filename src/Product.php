<?php

namespace RonAppleton\LaravelSimpleShopModule;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class Product extends Model implements Buyable
{

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        // TODO: Implement getBuyableIdentifier() method.
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        // TODO: Implement getBuyableDescription() method.
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        // TODO: Implement getBuyablePrice() method.
    }
}
