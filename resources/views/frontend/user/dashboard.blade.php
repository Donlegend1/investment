@extends('frontend.layouts.user')
@section('title')
    {{ __('Dashboard') }}
@endsection
@section('content')

    <!--{{--Referral and Ranking --}}-->
    <!--@include('frontend.user.include.__referral_ranking')-->
    
    
    {{--Trading view --}}
    @include('frontend.user.include.__user_trading_view')
    
    
    {{--Calculator--}}
    @include('frontend.user.include.__calculator')
    
    
    {{-- User Card--}}
    @include('frontend.user.include.__user_card')

    {{--Recent Transactions--}}
    @include('frontend.user.include.__recent_transaction')

@endsection
@section('script')
    <script>
        function copyRef() {
            /* Get the text field */
            var copyApi = document.getElementById("refLink");
            /* Select the text field */
            copyApi.select();
            copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
            /* Copy the text inside the text field */
            document.execCommand('copy');
            $('#copy').text($('#copied').val())

        }
        
          function calculate() {
    var investment = parseFloat(document.getElementById('investment').value);
    var dailyReturn = 0;
    var totalReturn = 0;
    var totalProfit = 0;
    var planName = "";

    if (investment >= 50 && investment <= 999) {
      dailyReturn = investment * 0.029; // 2.9% daily return
      planName = "Starter Staking Plan";
    } else if (investment >= 1000 && investment <= 4999) {
      dailyReturn = investment * 0.049; // 4.9% daily return
      planName = "Compound Staking Plan";
    } else if (investment >= 5000 && investment <= 9999) {
      dailyReturn = investment * 0.069; // 6.9% daily return
      planName = "Max Staking Plan";
    } else if (investment >= 10000 && investment <= 1000000) {
      dailyReturn = investment * 0.089; // 8.9% daily return
      planName = "Elite Staking Plan";
    }
    
    totalReturn = dailyReturn * 5; // Total return over 5 days
    totalProfit = totalReturn + investment; // Total including return of capital
    
    var resultElement = document.getElementById('result');
    resultElement.innerHTML = `
      <p>Staking Plan: ${planName}</p>
      <p>Daily return: $${dailyReturn.toFixed(2)}</p>
      <p>Total return after 5 days: $${totalReturn.toFixed(2)}</p>
      <p>Total including return of capital: $${totalProfit.toFixed(2)}</p>
    `;
  }
        
        
    </script>
@endsection
