<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Encomendas</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Encomenda</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Rodrigo</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item"><i class="fas fa-sign-out-alt pull-right"></i> Log out</a></li>
              
            </ul>
          </li>
        </ul>
      </div>

      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  </br>  

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- linha avisos -->
            <div class="row">
              <div class="col-md-3 col-sm-6 col-12">  
                <div class="info-box">
                  <span class="info-box-icon bg-info"><i class="fas fa-shopping-bag"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Encomendas Abertas</span>
                    <span class="info-box-number">5</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                  <span class="info-box-icon bg-success"><i class="far fa-chart-bar"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Encomendas Mês (R$)</span>
                    <span class="info-box-number">1.410,00</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                  <span class="info-box-icon bg-warning"><i class="fas fa-user-plus"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Mais Atuante (qtde)</span>
                    <span class="info-box-number">Jenifer - 5</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                  <span class="info-box-icon bg-danger"><i class="fas fa-dollar-sign"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Mais Atuante (R$)</span>
                    <span class="info-box-number">Juvenildo - 500,00</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
            </div>
            <!-- linha btão nova encomenda -->
            <div class="row">
              <p style="margin: 8px">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-xl">
                    <i class="fas fa-check-circle"> </i>    Nova Encomenda
                  </button>
              
              </p> 
            </div>
          
            <div class="row">

              <!-- Tabela Encomendas pendentes -->
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Encomendas Pendentes</h6>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                    <table class="table" id="medicaments">
                      <thead>
                        <tr>
                          <th>Cliente</th>
                          <th>Produto</th>
                          <th>Qtd</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($orders as $order)
                        <tr class="linha">
                          <td>{{$order['client']}}</td>
                          <td>{{$order['product']}}</td>
                          <td>{{$order['qty']}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <!-- Check List  -->
              <div class="col-xl-4 col-lg-5">
                <!-- TO DO List -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <h6 class="m-0 font-weight-bold text-primary">Produtos Pendentes</h6>
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                  <form class="form-horizontal" method="post" action="/productArrived" id="productArrived">
                    @csrf
                    <ul class="todo-list" data-widget="todo-list">
                      @php
                        $i = 1;
                      @endphp
                      @foreach($productsToArrive as $product)
                      
                      <li>
                        <!-- checkbox -->
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="{{$product['id']}}" name="arrival[]" id="todoCheck{{$i}}" >
                          <label for="todoCheck{{$i}}"></label>
                        </div>
                        <!-- todo text -->
                        <span class="text">{{$product['product']}}</span>
                      </li>
                     @php
                       $i++;
                     @endphp
                     @endforeach
                     
                      
                    </ul>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>  
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </div>
      <!-- Main Footer -->
      <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->




<!-- modal new Order -->
 <div class="modal fade" id="modal-xl" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Nova Encomenda</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <!-- Card Client -->
            <div class="col-sm-5">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Cliente</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="/newOrder" id="newOrderForm" enctype="application/json" >
                	@csrf
                  <div class="card-body">
                    <div class="row" style="padding:4px">
                      <label for="client" class="col-sm-2 col-form-label">Cliente:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="client" placeholder="Selecione um cliente" readonly>
                      </div>
                    </div>
                    <div class="row" style="padding:4px">
                      <label for="cpf" class="col-sm-2 col-form-label">CPF:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="cpf" readonly>
                      </div>
                    </div>
                    <div class="row" style="padding:4px">
                      <label for="phone" class="col-sm-2 col-form-label">Tel: </label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone" readonly>
                      </div>
                      <div class="col-sm-2">
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="1" name="whats" id="whats"  onclick="return false;">
                          <label for="whats"> <i class="fab fa-whatsapp" style="color:green"></i></label>
                        </div>
                      </div>
                      <div class="restOfOrder"></div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newClient" >
                    Selecionar Cliente
                    </button>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
            </div>
            <!-- Card Last Orders -->
            <div class="col-sm-7">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Encomendas Anteriores</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table class="table table-center lastOrders">
	                      <thead>
	                        <tr>
                            <th>Data</th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Qtde</th>
                            <th>Total</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr class="lastOrdersLine" style="cursor: pointer">
                            <td>01/02/2020</td>
                            <td class="oldProduct">Alprazolam 0,5mg</td>
                            <td class="oldValue">10,50</td>
                            <td class="oldQty">3</td>
                            <td>31,50</td>
	                        </tr>
	                      </tbody>
	                    </table>
                </div>
                
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Card Products -->  
            <div class="col-sm-9">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Produtos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-center orderProducts">
                    <thead>
                      <tr>
                        <th>Distr</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Qtde</th>
                        <th>Total</th>
                        <th></th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-primary btnNewProduct">
                  Inserir Produto
                  </button>
                </div>
              </div>
            </div>
            <!-- Card Payment -->  
            <div class="col-sm-3">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Pagamento:</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
            	    <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio" value="1">
                          <label for="customRadio1" class="custom-control-label">Pagamento Total</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" value="2" >
                          <label for="customRadio2" class="custom-control-label">Pagamento Parcial</label>
                        </div>
                        
                      </div>
                      <div class="partPayment" style="display:none">
                          <label for="partPayment" class="col-form-label">Valor Pago</label>
                          <input class="form-control partPaymentText" type="text" name="partPayment">
                      </div>
  	          </div>
  	        </div>
	    </div>
        </div>
             
           
        
        
        
        
        
        
        <div class="row">
            <!-- Card Comments -->  
            <div class="col-sm-9">
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Comentários:</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <textarea row="100" cols="30" class="col-sm-12 comments"></textarea>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
	     <div class="row">
                <!-- Info Box - Total Amount -->
                <div class="col-sm-10">
                  <div class="small-box bg-danger">
                    <div class="inner">
                      <h3 class="totalOrder">R$ 0,00</h3>
                      <p>Valor Total</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-dollar-sign"></i>
                    </div>
                  </div>
                </div>
              </div>
              
	              <div class="row">
	                <!-- Info Box - Delivery Date -->
	                <div class="col-sm-10">
	                  <div class="small-box bg-warning">
	                    <div class="inner">
	                      <h3 class="dDateWeek"></h3>
	                      <h3><small class="dDateDay"></small></h3>
	                      <p>Data de Entrega</p>
	                    </div>
	                    <div class="icon">
	                      <i class="fas fa-calendar"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
             
             
           </div>
      
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary placeOrder">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
      <!-- /.modal -->
      

<!-- modal Client -->
<div class="modal fade child-modal" id="newClient">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Selecionar Cliente</h4>
        <button type="button" class="close" data-toggle="modal" data-target="#newClient" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
            <!-- Card Client -->
            <div class="col-sm-12">
              <div class="card card-primary coll">
                <div class="card-header">
                  <h3 class="card-title">Cadastrar Cliente</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" data-parsley-validate>
                  <div class="card-body">
                    <div class="form-group row col-sm-12">
                      <label for="nCPF" class="col-sm-2 col-form-label">CPF:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nCPF" placeholder="Digite o CPF">
                      </div>
                    </div>
                    <div class="form-group row col-sm-12">
                      <label for="nClient" class="col-sm-2 col-form-label">Nome:</label>
                      <div  class="col-sm-10">
                        <input type="text" class="form-control" name="nClient" disabled>
                      </div>
                    </div>
                    <div class="form-group row col-sm-12">
                      <label for="nPhone" class="col-sm-2 col-form-label">Telefone:</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nPhone">
                      </div>
                      <div class="col-sm-2">
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="nWhats" id="nWhats">
                          <label for="whats"> <i class="fab fa-whatsapp" style="color:green"></i></label>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </form>
              </div>
            </div>
            </div>
            <div class="row">
            <!-- Card Last Orders -->
            <div class="col-sm-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Clientes Cadastrados</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table class="table table-center cClients">
	                      <thead>
	                        <tr>
                            <th>CPF</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Whats</th>
                                </tr>
	                      </thead>
	                      <tbody>
	                      @foreach($clients as $client)
	                        <tr style="cursor:pointer" class="cClientsLine">
                            <td class="cClientsCPF">{{$client->cpf}}</td>
                            <td class="cClientsName">{{$client->name}}</td>
                            <td class="cClientsPhone">{{$client->phone}}</td>
                            <td class="cClientsWhats">{{$client->whats}}</td>
                                </tr>
                                @endforeach
	                      </tbody>
	                    </table>
                </div>
                
              </div>
            </div>
          </div>
      
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default"  data-toggle="modal" data-target="#newClient">Close</button>
        <button type="button" class="btn btn-primary saveClient">Salvar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal New Product -->
<div class="modal fade child-modal" id="newProduct" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Inserir Produto</h4>
        <button type="button" class="close" data-toggle="modal" data-target="#newProduct" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="newProductForm" data-parsley-validate>
          <div class="form-group">
            <label class="control-label" for="nProduct">Produto </label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="text" id="nProduct" required="required" name="nProduct" class="form-control col-md-7 col-xs-12 txtField">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="eQty">Qtdade </label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="text" id="nQty" required="required" name="nQty" class="form-control col-md-7 col-xs-12 txtField">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="nPrice">Preço </label>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <input type="text" id="nPrice" required="required" name="nPrice" class="form-control col-md-7 col-xs-12 txtField">
            </div>
          </div>
          <label class="control-label">Selecione uma distribuidora </label>
          <div class="form-check">
            <input type="checkbox" class="form-check-input Pan" name="nDistr[]" distr="Pan" value="Pan">
            <label class="form-check-label" for="nDistr1">Panpharma</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input DC" name="nDistr[]" distr="DC" value="DC">
            <label class="form-check-label" for="nDistr2">Droga Center</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input Serv" name="nDistr[]" distr="Serv" value="Serv">
            <label class="form-check-label" for="nDistr3">Servimed</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input Sol" name="nDistr[]" distr="Sol" value="Sol">
            <label class="form-check-label l" for="nDistr4">Solfarma</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input Sta" name="nDistr[]" distr="Sta" value="Sta">
            <label class="form-check-label" for="nDistr5">Santa Cruz</label>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input Sta" name="nDistr[]" distr="Other" value="Outro">
            <label class="form-check-label" for="nDistr5">Outra Loja</label>
          </div>
        </form>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default"  data-toggle="modal" data-target="#newProduct">Close</button>
        <button type="button" class="btn btn-primary newProduct">Save changes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="assets/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="assets/adminlte/dist/js/adminlte.min.js"></script>
<script src="js/moment-with-locales.js"></script>
<!-- Data PArsley -->
<script src="js/parsley.min.js"></script>
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
$(document).ready( function () {
	   
	   $('.lastOrders').DataTable({
		    "columns": [
		      { "type": "date-eu" },
		      null,
		      null,
		      null,
		      null
		    ],
		    "pageLength": 15,  
		    "bFilter": [{"align" : "left"}],
		    "bLengthChange": false,
		    "oLanguage": {
		            "sLengthMenu": "Mostrar _MENU_ registros por página",
		            "sZeroRecords": "Nenhum registro encontrado",
		            "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
		            "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
		            "sInfoFiltered": "(filtrado de _MAX_ registros)",
		            "sSearch": "Pesquisar: ",
		            "oPaginate": {
		                "sFirst": "Início",
		                "sPrevious": "Anterior",
		                "sNext": "Próximo",
		                "sLast": "Último"
		            }
		    }
		  });
	
	  $('.cClients').DataTable({
		    "pageLength": 15,  
		    "bFilter": [{"align" : "left"}],
		    "bLengthChange": false,
		    "oLanguage": {
		            "sLengthMenu": "Mostrar _MENU_ registros por página",
		            "sZeroRecords": "Nenhum registro encontrado",
		            "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
		            "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
		            "sInfoFiltered": "(filtrado de _MAX_ registros)",
		            "sSearch": "Pesquisar: ",
		            "oPaginate": {
		                "sFirst": "Início",
		                "sPrevious": "Anterior",
		                "sNext": "Próximo",
		                "sLast": "Último"
		            },
		     "dom": '<"top"fl>rt<"bottom"ip><"clear">'
		    }												
		  });
		
		
	$('input:radio[name="customRadio"]').on("change", function() {
        if (this.checked && this.value == '2') {
            $(".partPayment").show();
        } else {
            $(".partPayment").hide();
        }
        });
        $('input:checkbox[name="arrival[]"]').on("change", function() {
	  var form = $('#productArrived');
	  var url = form.attr('action');
		form.submit();
	  /*
	  $.ajax({
	           type: "POST",
	           url: url,
	           data: form.serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	               alert(data); // show response from the php script.
	           }
         });
	  this.setAttribute('disabled', 'true');
	  */
        });
        
   
	   
});
// calling new product modal
$(document).on('click', '.btnNewProduct', function(){
  clear();
  $('#newProduct').modal('show');

});
// add new product
$(document).on('click', '.newProduct', function(){
  
  table = $('.orderProducts').html();
	var tline = "";  
	var price = $('#nPrice').val();
	var qty = $('#nQty').val();
	
	//select distributors choosen
	
  	var checkeds = new Array();
	$("input[name='nDistr[]']:checked").each(function ()
	{
	   checkeds.push( $(this).val());
	   $(this).prop('checked', false);
	});
  
  	price = price.replace(',','.');
    	
	var total = price * qty;
	var total = total.toFixed(2);
	var total = total.replace('.',',');
	price = price *1;
	price = price.toFixed(2);
	price = price.replace('.',',');
  
 
	
	tline += '<tr class="oProductsLine">';
	tline += '<td class="oDistr">' + checkeds +'</td>';
	tline += '<td class="oProduct">' + $('#nProduct').val() +'</td>';
	tline += '<td class="oPrice">' + price +'</td>';
	tline += '<td class="oQty">' + qty +'</td>';
	tline += '<td class="oTotal">' + total +'</td>';
	tline += '<td><i class="far fa-edit oProductEdit" style="cursor:pointer"></i>   <i class="fas fa-eraser oProductErase" style="cursor:pointer"></i></td>';
	tline += '</tr>';
	$('.orderProducts').html(table + tline);
	
	$(function(){

	    var valorCalculado = 0;
	
	    $( ".oTotal" ).each(function() {
	      valorCalculado += parseFloat($( this ).text().replace(',','.'));
	    });
	    $(".totalOrder").text('R$ ' + valorCalculado.toFixed(2).replace('.',','));
	    
  });
  
  // adding Delivery Date data
  var delivery = deliveryDate();
  var dDateDay = moment(delivery).format('L');
  var dDateWeek = moment(delivery).format('dddd'); 
  $('.dDateDay').text(dDateDay);
  $('.dDateWeek').text(dDateWeek);

  $('#newProduct').modal('hide');  
  clear();
});

// clear input fields

function clear(){

	     $('.txtField').val("");
	     $("input[name='nDistr[]']").attr("checked",false);
	     };


	
// edit a product already listed on the order
$(document).on('click', '.oProductEdit', function(){
  //grab the data from the table
  var distr = $(this).closest('tr').find('.oDistr').text();
  var product = $(this).closest('tr').find('.oProduct').text();
  var price = $(this).closest('tr').find('.oPrice').text();
  var qty = $(this).closest('tr').find('.oQty').text();

  // insert data on the modal's form fields
  $('#nProduct').val(product);
  $('#nQty').val(qty);
  $('#nPrice').val(price);
  
  // look for the distributors checked
  distr = distr.split(',');
  $.each(distr, function(){
    $("input[distr='"+ this +"']").each(function(){
      $(this).prop("checked", true);
    });
  });
  var line = $(this).closest('tr');
  line.remove();
  
  $('#newProduct').modal('show'); 

});

// remove a line from the table
$(document).on('click', '.oProductErase', function(){
  //get values to reduce from the total amount
  $(function(){

    var valorCalculado = 0;
    $( ".oTotal" ).each(function() {
      valorCalculado += parseFloat($( this ).text().replace(',','.'));
    });
    $(".totalOrder").text('R$ ' + valorCalculado.toFixed(2).replace('.',','));

  });
  
  var line = $(this).closest('tr');
  line.remove();
});

//setting the modal scroolable after closing child modals
$(document).find('.child-modal').on('hidden.bs.modal', function () {
    $('body').addClass('modal-open');
});

//selecting client from the records
$(document).on('click', '.cClientsLine', function(){
	
	var nCPF = $(this).closest('tr').find('.cClientsCPF').text();
	var nClient = $(this).closest('tr').find('.cClientsName').text();
	var nPhone = $(this).closest('tr').find('.cClientsPhone').text();
	var nWhats = $(this).closest('tr').find('.cClientsWhats').text();

	$('input[name="nCPF"]').val(nCPF);
	$('input[name="nClient"]').val(nClient);
	$('input[name="nPhone"]').val(nPhone);
	
	if(nWhats == 1){
		$('input[name="nWhats"]').prop("checked", true);
		$('input[name="nWhats"]').val('1');
	}
});

//placing client on order form
$(document).on('click', '.saveClient', function(){

	var CPF = $('input[name="nCPF"]').val();
	var client = $('input[name="nClient"]').val();
	var phone = $('input[name="nPhone"]').val();
	var whats = $('input[name="nWhats"]').val();
	
	$('input[name="cpf"]').val(CPF);
	$('input[name="client"]').val(client);
	$('input[name="phone"]').val(phone);
	
	if(whats ==1){
		$('input[name="whats"]').prop("checked", true);
	}
	
	$('#newClient').modal('hide'); 

});

// inserting the probably delivery date
function deliveryDate(){
  var dDate;
  var dDateWeek;
  var dDateDay;
  var today = moment().format('d');

  moment.locale("pt-br");

  if(today == 6){
    dDate = moment().add(3, 'days');
  } else if(today == 0){
    dDate = moment().add(2, 'days');
  } else {
    dDate = moment().add(1, 'days');
  }

  return dDate;
}

// asking for the same product again - old orders pick
$(document).on('click', '.lastOrdersLine', function(){
  clear();
  var oldProduct = $(this).closest('tr').find('.oldProduct').text();
  var oldValue = $(this).closest('tr').find('.oldValue').text();
  var oldQty = $(this).closest('tr').find('.oldQty').text();

  // insert data on the modal's form fields
  $('#nProduct').val(oldProduct);
  $('#nQty').val(oldQty);
  $('#nPrice').val(oldValue);
  
  $('#newProduct').modal('show'); 
  
});

$(document).on('click', '.placeOrder', function(){
	var orderProducts ="";
	var item ="";
	var payment = new Array();
	var deliveryDate = $('.dDateDay').text();
	var totalAmount = $('.totalOrder').text();
	var comment = $('.comments').val();
	
	validation();
	
	$('.oProductsLine').each(function(){		
	  var distr = $(this).closest('tr').find('.oDistr').text();
	  var product = $(this).closest('tr').find('.oProduct').text();
	  var price = $(this).closest('tr').find('.oPrice').text();
	  var qty = $(this).closest('tr').find('.oQty').text();
	  var total = $(this).closest('tr').find('.oTotal').text();
	  var item ="";

	  item = product + '|' + price + '|' + qty + '|' + distr + '|' + total;
	  orderProducts += '<input type="hidden" name="product[]" value="'+ item +'">';
	 
	});
	
	$('input:radio[name="customRadio"]').each(function(){
	 
	  if (this.checked && this.value == '1') {
	    payment.push(totalAmount);
	    //alert(totalAmount);
	  } else if(this.checked && this.value == '2'){
	    payment.push($('.partPaymentText').val());
	    //alert($('.partPayment').val());
	  }	    
	});
	var deliveryDate = $('.dDateDay').text();
	var totalAmount = $('.totalOrder').text();
	var comment = $('.comments').val();
	
	orderProducts += '<input type="hidden" name="deliveryDate" value="'+ deliveryDate +'">';
	orderProducts += '<input type="hidden" name="totalAmount" value="'+ totalAmount +'">';
	orderProducts += '<input type="hidden" name="comment" value="'+ comment +'">';
	orderProducts += '<input type="hidden" name="payment" value="'+ payment +'">';
	$('.restOfOrder').html(orderProducts);
	$('#newOrderForm').submit();
});

function validation(){
    //client Validation
    var validationClient = $('input:text[name="client"]').val();
    var validationProduct ="";
    var validationPayment
    
    if(!validationClient){
        
        Swal.fire({
	  icon: 'error',
	  title: 'Cliente',
	  text: 'Escolha um cliente!',
	})
        return;
    }
    
    //products Validation
    $('.oProductsLine').each(function(){		
	 validationProduct += $(this).closest('tr').find('.oProduct').text()
    });
    
    if(!validationProduct){
        Swal.fire({
	  icon: 'error',
	  title: 'Produto',
	  text: 'Adicione um produto a sua encomenda!',
	})
        return;
    }
    
    //payment validation
    $('input:radio[name="customRadio"]').each(function() {
        if (this.checked) {
            validationPayment = '1';
        }
    });
    
    if(!validationPayment){
        Swal.fire({
	  icon: 'error',
	  title: 'Pagamento',
	  text: 'Adicione informações sobre o Pagamento!',
	})
        return;
    
    }
}


  </script>
</body>
</html>