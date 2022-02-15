<?php

namespace App\Http\Controllers;

use App\Form;
use App\FormFields;
use DataTables;
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
	public function index(Request $request) {

		return view('form.index');
	}

	public function fromList(Request $request) {
		if ($request->ajax()) {

			$data = Form::all();

			return Datatables::of($data)

				->addIndexColumn()

				->addColumn('action', function ($row) {

					$btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

					return $btn;

				})

				->rawColumns(['action'])

				->make(true);

		}
	}

}
