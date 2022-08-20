<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use ProtoneMedia\LaravelFFMpeg\Exporters\HLSExporter;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class UploaderAdminController extends Controller
{

    public function index()
    {
        return view("Upload_Video");
    }

    public function upload(Request $request)
    {
        if ($request->ajax()) {
            /*$data = new Video();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->video_path = $request->video_path;
            $data->save();*/
            $data = Video::query()->create($request->all());
            return response()->json(['success' => 'success']);
        }
        return response()->json(['error' => 'error']);
    }

    public function upload_file(Request $request)
    {
        if ($request->ajax()) {
            /*$data = $request->file('file');
            $extension = $data->getClientOriginalExtension();
            $file_name = uniqid() . '.' . $extension; // renameing image
            $path = public_path('storage/videos');
            $usersImage = public_path("storage/videos/$file_name"); // get previous image from folder
            //dd($file_name);
            $upload_success = $data->move($path, $file_name);*/
            //--Start FFMPEG
            ini_set('max_execution_time', 3600); // 300 = 5 minutes
            $lowBitrate = (new X264('aac'))->setKiloBitrate(100);
            $superLowBitrate = (new X264('aac'))->setKiloBitrate(200);
            $midBitrate = (new X264('aac'))->setKiloBitrate(400);
            $superMidBitrate = (new X264('aac'))->setKiloBitrate(800);
            $highBitrate = (new X264('aac'))->setKiloBitrate(1600);
            $superHighBitrate = (new X264('aac'))->setKiloBitrate(3200);
            $bigSuperBitrate = (new X264('aac'))->setKiloBitrate(6400);
            $superSuperBitrate = (new X264('aac'))->setKiloBitrate(12800);
            $encryptionKey = HLSExporter::generateEncryptionKey();


            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $new_name = uniqid();
            $file_name = $new_name . '.' . $extension; // renameing image
            $storage_path_full = 'videos/' . $file_name;
            $image_name = $new_name . '.jpg';
            $video_name = $new_name . '.m3u8';
            $storage_path_video = 'videos/' . $video_name;
            $storage_path_image = 'thumbnails/' . $image_name;
            //$localVideo = file_put_contents($storage_path_full, file_get_contents($file));
            //dd($storage_path_full);
            $localVideo = Storage::disk('public')->put($storage_path_full, file_get_contents($file));//uploads

            //First way mkv
            /*FFMpeg::fromDisk('uploads')
                ->open("sdasdasd.mp4")
                ->addWatermark(function(WatermarkFactory $watermark) {
                    $watermark->fromDisk('uploads')
                        ->open('logo.png')
                        ->right(25)
                        ->bottom(25);
                })
                ->export()
                ->toDisk('public')
                ->inFormat(new \FFMpeg\Format\Video\X264) //WebM //WMV //X264
                ->addFilter(function (VideoFilters $filters) {
                    $filters->resize(new \FFMpeg\Coordinate\Dimension(320, 180));
                })
                ->save('videos/new_video.mkv');*///m3u8 //webm //WMV //mkv

            //Second way m3u8
            FFMpeg::fromDisk('public')//uploads
            ->open($storage_path_full)
                ->exportForHLS()
                //->setSegmentLength(10) // optional
                //->setKeyFrameInterval(48) // optional
                //->withEncryptionKey($encryptionKey)
                ->addFormat($lowBitrate, function ($media) {
                    $media->addFilter('scale=256:144'); //144p
                })
                ->addFormat($superLowBitrate, function ($media) {
                    $media->addFilter('scale=426:240'); //240p
                })
                ->addFormat($midBitrate, function ($media) {
                    $media->addFilter('scale=480:360'); //360p
                })
                ->addFormat($superMidBitrate, function ($media) {
                    $media->addFilter('scale=640:480'); //480p
                })
                /*->addFormat($highBitrate, function ($media) {
                    $media->addFilter('scale=1280:720'); //720p
                })
                ->addFormat($superHighBitrate, function ($media) {
                    $media->addFilter('scale=1920:1080'); //1080p
                })*/
                /*->onProgress(function ($percentage, $remaining, $rate) {
                    echo "{$remaining} seconds left at rate: {$rate}";
                })*/
                /*->addFormat($bigSuperBitrate, function($media) {
                    $media->addFilter('scale=2560:1440'); //1440p
                })
                ->addFormat($superSuperBitrate, function($media) {
                    $media->addFilter('scale=3840:2160'); //2160p
                })*/
                ->toDisk('public')
                ->save($storage_path_video);

            //Export a frame from a video
            FFMpeg::fromDisk('public')//uploads
            ->open($storage_path_full)
                ->getFrameFromSeconds(5)
                ->export()
                ->toDisk('public')
                ->save($storage_path_image);
            return response()->json([
                'success' => "success",
                'storage_path_video' => $video_name,
                'storage_path_image' => $image_name,
                'main_path' => $file_name,
                'image_name' => $image_name]);
        }
        return response()->json(['error' => "error"]);
    }


    public function create()
    {
        return view("Upload_Edit")->render();
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
