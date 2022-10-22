<html>
<head>
  <title>How to calculate two column Datatable Server-side-processing in PHP
</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>


<style>

.table-responsive{

        width:1500px;
        margin-left:-150px;
    }

   

    img

{

  
   margin-top: 20px;
   margin-left: 170px;
    
}

h2
{

    text-align: center;
    color: darkblue;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 30px;
    text-decoration: underline;
    font-weight: bold;
}

h3
{

    text-align: center;
    color: darkblue;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 30px;
    text-decoration: underline;
    font-weight: bold;
}

th{

    color:brown;
    font-family:'Times New Roman', Times, serif;
 
}


   
</style>
<body>

<img src="logo.png" width="200px" height="200px" alt="">


<h2>Shalom Travel</h2>
<h3>REPORT</h3>
  <div class="container box">
   
</h3>
    <br />
    <div class="table-responsive">
      <table id="order_data" class="table table-bordered table-striped">
        <thead>
          <tr >
          <th scope="col">Ticket Number</th>
                    <th scope="col">Invoice#</th>
                    <th scope="col">Company</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Fare</th>
                    <th scope="col">A/R</th>
                    <th scope="col">A/P</th>
                    <th scope="col">Vendor</th>
                    <th scope="col">Shalom Comm</th>
                    <th scope="col">Bank</th>
                   
          </tr>
        </thead>
        <tbody></tbody>
        <tfoot>
          <tr>
            <th colspan="3">Total</th>
            <th id="total_order"></th>
            <th id="test_order"></th>
          </tr>
        </tfoot>

        
      </table>

      
      <br />
      <button class="btn btn-danger btn-m" class="text-dark"><a href="home.php">Back To Data</a></button>
      <br />
      <br />
    </div>
  </div>
 
</body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
   var dataTable = $('#order_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    },
    drawCallback:function(settings)
    {
     $('#total_order').html(settings.json.total);
    }
   });

    
  
 });
 
</script>

