<!DOCTYPE html>
<html>
  
<head>
    <title>ITS BETA - QuezX | Creating Future</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Lato Google Font - For Theme -->        
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <!-- Default Theme Style -->
    <link href="assets/css/theme-light.css" rel="stylesheet" media="screen" id="skin">
    <!-- Theme Color  options - alizarin.css, belize-hole.css, carrot.css, turquoise.css, wisteria.css-->
    <link href="assets/css/theme-alizarin.css" rel="stylesheet" media="screen" id="swatches">
    <!-- Theme color Options Viewer - For Demo Purpose only -->    
    <link href="assets/css/style-switcher.css" rel="stylesheet">
    <!-- Pacifico Google Font - For Demo Purpose only -->    
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    	<div class="row">      
			<header id="logo">
                <div class="col-md-12 col-sm-12">
                    <a href="#" title="its beta"><img src="assets/img/Qweed-Logo-49.jpg"></a>
                </div><!--/12-->
			</header>
                <section id="marketing-text">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                    <?php if (isset($_GET['response'])){
                        $response =  ($_GET['response']==1)?'Your Request for subscription is recieved.We will shortly get back to you':'Email sending failed';
                        $class = ($_GET['response']==1)?'alert-success':'alert-danger';
                        ?>
                            <div class="alert <?php echo $class;?> alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><?php echo $response;?></div> 
                        <?php
                    }
                    ?>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                <h1>Join our hands in making people smarter.</h1>
                    <p>Request for private beta access.</p>   
                </div ><!--12-->
                </div><!--row-->
            </section><!--/marketing-text-->  
            <section id="subscribe" class="clearfix">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">               
            		<div class="panel panel-default panel-theme">
                        <div class="panel-heading text-center">Get Early Access</div>
                        <div class="panel-body">
                        <div class="row">
                            <form role="form" method="post" action="send_form_email.php">
                                <div class="form-group">
                                	<input type="text" id="first_name" name="first_name" class="form-control input-md" title="Please enter your name." placeholder="Enter Your Name" />
                                </div>
                                <div class="form-group">
                                    <input type="text" id="telephone" name="telephone" class="form-control input--md" title="Please enter your Mobile." placeholder="Mobile Number" />
                                </div><!--7-->
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control input--md" title="Please enter your Email." placeholder="Email Address" required />
                                </div>
                                <div class="form-group">
                                	<button type="submit" class="btn btn--md btn-theme">Subscribe</button>
                                </div><!--5-->
                            </form>
                        </div><!--row-->
                        </div><!--panel-body-->
                    </div><!--panel-->
                </div><!--/6-->
            </section><!--subscribe-->             
        </div><!--/row-->
    </div><!--/container-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Below script is for demo purpose only -->
    <script src="assets/js/style-switcher.js"></script>	
    <!-- IE Input Placeholder Fix -->
    <script src="assets/js/jquery.placeholder.js"></script>
    <script type="text/javascript">$(function(){$('input, textarea').placeholder();});</script>
  </body>
</html>