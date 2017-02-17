

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Execute Script</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">CGI Bash Script Demo</div>
    <div class="address-bar">Ravneet Kaur <br> Student Number - 1024040</div>
<?
echo $_POST["files"];
$filenames = $_POST["files"];
$tok =  preg_split("/[\s]+/", $filenames);

echo "Fiest file :".$tok [0]; 
$tok1 = strtok(" ");
echo "Second File :".$tok[1];
$tok2 = strtok(" ");
echo "Second File :".$tok[2] ;
$filename="";
?>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
	<div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">    
					<strong>List of Script files</strong>
                    </h2>
                    <hr>
                </div>
				
					<?$i=0;
					while($tok[$i] != ""){ ?>
                <div class='col-sm-4 text-center'>
                    <h3> File <? echo $i + 1; ?> <br>
						 <? echo '<form id="form'.$i.'" action="exescript.php" method="post" >' ?>
                        <a><? echo '<div id="file_'.$i.'" name="filename"> <small id="'.$i.'">'.$tok[$i] ?> </small></div></a>
						<? echo '<input type="hidden" id="'.$i.'" name="filename" value= "'.$tok[$i].' " />'?>
						</form>
                    </h3>
                </div> 
				<?
				$i++;
				}
					?>	
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
	
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.cgi">PHP CGI  Scripting</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.cgi">System Information</a>
                    </li>
                    <li>
                        <a href="contact.cgi">Send Notification</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- /.container -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; http://kaur14b.myweb.cs.uwindsor.ca 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script>
jQuery( document ).ready(function() {

jQuery("div [name='filename']").click(function(){
var formid = jQuery(this).children().attr("id");
console.log(formid);
jQuery("#form"+formid).submit();
});

});
</script>
</body>

</html>
