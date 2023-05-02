<!DOCTYPE html>
<html>
<head>
  <title>Create Complain</title>
  <link rel="stylesheet" href="createComplain.css">
</head>
<body>
<table>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
            <tr>
                <td><h2></h2></td>
            </tr>
        </table>
  <h1>Give Complain</h1>
  <form name="complainForm" action="../../controllers/complainController.php" method="post" onsubmit="return validateForm()">
    <p>
      <label>Restaurant Name:</label>
      <input type="text" name="restaurant">
    </p>
    <p>
      <label>Product Name:</label>
      <input type="text" name="product">
    </p>
    <p>
      <label>Email:</label>
      <input type="email" name="email">
    </p>
    <p>
      <label>Complain Subject:</label>
      <input type="text" name="subject">
    </p>
    <p>
      <label>Complain Details:</label>
      <textarea name="details"></textarea>
    </p>
    <input type="button" name="click" value="re_Check" onclick="ajax()">
    <button type="submit" name="create_complain">Submit</button>
  </form>
</body>
</html>
<script>
    function validateForm() {
      var restaurant = document.complainForm.restaurant.value;
      var product = document.complainForm.product.value;
      var email = document.complainForm.email.value;
      var subject = document.complainForm.subject.value;
      var details = document.complainForm.details.value;
      
      if (restaurant == "" || product == "" || email == "" || subject == "" || details == "") {
        alert("Please fill in all the fields.");
        return false;
      }
    }
function ajax (){
      var restaurant = document.complainForm.restaurant.value;
      var product = document.complainForm.product.value;
      var email = document.complainForm.email.value;
      var subject = document.complainForm.subject.value;
      var details = document.complainForm.details.value; 
			    
                
          let data = {
				 'restaurant' : restaurant,
				 'product' :product,
         'email': email,
         'subject': subject,
         'details':details,

				
        };

			let info = JSON.stringify(data);

        let xhttp = new XMLHttpRequest();

          xhttp.open('post', 'server.php', true);
          xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
          xhttp.send('data=' + info);
          xhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                let info = JSON.parse(this.responseText);
                document.getElementsByTagName('h2')[0].innerHTML ="restaurant : "+info.restaurant;
                document.getElementsByTagName('h2')[1].innerHTML ="product : " +info.product;
                document.getElementsByTagName('h2')[2].innerHTML ="email : "+info.email;
                document.getElementsByTagName('h2')[3].innerHTML ="subject : " +info.subject;
                document.getElementsByTagName('h2')[4].innerHTML ="details : "+info.details;
             
	  }
        }
    }
        
</script>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 'success'): ?>
    <p style="color: green;">Complain created successfully!</p>
  <?php endif; ?>  
