<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>step by step</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="js/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
    <script src="js/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="portfolio-modal">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal" id="closeContent">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="modal-body">
                        <h2>Question Title</h2>
                        <hr class="star-primary">
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-9">
                  <div class="modal-body">
                    <form>
                      <textarea name="editor1" id="editor1" rows="10" cols="80">
                          This is my textarea to be replaced with CKEditor.
                      </textarea>
                      <script>
                          // Replace the <textarea id="editor1"> with a CKEditor
                          // instance, using default configuration.
                          CKEDITOR.replace( 'editor1' );
                      </script>
                  </form>
                  </div>
              </div>
              <div class="col-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                </div>
                <div class="paddingUp">
                  <ul class="list-group">
                      <li class="list-group-item justify-content-between">
                        <strong><a href="http://startbootstrap.com">DP</a>
                        </strong>
                        <span class="badge badge-default badge-pill">14</span>
                      </li>
                      <li class="list-group-item justify-content-between">
                        <strong><a href="http://startbootstrap.com">DFS</a>
                        </strong>
                        <span class="badge badge-default badge-pill">2</span>
                      </li>
                      <li class="list-group-item justify-content-between">
                        <strong><a href="http://startbootstrap.com">BFS</a>
                        </strong>
                        <span class="badge badge-default badge-pill">1</span>
                      </li>
                  </ul>
                </div>
              </div>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp; SAVE &nbsp;</button>
            <button type="button" id="contentCloseButton" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          </div>
        </div>
    </div>
</div>
<script src="js/front.js"></script>
<body>
</html>
