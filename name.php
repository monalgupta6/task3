 <!DOCTYPE html>
<html>

 <head>
      <title>The jQuery Example</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       
      <script>
         $(document).ready(function() {
           
            $("#load_data").click(function(event){
               $.getJSON('name.json', function(jd) {
                  $('#stage').html('<p> Name: ' + jd.name + '</p>');
                  $('#stage').append('<p>Age : ' + jd.age+ '</p>');
                  $('#stage').append('<p> Sex: ' + jd.sex+ '</p>');
                  console.log(jd);
               });
            });
               
         });
      </script>
   </head>
   
   <body>
   
      <p>Click on the button to load result.html file:</p>
       
      <div id = "stage" style = "background-color:#cc0;">
         STAGE
      </div>
       
      <input type = "button" id = "load_data" value = "Load Data" />
       
   </body>
   </html>