<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parameter;
use Illuminate\Validation\Rule;

class ParameterController extends Controller
{
    public function edit(Parameter $parameter)
    {
        return view("parameter.edit", compact("parameter"));
    }

    public function update(Parameter $parameter)
    {
        $data = $this->validate(request(), [
            "nama" => ["required", "max:100"],
        ]);

        $parameter->update($data);

        return back()
            ->with("message-state", "success")
            ->with("message-text", __("messages.update.success"));
    }
}
