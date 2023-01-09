<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoアプリ</title>
</head>
<body>
    <div class="container">
        <h1>タスク詳細画面</h1>
        <div class="content-wrapper">
            <div class="title-group">
                <label for="">■ タイトル</label>
                <p>{{ $task->title }}</p>
            </div>
            <div class="description-group">
                <label for="">■ 説明</label>
                <p>{{ $task->body }}</p>
            </div>
        </div>
        <a href="{{ route('task.index') }}" class="link">一覧へ</a>
    </div>
    <style>
        .container {
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 0 auto;
        }
        .container .form-wrapper {
            display: flex;
            width: 650px;
            justify-content: center;
            margin: 0 auto;
            margin-top: 50px;
        }
        .container .form-wrapper form {
            display: flex;
            flex-direction: column;
            gap: 30px;
            width: 60%;
        }
        .container .form-wrapper form button {
            border: 1px solid black;
            border-radius: 15px;
            background-color: skyblue;
            width: 100px;
            cursor: pointer;
        }
        .container .form-wrapper form .form-group {
            display: flex;
            flex-direction: column;
        }
        .container .table-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 100px;
        }
        .link {
            border: 1px solid black;
            padding: 5px 10px;
            border-radius: 15px;
            color: black;
            background-color: skyblue;
            text-decoration: none;
            width: 40px;
            font-size: 0.8em;
        }
    </style>
</body>
</html>
