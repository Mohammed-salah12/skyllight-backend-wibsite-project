<?php

namespace App\Http\Controllers;

use App\Models\GalleryVideo;
use Illuminate\Http\Request;

class GalleryVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallery_videos = GalleryVideo::orderBy('id', 'desc')->simplePaginate(5);
        return response()->view('cms.gallery_video.index', compact('gallery_videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('cms.gallery_video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator($request->all(), [
            'link' => 'url',
            'image' => 'file'
        ]);

        if (!$validator->fails()) {
            $gallery_videos = new GalleryVideo();;
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/gallery_video', $imageName);

                $gallery_videos->image = $imageName;
            }

            $gallery_videos->link = $request->get('link');

            $isSaved  = $gallery_videos->save();

            if ($isSaved) {
                return response()->json(['icon' => 'success', 'title' => "Created is successfully"], 200);
            } else {
                return response()->json(['icon' => 'Failed', 'title' => "Created is Failed", 'redirect' => route('gallery_videos.index')], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
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
        $gallery_videos = GalleryVideo::findOrFail($id);
        return response()->view('cms.gallery_video.edit', compact('gallery_videos'));
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
        $validator = Validator($request->all(), [
            'link' => 'url',
            'image' => 'file'
        ]);

        if (!$validator->fails()) {
            $gallery_videos =  GalleryVideo::findOrFail($id);
            if (request()->hasFile('image')) {

                $image = $request->file('image');

                $imageName = time() . 'image.' . $image->getClientOriginalExtension();

                $image->move('storage/images/gallery_video', $imageName);

                $gallery_videos->image = $imageName;
            }

            $gallery_videos->link = $request->get('link');

            $isUpdated = $gallery_videos->save();
            return ['redirect' => route('gallery_videos.index')];
            if ($isUpdated) {
                return response()->json(['icon' => 'success', 'title' => "Updated is successfully"], 200);
            } else {
                return response()->json(['icon' => 'Failed', 'title' => "Updated is Failed"], 400);
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
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
        $gallery_videos = GalleryVideo::destroy($id);
        return response()->json(['icon' => 'success', 'title' => "Deleted is Successfully"], 200);
    }
}