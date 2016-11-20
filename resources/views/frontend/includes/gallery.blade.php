@if(count($pictures) > 0)
    <div class="row">
        <div class="col-md-12" >
            <h4 class="text-center">文章图集</h4>
            <div id="article-gallery" class="text-center">
                @foreach($pictures as $picture)
                    <a href="{{$picture->name}}" title="Gallery Item" style="text-decoration: none">
                        <img src="{{$picture->name}}"
                             alt="{{$picture->name}}" style="width: 40px;height: 40px">
                    </a>
                @endforeach

                {{--@for($i=1;$i<=20;$i++)--}}
                {{--<a href="{{url('img_frontend/sideshow/1.jpg')}}" style="text-decoration: none">--}}
                {{--<img src="{{url('img_frontend/sideshow/1.jpg')}}" alt="banner" style="width: 40px;height: 40px">--}}
                {{--</a>--}}
                {{--@endfor--}}

            </div>
        </div>

    </div>
@endif