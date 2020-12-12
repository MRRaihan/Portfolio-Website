<div class="banner-layer">
    <div class="container">
        <div class="row agile_banner_info">
          @foreach($homepages as $homepage)
            <div class="col-md-7 agile_banner_margin">
                <h5>Hi</h5>
                <h2>My name is <span>{{$homepage->name}}</span></h2>
                <h4>{{$homepage->title}}</h4>
                <p>{{$homepage->description}}</p>
                <a href="#"> Read More </a>
            </div>
            <div class="col-md-5 image_margin">
                <img src="{{asset($homepage->image)}}" alt="" class="img-fluid" />
            </div>
          @endforeach
        </div>
    </div>
</div>
