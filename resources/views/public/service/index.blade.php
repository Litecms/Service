            @include('service::service.partial.header')

            <section class="grid">
                <div class="container">
                    <div class="row">
                        @foreach($services as $service)
                        <div class="col-md-4 ">
                            <div class="main-area parent-border list-item">
                                
                                <div class="item border">
                                    <div class="feature">
                                        <a href="{{trans_url('service')}}/{{@$service['slug']}}">
                                            <img src="{{url($service->defaultImage('image','sm'))}}" class="img-responsive center-block" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h4><a href="{{trans_url('service')}}/{{$service['slug']}}">{{str_limit($service['title'], 300)}}</a> 
                                        </h4>
                                        <h5>{{str_limit($service['description'], 200)}}</h5>
                                        
                                    </div>
                                </div>


                                
                            </div>
                            
                        </div>
                        @endforeach
                        <div class="pagination text-center">
                            {{ $services->links() }}
                            </div>
                    </div>
                </div>
            </section> 