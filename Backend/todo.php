<?php

$todo_list_json = file_get_contents('./db/todos.json');

$todo_list = json_decode($todo_list_json, true);

header('Content-Type: application/json');

echo json_encode($todo_list);