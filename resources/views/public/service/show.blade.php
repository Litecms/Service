       @include('service::public.service.partial.header')


<section class="single">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="area">
                                <div class="item">
                                    
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{{url($service->defaultImage('image'))}}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>{{$service->title}}</h4>
                                        <div class="metas mt-20 clearfix">
                                            
                                            
                                        </div>
                                        <div class="divider"></div>
                                        <p>{!! $service->description !!}</p>
                                        
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </section>