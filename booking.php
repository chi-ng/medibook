<!-- Thank you --> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <meta name="HandheldFriendly" content="true" />
  <title>Thank You</title>
  <script type="text/javascript" src="https://submit.jotformpro.com/js/prototype.js"></script>
  <style>
    body {
      font-size:12px;
      font-family:Verdana;
    }
  </style>
</head>

<body style="padding:24px;">
  <p style="text-align:center;"><img src="https://cdn.jotfor.ms/img/check-icon.png" alt="" width="128" height="128" /></p><div style="text-align:center;"><h1 style="text-align:center;">Thank You!</h1><p style="text-align:center;">Your submission has been received.</p></div>
  <script type="text/javascript">
    if (window.parent !== window) { 
        var margin = parseInt($$('body')[0].getStyle('margin-top')) + parseInt($$('body')[0].getStyle('margin-bottom'));
        var height = parseInt($$('body')[0].getHeight())+margin;
        window.parent.postMessage('setHeight:' + height, '*');
        window.parent.postMessage({ action: 'submission-completed' }, '*');
    }
  </script>

<!-- php code for getting data --> 
<?php 
    if(isset($_POST['submit'])){
        // Storing Selected Value In Variable
        $selected_type = $_POST['types-of-appointment'];  
        $selected_date =$_POST['arrival-date']; 
        $selected_doctor =$_POST['select-doctor'];
        $selected_time1 = $_POST['select_time_anna'];
        $selected_time2 = $_POST['select_time_mike'];
        $selected_time3 = $_POST['select_time_joshua'];

        
        echo "<p align='center'> YOU HAVE SELECTED  <br>
        Types of appointment: $selected_type  <br> 
        Arrival date:  $selected_date  <br>
        Doctor chosen:  $selected_doctor  <br>
        Time chosen:  $selected_time1 $selected_time2 $selected_time3 <br> <br> <br>
        <a href='homepage.html'> Back to home page </a>
        
        </p>";
        
    }
?>


</body>
</html>