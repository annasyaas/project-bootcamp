<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Category;
use App\PostCategory;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(8);
        // $posts = Post::where('title', 'like', '%man%')->get();
        $dualima = Post::where('id', 25)->first();

        return view('post.index', compact('posts', 'dualima'));
    }

    public function create()
    {
        $categories = Category::all(); 
        $users = User::all(); 

        return view('post.create', compact('categories', 'users'));
    }

    public function store(PostRequest $request)
    {
        $input = $request->all();

        if (Input::file('cover') !== NULL) {
            $image_upload = Input::file('cover');
            $extension = $image_upload->getClientOriginalExtension();
            $new_image_name = 'post-'. time() .'.'. $extension;
            
            $img_path = public_path('images/post');
            $image_upload->move($img_path, $new_image_name);
            $input['image_cover'] = $new_image_name;
        }
        
        $save = Post::create($input);

        $category_data = array();
        foreach ($input['categories'] as $category_id) {
            $category_data[] = [
                'post_id' => $save->id, 
                'category_id' => $category_id
            ];
        }

        $save_category = PostCategory::insert($category_data);

        if ($save_category) {
            return redirect('/admin/posts')->with('success', 'Berhasil menambah postingan baru.');
        }

        return redirect()->back()->with('error', 'Gagal menambah postingan!');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();

        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = $request->all();
        $update = Post::where('id', $id)->update([
            'category_id' => 1,
            'author_id' => 1,
            'title' => $post['title'],
            'content' => $post['content'],
            'is_draft' => $post['is_draft']
        ]);

        if ($update) {
            return redirect('/admin/posts')->with('success', 'Berhasil mengubah postingan.');
        }

        return redirect()->back()->with('error', 'Gagal mengubah postingan!');
    }

    public function destroy(Request $request, $id)
    {
        $delete = Post::where('id', $id)->delete();

        if ($delete) {
            return redirect('/admin/posts')->with('success', 'Berhasil menghapus postingan.');
        }

        return redirect()->back()->with('error', 'Gagal menghapus postingan!');
    }
}
