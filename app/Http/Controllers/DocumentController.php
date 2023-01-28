<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $document = Document::all();
        return view('document.index', compact('document'));
    }
    public function create()
    {
        return view('document.create');
    }

    public function store(CreateDocumentRequest $request)
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
