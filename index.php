Tanapon Rattanamano
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
<button id="btnjson1">json1</button>
name<span id="fmane"></span><br/>
sname<span id="lmane"></span>
<script>
    /*console.log("ok")
    function loadjson(){
        var URL="http://cj-android-demon.herokuapp.com"
    }
    $.get(url,(data,status)=>{
        //console.log
        
    });*/

    console.log("ok")
    function loadJSONobject(){
        var URL="http://cj-android-demon.herokuapp.com";
    
    $.getJSON(url)
    .done((data)=>{
        console.log(data)
        $("#fname").text(data.fname);
        $("#lname").text(data.lname);
    })
    .fail((xhr,status,err)=>{
        console.log('error')
    })
    
      $(()=>{
          loadJSONobject();
      })
  
</script>
</html>
