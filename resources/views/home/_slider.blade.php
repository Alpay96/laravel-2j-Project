<!-- Slider-->
<div id="home" class="parallax">
    <div id="full-width" class="owl-carousel owl-theme home-hero">
        @foreach($slider as $rs)
            <div class="text-center item slider display-table overlay">
                <div class="display-table-cell">
                    <img src="{{Storage::url($rs->image)}}"
                         style="height:750px; width:auto; object-fit:cover; background-size: cover" alt="">
                    <div class="big-tagline text-center">
                        <h2><strong>{{$rs->title}}</strong></h2>
                        <a href="{{route('style',['id' => $rs->id, 'slug' => $rs->slug])}}"
                           class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Style Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- END Slider-->
