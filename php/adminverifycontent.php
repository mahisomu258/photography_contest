<?php
include("connect.php");
include("adminsession.php");
$AdminID = $_SESSION['adminID'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Verify content</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/verifycontent.css">
</head>

<body style="background-image:url('../image/bg.gif');font-family:Old Standard TT, serif;">
    <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="adminhome.php">Winner</a>
        <a class="active" href="adminhome.php">Home</a>
        <p style="float: left;">PIXELS</p>

    </div>
    <a href="adminhome.php">
        <button class="button button1">BACK</button>
    </a>

    <h1 style="text-align:center">Content Verification</h1>

    <div style="background-color:white;margin:20px 30px" class="flex1">

        <!--Content Area-->
        <div style="height:auto; margin:10px;">

            <?php
            $fetchData = mysqli_query($con, "SELECT * FROM content");
            while ($row = mysqli_fetch_assoc($fetchData)) {
                $displayData = '
        <form action ="approvereject.php" method="POST"  enctype="multipart/form-data">
            <div class="flex boxBorder">
                <div style="width: 35%; border-right: double; margin-right: 30px;">
                <div style="padding:70px 30px"><img src="data:image/jpg;base64, ' . base64_encode($row["ContentImage"]) . '" style="max-width:100%; height:250px"></div>
                </div>
                <div style="width:60%">
                <input type="text" value = "' . $row["ContentID"] . '" name="contentID"  class="compread2" style=display:none;" readonly/>
                <br>
                <b>CompetitionID:</b><input type="text" value = "' . $row["CompetitionID"] . '" name="compID"  class="compread2" readonly/>
                <br>
                <b>Content Title:</b><input type="text" value = "' . $row["ContentTitle"] . '" name="title"  class="compread2" readonly/>
                <br>
                <b>Description: </b>
                <div style="padding-left:10px"><textarea name = "description" cols=40  rows=3 readonly>' . $row["ContentDescription"] . '</textarea></div>
                <br>
                <b>Participant Name: </b><input type="text" value = "' . $row["ParticipantName"] . '" name="name"  class="compread2" readonly/>
                <br><br>

                <input type="submit" class="approvebtn" value="Approve" name="approve" readonly/>
                <input type="submit" class="rejectbtn" value="Reject" name="reject" readonly/>
                
                </div>                 
            
            </div>
        </form>';
                echo $displayData;
            }
            ?>
        </div>

    </div>
    <br><br><br><br><br>

    <!-- footer -->
    <div class="footer" style="font-size:14px">
        <div class="flex-container" style="align-items:center; justify-content:center; text-align:left">
        <div style="padding-top:20px">
				<img class="logo" style="width:120px; height:100px" src="https://t3.ftcdn.net/jpg/05/00/09/00/360_F_500090048_Vwr47TpMANq2xG8YHmOo4mFtw0PPkXAt.jpg"></br></br>
			</div>
			<div>
            <p><b>PIXELS</b></p>
            SRM university, </br>
            neerukonda,</br>
            guntur,andhrapradesh</br>
          </div></br>
    </div></br>

</body>

</html>