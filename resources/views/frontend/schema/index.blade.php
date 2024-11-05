@extends('frontend.layouts.user')
@section('title')
    {{ __('All Schema') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="site-card">
                       <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
    "symbols": [
      {
        "description": "Tesla",
        "proName": "NASDAQ:TSLA"
      },
      {
        "description": "Apple Inc",
        "proName": "NASDAQ:AAPL"
      },
      {
        "description": "Nvidia",
        "proName": "NASDAQ:NVDA"
      },
      {
        "description": "Microsoft",
        "proName": "NASDAQ:MSFT"
      },
      {
        "description": "Advanced Micro Devices",
        "proName": "NASDAQ:AMD"
      },
      {
        "description": "Meta",
        "proName": "NASDAQ:META"
      },
      {
        "description": "Netflix",
        "proName": "NASDAQ:NFLX"
      }
    ],
    "showSymbolLogo": true,
    "colorTheme": "dark",
    "isTransparent": true,
    "displayMode": "compact",
    "locale": "en"
  }
  </script>
</div>
<!-- TradingView Widget END -->
                <div class="site-card-header">
                    <h3 class="title">{{ __('All Staking offer') }}</h3>
                </div>
                <div class="site-card-body">
                    <div class="row">
                        @foreach($schemas as $schema)

                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="single-investment-plan">
                                    <img
                                        class="investment-plan-icon"
                                        src="{{ asset($schema->icon) }}"
                                        alt=""
                                    />
                                    @if($schema->badge)
                                        <div class="feature-plan">{{$schema->badge}}</div>
                                    @endif

                                    <h3>{{$schema->name}}</h3>
                                    <p>{{$schema->schedule->name . ' '. ($schema->interest_type == 'percentage' ? $schema->return_interest.'%' : $currencySymbol.$schema->return_interest ) }}</p>
                                    <ul>
                                        <li>{{ __('Range') }} <span class="special">
                                            {{ $schema->type == 'range' ? $currencySymbol . $schema->min_amount . '-' . $currencySymbol . $schema->max_amount : $currencySymbol . $schema->fixed_amount }}
                                        </span></li>
                                        <li>{{ __('Capital Back') }}
                                            <span>{{ $schema->capital_back ? 'Yes' : 'No' }}</span></li>
                                        <li>{{ __('Return Type') }} <span>{{ ucwords($schema->return_type) }}</span>
                                        </li>
                                        <li>{{ __('Duration') }}
                                            <span>{{ ($schema->return_type == 'period' ? $schema->number_of_period : 'Unlimited').($schema->number_of_period == 1 ? ' Time' : ' Times' )  }}</span>
                                        </li>
                                        <!--<li>{{ __('Profit Withdraw') }} <span>{{ __('Anytime') }}</span></li>-->
                                    </ul>
                                    <a href="{{route('user.schema.preview',$schema->id)}}"
                                       class="site-btn grad-btn w-100 centered"><i
                                            class="anticon anticon-check"></i>{{ __('Invest Now') }}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
