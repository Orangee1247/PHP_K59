<html>
<head>
    <title>View articles</title>

</head>
<body>
    <ol>
        @foreach($articles as $article)
            <li>Name: {{$article->name}}  |  Author: {{$article->author}}</li>
        @endforeach
    </ol>
</body>
</html>