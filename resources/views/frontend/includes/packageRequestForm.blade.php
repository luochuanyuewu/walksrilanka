{{--旅游套餐请求对话框--}}
<div id="TourReqestForm" class="modal fade " role="dialog">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">创建您的旅游请求单</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'post','route'=>['request.store']]) !!}

                {{csrf_field()}}


                <div class="form-group">
                    {!! Form::label('tourPackage','选择您的旅游套餐:') !!}
                    <select name="tourPackage" class="form-control">
                        @if($packageName)
                            <option value="{{ $packageName }}">{{ $packageName }}</option>
                        @else
                            @foreach($packages as $package)
                                <option value="{{ $package }}">{{ $package }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="form-group">
                    {!! Form::label('dateOfArrival','到达日期:') !!}
                    {!! Form::date('dateOfArrival',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('dateOfDeparture','离开日期:') !!}
                    {!! Form::date('dateOfDeparture',\Carbon\Carbon::now(),['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('adults','成年人数:') !!}
                    {!! Form::number('adults',0,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('childrenBetweenFiveAndEleven','5~11岁的小孩:') !!}
                    {!! Form::number('childrenBetweenFiveAndEleven',0,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('childrenUnderFive','低于五岁的小孩:') !!}
                    {!! Form::number('childrenUnderFive',0,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('numberOfRooms','房间个数:') !!}
                    {!! Form::number('numberOfRooms',0,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('kindOfAccommodation','住宿类型:') !!}
                    {!! Form::select('kindOfAccommodation', ['Budget Guesthouses' => '普通宾馆',
                    '2-3 Star Hotels' => '2~3星级酒店','4-5 Star Hotels'=>'4~5星级酒店'], 'Budget Guesthouses',['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('specialRequests','特殊要求:') !!}
                    {!! Form::textarea('specialRequests',null,['class'=>'form-control','placeholder'=>'请填写您的其他要求.选填','rows'=>4]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name','您的姓名:') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'请填写您的名字,必填.']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('phone','您的手机号:') !!}
                    {!! Form::number('phone',null,['class'=>'form-control','placeholder'=>'请填写您的手机号以便我们联系,必填.']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('wechat_id','您的微信ID:') !!}
                    {!! Form::text('wechat_id',null,['class'=>'form-control','placeholder'=>'请填写您的微信ID以便我们联系,建议填写!']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email','您的邮箱:') !!}
                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'请填写您的邮箱地址,选填.']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('address','您的地址:') !!}
                    {!! Form::text('address',null,['class'=>'form-control','placeholder'=>'请填写您的大致居住地址,选填.']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('提交请求',['class'=>'btn btn-info btn-block']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>

    </div>
</div>