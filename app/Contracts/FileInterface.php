<?php

namespace App\Contracts;

use App\Http\Requests\FileMassiveRequest;
use App\Http\Requests\FileRequest;

Interface FileInterface
{
    public function index();

    public function store(FileRequest $request);

    public function storeMassiveFiles(FileMassiveRequest $request);

    public function destroy($file);

}
