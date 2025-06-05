<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Niggas | Home</title>
</head>
<body>
    <h2>List of Niggas</h2>
    <p>
        {{$greeting}}
    </p>
    @if($greeting == 'hello')
    <p>
        owen
 go to beddy.
    </p>

    @endif
    <ul>
        @foreach($ninjas as $ninja)
        <li>
                <p>
                {{$ninja['name']}}
                </p>
            <a href="/niggas/{{$ninja["id"]  }}">
             View Details
            </a>
        </li>
    @endforeach
    </ul>
    <ul>
    {{--}}
    <li>
        <a href="/niggas/{{$ninjas[0]["id"]  }}">
        {{$ninjas[0]['name']  }}
        </a>
    </li>

    
    <li>
        <a href="/niggas/{{$ninjas[1]["id"]  }}">
        {{$ninjas[1]['name']  }}
        </a>
    </li>
    <li>
        <a href="/niggas/{{$ninjas[2]["id"]  }}">
        {{$ninjas[2]['name']  }}
        </a>
    </li>
    </ul>
    {{--}}
</body>
</html>