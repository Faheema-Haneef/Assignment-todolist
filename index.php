<?php
$todolist = [

    [ 
       "task" => "I have to learn new things"
    ],
];
if(isset($_GET["submit"])){
    // $newTask[] = [
    //     "task" => $_GET["List"],
    // ];

if(isset($_COOKIE["todotask"])){
    $cookieArray = base64_decode($_COOKIE["todotask"]);
    $todolist = unserialize($cookieArray);
    $todolist[] = [
        "task" => $_GET["List"],
    ];;

    
}


else{

    $todolist[] = [
        "task" => $_GET["List"],
    ];;
  
}
    $serArray = serialize($todolist);
    $encodedArray = base64_encode($serArray);
    setcookie("todotask" , $encodedArray , time() + 3600);
};



// if(isset($_GET["update"])){
//     header("location: update.php");
//     exit();


// };
// if(isset($_GET["delete"])){
//     header("location: delete.php");
//     exit();
// };
    $serArray = serialize($todolist);
    $encodedArray = base64_encode($serArray);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Assignment</title>
</head>
<body>
    <div class="heading">
        <h2>To do Application</h2>
    </div>
    
    <form method="$_GET" class="form">
        <input type ="text" name ="List" class="input-field">
        <button type = "submit" name ="submit" class="sbmt-btn"> Add Todo </button>
    </form>
    <table class="table">

        <thead>
            <tr>
                <th>N</th>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($todolist as $li)
         
          {?>
   
      <tr>

        <td ><?php echo 1;?></td>
        <td class="task"><?php echo $li["task"] ?></td>
        <td class="action">
            
            <a href= "update.php?task[]=
            <?php echo $encodedArray;?>"> Update</a>
        
            <a href= "delete.php?task[]=
            <?php echo $encodedArray;?>"> Delete</a>
           
        </td>
        

      </tr>
      <?php }?>
    </table>

</body>
</html>



