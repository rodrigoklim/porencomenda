<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible">
  <title>Por Encomenda</title>

  <style>
  h5 {
    font-family: "Helvetica";
    font-size: 22px;
  }
  table{
    font-family: "Helvetica";
    font-size: 13px;
    width: 100%;
  }
  .products {
  
  width: 100%;
  text-align: center;
  }
  .products th {
  border-bottom: 1px solid #000;
  font-weight: bolder;
  }
  .products td {
  border-bottom: 1px solid #000;
  }
  
  html{
  	margin:5px 50px
  	}
  </style>
</head>
    <body>
        <div class="invoice">
            <!-- image -->
            <div class="row">
                <center><img src="https://encomenda.tecnoklim.com.br/img/logo.png" height="50" width="55"></center>
            </div>
            <!-- name of company -->    
            <div class="row">
                <div class="col-12">
                    <h5>
                        <center>REDE POPULAR DROGARIA E PERFUMARIA<center>
                    </h5>
                </div>
            </div>
            <br>
            <br>
            <table>
                <tr>
                    <td><strong>Data Encomenda:</strong></td>
                    <td>   {{$order->order_date}}</td>
                </tr>
                <tr>
                    <td><strong>Data Retirada:</strong></td>
                    <td>   {{$order->order_delivery}}</td>
                </tr>
                <tr>
                    <td><strong>Encomenda:</strong></td>
                    <td>   #{{$order->order_id}}</td>
                </tr>
                <tr>
                    <td><strong>Responsável:</strong></td>
                    <td>   {{$order->user}}</td>
                </tr>
            </table>
            
            <!-- /.end of  header -->
            <br>
            <br>
            
            <table class="products">
                <thead>
                    <tr>
                        <th>Qtdade</th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->product}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->total}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <!-- /.end of Table Products -->
            
            <!-- footer of invoice -->
            <table>
                <tr>
                    <td><strong>Total:</strong></td>
                    <td>   {{$order->amount}}</td>
                </tr>
                <tr>
                    <td><strong>Total Pago:</strong></td>
                    <td>   {{$order->amount_paid}}</td>
                </tr>
            </table>
            <!-- /.end of footer -->

            <!-- QrCode of invoice -->
            <div class="row invoice-info col-sm-12">
                <center><img src="/{{$order->qrcode}}"/></center>
            </div>
        </div>
    </body>
</html>