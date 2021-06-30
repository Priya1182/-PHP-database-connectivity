<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1.0">
 <title>Hospital</title>
 <link rel="stylesheet"
href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
integrity="sha384-
oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
crossorigin="anonymous">
 <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap
.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="py-4 bg-dark text-light rounded"><i class="fas faswatchbook"></i> Patient Registration system for Hospital</h1>
<div class="d-flex justify-content-center">
<form action="output1.php" method="post"><br><br>
 
 Name: <input type="text" name="name">
 <br><br>
 E-mail: <input type="email" name="email">
 <br><br>
 Gender:
 <input type="radio" name="gender" value="female">Female
 <input type="radio" name="gender" value="male">Male
 <input type="radio" name="gender" value="other">Other
 <br><br>
 Mobile No: <input type="text" name="mobile">
 <br><br>
 Reason: <input type="text" name="reason">
 <br><br>
 Symtoms:
 <input type="radio" name="symptoms" value="python">fevar
 <input type="radio" name="symptoms" value="wt">coufh
 <input type="radio" name="symptoms" value="Cloude">uneasyness
 <br><br>

 <input type="reset" name="reset" value="reset">
 <input type="submit" name="save" value="Submit">
</form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/poppe
r.min.js" integrity="sha384-
UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.m
in.js" integrity="sha384-
JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</html>