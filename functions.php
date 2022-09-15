<?php


function connectdb()
{
   try  {
      return     new PDO('mysql:host=localhost;port=3306;dbname=oop','root','password');
      
   }catch(PDOException $e){

        die('could not connect.   ');    

   }

}