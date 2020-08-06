<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\PhotoAlbum;
use App\Video;
use Carbon\Carbon;

class VideoController extends Controller
{
    public function index ()
    {
        $now = new Carbon;
        $videos = Video::orderBy('created_at', 'desc')->paginate(9);

        return view('sections.video.index')->with('videos', $videos);
    }

    public function addVideo ()
    {
        return view('sections.video.video-add');
    }

    public function storeVideo (Request $request)
    {
        
        $this->validate($request, [
            'url' => 'required',
        ]);

        $video = new Video;

        try {
            $video->url = $this->findSRC($request->url);
        }
        catch (\Exception $e) {
            return redirect ('/media/video/add')->with('success', 'Please enter an embedded link');
        }

        $video->timestamps = false;
        $video->save();

        $url = '/media/video/edit?='.$request->event;

        return redirect($url)->with('message', 'Video successfully added');
    }

    public function editVideo (Request $request)
    {
        return view('sections.video.edit-video');   
    }

    public function updateVideo (Request $request)
    {
        
        $this->validate($request, [
            'url.*' => 'required',
        ]);

        $rdurl;

        if ($request->id == 0) {
            $rdurl = '/media/video/edit?event='.$request->id;
        } else {
            $rdurl = "/media/video/edit?event="."0";
        }

        if ($request->id != 0) {
            $event = Event::find($request->id);
            $counter = 0;

            foreach ($event->videos as $video) {
                $url = explode(' ', $request->url[$counter]);
                $i = 0;
                $flag = false;

                for ($i = 0; $i < sizeof($url); $i++) {
                    if (strpos($url[$i], 'src') !== false) {
                        break;
                        $flag = true;
                    }
                }

                if ($flag) {

                    try {
                        $video->url = $this->findSRC($request->url[$counter]);
                    }
                    catch (\Exception $e) {
                        flash('Please enter an embedded link')->error();
            
                        return redirect ($rdurl);
                    }

                    $video->timestamps = false;
                    $video->save();
                }

                $counter++;
            }

            if ($request->new != null) {
                $video = new Video;

                try {
                    $video->url = $this->findSRC($request->new);
                }
                catch (\Exception $e) {
                    flash('Please enter an embedded link')->error();
        
                    return redirect ($rdurl);
                }

                $video->timestamps = false;
                $video->save();
            }
        } else {
            $videos = Video::get();
            $counter = 0;
            
            foreach ($videos as $video) {
                $url = explode(' ', $request->url[$counter]);
                $i = 0;
                $flag = false;

                for ($i = 0; $i < sizeof($url); $i++) {
                    if (strpos($url[$i], 'src') !== false) {
                        break;
                        $flag = true;
                    }
                }

                if ($flag) {

                    try {
                        $video->url = $this->findSRC($request->url[$counter]);
                    }
                    catch (\Exception $e) {
                        flash('Please enter an embedded link')->error();
            
                        return redirect ($rdurl."0");
                    }

                    $video->timestamps = false;
                    $video->save();
                }

                $counter++;
            }

            if ($request->new != null) {
                $video = new Video;

                try {
                    $video->url = $this->findSRC($request->new);
                }
                catch (\Exception $e) {
                    flash('Please enter an embedded link')->error();
        
                    return redirect ($rdurl."0");
                }

                $video->timestamps = false;
                $video->save();
            }
        }

        return redirect()->back()->with('success', 'Updates successfully made');

        if ($request->id == 0) {
            return redirect ($rdurl."0");
        } else {
            return redirect ($rdurl);
        }
    }

    public function deleteVideo (Request $request, $id)
    {
        $video = Video::find($id);
        $video->delete();

        return redirect()->back()->with('success', 'Video successfully deleted');
    }

    public function findSRC ($url)
    {
        $url = explode(' ', $url);
        $i = 0;
        $flag = true;

        for ($i = 0; $i < sizeof($url); $i++) {
            if (strpos($url[$i], 'src') !== false) {
                break;
                $flag = false;
            }
        }

        if (!$flag) {
            dd('This is not an embedded link');
        }

        $url = str_split($url[$i], 1);
        $x = '';

        for ($j = 5; $j < sizeof($url) - 1; $j++) {
            $x = $x.$url[$j];
        }

        return $x;
    }
}
