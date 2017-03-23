<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/
 require 'process.php';
$fid=$_POST["user_id"];
        $response=array();
        $response2=array();
        $query="select * from follow where followed_id = '$fid';";
        $query2="select * from follow where follower_id = '$fid';";
        $result=mysqli_query($connection, $query);
        $result2=mysqli_query($connection, $query2);
        
        
          while ($row= mysqli_fetch_array($result)) {
            array_push($response,array(
               
                "follower_id"=>$row[1],
                "follow_date"=>$row[3],
                
                
            ) );
          }
             while ($row= mysqli_fetch_array($result2)) {
            array_push($response2,array(
               
                "follower_id"=>$row[1],
                "follow_date"=>$row[3],
                
                
            ) );
          }
          
        $count=  count($response);
         $count2=  count($response2);
          echo json_encode(array(/*"follow",$response,*/"#Followers"=>$count,"#Followed"=>$count2));
          ?>