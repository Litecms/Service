    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#service" data-toggle="tab">{!! trans('service::service.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#service-service-edit'  data-load-to='#service-service-entry' data-datatable='#service-service-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#service-service-entry' data-href='{{guard_url('service/service')}}/{{$service->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('service-service-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('service/service/'. $service->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="service">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('service::service.name') !!} [{!!$service->name!!}] </div>
                @include('service::admin.service.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>