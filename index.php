<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SweetAlert2 – Ajax Delete Rows Example with PHP MySQL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.2.1/sweetalert2.min.css" type="text/css" />
</head>
<body>

    <div class="container">
     
        <div class="page-header">
        <h1><a target="_blank" href="http://www.codingcage.com/2016/08/delete-rows-from-mysql-with-bootstrap.html">SweetAlert2 – Ajax Delete Rows Example with PHP MySQL</a></h1>
        </div>
        
        <div id="load-products"></div> <!-- products will be load here -->
    
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.2.1/sweetalert2.min.js"></script>


<script>
 $(document).ready(function(){
  
  readProducts(); /* it will load products when document loads */
  
  $(document).on('click', '#delete_product', function(e){
   
   var productId = $(this).data('id');
   SwalDelete(productId);
   e.preventDefault();
  });
  
 });
 
 function SwalDelete(productId){
  
  swal({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   type: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!',
   showLoaderOnConfirm: true,
     
   preConfirm: function() {
     return new Promise(function(resolve) {
          
        $.ajax({
        url: 'delete.php',
        type: 'POST',
           data: 'delete='+productId,
           dataType: 'json'
        })
        .done(function(response){
         swal('Deleted!', response.message, response.status);
     readProducts();
        })
        .fail(function(){
         swal('Oops...', 'Something went wrong with ajax !', 'error');
        });
     });
      },
   allowOutsideClick: false     
  }); 
  
 }
 
 function readProducts(){
  $('#load-products').load('read.php'); 
 }
 
</script>
</body>
</html>