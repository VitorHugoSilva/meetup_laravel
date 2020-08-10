<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BasicApiCrudController extends Controller
{
    protected abstract function model();
    protected abstract function ruleStore();
    protected abstract function ruleUpdate();

    public function index()
    {
        return ($this->model())::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate($this->ruleStore());
        $model = ($this->model())::create($validatedData);
        $model->refresh();
        return $model;
    }

    public function show($id)
    {
        return ($this->model())::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate($this->ruleUpdate());
        $model = ($this->model())::findOrFail($id);
        $model->update($validatedData);
        $model->refresh();
        return $model;

    }

    public function destroy($id)
    {
        $model = ($this->model())::findOrFail($id);
        $model->delete();
        return response()->noContent();
    }
}
