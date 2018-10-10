            <div class='row'>
                <div class='col-md-12 col-sm-6'>
                       {!! Form::text('title')
                       -> label(trans('service::service.label.title'))
                       -> placeholder(trans('service::service.placeholder.title'))!!}
                </div>

                <div class='col-md-6 col-sm-6'>
                       {!! Form::text('icon')
                       -> label(trans('service::service.label.icon'))
                       -> placeholder(trans('service::service.placeholder.icon'))!!}
                </div>

                <div class='col-md-6 col-sm-6'>
                       {!! Form::text('heading')
                       -> label(trans('service::service.label.heading'))
                       -> placeholder(trans('service::service.placeholder.heading'))!!}
                </div>

                <div class='col-md-12 col-sm-6'>
                       {!! Form::textarea('description')
                       -> label(trans('service::service.label.description'))
                       -> rows(5)
                       -> placeholder(trans('service::service.placeholder.description'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('service::service.label.image') }}
                        </label>
                        <div class='col-lg-12 col-sm-12'>
                            {!! $service->files('image')
                            ->url($service->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-12 col-sm-12'>
                        {!! $service->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
            </div>