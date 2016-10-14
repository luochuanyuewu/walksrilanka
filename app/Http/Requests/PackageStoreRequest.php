<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tourPackage' => 'bail|required',
            'dateOfArrival' => 'required',
            'dateOfDeparture' => 'required',
            'adults' => 'required',
            'childrenBetweenFiveAndEleven' => 'required',
            'childrenUnderFive' => 'required',
            'numberOfRooms' => 'required',
            'kindOfAccommodation' => 'required',
            'name' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tourPackage.required'=>'必须选择旅游套餐',
            'dateOfArrival.required'=>'必须填写到达日期',
            'adults.required'=>"必须填写成年人数",
            'childrenBetweenFiveAndEleven.required'=>"必须填写5~11岁的小孩人数",
            'childrenUnderFive.required'=>"必须填写5岁以下小孩人数",
            'numberOfRooms.required'=>"必须填写房间数",
            'name.required'=>"必须填写您的姓名以便我们联系",
            'phone.required'=>"必须填写您的电话以便我们联系",


        ];
    }
}
