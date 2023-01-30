<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.article.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $keywords = Tag::all();

        return view("admin.article.add", compact('categories', 'keywords'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        try {
            DB::beginTransaction();

            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path() . '/assets/images/articles/';
            $fileName = Str::slug(pathinfo($fileName, PATHINFO_FILENAME)) . '-' . Carbon::now()->timestamp;
            $fileExt = $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName . "." . $fileExt);

            $article = Article::create([
                "name" => $request->name,
                "description" => $request->description,
                "content" => $request->content,
                "user_id" => Auth()->user()->id,
                "image" => $fileName . "." . $fileExt,
                'category_id' => $request->category_id,
            ]);

            $article->tags()->attach($request->tag);

            DB::commit();
            return redirect()->route("articles.index")
                ->with('message', 'Đã tạo thành công ' . $article->name);
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Article::findOrFail($id)->load(["tags", "user" , "category"]);

            return view("admin.article.show", ["data" => $data]);
        } catch (ModelNotFoundException $e) {

            return redirect()->back()->with(["error" => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $categories = Category::all();
            $keywords = Tag::all();
            $data = Article::findOrFail($id)->load("tags");

            return view("admin.article.edit", [
                "data" => $data,
                "categories" => $categories,
                "keywords" => $keywords,
            ]);
        } catch (ModelNotFoundException $e) {

            return redirect()->back()->with(["error" => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = array_merge(
                $request->only([
                    'name',
                    'description',
                    'content',
                    'category_id',
                ]),
                [
                    'user_id' => Auth()->user()->id,
                ]
            );
            if ($request->has("image")) {
                $file = $request->file('image');
                $fileName = $file->getClientOriginalName();
                $destinationPath = public_path() . '/assets/images/articles/';
                $fileName = Str::slug(pathinfo($fileName, PATHINFO_FILENAME)) . '-' . Carbon::now()->timestamp;
                $fileExt = $file->getClientOriginalExtension();
                $file->move($destinationPath, $fileName . "." . $fileExt);
                $data['image'] = $fileName . "." . $fileExt;
            }

            $article = Article::findOrFail($id);
            $article->update($data);

            $article->tags()->sync($request->tag);

            DB::commit();
            return redirect()->route("articles.index")->with(["message" => "Đã sửa thành công"]);
        } catch (ModelNotFoundException $e) {

            DB::rollBack();
            return redirect()->back()->with(["error" => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Article::findOrFail($id);
            $data->delete();

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();

            return response()->json([
                'message' => __('have error :' . $th->getMessage()),
            ], 500);
        }

        return redirect()->route('articles.index')->with("delete-success", "Đã xóa " . $data->name . " thành công");
    }
}