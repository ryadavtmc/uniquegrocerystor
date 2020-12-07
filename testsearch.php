<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
function searchq(){
    var searchTxt = $("input[title='search'").val();
    $.post("searh.php", {searchVal: searchTxt}, function(output){
        $("#output").html(output);
        
    });
}
</script>
</style>
</head>
<body>

<h2>Search Button</h2>


<p>Centered inside a form with max-width:</p>
<form class="example" action="searh.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search" onkeydown="searchq();">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<div id="output">
    
</div>
</body>
</html> 