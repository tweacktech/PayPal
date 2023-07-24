<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
      

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <fieldset>
            <h1>PayPal payment gateway integration on laravel project</h1>
            <form action="{{route('payment')}}" method="POST">
                @csrf 
                <div>
                    <img src="">
                    <label>Price </label>$200
                </div>
                <div>
                    <input type="hidden" name="amount"  value="200">
                    <button type="submite">Pay with PayPal</button>
                </div>
            </form>
            <br>
            <strong>whatsapp only +2347065216112</strong>
        </fieldset>
    </body>
</html>
