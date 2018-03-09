<?php   
    include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet prefetch' href='css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='css/star-rating.min.css'>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>

    <div class="jumbotron text-center bgi">
        <div class="page-header header-fixed" >
            <h1>BGI Technitiate - 2018 </h1>
            <p>bla bla bla</p>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Write Your Review</h4>
                </div>
                <div class="modal-body">
                    <form id="review-form" action="review-cont.php" method="post">
                        <div id="rating">
                            <svg class="star" id="1" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                                <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                            </svg>
                            <svg class="star" id="2" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                                <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                            </svg>
                            <svg class="star" id="3" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                                <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                            </svg>
                            <svg class="star" id="4" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                                <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                            </svg>
                            <svg class="star" id="5" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #808080;">
                                <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                            </svg>
                        </div>
                        <span id="starsInfo" class="help-block">
                            Click on a star to change your rating 1 - 5, where 5 = great! and 1 = really bad
                        </span>
                        <div class="form-group">
                            <label class="control-label" for="review">Your Review:</label>
                            <textarea class="form-control" rows="2" placeholder="Your Reivew" name="review" id="review"></textarea>
                            <span id="reviewInfo" class="help-block pull-right">
                                <span id="remaining">999</span> Characters remaining
                            </span>
                        </div>
                        <h2>Your Info:</h2>
                        <div class="form-group">
                            <!-- <label for="name">Name:</label> -->
                            <input class="form-control" type="text" placeholder="Name" name="name" id="name" value="">
                        </div>
                        <div class="form-group">
                            <!-- <label for="College">College:</label> -->
                            <input class="form-control" type="text" placeholder="College" name="College" id="college" value="">
                        </div>
                        <div class="form-group">
                            <!-- <label for="email">Email:</label> -->
                            <input class="form-control" type="email" placeholder="Email" name="email" id="email" value="">
                        </div>
                        <a href="review-cont.php" id="submit" class="btn btn-primary">Submit</a>
                        <input id="submitForm" type="submit" style="display:none;">
                        <span id="submitInfo" class="help-block">
                            By clicking
                            <strong>Submit</strong>, I authorize the sharing of my name and review on the web. (email will not be shared)
                        </span>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id='modal_close' class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row top-buffer">
            <div class="col-sm-3 images">
                <img src="images/prj1.jpg" class="img-thumbnail" alt="Cinque Terre">
            </div>
            <div class="col-sm-5"  style="background:rgb(91, 139, 194);">  
                <h3>Project 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <?php
                    $sel = "SELECT * FROM rating WHERE project= 1";
                    $count = 0;
                    $ratings = 0;
                    $res = $con->query($sel);
                    while($row = $res->fetch_assoc())
                    {
                        $ratings+= $row['stars'];
                        $count++;
                    }
                    $avg_rating = $ratings/$count + 0.5;
                ?>
                <footer>
                    <h4>Ratings</h4>
                    <div class="star-rating prj1">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value1" value="<?php echo $avg_rating ?>">
                        <button type="button" value='1' class="btn btn-info btn-xs ratebtn" data-toggle="modal" data-target="#myModal">Rate</button>
                    </div>
                    
                </footer>
            </div>
            <div class="col-sm-4" style="background:rgb(94, 177, 94);">
                <h3>Reviews</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
            
        </div>
       
        <div class="row top-buffer">
            <div class="col-sm-3 images">
                <img src="images/prj2.jpg" class="img-thumbnail" alt="Cinque Terre">
            </div>
            <div class="col-sm-5" style="background:rgb(91, 139, 194);">
                <h3>Project 2</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <?php
                    $sel = "SELECT * FROM rating WHERE project= 2";
                    $count = 0;
                    $ratings = 0;
                    $res = $con->query($sel);
                    while($row = $res->fetch_assoc())
                    {
                        $ratings+= $row['stars'];
                        $count++;
                    }
                    $avg_rating = $ratings/$count + 0.5;
                ?>
                <footer>
                    <h4>Ratings</h4>
                    <div class="star-rating prj2">
                        <span class="fa fa-star-o" data-rating="1"></span>
                        <span class="fa fa-star-o" data-rating="2"></span>
                        <span class="fa fa-star-o" data-rating="3"></span>
                        <span class="fa fa-star-o" data-rating="4"></span>
                        <span class="fa fa-star-o" data-rating="5"></span>
                        <input type="hidden" name="whatever1" class="rating-value2" value="<?php echo $avg_rating ?>">
                        <button type="button" value='2' class="btn btn-info btn-xs ratebtn" data-toggle="modal" data-target="#myModal">Rate</button>
                    </div>
                </footer>
            </div>
            <div class="col-sm-4" style="background:rgb(94, 177, 94);">
                <h3>Reviews</h3>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p> -->
                <div id="review-container">
            </div>
        </div>
    </div>
    <script src="js/modal.js"></script>
    <script src="js/index.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>