<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>BuyIt</title>

    <!-- Favicons -->
    <link href="../assets/img/icons/common/computer.png" rel="icon" type="image/png">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu Principal"></div>
            </div>
            <a href="#" class="logo"><b>BuyIt</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <!-- notification dropdown start-->
                <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Sair</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><img src="../assets/img/theme/rogerio1.jpg" class="img-circle" width="80"></p>
                    <h5 class="centered">Rogério Sandro Pereira Junior</h5>
                    <center>
                        <span>Sua carteira: </span><span><a href="#" onclick="alert('Para fazer tranferencias utilize sua carteira AA-123');">AA-123</a></span>
                        <h>
                    </center>
                    <li class="mt">
                        <a class="active" href="#" onclick="miFuncao()">
              <i class="fa fa-dashboard"></i>
              <span>Comercio</span>
              </a>
                    </li>
                    <li class="mt">
                        <a class="active" href="#" onclick="miFuncao()">
              <i class="fa fa-dashboard"></i>
              <span>Compras online</span>
              </a>
                    </li>
                    <li class="mt">
                        <a class="active" href="#" onclick="miFuncao()">
              <i class="fa fa-dashboard"></i>
              <span>Comprar token </span>
              </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-9 main-chart">
                        <!-- /row -->
                        <div class="row">
                            <!-- /col-md-4 -->
                            <div id="comercio">
                                <div class="col-md-4 mb">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>Zed Bar</h5>
                                        </div>
                                        <p><b><img src="../assets/img/icons/common/location.png"></b></p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>30% de desconto.</p>
                                                <p>
                                                    <B>Endereço:</b> Campus UFSC</p>
                                                <p><b>Aceita BuyIt</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /col-md-4 -->

                                <div class="col-md-4">
                                    <!-- WHITE PANEL - TOP USER -->
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>Senhor dos Pasteis</h5>
                                        </div>
                                        <p><b><img src="../assets/img/icons/common/location.png"></b></p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>10% de desconto</p>
                                                <p>
                                                    <B>Endereço:</b> Campus UFSC</p>
                                                <p><b>Aceita BuyIt</b></p>
                                            </div>
                                            <!-- WHITE PANEL - TOP USER -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /col-md-4 -->
                                <div class="col-md-4">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>Peter pão.</h5>
                                        </div>
                                        <p><b><img src="../assets/img/icons/common/location.png"></b></p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>20% de desconto</p>
                                                <p>
                                                    <B>Endereço:</b> Campus UFSC</p>
                                                <p><b>Aceita BuyIt</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--/eventos-->
                              <div class="col-md-12">
                                    <div class="white-panel pn">
                                        <div class="white-header">
                                            <h5>Peter pão.</h5>
                                        </div>
                                        <p><b><img src="../assets/img/icons/common/cheers.png"></b></p>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>20% de desconto</p>
                                                <p>
                                                    <B>Endereço:</b> Campus UFSC</p>
                                                <p><b>Aceita BuyIt</b></p>
                                            </div>
                                        </div>
                              </div>
                            </div>
                            <div class="col-md-12" style="margin-top:10px">
                                  <div class="white-panel pn">
                                      <div class="white-header">
                                          <h5>Peter pão.</h5>
                                      </div>
                                      <p><b><img src="../assets/img/icons/common/cheers.png"></b></p>
                                      <div class="row">
                                          <div class="col-md-12">
                                              <p>20% de desconto</p>
                                              <p>
                                                  <B>Endereço:</b> Campus UFSC</p>
                                              <p><b>Aceita BuyIt</b></p>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                              <!--end block col-md-12-->
                          </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /col-lg-9 END SECTION MIDDLE -->
                    <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
                    <div id="hyst">
                    <div class="col-lg-3 ds">
                        <!-- RECENT ACTIVITIES SECTION -->
                        <h4 class="centered mt">Historico de compra</h4>
                        <br/>
                        <!-- First Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Agora mesmo</muted>
                                    <br/>
                                    <a href="#">Rogério</a> você comprou um pastel com 10% de desconto no senhor dos pasteis.<br/>
                                    <!-- WHITE PANEL - TOP USER -->
                                </p>
                            </div>
                        </div>
                        <!-- Second Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Ontem</muted>
                                    <br/>
                                    <a href="#">Rogério</a> você comprou seu ingresso para festa com 30% de desconto.<br/>
                            </div>
                        </div>
                        <!-- Third Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Ontem</muted>
                                    <br/>
                                    <a href="#">Rogério</a> Você esta usando o BuyIt a 3 meses, parabens vá a qualquer estabelecimento com 5% de desconto<br/>
                                </p>
                            </div>
                        </div>
                        <!-- Fourth Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>2 semanas</muted>
                                    <br/>
                                    <a href="#"></a> Você fez compras no mercado com a BuyIt, recebeu 10% de desconto.<br/>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>3 meses</muted>
                                    <br/>
                                    <a href="#">Rogério</a> Seja bem-vindo, você recebeu sua carteira <a href="#" onclick="alert('Para fazer tranferencias utilize sua carteira AA-123');"> AA-123</a> utilize para comprar em qualquer ponto que possua BuyIt como plataforma de pagamento e ganhe descontos.<br/>
                                </p>
                            </div>
                        </div>
                      </div>
                        <!-- USERS ONLINE SECTION -->
                        <!-- Second Member -->
                        <!-- Third Member -->
                        <!-- Fourth Member -->
                    </div>
                    <!-- /col-lg-3 -->
                </div>
                <!-- /row -->
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <footer>
            <center>
                <p>@BuyIt Desenvolvimentos 2018. buyit.blockchain@gmail.com</p>
            </center>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="lib/sparkline-chart.js"></script>
    <script src="lib/zabuto_calendar.js"></script>
    <script type="application/javascript">
        $(document).ready(function() {
          $("#date-popover").popover({
            html: true,
            trigger: "manual"
          });
          $("#date-popover").hide();
          $("#date-popover").click(function(e) {
            $(this).hide();
          });

          $("#my-calendar").zabuto_calendar({
            action: function() {
              return myDateFunction(this.id, false);
            },
            action_nav: function() {
              return myNavFunction(this.id);
            },
            ajax: {
              url: "show_data.php?action=1",
              modal: true
            },
            legend: [{
                type: "text",
                </p>
                label: "Special event",
                badge: "00"
              },
              {
                type: "block",
                label: "Regular event",
              }
            ]
          });
        });

        function myNavFunction(id) {
          $("#date-popover").hide();
          var nav = $("#" + id).data("navigation");
          var to = $("#" + id).data("to");
          console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
    <script>
        function miFuncao() {
           var x = document.getElementById("comercio");
           var y = document.getElementById("hyst");
           var z = document.getElementById("compras_onli");
            if (x.style.display === 'block') {
              x.style.display = 'none';
              y.style.display = 'none';
              z.style.display = 'block';
            } else {
              x.style.display = 'block';
              y.style.display = 'block';
              z.style.display = 'none';
            }
          }
    </script>
</body>

</html>
