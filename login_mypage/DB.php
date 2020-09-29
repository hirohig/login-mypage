<?php

class DB{
  //DB接続
  public function connect(){
      $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
      return $pdo;
  }
    
  public function insert(){
      return "insert into login_mypage(name, mail, password, picture, comments) values(?,?,?,?,?)";
  }
    
  public function select(){
      return "select * from login_mypage";
  }
    
  public function update(){
      return "update login_mypage set name = ?, mail = ?, password = ?, comments = ? where id = ?";
  }
}

?>