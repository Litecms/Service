    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('service::service.name') !!}</a></li>
            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#service-service-entry' data-href='{{guard_url('service/service/create')}}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }}</button>
                @if($service->id )
                <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#service-service-entry' data-href='{{ guard_url('service/service') }}/{{$service->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> {{ trans('app.edit') }}</button>
                <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#service-service-entry' data-datatable='#service-service-list' data-href='{{ guard_url('service/service') }}/{{$service->getRouteKey()}}' >
                <i class="fa fa-times-circle"></i> {{ trans('app.delete') }}
                </button>
                @endif
            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('service-service-show')
        ->method('POST')
        ->files('true')
        ->action(guard_url('service/service'))!!}
            <div class="tab-content clearfix disabled">
                <div class="tab-pan-title"> {{ trans('app.view') }}   {!! trans('service::service.name') !!}  [{!! $service->name !!}] </div>
                <div class="tab-pane active" id="details">
                    @include('service::admin.service.partial.entry', ['mode' => 'show'])
                </div>
            </div>
        {!! Form::close() !!}
    </div>