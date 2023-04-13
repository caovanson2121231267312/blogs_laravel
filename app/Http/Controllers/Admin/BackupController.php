<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $files = Storage::disk('local')->files('backups');
        $files = Storage::files('Laravel');
        // dd($files);

        $fileDetails = array();

        foreach ($files as $file) {
            $path = 'backups/' . $file;
            $size = Storage::size($file);
            $name = basename($path);

            $fileDetails[] = array(
                'name' => $name,
                'size' => $size
            );
        }
        usort($fileDetails, function ($a, $b) {
            return $b['name'] <=> $a['name'];
        });

        return view('admin.backups.index', ['data' => $fileDetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dispatch(new BackupJob())->delay(1);
        Artisan::queue('backup:run');
        Artisan::queue('backup:clean');

        return redirect()->route('backup.index')->with('success', 'Tạo bản sao lưu mới thành công');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function download($file_name)
    {
        $path = storage_path('app/Laravel/' . $file_name);
        // dd($path);
        if (!File::exists($path)) {
            abort(404);
        }

        return response()->download($path);
    }

    public function destroy($file_name)
    {
        $path = storage_path('app/Laravel/' . $file_name);

        // Check if the file exists
        if (!File::exists($path)) {
            abort(404);
        }

        // Delete the backup file
        File::delete($path);

        // Redirect back with success message
        return redirect()->back()->with('message', 'Xóa bản sao lưu thành công!');
    }
}