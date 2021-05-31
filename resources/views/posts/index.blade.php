<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

    <title>Posts page</title>
</head>
<body>

    <div class="alert alert-info" role="alert">
        <h1>Posts list:</h1>
    </div>
    <ul>
        <li>
            <a href="{{ route('posts.show', ['slag' => 1]) }}">Post 1</a> |
            <a href="{{ route('posts.edit', ['slag' => 1]) }}">Edit Post 1</a>
            <form action="{{ route('posts.destroy', ['slag' => 1]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['slag' => 2]) }}">Post 2</a> |
            <a href="{{ route('posts.edit', ['slag' => 2]) }}">Edit Post 2</a>
            <form action="{{ route('posts.destroy', ['slag' => 2]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </li>
        <li>
            <a href="{{ route('posts.show', ['slag' => 3]) }}">Post 3</a> |
            <a href="{{ route('posts.edit', ['slag' => 3]) }}">Edit Post 3</a>
            <form action="{{ route('posts.destroy', ['slag' => 3]) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary" type="submit">Delete</button>
            </form>
        </li>
    </ul>

</body>
</html>
