<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            .container{
                margin: 20px auto;
                width: 1024px; 
            }
            .box{
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
            .box label{
                line-height: 28px;
            }
            .status{
                border: 3px solid green;
                padding: 10px;
                margin-bottom: 10px;
            }
            .error{
                border: 3px solid red;
                padding: 10px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            @if (session('error'))
                <div class="error">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('status'))
                <div class="status">
                    {{ session('status') }}
                </div>
            @endif
            @foreach ($routes as $route)
                <div class="box">
                    <form action="{{ url($route['title']) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label> {{ $route['label'] }}</label><br>
                        <input type="file" name="{{$route['title']}}" >
                        <button type="submit">提交</button>
                        <p>{{ $route['heading'] }}</p>
                    </form>
                </div>  
            @endforeach
        </div>  
    </body>
</html>
