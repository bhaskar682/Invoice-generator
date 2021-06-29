<!DOCTYPE html>
<html>
<head>
  <title>Invoice</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
  <div class="container">
    <h1 class="text-center text primary">Invoice</h1>
    <hr>
    <form method="post" enctype="multipart/form-data">
        <table >
          <tr>
            <td>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload Logo</span>
                </div>
                <input type="file" class="form-control " name="logo">
              </div>
            </td>

            <td style="float:right">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Invoice</span>
                </div>
                <input type="text" class="form-control " name="logo">
              </div>
            </td>   
          </tr>
          <tr>
            <td>
            <div class="input-group  input-group-lg">
                <input type="text" name="company" placeholder="Coderope Pvt Ltd." class="form-control">
              </div>        
            </td>
            <td>
              <div class="form-inline ">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<label>Date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="text" name="date" class="form-control">
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <div class="form-inline input-group input-group-lg">
                <input type="text" class="form-control " placeholder="Bill To" name="billto">
              &nbsp 
                <input type="text" class="form-control " placeholder="Ship To" name="shipto">
              </div>

            </td>
            <td>
              <div class="form-inline ">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<label>Payment Terms</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="text" name="payment" class="form-control">
              </div>
              <div class="form-inline ">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<label>Due Date</label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                <input type="text" name="due_date" class="form-control">
              </div>
            </td>
          </tr>
        </table>

<hr>

<table width="100%"  id="dynamic_field" >
  <thead class="text-white-50 bg-dark  ">
    <th>Item</th>
    <th>Price</th>
    <th>Quanity</th>
    <th>Total</th>
  </thead>
  <tr>
    <td><input type="text" class="form-control" name="item" placeholder="Item"></td>
    <td>

      <input type="text" name="price[]" id="price" class="form-control price" placeholder="Price">
      
    </td>
    <td>
      <center>
        <input type="number" name="quantity[]" id="quantity" placeholder="Quantity" min="1" class="form-control choose">
      </center>
    </td>
    <td><span class='total'>0</span></td>
  </tr>

</table>
<button type="button" name="add" id="add" class="btn btn-primary">+ Line Item</button>
 <script >
   $(document).ready(function()
{
  var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text"placeholder="Item" name="item[]" class="form-control"/></td></td><td><input type="text" placeholder="Price" name="price[]" class="form-control price"/></td><td><input type="number" name="quantity[] " placeholder="Quantity" min="1" class="form-control choose"/><td><span class="total">0</span></td><td><input type="submit" value="Delete" class="btn btn-danger" id="remove"></td>');  

});
    $(document).on('click','#remove',function(){
    	$(this).closest('tr').remove();
    });



  });

 </script>         




  <table>
          <tr>
            <td>
              <label>Notes</label>
              <div class="input-group input-group-lg">
                  <input type="text" class="form-control " placeholder="Notes" name="billto">
                </div>              
            </td>

            <td>
            <div class="form-inline ">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<label>Tax</label>&nbsp 
                <select class="form-control tax" name="tax" >
                  <option value="5">5%</option>
                  <option value="10">10%</option>
                </select>
              </div>
            </td>

          </tr>
          <tr>
            <td>
              <label>Terms</label>
              <div class="input-group input-group-lg">
                  <input type="text" class="form-control" placeholder="terms" name="billto">
                </div>    
            </td>
            <td>
              <div class="form-inline">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                  <th >Total:</th>
                  <th ><span id="sum"></span></th>
                
              </div>
            </td>

          </tr>
          <tr>
            <td></td>
            <td>
              
              <div class="form-inline">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <label>Amount Paid:</label>&nbsp
                  <input type="text" class="form-control" placeholder="Amount Paid" name="paid">
                </div>    
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <div class="form-inline">
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <label>Due Balance:</label>
              </div>
            </td>
          </tr>
        </table>




        </form>

<script>
calc_total();

$("body").on('change','.choose', function(){
  var parent = $(this).closest('tr');
  var price  = parseFloat($('.price',parent).val());
  var choose = parseFloat($('.choose',parent).val());
  
  $('.total',parent).text(choose*price);

  calc_total();
});

function calc_total(){
  var sum = 0;
 	 var tax
  var total = 0;
  $(".total").each(function(){
  	total += parseInt($(this).text())
 	 tax = $('.tax').children("option:selected").val();
 		
 		
 	
  sum += parseFloat($(this).text());	
   
  });
  var taxes = total + total*parseInt(tax)/100;
 		console.log(taxes);
  $('#sum').text(taxes);
}
</script>

  </div>