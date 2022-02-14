<?php

namespace App\Http\Controllers;

use App\Form;
use App\FormFields;
use Illuminate\Http\Request;

class FormController extends Controller {

	public function addForm() {
		return view('layouts.addform');
	}

	/**
	 * addFromField
	 */
	public function addFromField(Request $request) {

		$request->validate([
			'form_name' => 'required',
			'field.*.field_type' => 'required',
			'field.*.field_label' => 'required',
			'field.*.placeholder' => 'required',
		]);

		$formdata['form_name'] = $request->form_name;

		$forminfo = Form::create($formdata);

		foreach ($request->field as $key => $value) {

			$data['form_id'] = $forminfo['id'];
			$data['field_type'] = $value['field_type'];
			$data['field_label'] = $value['field_label'];
			$data['placeholder'] = $value['placeholder'];
			$data['required'] = $value['required'] ? 1 : 0;
			$data['max'] = isset($value['max']) ? $value['max'] : 0;
			$data['min'] = isset($value['min']) ? $value['min'] : 0;

			FormFields::create($data);
		}

		return back()->with('success', 'From Added Successfully.');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Form  $form
	 * @return \Illuminate\Http\Response
	 */
	public function show(Form $form) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Form  $form
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Form $form) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Form  $form
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Form $form) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Form  $form
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Form $form) {
		//
	}
}
