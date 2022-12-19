<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <style>
    p {
      margin: 0;
    }
    button {
      display: block;
    }
  </style>
</head>

<body>
  <form action="/" method="post">
    @csrf
    <p>氏名</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="email" name="email">
    <button type="submit">送信する</button>
  </form>
</body>

</html>