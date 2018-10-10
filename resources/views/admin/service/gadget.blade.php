@forelse($service as $key => $val)
<div class="service-gadget-box">
    <p>{!!@$val->name!!}</p>
    <p class="text-muted"><small><i class="ion ion-android-person"></i> {!!@$val->user->name!!} at {!! format_date($val->created_at)!!}</small></p>
</div>
@empty
<div class="service-gadget-box">
    <p>No Service</p>
</div>
@endif