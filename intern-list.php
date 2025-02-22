<?php
  include_once('getlistfromdb.php');
  $query = "select * from interns";
  $result = mysqli_query($conn, $query) or die("Error: ".mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intern List Page</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="intern-styles.css">
     <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <!--navbar-->
        <nav 
        class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand logo" href="#" style="color: #C9472C" >INTERN PAGE LIST</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ml-auto nav">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #C9472C" href="#">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #C9472C" href="#">COMPLAINTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #C9472C" href="#">FORUM</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" style="color: #C9472C" href="#">LOGOUT</a>
                            </li>
                    </ul>
                    <!--Search Input-->
                                <form class="form-inline">
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1">                                    
                                  <img src="search-icon.png" alt="Search-Icon">
                                   </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                              </div>
                            </form>
                                             
                 </nav>
            <form action="">
           <!--Table-->
          <table contenteditable="true">
              <thead>
                    <th>CODE NO</th>
                    <th>SLACK USERNAME</th>
                    <th>TRACK</th>
                    <th>SUBMISSION URL</th>
                    <th>MENTOR REMARKS</th>
                    <th>INTERN FATE</th>
                
            </thead>
              
                  <tbody>
                    <?php 
                    while ($rows=mysqli_fetch_assoc($result))
                     {
                      ?>

                          <tr><td><?php echo $rows['code_number']; ?></td>
                            <td><?php echo $rows['slack_username']; ?></td>
                            <td><?php echo $rows['track']; ?></td>
                            <td><?php echo $rows['submission_url']; ?></td>
                            <td><?php echo $rows['mentors_remark']; ?></td>
                            <td><button type="submit" class="passed">PASSED</button><button type="submit" class="resubmit">RESUBMIT</button></td></tr>
                      
                      <?php   
                    }
                    ?>
                  </tbody>
              
          </table>
          </form>
          </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>