<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>本の新規登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>本の新規登録</h1>
    <form action="/book/insertComplete" method="POST">
        @csrf
        <div class="mb-3">
            <p>新規登録</p>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}"> <br>
            <label for="ISBN">ISBN</label>
            <input type="text" name="ISBN" id="ISBN" class="form-control" value="{{ old('ISBN') }}"> <br>
            <label for="author">著者名</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}"> <br>
            <label for="publisher">出版社</label>
            <input type="text" name="publisher" id="publisher" class="form-control" value="{{ old('publisher') }}"> <br>
            <label for="price">価格</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}"> <br>
            <input type="submit" value="送信">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>