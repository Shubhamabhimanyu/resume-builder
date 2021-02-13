<!DOCTYPE HTML>  
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
.modal {
 
 position: fixed; 
 z-index: 1; 
 left: 0;
 top: 0;
 width: 100%; 
 height: 100%; 
 overflow: auto; 
 background-color: #808b96;
 padding-top: 50px;
}


.modal-content {
 background-color: #fefefe;
 margin: 5% auto 15% auto; 
 border: 1px solid #888;
 width: 50%; 
}

.container {
 padding: 16px;
}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $lastname = $email = $gender = $comment = $website = $phone = $skill = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





<div class="dynamic-wrap">
                    <form role="form" action="output.php" method="post">
                      <div class="entry input-group">
                        <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                        <span class="input-group-btn">
                          <button class="btn btn-success btn-add" type="button">
                                  <span class="glyphicon glyphicon-plus"></span>
                          </button>
                        </span>
                      </div>
                      <input type="submit">
                    </form>
                    <br>
                    <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
                  </div>
                
           
               
       
       
   
          <script>
              $(function() {
  $(document).on('click', '.btn-add', function(e) {
    e.preventDefault();

    var dynaForm = $('.dynamic-wrap form:first'),
      currentEntry = $(this).parents('.entry:first'),
      newEntry = $(currentEntry.clone()).appendTo(dynaForm);

    newEntry.find('input').val('');
    dynaForm.find('.entry:not(:last) .btn-add')
      .removeClass('btn-add').addClass('btn-remove')
      .removeClass('btn-success').addClass('btn-danger')
      .html('<span class="glyphicon glyphicon-minus"></span>');
  }).on('click', '.btn-remove', function(e) {
    $(this).parents('.entry:first').remove();

    e.preventDefault();
    return false;
  });
});
          </script>

</body>
</html>