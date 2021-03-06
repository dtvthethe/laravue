<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use App\Http\Resources\UrlResource;
use App\Http\Requests\UrlCreateRequest;
use App\Http\Resources\UrlCollection;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new UrlCollection(Url::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UrlCreateRequest $request)
    {
        $result = Url::create($request->all());

        return new UrlResource($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function show(Url $url)
    {
        return new UrlResource($url);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function update(UrlCreateRequest $request, Url $url)
    {
        $url->update([
            'original_url' => $request->original_url,
        ]);

        return new UrlResource($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Url  $url
     * @return \Illuminate\Http\Response
     */
    public function destroy(Url $url)
    {
        $url->delete();

        return new UrlResource($url);
    }
}
