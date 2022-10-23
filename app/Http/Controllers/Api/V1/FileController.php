<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Str;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request)
    {


        // $getNameFile = $file->getClientOriginalName();

        // $getNameFile = pathinfo($getNameFile, PATHINFO_FILENAME);

        // $nameFile = str_replace(" ", "-", $getNameFile);

        // $fileExtension = $file->getClientOriginalExtension();

        // $nameFile = $nameFile.'.'.$fileExtension;

        // $file->storeAs(
        //     'plugins/'.$plugiFolder, $nameFile
        // );

        // return $nameFile;

       /*  $photo->storeAs(
            'users', $namePhoto
        );

        $user->photo = $namePhoto;
        $user->save(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
