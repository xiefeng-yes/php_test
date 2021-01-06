<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function demo(Request $request)
    {
//        $this->validate($request, ['name' => 'required|string']);
//        $this->assign('user', app(UserService::class)->getUserByID(1));
        $this->assign('aaa', 'helloworld'); //将key=>值
//        $this->assign('name2', '测试2'); //将key=>值
        return $this->response();
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
}
