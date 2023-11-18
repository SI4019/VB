<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        $blog = Blog::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if($blog){
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Blog $blog){
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog){
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        $blog = Blog::findOrFail($blog->id);

        if($request->file('image') == ""){
            $blog->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {
            Storage::disk('local')->delete('public/blogs/'.$blog->image);

            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());

            $blog->update([
                'image'     =>$image->hashName(),
                'title'     =>$request->title,
                'content'   =>$request->content
            ]);
        }

        if($blog){
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);
        Storage::disk('local')->delete('public/blogs/', $blog->image);
        $blog->delete();

        if($blog){
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
