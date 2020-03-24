<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use Illuminate\Support\Str;
use App\Models\Category;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Mail\Message;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        $viewdata = [
            'categories' => $categories
        ];
        return view('admin::category.index', $viewdata);
    }
    public function store(RequestCategory $requestCategory)
    {
        $this->insertOrUpdate($requestCategory);
        return redirect()->back();
    }
    public function action(Request $request, $action, $id)
    {
        $category = Category::find($id);
        switch ($action) {
            case 'delete':
                $category->delete();
                break;
            case 'edit':
                $categories = Category::paginate(10);
                $viewdata = [
                    'categories' => $categories,
                    'category' => $category
                ];
                return view('admin::category.index', $viewdata);
        }
        return redirect()->back();
    }
    public function update(RequestCategory $requestCategory, $id)
    {
        $this->insertOrUpdate($requestCategory, $id);
        return redirect()->back();
    }
    public function insertOrUpdate(RequestCategory $requestCategory, $id = '')
    {
        $category = new Category();
        if ($id) {
            $category = Category::find($id);
        }
        try {
            $category->c_name = $requestCategory->categoryName;
            $category->c_slug = $requestCategory->categoryUrl ? Str::slug($requestCategory->categoryUrl) :  Str::slug($requestCategory->categoryName, '-');
            $category->c_description_seo = $requestCategory->description;
            if ($requestCategory->hasFile('c_banner')) {
                $file = upload_image('c_banner');
                if (isset($file['name'])) {
                    $category->c_banner = $file['name'];
                }
            }
            if ($requestCategory->hasFile('c_home_banner1')) {
                $file = upload_image('c_home_banner1');
                if (isset($file['name'])) {
                    $category->c_home_banner1 = $file['name'];
                }
            }
            if ($requestCategory->hasFile('c_home_banner2')) {
                $file = upload_image('c_home_banner2');
                if (isset($file['name'])) {
                    $category->c_home_banner2 = $file['name'];
                }
            }
            $category->save();
        } catch (Exception $ex) {
            //Log::error("[Error insert or update]: ", $ex->getMessage());
        }
    }
}
