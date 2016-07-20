<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" tppabs="http://v3.bootcss.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome-4.6/css/font-awesome.min.css" tppabs="http://v3.bootcss.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js" tppabs="http://v3.bootcss.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js" tppabs="http://v3.bootcss.com/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js" tppabs="http://v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../../oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" tppabs="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="../../../oss.maxcdn.com/respond/1.4.2/respond.min.js" tppabs="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="assets/css/carousel.css" tppabs="http://v3.bootcss.com/examples/carousel/carousel.css" rel="stylesheet">
    <link href="assets/css/mystyle.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">新疆昆仑卫士信息科技有限公司</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">首页</a></li>
                <li><a href="#about">业务范围</a></li>
                <li><a href="#contact">联系我们</a></li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="assets/image/bg-02.jpg" alt="First slide">
          <!-- <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide"> -->
          <div class="container">
            <div class="carousel-caption">
              <h1>新疆昆仑卫士信息科技有限公司</h1>
              <p>本公司由信息作战部队多名退役军官联合创设的一家高科技公司，与2015年4月在乌鲁木齐市高新技术产业开发区工商行政管理局注册成立，法定代表人马李良，注册资金一百万元，社会统一信用代码<code>91650100MA775U6P8J</code>。</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">了解更多</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>军民融合 特色发展</h1>
              <p>公司拥有一支富有实战经验的博士、硕士、高中级工程师等组成的软硬件开发团队，在军民融合国家战略的大背景下，以军人坚韧不拔的意志品质，坚持创新发展理念，凭借雄厚的技术实力，专注于网络安全、数据分析、专用通信等前沿科技领域的软硬件开发和系统解决方案。</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">了解更多</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>产品与服务领先提供商</h1>
              <p>公司成立以来先后开发了10余个有自主知识产权的科技项目，已与乌鲁木齐红山一卡通公司签订了战略合作协议，先后参与了自治区信访局、新疆农信社、国网新疆电力公司信息通信公司等单位的软硬件开发工作，在疆内走出了一条军民融合的特色发展路子。</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">了解更多</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div id="about" class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
        <span class="fa-stack fa-5x text-warning" aria-hidden="true">
          <i class="fa fa-circle fa-stack-2x "></i>
          <i class="fa fa-shield fa-stack-1x fa-inverse "></i>
        </span>
          <h2>网络安全</h2>
          <!-- <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p> -->
          <p><a class="btn btn-default" href="#" role="button">了解更多 <i class="fa fa-arrow-circle-right"></i> <!-- » --></a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <span class="fa-stack fa-5x text-success" aria-hidden="true">
          <i class="fa fa-circle fa-stack-2x "></i>
          <i class="fa fa-database fa-stack-1x fa-inverse "></i>
        </span>
          <h2>数据分析</h2>
          <!-- <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p> -->
          <p><a class="btn btn-default" href="#" role="button">了解更多 <i class="fa fa-arrow-circle-right"></i> <!-- » --></a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <span class="fa-stack fa-5x text-primary" aria-hidden="true">
          <i class="fa fa-circle fa-stack-2x "></i>
          <i class="fa fa-fax fa-stack-1x fa-inverse "></i>
        </span>
          <h2>专用通信</h2>
          <!-- <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p> -->
          <p><a class="btn btn-default" href="#" role="button">了解更多 <i class="fa fa-arrow-circle-right"></i> <!-- » --></a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <div class="row">
        <div class="col-lg-4">
        <span class="fa-stack fa-5x text-muted" aria-hidden="true">
          <i class="fa fa-circle fa-stack-2x "></i>
          <i class="fa fa-hashtag fa-stack-1x fa-inverse "></i>
        </span>
          <h2>软件开发</h2>
          <!-- <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p> -->
          <p><a class="btn btn-default" href="#" role="button">了解更多 <i class="fa fa-arrow-circle-right"></i> <!-- » --></a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <span class="fa-stack fa-5x text-info" aria-hidden="true">
          <i class="fa fa-circle fa-stack-2x "></i>
          <i class="fa fa-cubes fa-stack-1x fa-inverse "></i>
        </span>
          <h2>信息系统集成</h2>
          <!-- <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p> -->
          <p><a class="btn btn-default" href="#" role="button">了解更多 <i class="fa fa-arrow-circle-right"></i> <!-- » --></a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <span class="fa-stack fa-5x text-danger" aria-hidden="true">
          <i class="fa fa-circle fa-stack-2x "></i>
          <i class="fa fa-cogs fa-stack-1x fa-inverse "></i>
        </span>
          <h2>计算机系统集成</h2>
          <!-- <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p> -->
          <p><a class="btn btn-default" href="#" role="button">了解更多 <i class="fa fa-arrow-circle-right"></i> <!-- » --></a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">返回顶部</a></p>
        <p>© 2016 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-1.11.3.min.js" tppabs="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js" tppabs="http://v3.bootcss.com/dist/js/bootstrap.min.js"></script>
  

</body></html>