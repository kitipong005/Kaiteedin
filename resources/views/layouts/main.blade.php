<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kaiteedin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- bootstrap 4 --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>

    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    {{-- font awesome 5 --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/styleMe.css')}}">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    @yield('header')
    @yield('contents')
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script>
        $(function(){
            $('#regisModal').on('keyup','#email',delay(function (e) {
                var email = $('#email').val();
                if(email.indexOf('@') != -1 ){
                    checkEmailExists(email);
                }
                else {
                    console.log('error')
                }
            }, 800));
        });

        function checkEmailExists(email)
        {
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
            });
            $.ajax({
                url: "{{ action('RegisterController@checkEmailExists') }}",
                method: 'get',
                data: {
                    'email' : email
                },
                dataType: "json",
                async: false,
                success: function(result){
                    console.log(result);
                    if(result.regisWith == 'google'){
                        $('#regis-google').show('slow');
                    }
                    else if(result.regisWith == 'facebook'){
                        $('#regis-facebook').show('slow');
                    }
                    else {
                        $('#regis-website').show('slow');
                    }
                },
                error: function(result)
                {
                    console.log('none');
                    $('#regis-google').hide('slow');
                    $('#regis-facebook').hide('slow');
                    $('#regis-website').hide('slow');
                }
            });
        }

        function delay(callback, ms) {
            var timer = 0;
            return function() {
                var context = this, args = arguments;
                clearTimeout(timer);
                timer = setTimeout(function () {
                callback.apply(context, args);
                }, ms || 0);
            };
        }
    </script>
    @yield('scripts')
</body>

</html>