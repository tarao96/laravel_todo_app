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
        <h1>タスク編集画面</h1>
        <div class="form-wrapper">
            <form action="{{ route('task.update', $task->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">タイトル</label>
                    <input type="text" name="title" value="{{ $task->title }}" />
                </div>
                <div class="form-group">
                    <label for="">説明</label>
                    <textarea name="body" id="body" cols="30" rows="10">{{ $task->body }}</textarea>
                </div>
                <button type="submit" class="submit">更新</button>
            </form>
        </div>
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
    </style>
</body>
</html>
