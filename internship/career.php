<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header class="hero-section">
        <nav class="nav-bar">
            <h2 class="logo">Job Portal</h2>
        </nav>
        <div class="hero-text-section">
            <p>Best Jobs available matching your skills
            </p>
</div>
<div class="row">
    <?php
    $sql = "SELECT cname,position,Jdesc,CTC,skills from jobs";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            echo '
            <div class ="col-mid-4">
                <div class="jobs">
                <h3 style="text-align: center;">' . $rows['position'] . '</h3>
                <h4 style="text-align: center;">' . $rows['cname'] . '</h4>
                <p style="color: black;text-align: justify;">' . $rows['Jdesc'] . '</p>
                <p style="color: black;"><b>Skills Required</b>' . $rows['skills'] . '</p>
                <p style="color: black;"><b>CTC</b>' . $rows['CTC'] . '</p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Apply Now
                </button>
                </div>
            </div>';
        }
    }
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
    
</div>
</body>
</html>