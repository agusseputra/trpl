<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Article/Article', [
            'article' => Berita::query()
                ->when($request->input('search'), function ($query, $search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->OrWhere('description', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($article) => [
                    'id' => $article->berita_id,
                    'title' => $article->title,
                    'description' => $article->description,
                    'photo' => $article->photo,
                ]),
            'filters' => $request->only(["search"]),
        ]);
    }

    public function create()
    {
        return Inertia::render('Article/FormAdd', [
            'kategori' => Kategori::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validate
        $request->validate([
            "title" => "required",
            'description' => "required",
            'kategori' => "required",
            'photo' => 'required|mimes:jpeg,png|max:1024',
        ]);

        // Save
        $user_id = Auth::user()->id;

        $path = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $path = 'uploads/' . $fileName;
        }

        if ($fileName != null) {
            $article = new Berita;
            $article->user_id = $user_id;
            $article->title = $request->input('title');
            $article->photo = $path;
            $article->description = $request->input('description');
            $article->kategori_id = $request->input('kategori');
            $article->save();
        }

        // Redirect
        return to_route('article.index')->with("msg", [
            "type" => "success", // success | error | warning | info | question
            "text" => "Created Success"
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('Article/FormEdit', [
            'article' => Berita::find($id),
            'kategori' => Kategori::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            // Check If user exist
            $article = Berita::findOrFail($id);

            $path = null;
            if ($request->hasFile('photo')) {
                // Validasi
                $request->validate([
                    "title" => "required",
                    'description' => "required",
                    'kategori' => "required",
                    'photo' => 'required|mimes:jpeg,png|max:1024',
                ]);

                $file = $request->file('photo');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(
                    public_path('uploads'),
                    $fileName
                );
                unlink($article->photo);
                $path = 'uploads/' . $fileName;
                $article->photo = $path;
            } else {
                // Validasi
                $request->validate([
                    "title" => "required",
                    'description' => "required",
                    'kategori' => "required",
                ]);
            }


            // Update
            if ($article->title != $request->input('title')) {
                $article->title = $request->input('title');
            }
            $article->description = $request->input('description');
            $article->kategori_id = $request->input('kategori');

            // Save Update
            $article->save();

            // Redirect
            return to_route('article.index')->with("msg", [
                "type" => "success", // success | error | warning | info | question
                "text" => "Updated Success"
            ]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function uploadImage(Request $request)
    {
        $image = $request->file('image');
        $imageFileName = time() . '_' . $image->getClientOriginalName();
        $image->move(
            public_path('uploads/article/'),
            $imageFileName
        );

        $url = 'uploads/article/' . $imageFileName;
        return response()->json(['url' => $url]);
    }

    public function destroy($id)
    {
        try {
            // Check If user exist
            $article = Berita::findOrFail($id);

            // save filename in variable
            $fileName = $article->photo;

            // Delete
            $article->delete();
            unlink($fileName);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
