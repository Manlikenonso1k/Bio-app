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
    <ul>
        <li>
            Niggas here
        </li>    
    </ul>
    <ul>
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
</body>
</html>