<?php include_once'database.php';

$msg= '';
 $code = "ORD_NO_";
 // generating unique id with pefix  
    $order_uidd = uniqid($code); 

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
     integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
        <div class="container">
            <a class="navbar-brand" href="/">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle"
                            data-toggle="dropdown" id="navbarDropdownMenuLink">Your Ideas</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Ideas</a>
                                <a href="#" class="dropdown-item">Add</a>
                            </div>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link">Logout</a>
                    </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Register</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main" class="container">

    	     <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="header-title m-t-0" style="text-align:center;color: #5572c8; font-size: 20px; padding: 10px;">New Product Order Entry</h4>
										<span style="margin-top:15px;"><?php echo $msg ;?></span>
                                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
									 
                                                      <h4 class="inner-tittle">Order Item :</h4>
			
                                              <table class="table table-border" id="dynamic_field1">  
                                                    <tr> 
                                                    
                                                    	<?php 


                        									$sql="select container_name FROM arrival_container ORDER BY id DESC";
                        											$result = $mysqli->query($sql);
                        												
                        												
                        										 ?>
                        										
                                                         <td><select class="form-control" data-style="btn-light" name="container_name[]"  id="container">
                                                    <optgroup label="Container Name">
                                                        <option value="">Select container</option>
														
														<?php 
														
														if ($result->num_rows > 0) {
														
														while ($row = $result->fetch_assoc()) 
														
														//$container_name = $row['container_name'];
													
												{  
                                                       echo '<option value="'.$row['container_name'].'">'.$row['container_name'].'</option>';
														
                                                       } 
												    
												}
                                                     else  	{
                                                            echo '<option value="">Container not available</option>';
                                                        }
                                                                                                      	
                                                      	?>
                                                    </optgroup>
                                                </select>
                                                    
                                            </td>  
                                            <td>
                                                
                                                <select class="form-control" data-style="btn-light" name="supplier_name[]" id= "supplier">
                                                    <optgroup label="Supplier Name">
														<option value="">Select container first</option>
											
                                                    </optgroup>
                                                </select>
                                                
                                                </td>  
                                                         <td>
                                                             
                                                    <select class="form-control" data-style="btn-light" name="product_name[]" id="product">
                                                            <optgroup label="Product Name">
                                                        
														<option value="">Select supplier first</option>
											
                                                            </optgroup>
                                                        </select>
                                                            
                                                         </td>  
                                                         <td><input type="text" name="quantity[]" placeholder="Quantity" class="form-control" /></td>  
                                                         <td><input type="text" name="unit_price[]" placeholder="Unit Price" class="form-control" /></td>
                                                         <td><input type="text" name="comments[]" placeholder="Comments" class="form-control" /></td>
                										<td><input type="hidden" name="order_id[]"value="<?php echo $order_uidd;?>"placeholder="Enter taking time" class="form-control name_list"  /></td>  
                                                         <td><button type="button" name="add1" id="add1" class="btn btn-primary">+</button></td>  
                                                    </tr>  
                                               </table> 
                                     
                                     
                                        <div class="form-group row">
                                            <div class="col-8 offset-4">
                                                <button type="submit" class="btn btn-gradient waves-effect waves-light">
                                                   Submit
                                                </button>
                                                <a class="btn btn-light waves-effect m-l-5" href="AdminDashboard.php">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                          </div> <!-- end col -->
					
		  
		  

                
<script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="js/bootstrap.min.js"></script>
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>            

                
		  
		  
		  
		 
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            
            <script type="text/javascript">
$(document).ready(function(){
    $('#container').on('change',function(){
        var container_Name = $(this).val();
        if(container_Name){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'container_name='+container_Name,
                success:function(html){
                    $('#supplier').html(html);
                    $('#product').html('<option value="">Select supplier first</option>'); 
                }
            }); 
        }else{
            $('#supplier').html('<option value="">Select container first</option>');
            $('#product').html('<option value="">Select supplier first</option>'); 
        }
    });
    
    $('#supplier').on('change',function(){
        var supplier_Name = $(this).val();
        if(supplier_Name){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'supplier_name='+supplier_Name,
                success:function(html){
                    $('#product').html(html);
                }
            }); 
        }else{
            $('#product').html('<option value="">Select supplier first</option>'); 
        }
    });
    
    
 var j=1;  
      $('#add1').click(function(){  
           j++;  
           $('#dynamic_field1').append('<tr id="row1'+j+'"><td><?php $sql="select container_name FROM arrival_container ORDER BY id DESC";$result = $mysqli->query($sql);?><select class="form-control" data-style="btn-light" name="container_name[]"  id="container"><optgroup label="Container Name"><option value="">Select container</option><?php if($result->num_rows > 0){while ($row = $result->fetch_assoc()){ echo '<option value="'.$row['container_name'].'">'.$row['container_name'].'</option>';}}else{echo'<option value="">Container not available</option>';}?></optgroup></select></td><td><select class="form-control"data-style="btn-light" name="supplier_name[]" id="supplier"><optgroup label="Supplier Name"><option value="">Select container first</option></optgroup></select></td><td><select class="form-control" data-style="btn-light" name="product_name []"id="product"><optgroup label="Product Name"><option value="">Select supplier first</option></optgroup></select></td><td><input type="text" name="quantity[]" placeholder="Quantity" class="form-control" /></td><td><input type="text" name="unit_price[]" placeholder="Unit Price" class="form-control" /></td><td><input type="text" name="comments[]" placeholder="Comments" class="form-control" /></td><td><input type="hidden" name="order_id[]"value="<?php echo"$order_uidd";?>"placeholder="Enter taking time" class="form-control name_list"  /></td><td><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove1">X</button></td></tr>');  });  
      $(document).on('click', '.btn_remove1', function(){  
           var button_id = $(this).attr("id");   
           $('#row1'+button_id+'').remove();  
      });  
      $('#submit').click(function(){            
           $.ajax({  
                url:"../dyn-assets/medicine.php",  
                method:"POST",  
                data:$('#add_name').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_name')[0].reset();  
                }  
           });  
      }); 
    
});
</script>


    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>
