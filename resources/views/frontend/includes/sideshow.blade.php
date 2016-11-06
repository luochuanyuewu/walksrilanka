<div id="myCarousel" class="carousel slide animated fadeIn" data-ride="carousel" data-pause="hover" data-interval="3000" style="padding: 0px">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{url('img_frontend/sideshow/1.jpg')}}" alt="banner">
            <div class="carousel-caption">
                <h3>斯里兰卡</h3>
                <p>被热带海洋所亲吻。</p>
            </div>
        </div>
        <div class="item">
            <img src="{{url('img_frontend/sideshow/2.jpg')}}" alt="banner">
            <div class="carousel-caption">
                <h3>斯里兰卡</h3>
                <p>是迷人且充满神秘的。</p>
            </div>

        </div>

        <div class="item">
            <img src="{{url('img_frontend/sideshow/3.jpg')}}" alt="banner">
            <div class="carousel-caption">
                <h3>斯里兰卡</h3>
                <p>是海滩恋人的天堂。</p>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
    </a>
</div>

