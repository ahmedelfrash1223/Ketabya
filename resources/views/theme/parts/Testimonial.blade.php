<div class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="section-title">اراء العملاء</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="testimonial-slider-wrap text-center">

                    <div id="testimonial-nav">
                        <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                        <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                    </div>

                    <div class="testimonial-slider">
                        @foreach ($contact as $con)
                            
                        <div class="item">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 mx-auto">

                                    <div class="testimonial-block text-center">
                                        
                                        <div class="author-info">
                                            <div class="author-pic">
                                                <img src="/images/man.png" alt="Maria Jones" class="img-fluid">
                                            </div>
                                            <h3 class="font-weight-bold">{{ $con->fname .' ' . $con->lname  }}</h3>
                                        </div>
                                        <blockquote class="mb-5">
                                            <p>&ldquo;{{ $con->message }}&rdquo;</p>
                                        </blockquote>
                                    </div>

                                </div>
                            </div>
                        </div> 
                        @endforeach
                        <!-- END item -->

                        

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>