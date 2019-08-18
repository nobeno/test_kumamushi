<!DOCTYPE html>
<html>
<head>
    <title>個人設計画面</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/index.css">
    <link rel="stylesheet" type="text/css" href="/css/personal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
     <header>
        <nav class=" stripe_border navbar  navbar-light">
          <a class="" href="{{ route('diary.index')}}"><i class="fas fa-bomb"></i></a>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('diary.index')}}">サービスに戻る</a>
              </li>
            </ul>
        </nav>
    </header>

    <div class="parsonal-info contents">
        <h1>個人設計画面</h1>
        <form method="post" action="{{ route('diary.create') }}">
            {{ csrf_field() }}
            <p class="face-img"><img src="" name="img_path">顔写真</p>
            <p class="name">お名前：<input type="text" name="name"></p>
            <p class="barth">生年月日：<input type="date" name="barth"></p>
            <div class="profile">
                <p>未来プロフィール</p>
                <p><textarea type="text" name="profile"></textarea></p>
            </div>

            <table width="100%" height="150px">
                <tr>
                <td></td>
                <td>達成すべき事</td>
                <td>期限</td>
                <td>詳細</td>
                </tr>
                <tr>
                <td>目標①</td>
                <td><input width="" type="text" name="goal1"></td>
                <td><input type="date" name="deadline1"></input></td>
                <td><textarea type="text" name="detail1"></textarea></td>
                </tr>
                <tr>
                <td>目標②</td>
                <td><input type="text" name="goal2"></td></td>
                <td><input type="date" name="deadline2"></input></td>
                <td><textarea type="text" name="detail2"></textarea></td>
                </tr>
                <tr>
                <td>目標③</td>
                <td><input type="text" name="goal3"></td></td>
                <td><input type="date" name="deadline3"></input></td>
                <td><textarea type="text" name="detail3"></textarea></td>
                </tr>
            </table>

            <p><input type="submit" value="保存する"></p>
        </form>
    <a href="{{ route('diary.index') }}">戻る</a>
    </div>
</body>
</html>
