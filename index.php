<?php
/*
## Data to XML or HTML Generator
This is a simple utility for generating XML or HTML files for each record in a DB Table (MySQL).

---

### Functions (output)

Generate XML files with xml.php

Output to $xmlFolderLocation
e.g. '../xmlexport/' - will create a folder named "xmlexport" at the same level as this project on the server.

Generate HTML files with html.php

Output to $htmllFolderLocation
e.g. '../htmlexport/' - will create a folder named "htmlexport" at the same level as this project on the server.

### Database (input) set up the database in html.php and or xml.php

Creating an instance of the Database class sets up all the parameters at once.

$databaseToArray = new DataBase( host , username, password, database_name, table_name, record_count);
e.g. $databaseToArray = new DataBase('localhost', 'root', 'root', 'uberdb_live', 'geositedetails', 30000);

### Suggestions

Since this is a file generation project note the following:

- Do not deploy it to a production server environment.
- Turn your browser cache OFF.
- Clear Browser cache.
- Do not use "Back" to navigate - rather get to the different folders from http://localhost.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Site Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>
<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href=#>Data to HTML or XML Generator</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="span9">
            <section id="main">

				<div class="page-header">
				    <h1>Generate files</h1>
				    <p>Choose if you would like HTML or XML files generated.</p>
				</div>

				<p>
				    <a href="./application/html.php" class="btn btn-large btn-primary" type="button">Generate HTML</a>
				    <a href="./html/index.html" class="btn btn-large" type="button">See HTML Site</a>
				</p>

            </section>
        </div>
    </div>
</div><!-- /container -->

<footer class="footer">
    <div class="container">
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>. Documentation licensed under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.</p>
    </div>
</footer>

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script src="assets/js/bootstrap-transition.js"></script>
<script src="assets/js/bootstrap-alert.js"></script>
<script src="assets/js/bootstrap-modal.js"></script>
<script src="assets/js/bootstrap-dropdown.js"></script>
<script src="assets/js/bootstrap-scrollspy.js"></script>
<script src="assets/js/bootstrap-tab.js"></script>
<script src="assets/js/bootstrap-tooltip.js"></script>
<script src="assets/js/bootstrap-popover.js"></script>
<script src="assets/js/bootstrap-button.js"></script>
<script src="assets/js/bootstrap-collapse.js"></script>
<script src="assets/js/bootstrap-carousel.js"></script>
<script src="assets/js/bootstrap-typeahead.js"></script>
<script src="assets/js/bootstrap-affix.js"></script>
<script src="assets/js/application.js"></script>

</body>
</html>

