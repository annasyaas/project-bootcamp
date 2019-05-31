<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
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
    public function store(CategoryRequest $request)
    {
        $category = $request->all();
        $save = Category::insert([
            'name' => $category['name'],
            'description' => $category['description']
        ]);

        if ($save) {
            return response()->json([
                'success' => true,
                'type' => 'add',
                'message' => 'Berhasil menambah kategori baru'
            ]);
        }

        return response()->json([
            'success' => false,
            'type' => 'add',
            'message' => 'Gagal menambah kategori!'
        ]);
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
        $category = $request->all();
        $update = Category::where('id', $id)->update([
            'name' => $category['name'],
            'description' => $category['description']
        ]);

        if ($update) {
            return response()->json([
                'success' => true,
                'type' => 'update',
                'id' => $id,
                'message' => 'Berhasil mengubah data kategori'
            ]);
        }

        return response()->json([
            'success' => false,
            'type' => 'update',
            'message' => 'Gagal mengubah data kategori!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::where('id', $id)->delete();

        if ($delete) {
            return response()->json([
                'success' => true,
                'id' => $id,
                'message' => 'Berhasil menghapus data kategori'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Gagal menghapus data kategori!'
        ]);
    }
}
