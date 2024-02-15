<?php

$todo_list_json = file_get_contents('./db/todos.json');

header('Content-Type: application/json');

echo $todo_list_json;