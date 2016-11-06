<div id="FeedbackBox" class="modal fade " role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">留言反馈面板</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['method'=>'post','route'=>['feedback.store']]) !!}

                {{csrf_field()}}

                <div class="form-group">
                    {!! Form::label('name','您的姓名:') !!}
                    {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'请填写您的名字.']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email','您的邮箱:') !!}
                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'请填写您的邮箱地址,选填.']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('content','您的反馈:') !!}
                    {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'请填写您的反馈以及建议,我们会认真对待','rows'=>4]) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('提交反馈',['class'=>'btn btn-info btn-block']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>

    </div>
</div>