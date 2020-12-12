<div class="container py-3">
    <h3 class="heading">About Me</h3>
    <div class="row about-grids">
        @foreach($abouts as $about)
            <div class="col-lg-4">
                <h4>{{$about->title}}</h4>
                <p>{{$about->description}}</p>
                <a href="{{asset($about->file)}}"> Download CV <span class="fa ml-2 fa-download"></span> </a>
            </div>
            <div class="col-lg-4 col-md-6 my-lg-0 my-5">
                <img src="{{asset($about->image)}}" alt="" class="img-fluid" />
            </div>
        @endforeach
        <div class="col-lg-4 bar-grids">
            <div class="wthree_skills">
                <h6>Designing<span> 95% </span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 95%">
                    </div>
                </div>
                <h6>Developing<span> 85% </span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 85%">
                    </div>
                </div>
                <h6>Photoshop<span>90% </span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 90%">
                    </div>
                </div>
                <h6>Marketing<span>75% </span></h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" style="width: 75%">
                    </div>
                </div>
                <h6>Branding<span>45% </span></h6>
                <div class="progress prgs-w3agile-last">
                    <div class="progress-bar progress-bar-striped active" style="width: 45%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
