<?php

namespace App\Repositories;

use App\Contracts\FileInterface;
use App\Http\Requests\FileMassiveRequest;
use App\Http\Requests\FileRequest;
use App\Models\File;

class FileRepository implements FileInterface
{
    public $file;

    public function __construct()
    {
        $this->file = new File();
    }

    public function index()
    {
        return response()->json([
            'ready' => true,
            'type' => 'File',
            'data' => $this->file->get()
        ]);
    }

    public function store(FileRequest $request)
    {
        $file = $this->saveFichero($request->file);
        return response()->json([
            'ready' => true,
            'type' => 'File',
            'msg' => 'Guardado Correctamente',
            'data' => $file
        ]);
    }

    public function storeMassiveFiles(FileMassiveRequest $request)
    {
        foreach($request->file("files") as $file) {
            $this->saveFichero($file);
        }

        return response()->json([
            'ready' => true,
            'type' => 'File',
            'msg' => 'Carga Masiva de ficheros'
        ]);
    }

    private function saveFichero($file)
    {
        $data['file_name'] = $this->storeFile($file);
        $data['file_path'] = storage_path('app/files/'.$data['file_name']);
        return $this->file->create($data);
    }

    private function storeFile($file)
    {
        $getNameFile = $file->getClientOriginalName();
        $getNameFile = pathinfo($getNameFile, PATHINFO_FILENAME);
        $nameFile = str_replace(" ", "-", $getNameFile);
        $fileExtension = $file->getClientOriginalExtension();
        $nameFile = $nameFile.'.'.$fileExtension;

        $file->storeAs(
            'files', $nameFile
        );

        return $nameFile;
    }

    public function destroy($file)
    {
        unlink($file->file_path);
        $file->delete();
        return response()->json([
            'ready' => true,
            'type' => 'File',
            'msg' => 'Eliminado Correctamente'
        ]);
    }
}
