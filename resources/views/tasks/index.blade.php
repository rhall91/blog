<?php
/*
Filename: index.blade.php
Author: RDH
Contributors: RDH
Created: 8/10/2017
Last Edit: 8/10/2017
Last Edited By: RDH
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Larablog</title>
</head>
<body>

<ul>
    @foreach ($tasks as $task)

        <li>
            <a href="/tasks/{{ $task->id }}">
                {{ $task->body }}
            </a>
        </li>

    @endforeach
</ul>
</body>
</html>
