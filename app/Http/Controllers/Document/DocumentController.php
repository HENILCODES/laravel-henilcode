<?php

namespace App\Http\Controllers\Document;

use App\Http\Controllers\Controller;
use App\Http\Requests\document\StoreDocumentRequest;
use App\Http\Requests\document\UpdateDocumentRequest;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    // public function __construct(){
    //     // $this->middleware('studentIsValid');
    //     // $this->middleware('studentIsValid')->only(['update']);
    // }
    public function index()
    {
        $documents = Document::all();
        return view('document.index', compact('documents'));
    }
    public function create()
    {
        return view('document.create');
    }

    public function store(StoreDocumentRequest $request)
    {
        $document = $request->all();
        $imageName = $request->photo->getClientOriginalName();
        $request->photo->move('upload/document/', $imageName);
        $document['photo'] = $imageName;
        Document::create($document);
        return redirect()->route('document.index');
    }
    public function show($id)
    {
        $document = Document::find($id);
        return $document;
    }
    public function edit($id)
    {
        $document = Document::find($id);
        return view('document.update', compact('document'));
    }
    public function update(UpdateDocumentRequest $request, $id)
    {
        $document = $request->all();
        if ($request->photo) {
            $imageName = $request->photo->getClientOriginalName();
            $request->photo->move('upload/document/', $imageName);
            $document['photo'] = $imageName;
        }
        Document::find($id)->update($document);
        return redirect()->route('document.index');
    }

    public function destroy($id)
    {
        Document::find($id)->delete();
        return redirect()->route('document.index');
    }
}
