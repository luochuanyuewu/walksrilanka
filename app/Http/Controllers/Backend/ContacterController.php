<?php

namespace App\Http\Controllers\Backend;

use App\Contacter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //按创建顺序列出所有联系人
        $contacters = Contacter::latest()->get();
        return view('backend.contacter.index', compact('contacters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.contacter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        //如果有文件存在,则处理文件
        if ($file = $request->file('avatar')) {

            //设置文件名
            $name = $file->getClientOriginalName();

            $input['avatar'] = $name;

            //移动图片,如果无法移动,就把文件名编码后再移动
            try {

                $file->move('images/contacters/', $name);

            } catch (FileException $e) {

                $encodedName = iconv('utf-8', 'gbk', $name);

                $file->move('images/contacters/', $encodedName);

            }
        }

        Contacter::create($input);

        Session::flash('created_contacter', 'Create contacter successfull!');

        return redirect(route('contacter.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacter = Contacter::find($id);
        return view('backend.contacter.edit', compact('contacter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //获取要修改的联系人
        $contacter = Contacter::find($id);

        //获取所有输入
        $input = $request->all();

        //如果有文件存在,则处理文件
        if ($file = $request->file('avatar')) {

            //删除之前的头像文件
            if ($contacter->avatar) {

                $filePath = public_path() . $contacter->avatar;

                if (file_exists($filePath)) {

                    try {

                        unlink($filePath);

                    } catch (ErrorException $e) {

                        $encodedFilePath = iconv('utf-8', 'gbk', $filePath);

                        unlink($encodedFilePath);//删除该用户原有的图片
                    }
                }

            }

            //设置文件名
            $name = $file->getClientOriginalName();

            $input['avatar'] = $name;

            //移动图片,如果无法移动,就把文件名编码后再移动
            try {

                $file->move('images/contacters/', $name);

            } catch (FileException $e) {

                $encodedName = iconv('utf-8', 'gbk', $name);

                $file->move('images/contacters/', $encodedName);

            }
        }

        //更新找到的联系人的数据
        $contacter->update($input);

        //flash类型的Session只会出现一次就失效
        Session::flash('updated_contacter', 'Update contacter successfull!');

        return redirect(route('contacter.edit', $contacter->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contacter = Contacter::find($id);

        $filePath = public_path() . $contacter->avatar;

        //删除该联系人头像
        if (file_exists($filePath)) {

            try {

                unlink($filePath);

            } catch (ErrorException $e) {

                $encodedFilePath = iconv('utf-8', 'gbk', $filePath);

                unlink($encodedFilePath);
            }
        }

        Session::flash('deleted_contacter', 'You have deleted contacter:' . $contacter->name . ' !');

        $contacter->delete();

        return redirect(route('contacter.index'));


    }
}
