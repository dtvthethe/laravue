<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function attach()
    {
        $shop = Shop::find(1);
        $shop->products()->attach([1, 2]);
        echo 'attach';
    }

    public function detach()
    {
        $shop = Shop::find(1);
        $shop->products()->detach([1, 2]);
        echo 'detach';
    }

    public function sync()
    {
        $shop = Shop::find(1);
        $shop->products()->detach([2, 3]); // delete 1, keep 2, new 3
        echo 'sync';
    }

    public function syncWithoutDetaching()
    {
        $shop = Shop::find(1);
        $shop->products()->syncWithoutDetaching([2, 3]); // keep 1, keep 2, new 3
        echo 'syncWithoutDetaching';
    }

    public function toggle()
    {
        $shop = Shop::find(1);
        $shop->products()->toggle([2, 3]); // delete 1, delete 2, new 3
        echo 'toggle';
    }
}
