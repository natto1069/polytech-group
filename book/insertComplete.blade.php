<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>本の新規登録</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
</head>

<body>
    <h1>以下のデータを登録しました</h1>
    <hr>
    <table class="table">
        <tr>
            <th>タイトル</th>
            <th>ISBN</th>
            <th>著者</th>
            <th>出版社</th>
            <th>価格</th>
        </tr>
        <tr>
            <td> {{ $title }} </td>
            <td> {{ $ISBN }} </td>
            <td> {{ $author }} </td>
            <td> {{ $publisher }} </td>
            <td> {{ $price }} </td>
        </tr>
    </table>
    <br>
    <a href="/">Topページに戻る</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>

</html>