<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class SingupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('singup');
    }
    public function displayInfor(Request $request): View
    {
        // Kiểm tra dữ liệu nhập vào
        $validated = $request->validate([
            'name'    => 'required',
            'age'     => 'required|numeric',
            'date'    => 'required|date',
            'phone'   => 'required',
            'web'     => 'required|url',
            'address' => 'required',
        ], [
            'name.required'    => 'Họ tên không được để trống.',
            'age.required'     => 'Tuổi không được để trống.',
            'age.numeric'      => 'Tuổi phải là số.',
            'date.required'    => 'Ngày sinh không được để trống.',
            'date.date'        => 'Ngày sinh phải đúng định dạng.',
            'phone.required'   => 'Điện thoại không được để trống.',
            'web.required'     => 'Website không được để trống.',
            'web.url'          => 'Website phải đúng định dạng URL.',
            'address.required' => 'Địa chỉ không được để trống.',
        ]);

        // Nếu không có lỗi, trả về view với dữ liệu đã nhập
        return view('Singup', ['user' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
