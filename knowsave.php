<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Friends Quiz</title>
<meta name="description" content="Friend Quiz - Does your Friends Know You">
<meta property="og:title" content="Friend Quiz" />
<meta property="og:image" content="http://know-you.pw/ico.jpg">
 <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="600" />
                <meta property="og:site_name" content="Friend Quiz" />
        <meta property="og:url" content="http://know-you.pw/" />
        <meta property="og:type" content="game" />
<meta property="og:description" content="Friend Quiz - Does your Friends Know You">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.0/pure-min.css">
<link rel="stylesheet" href="/style.css?v=92.399">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100" rel="stylesheet">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.6.js"></script>

</head>
<div class="custom-menu-wrapper">
<div class="pure-menu custom-menu custom-menu-top">
<a href="/" class="pure-menu-heading custom-menu-brand">Friend Quiz</a>
</div>
</div><script>
function changeclass() {
if($("#name").val() == "")
        {
        var NAME = document.getElementById("name_error")
NAME.className="error"
            return false;
        }
} 
</script>
<Center>
<h1 class="tenpxbottom fivepxtop">How Much Your Friends Know You?</h1>
<div id="name_email_info" class="pure-form pure-form-stacked">
<div class="pure-g">
<div class="pure-u-1-24"></div>
<div class="pure-u-11-12">
<div class="pure-u-1 pure-u-md-1-3">
<br>
<label><h2 class="tenpxbottom fivepxtop">Create Yes/No Quiz for Your Friends </h2></label>
<form onsubmit="return changeclass()" method="post" action="save.php" class="boxy">
<input id="name" name="name" class="pure-u-23-24" type="text" placeholder="Enter Your Name">
</div>
<span id="name_error" class="hidden">Please Enter the Name</span>
<span id="name_error" class="error">Please Enter the Name</span><div class="pure-u-23-24">
<button id="start_create" type="submit" class="pure-button pure-button-primary full">👉 Start</button>
</form>
</div>
</div>
</div>
<br/>

