<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <title>ReviewDisplay</title>
  <style>
    .review .content .display{
      background-color: lightgrey;
      width: 1150px;
      border: 10px light blue;
      padding: 50px;
      margin: 25px;
    }
    .review .content .display .button{
      margin: 10px;
    }
    .review-on-u{
        border: 2px solid black;
        margin:10px;
        max-width: 100%;    
        padding: 5px 10px;
        
    }
    .display .name {
      float:center;
    }
  </style>
</head>
<body>
<section class = "review" id = "review">
  <div class="content">
    <div class = "title"><span>Ratings & Reviews</span></div>
      <div class = "icon">
        <i class = "fa fa-star fa-2x" id = "1"></i>
        <i class = "fa fa-star fa-2x" id = "2"></i>
        <i class = "fa fa-star fa-2x" id = "3"></i>
        <i class = "fa fa-star fa-2x" id = "4"></i>
        <i class = "fa fa-star fa-2x" id = "5"></i>
        <span class="no-of-reviews" id="no-of-reviews">0</span>
        <span class="review">reviews</span>
        <?php
        echo '<script type="text/javascript" id = "count">',
        'startRating('.$avgRound.','.$rowscount.');',
        '</script>';
        ?>
        <div class="button">
          <a href="signup.html" target="_blank"><button>Review</button></a>
        </div>
      </div>    
      <div class = "display">
      <?php
  global $email;
  include 'database.php';
  $conn = connectionDB(); //returns coonection
  if(isset($_SESSION["email"]))
  {
  $email = $_SESSION["email"];
  }
  // Attempt select query execution
  $sql = "SELECT * FROM reviews";
  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
          
          echo '<div class="review-on-u" id="review-on-u">';
          echo ' <div class="viewer-details">';
          echo '<div class="viewer-info" >';
          echo '  <p class="name" >Name : '. $row['name'] ."</p>";
          echo '  <p class="email" >Email :'. $row['email'] ."</p>";
          echo ' <p class="position">Position : '. $row['position'] ."</p>";
          echo ' <p class="company"> Company :'. $row['company'] ."</p>";
          echo " </div >";
          echo "</div>";
          echo ' <div class="viewer-review">Review : ' . $row['review'] ." </div>";
          echo '<div class="fa-icons">';
          echo '<div> Rating : ';
          echo ' <span class="fa fa-star fa-2x" id="'.$row['email'].'1"></span>  ';
          echo ' <span class="fa fa-star fa-2x" id="'.$row['email'].'2"></span>  ';
          echo ' <span class="fa fa-star fa-2x" id="'.$row['email'].'3"></span>  ';
          echo ' <span class="fa fa-star fa-2x" id="'.$row['email'].'4"></span>  ';
          echo ' <span class="fa fa-star fa-2x" id="'.$row['email'].'5"></span>  ';
          echo '</div>';

          echo '<div>';
          echo '<a href="ReviewUpdateForm.html?id='. $row['email'] .'" title="Update Record" data-toggle="tooltip"><span><i class="fa fa-pencil"></i></span></a>';
          // echo '<span class="fa fa-thumbs-up fa-2x like" aria-hidden="true"></span>';
          // echo '<span class="fa fa-thumbs-down fa-2x like" aria-hidden="true"></span>';DAO/businessLudoReviewUpdate.php
          echo '</div>';
          echo '<div>';
          echo '<a href="ReviewDelete.php" title="Update Record" data-toggle="tooltip"><span><i class="fa fa-remove"></i></span></a>';
          // echo '<span class="fa fa-thumbs-up fa-2x like" aria-hidden="true"></span>';
          // echo '<span class="fa fa-thumbs-down fa-2x like" aria-hidden="true"></span>';DAO/businessLudoReviewUpdate.php
          echo '</div>';
          echo '</div>';
          
          
          // echo '<script type="text/javascript">',
          // 'startRating1('.$rate.');',
          // '</script>'
          
          $rate = $row['rating'];
          for($i=1;$i<=5;$i++){
              if($i<=$rate){
                  echo '<script type="text/javascript">','document.getElementById("'.($row['email'].$i).'").style.color="yellow"','</script>';
              }
          }
          echo '</div>';
          }
      }
  }
  //(`name`, `email`, `designation`, `date`, `review`)
  // mysqli_close($conn);
    // echo 'tring';
    // include '../DAO/businessludoReviewAvg.php';
    // $avg = avgReviews();
    
?>
</div>
  </div>
  
</section>
</body>
<script id = "count">
    function startRating(rate,rowsCount){
        console.log(rowsCount);
        document.getElementById('no-of-reviews').textContent = rowsCount;
	for(var i=0;i<5;i++){
		if(i<rate){
			document.getElementById((i+1)).style.color="yellow";
      // document.getElementById((i+6)).style.color="yellow";
		}
	}
}
</script>
<?php
$result = mysqli_query($conn, 'SELECT AVG(rating) AS rating_avg FROM reviews'); 
        $row = mysqli_fetch_assoc($result); 
        $avg = $row['rating_avg'];
    $avgRound = round($avg);

    $result = mysqli_query($conn,'SELECT count(rating) FROM reviews');
    $row = mysqli_fetch_array($result);
    $rowscount = $row[0];

      echo '<script type="text/javascript" id = "count">',
      'startRating('.$avgRound.','.$rowscount.');',
      '</script>';
?> 
</html>


