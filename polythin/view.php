<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    
    
    $query = "SELECT * FROM products WHERE productName LIKE '%$valueToSearch%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM products";
    $search_result = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "polythin");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style type="text/css">
            .wrapper{
            width: 800px;
            margin: 25px auto;
        }
        .page-header h2{
            margin-top:10px;
        }
            table,th,td{
                border: 1px solid #ddd;
                text-align: left;
            }
            table
            {
                 border-collapse: collapse;
                 width: 100%;
            }

            th,td{
                 padding: 15px;
                text-align: left;
                width: 120px;
            }




tr:nth-child(even){background-color:  #ffccf2
}

th {
  background-color: #b30086;
  color: white;
}




        </style>
    </head>
    <body>
        
        <form action="view.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Search Here">
           <h1> <input type="submit" name="search" value="Search"><br><br></h1>
        


            <table>
                <tr>
                    <th>productCode</th>
                    <th>productName</th>
                    <th>productSize</th>
                    <th>productPrice</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['productCode'];?></td>
                    <td><?php echo $row['productName'];?></td>
                    <td><?php echo $row['productSize'];?></td>
                    <td><?php echo $row['productPrice'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>


