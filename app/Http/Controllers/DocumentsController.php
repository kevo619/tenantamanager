<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use App\Models\Document;
use Illuminate\Support\Facades\File;

class DocumentsController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'tenant_id' => 'required'
            ]);
        $document = new Document($request->all());
        $file = $request->file('document');
        $filename = $file->getClientOriginalName();
        $folder = uniqid().'-'.now()->timestamp;
        $document['name'] = $filename;
        $document['uuid'] = Uuid::uuid5(Uuid::NAMESPACE_URL,$folder);;
        $document->save();
        $file->storeAs('uploads/documents/', $filename, 'public');
        return back()->with('success','Document uploaded');
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
    public function destroy(Document $document)
    {
        $document->delete();
        $path = storage_path('app\public\uploads\documents\\' . $document->name);
        File::delete($path);
        return back()->with('info','Document deleted!');
    }
    public function download($uuid)
    {
        $document = Document::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path('app\public\uploads\\' . $document->name);
        return response()->download($pathToFile);
    }
}
