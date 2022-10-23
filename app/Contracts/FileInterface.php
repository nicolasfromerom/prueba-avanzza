<?php

namespace App\Contracts;

use App\Http\Requests\FileRequest;

Interface FileInterface
{
    public function index();

    public function store(FileRequest $request);

    public function delete($file);

}
