<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\requestPost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::post.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::post.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */

    public function insert(requestPost $requestPost)
    {
        $post = new Post;
        $post->post_name = $requestPost->post_name;
        $post->post_content = $requestPost->post_content;
        $post->post_slug = $requestPost->post_slug;
        $post->post_active = $requestPost->post_active;
        $post->post_hot = $requestPost->post_hot == 'on' ? 1 : 0;
        $post->post_keyword_seo = $requestPost->post_keyword_seo;
        $post->post_cate_id = $requestPost->post_category_id;
        $post->post_title_seo = $requestPost->post_title_seo;
        $post->post_description_seo = $requestPost->post_description_seo;

        if ($requestPost->hasFile('post_avatar')) {
            $file = upload_image('post_avatar');
            if (isset($file['name'])) {
                $post->post_avatar = $file['name'];
            }
        }
        $post->save();
        return redirect()->back();
    }
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
