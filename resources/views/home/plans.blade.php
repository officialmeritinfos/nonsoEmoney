@extends('home.base')
@section('content')
<!-- Start Page-title Area -->
<div class="page-title-area bg-black">
    <div class="container">
        <div class="page-title-content">
            <h2>{{$pageName}}</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{$pageName}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page-title Area -->

<div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
    <div class="container">
        <div class="row justify-content-center">
            @foreach($services as $service)
            @inject('option','App\Defaults\Custom')
            @if($option->getPlanNumberService($service->id)->count() >0)
            <div class="col-md-6 mt-3">
                <a href="{{route('plan_details',['id'=>$service->id])}}" class="card">
                    <div class="card-body" data-uk-grid="">
                        <div class="uk-width-auto@m uk-flex uk-flex-middle uk-first-column">
                            <i
                                class="uk-text-primary fas fa-database fa-lg in-icon-wrap in-margin-remove-left@s uk-margin-left"></i>
                        </div>
                        <div class="uk-width-expand@m in-margin-top-10@s">
                            <h3 class="uk-margin-small-bottom">{{$service->title}}</h3>
                            <p class="uk-text-small uk-margin-remove-bottom">
                                <span class="uk-text-primary">{{$option->getPlanNumberService($service->id)->count()}}
                                </span> plans in {{$service->title}}
                            </p>
                            <p class="uk-text-small uk-text-muted uk-margin-remove-top" style="font-size: 14px;">Click
                                to view plans in <span class="uk-text-primary">
                                    {{$service->title}}
                                </span></p>
                        </div>
                    </div>
                </a>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>


@endsection
