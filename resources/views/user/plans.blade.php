@extends('user.base')
@section('content')

<div class="pricing-area">
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach($services as $service)
            @inject('option','App\Defaults\Custom')
            @if($option->getPlanNumberService($service->id)->count() >0)
            <div class="col-lg-4 col-md-6">
                <div class="single-pricing-card">
                    <div class="pricing-bar">
                        <span>{{$service->title}}</span>
                        <p>
                            {{$option->getPlanNumberService($service->id)->count()}} plans in {{$service->title}}
                        </p>
                    </div>

                    <div class="price-list">

                        <a href="{{route('new_investment.plans',['id'=>$service->id])}}" class="default-btn">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>

@endsection
