<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
  <title>Thank you for your submission</title>
  <style type="text/css">
  ol, ul { 
     list-style-type: none;
      }
  body {  
    background-color: #faf2e4;
    margin: 0 10%;
    font-family: sans-serif;
  }
  h1 {
    text-align: center;
    font-family: serif;
    font-weight: normal;
    text-transform: uppercase;
    border-bottom: 1px solid #57b1dc;
    margin-top: 30px;
  }

  h2 {
    color: #d1633c;
    font-size: 1em;
  }
  p.disclaimer { 
    border-top: 1px solid #d1633c; 
    padding-top: 1em;
  }
  </style>
</head>

<body>

<h1>THANK YOU</h1>

<p>Thank you for submitting an aplication. We will be reviewing your submission and we will call you when accepted.</p>

<h2>Your Information</h2>
<ul>
<li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
<li><strong>Address:</strong> <?php print $_POST['address'] ? $_POST['address'] : '<em>empty</em>'; ?></li>
<li><strong>Telephone number:</strong> <?php print $_POST['telephone'] ? $_POST['telephone'] : '<em>empty</em>'; ?></li>
<li><strong>Email Address:</strong> <?php print $_POST['email'] ? $_POST['email'] : '<em>empty</em>'; ?></li>
</ul>

<p class="disclaimer"><small>This site is for educational purposes only. You did not submit anything.</small></p>

</body>
</html>
