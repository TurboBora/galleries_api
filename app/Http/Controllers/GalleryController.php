<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Gallery::with('user', 'images', 'comments');
        $galleries = $results->get();

        return response()->json($galleries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGalleryRequest $request)
    {
        // $data = $request->validated();
        // $userId = Auth::id();

        // foreach ($data['URLS'] as ) {
        //     # code...
        // }
        // Gallery::create([

        // ]);




        /**public function addImages($source, $id) {
        return $this->images()->create([
            'source' => $source,
            'gallery_id' => $id
        ]);
    }
         * 
         * 
         * 
         * 
         * 
         * 
         * 
         */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
