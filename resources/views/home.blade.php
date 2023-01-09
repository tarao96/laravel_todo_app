<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOアプリ</title>
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <form action="{{ route('task.create') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">タイトル</label>
                    <input type="text" name="title" />
                </div>
                <div class="form-group">
                    <label for="">説明</label>
                    <textarea name="body" id="body" cols="30" rows="10"></textarea>
                </div>
                <button type="submit" class="submit">作成</button>
            </form>
        </div>
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>タイトル</th>
                        <th>作成日</th>
                        <th>更新日</th>
                        <th>編集</th>
                        <th>削除</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td><a href="{{ route('task.show', ['id' => $task->id]) }}">{{ $task->title }}</a></td>
                        <td>{{ $task->created_at }}</td>
                        <td>{{ $task->updated_at }}</td>
                        <td>
                            <a href="{{ route('task.edit', ['id' => $task->id]) }}" class="edit">編集</a>
                        </td>
                        <td>
                            <form action="{{ route('task.delete', ['id' => $task->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="delete">削除</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <style>
        .container {
            width: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 0 auto;
        }
        .container .form-wrapper {
            display: flex;
            width: 650px;
            justify-content: left;
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
        .container .table-wrapper table {
            border-collapse: collapse;
        }
        .container .table-wrapper table th,td {
            border: solid 1px;
            padding: 10px;
        }
        .edit {
            border: 1px solid black;
            padding: 5px 10px;
            border-radius: 10%;
            color: black;
            background-color: skyblue;
            text-decoration: none;
        }
        .delete {
            border: 1px solid black;
            padding: 5px 10px;
            border-radius: 10%;
            color: black;
            background-color: red;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</body>
</html>
