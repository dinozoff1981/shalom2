


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

    <title>Shalom Travel</title>

</head>

<style>

    tr
    {

        color:darkblue;
        
        
    }

    body

    {

     background-color: white;

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

tr

{
font-size: 12px;
text-align: center;
font-family: 'Times New Roman', Times, serif;

}
th{

    font-size: 12px;
}

.table

{
display: flexbox;
justify-content: center;
width: 1300px;
margin-left: -40px;

    
}

img

{

  
   margin-top: 20px;
   margin-left: 30px;
    
}

.topnav{

    display: flexbox;
    justify-content: center;
    margin-left: 360px;
}

</style> 
<body>

<img src="logo.png" width="200px" height="200px" alt="">



   <h2>Shalom Travel</h2>
<div class="topnav">
  

</div>
    <div class="container">


    <tr>

<td>

<button class="btn btn-primary btn-sm"><a href="report.php" class="text-light">REPORT</a></button>

</td>
</tr>

<br>


        <button class="btn btn-primary my-5 btn-sm"><a href="create.php" class="text-light">ADD A CUSTOMER</a></button>


        <table class="table">
            <thead>
                <tr>
                    
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'connect.php';
                
                $sql="SELECT * FROM shalom3";
                $result=mysqli_query($connect,$sql);
                

                if($result){

                    
                    

                    while($row=mysqli_fetch_assoc($result)){
                           
                            $ticketnumber=$row['ticketnumber'];
                            $invno=$row['invno'];
                            $company=$row['company'];
                            $fullname=$row['fullname'];
                            $destination=$row['destination'];
                            $issuedate=$row['issuedate'];
                            $fare=$row['fare'];
                            $ar=$row['ar'];
                            $ap=$row['ap'];
                            $vendorcom=$row['vendorcom'];
                          
                            $bank=$row['bank'];
                        
                          
                           
                          

                            echo ' <tr>
                            <th scope="row">'.$ticketnumber.'</th>
                            <td>'.$invno.'</td>
                            <td>'.$company.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$destination.'</td>
                            <td>'.$issuedate.'</td>
                            <td>'.$fare.'</td>
                            <td>'.$ar.'</td>
                            <td>'.$ap.'</td>
                            <td>'.$vendorcom.'</td>
                           
                            <td>'.$bank.'</td>
                           
                            
                            

                            <td>
                             <button class="btn btn-primary btn-sm"><a href="edit.php?updateid='.$ticketnumber.'" class="text-light">Update</a></button>
                             <button class="btn btn-danger btn-sm"><a href="delete.php?deleteid='.$ticketnumber.'" class="text-light">Delete</a></button>


                            </td>

                        </tr>';


                    }
                }
                
                
                ?>

               



            </tbody>

            <tfoot>
          <tr>
            <th colspan="3">Total</th>
            <th id="total_order"></th>
            <th id="test_order"></th>
          </tr>
        </tfoot>


        </table> 

    </div>

    <div class="container">
        <button class="btn btn-danger my-5"><a href="logout.php" class="text-light">Log Out</a></button>

    
</body>

</html>


