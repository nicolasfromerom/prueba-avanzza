<?php

namespace App\Http\Controllers\Api\V1;

use App\Contracts\FileInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileMassiveRequest;
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
    public function __construct(FileInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request)
    {
        return $this->repository->store($request);
    }

    public function storeMassiveFiles(FileMassiveRequest $request)
    {
        return $this->repository->storeMassiveFiles($request);
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
        return $this->repository->destroy($file);
    }
}
