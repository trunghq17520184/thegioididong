<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestSlider;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $viewdata = [
            'sliders' => $sliders,
        ];
        return view('admin::slider.index', $viewdata);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::slider.index');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(RequestSlider $requestSlider)
    {
        $this->insertOrUpdate($requestSlider);
        return redirect()->back();
    }

    public function action(Request $request, $action, $id)
    {
        $slider = Slider::find($id);
        switch ($action) {
            case 'delete':
                $slider->delete();
                break;
            case 'edit':
                $sliders = Slider::all();
                $viewdata = [
                    'slider' => $slider,
                    'sliders' => $sliders,

                ];
                return view('admin::slider.index', $viewdata);
        }
        return redirect()->back();
    }
    public function insertOrUpdate(RequestSlider $requestSlider, $id = '')
    {
        $slider = new Slider();
        if ($id) {
            $slider = Slider::find($id);
        }
        if ($requestSlider->hasFile('slider_name')) {
            $file = upload_image('slider_name');
            if (isset($file['name'])) {
                $slider->name = $file['name'];
            }
        }
        $slider->type = $requestSlider->slider_type;
        $slider->description = $requestSlider->slider_description;
        $slider->url = $requestSlider->url;
        $slider->save();
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function update(RequestSlider $request, $id)
    {
        $this->insertOrUpdate($request, $id);
        return redirect()->back();
    }
}
