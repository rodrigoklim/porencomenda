<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Por Encomenda</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </style>
</head>
<body class=" hold-transition lockscreen layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="../assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Por Encomenda</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        
        </div>

      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content">
      <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>{{$orderStatus['greet']}}</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

          <!-- Main content -->
          <section class="content-wrapper">
            
            <!-- Default box -->
            
            
              
              
              
                @if($orderStatus['status'] == "1")
                <center>
                <div class="row">
                  <div class="col-sm-12">
                    <center>
                      <div class="col-sm-12">
                        <i class="fas fa-capsules fa-3x" style="color:#98D025"></i>
                      </div>
                      <div class="col-sm-12">Faturando Produto</div>
                    </center>  
                  </div>
                </div>
                
                @elseif($orderStatus['status'] > "1" and $orderStatus['status'] < "4" )
                <center>
                <div class="row">
                  <div class="col-sm-12">
                    <center>
                      <div class="col-sm-12">
                        <i class="fas fa-clinic-medical fa-3x" style="color:#98D025"></i>
                      </div>
                      <div class="col-sm-12">Produto em Loja</div>
                    </center>  
                  </div>
                </div>

                @elseif($orderStatus['status'] == "4" )
                <center>
                <div class="row">
                  <div class="col-sm-12">
                    <center>
                      <div class="col-sm-12">
                        <i class="fas fa-check fa-3x" style="color:#98D025"></i>
                      </div>
                      <div class="col-sm-12">Produto Entregue</div>
                    </center>  
                  </div>
                </div>

                @endif
                <!-- </div> -->
                </center>
                <center>
                <div class="row">
                  <div class="col-sm-12" style="margin-left: -20px">
                      
                      <form class="lockscreen-credentials" method="post" action="/closeOrder" id="closeOrder">
                        @csrf
                        <div class="lockscreen-wrapper">
                          <!-- User name -->
                          <div class="lockscreen-name">Olá Loja!</div>

                          <!-- START LOCK SCREEN ITEM -->
                          <div class="lockscreen-item">
                            <!-- lockscreen image -->
                            <div class="lockscreen-image">
                              <img src="https://encomenda.tecnoklim.com.br/img/logo.png" height="50" width="55">
                            </div>
                            <!-- /.lockscreen-image -->

                            <!-- lockscreen credentials (contains the form) -->
                            
                              <div class="input-group">
                                <input type="password" class="form-control" placeholder="Senha">
                                <div class="input-group-append">
                                  <button type="button" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
                                </div>
                              </div>
                            <!-- /.lockscreen credentials -->

                          </div>
                          <!-- /.lockscreen-item -->
                          <div class="help-block text-center">
                            Coloque sua senha para finalizar a encomenda
                          </div>
                        </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
                </center>
          </section>
        <!-- /.container -->
        
      <!-- /.content -->
    
  <!-- /.content-wrapper -->
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/adminlte/dist/js/demo.js"></script>
<script>
$(document).ready(function () {
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);
    
        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
</script>
</body>
</html>
