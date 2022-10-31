
@extends('layouts.homelayout')


@section('content')

<div id="page-content" style="transform: translateY(0px);">
        <div class="hero-section has-background height-500px">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <h1>GÜZELLİĞİN MERKEZİ</h1>
                            <h2>Konumunuzu seçerek bulunduğunuz yerdeki en iyi fırsatları bulabilirsiniz</h2>
                        </div>
                        <div class="form search-form horizontal">
                            <form>
                                <div class="row">
                                    <div class="col-md-3 col-sm-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-3 col-sm-4">
                                        <div class="form-group">
                                            <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="Location"><span class="filter-option pull-left">Location</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search"></div><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Location</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Manhattan</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Brooklyn</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" name="location" data-live-search="true" tabindex="-98">
                                                <option value="">Location</option>
                                                <option value="1">Manhattan</option>
                                                <option value="2">Brooklyn</option>
                                            </select></div>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-3 col-sm-4">
                                        <div class="form-group">
                                            <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="Category"><span class="filter-option pull-left">Category</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Category</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Restaurant</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Event</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Adrenaline</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sport</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Wellness</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker" name="category" tabindex="-98">
                                                <option value="">Category</option>
                                                <option value="1">Restaurant</option>
                                                <option value="2">Event</option>
                                                <option value="3">Adrenaline</option>
                                                <option value="4">Sport</option>
                                                <option value="5">Wellness</option>
                                            </select></div>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control date-picker" name="min-price" placeholder="Event Date">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-1 col-sm-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary pull-right darker"><i class="fa fa-search"></i></button>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-hero-->
                        </div>
                        <!--end form-->
                    </div>
                </div>
            </div>
            <div class="background-wrapper">
                <div class="bg-transfer opacity-50" style="background-image: url(&quot;assets/img/background-06.jpg&quot;);"><img src="assets/img/background-06.jpg" alt=""></div>
                <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end hero-section-->

        <!--end block-->
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9">
                        <div class="section-title">
                            <h2>Recently Rated Items</h2>
                        </div>
                        <!--end section-title-->
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="item" data-id="2">
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Restaurant</div>
                                            <h3>Ironapple</h3>
                                            <h4>4209 Glenview Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer" style="background-image: url(&quot;assets/img/items/2.jpg&quot;);">
                                            <img src="assets/img/items/2.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="3">
                                            <span class="stars"><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="fa fa-star"></figure><figure class="fa fa-star"></figure></span>
                                            <span class="reviews">13</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-4-->
                            <div class="col-md-5 col-sm-5">
                                <div class="item" data-id="3">
                                    <figure class="ribbon">Top</figure>
                                    <a href="detail.html">
                                        <div class="description">
                                            <figure>Starts at: 19:00</figure>
                                            <div class="label label-default">Event</div>
                                            <h3>Food Festival</h3>
                                            <h4>840 My Drive</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer" style="background-image: url(&quot;assets/img/items/4.jpg&quot;);">
                                            <img src="assets/img/items/4.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure></span>
                                            <span class="reviews">12</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-5-->
                            <div class="col-md-3 col-sm-3">
                                <div class="item" data-id="4">
                                    <a href="detail.html">
                                        <div class="description">
                                            <div class="label label-default">Lounge</div>
                                            <h3>Cosmopolit</h3>
                                            <h4>2896 Ripple Street</h4>
                                        </div>
                                        <!--end description-->
                                        <div class="image bg-transfer" style="background-image: url(&quot;assets/img/items/5.jpg&quot;);">
                                            <img src="assets/img/items/5.jpg" alt="">
                                        </div>
                                        <!--end image-->
                                    </a>
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure><figure class="active fa fa-star"></figure></span>
                                            <span class="reviews">43</span>
                                        </div>
                                        <div class="controls-more">
                                            <ul>
                                                <li><a href="#">Add to favorites</a></li>
                                                <li><a href="#">Add to watchlist</a></li>
                                                <li><a href="#" class="quick-detail">Quick detail</a></li>
                                            </ul>
                                        </div>
                                        <!--end controls-more-->
                                    </div>
                                    <!--end additional-info-->
                                </div>
                                <!--end item-->
                            </div>
                            <!--<end col-md-3-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end col-md-9-->
                    <div class="col-md-3 col-sm-3">
                        <div class="section-title">
                            <h2>Client’s Word</h2>
                        </div>
                        <div class="testimonials center box">
                            <div class="owl-carousel owl-loaded owl-drag" data-owl-items="1" data-owl-nav="0" data-owl-dots="1">
                                
                                
                            <div class="owl-stage-outer owl-height" style="height: 246px;"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 526px;"><div class="owl-item active" style="width: 263px;"><blockquote>
                                    <div class="image">
                                        <div class="bg-transfer" style="background-image: url(&quot;assets/img/person-01.jpg&quot;);">
                                            <img src="assets/img/person-01.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Jane Woodstock</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel.</p>
                                </blockquote></div><div class="owl-item" style="width: 263px;"><blockquote>
                                    <div class="image">
                                        <div class="bg-transfer" style="background-image: url(&quot;assets/img/person-04.jpg&quot;);">
                                            <img src="assets/img/person-04.jpg" alt="">
                                        </div>
                                    </div>
                                    <h3>Peter Doe</h3>
                                    <h4>CEO at ArtBrands</h4>
                                    <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales.</p>
                                </blockquote></div></div></div><div class="owl-nav disabled"><div class="owl-prev"></div><div class="owl-next"></div></div><div class="owl-dots"><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>
                        </div>
                    </div>
                    <!--end col-md-3-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <section class="block">
            <div class="container">
                <div class="section-title">
                    <h2>From the Blog</h2>
                </div>
                <!--end section-title-->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Lorem ipsum dolor sit amet</a></h4>
                            <figure class="date">21.06.2015</figure>
                            <p>Ut nec vulputate enim. Nulla faucibus convallis dui. Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus</p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Sed et justo ut nibh condimentum lacinia</a></h4>
                            <figure class="date">13.06.2015</figure>
                            <p>Donec arcu enim, scelerisque gravida lacus vel, dignissim cursus lectus. Aliquam laoreet purus in iaculis sodales. </p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                    <div class="col-md-4 col-sm-4">
                        <div class="text-element">
                            <h4><a href="blog-detail.html">Suspendisse varius eros id enim </a></h4>
                            <figure class="date">03.04.2015</figure>
                            <p>Nullam nec turpis blandit, sodales risus vitae, tincidunt velit. Vestibulum ac ipsum tincidunt, vestibulum leo eget, </p>
                            <a href="blog-detail.html"><i class="arrow_right"></i></a>
                        </div>
                        <!--end text-element-->
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->

       
    </div>



</div>
@endsection