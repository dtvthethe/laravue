<?php

namespace App\Observers;

use App\Models\Url;
use Illuminate\Support\Str;

class UrlObserver
{
    /**
     * Handle the Url "created" event.
     *
     * @param  \App\Models\Url  $url
     * @return void
     */
    public function creating(Url $url)
    {
        $url->shorter_url = Str::random(10);
    }
}
