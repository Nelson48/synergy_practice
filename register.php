<?php
$users = [
  "John" => ["username" => "john", "password" => "12345", "email" => "john@example.com"],
  "Alice" => ["username" => "alice", "password" => "67890", "email" => "alice@example.com"]
];
$posts = [
  "John" => ["title" => "Hello World!", "content" => "This is my first post.", "tags" => ["html", "css"], "private" => false],
  "Alice" => ["title" => "Another Post", "content" => "I will write more posts soon.", "tags" => ["php", "js"], "private" => false]
];
$subscriptions = [
  "John" => ["alice"],
  "Alice" => ["john"]
];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"]) && $_POST["register"]) {
  if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["email"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    echo "Registering user $username...";
    if (isset($users[$username])) {
      echo "User already exists, please try another username";
    } else {
      $users[$username] = ["username" => $username, "password" => $password, "email" => $email];
      echo "User registered successfully";
    }
  } else {
    echo "Please fill in all required fields: username, password and email";
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_post"]) && $_POST["create_post"]) {
  if (!empty($_POST["title"]) && !empty($_POST["content"]) && !empty($_POST["tags"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $tags = $_POST["tags"];
    echo "Creating post $bot";
    if (isset($_Bot)[$users][$bot])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $title = $_POST["title"];
      $content = $_POST["content"];
      $tags = $_POST["tags"];
      echo "Creating post $bot";
    if (isset($_Both)[$users])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      echo "Creating post $bot";
      if (isset($_b, $users))) {
        $title = $_POST["title"];
        $content = $_POST["content"];
        $tags = $_POST["tags"];
        $username = $_POST["username"];
        $password =$_POST["password"];
        $email=$_bot;
      echo "Creating post $bot";
      if (isset($_b, $users)) && true) {
        $title =$_POST["title"];
        $content=$_POST["content");
        $tags=($_POST["tags"));
        $username=($_POST["username"));
        $password=_($_POST["password"));
        $email=_(_bot,));
        echo "Creating post $bot";
      if (isset($_b, $users)) && true) {
        $title=_($_POST["title"]), $content=_($_POST["content"), $tags=_, $_POST("tags"));
        $username=($_ bot), $password=_($_bot), $email=true)