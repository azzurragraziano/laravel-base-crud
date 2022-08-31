<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thumb;

class ThumbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thumbs = Thumb::all();
        
        $data = [
            'thumbs' => $thumbs
        ];

        return view('thumbs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thumbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate($this->getValidationRules());

        $form_data = $request->all();
        
        $new_thumb = new Thumb();
        $new_thumb->fill($form_data);
        $new_thumb->save();

        return redirect()->route('thumbs.show', ['thumb' => $new_thumb->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thumb = Thumb::findOrFail($id);

        $data = [
            'thumb' => $thumb
        ];

        return view('thumbs.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $thumb = Thumb::findOrFail($id);

        $data = [
            'thumb' => $thumb
        ];

        return view('thumbs.edit', $data);
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
        // validation
        $request->validate($this->getValidationRules());

        $form_data = $request->all();

        $thumb_to_update = Thumb::findOrFail($id);
        $thumb_to_update->update($form_data);

        return redirect()->route('thumbs.show', ['thumb' => $thumb_to_update->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thumb_to_destroy = Thumb::findOrFail($id);
        $thumb_to_destroy->delete(); 

        return redirect()->route('thumbs.index');
    }

    protected function getValidationRules() {
        return [
            'title' => 'required|max:150',
            'description' => 'required|max:150',
            'thumb' => 'required|max:60000',
            'price' => 'required',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:50'
        ];
    }
}
