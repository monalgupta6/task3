 <!DOCTYPE html>
<html>

 <head>
      <title>The jQuery Example</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
       
      <script>
         

         $(document).ready(function() {
                   
          
            $("#load_data").click(function(event){

               $.getJSON('data.json', function(abc) {
                   var a=abc.myList;
                   for(var i=0; i<a.length; i++)
                   {
                     $('#contentData').html('<p> Value: ' + a[5].value + '</p>');
                     $('#contentData').append('<p>Label : ' + a[5].label+ '</p>');
                    
                      console.log(a);
                   }
               });
            });
             
         });

      </script>
   </head>
   
   <body>
   
      <p>Click on the button to load data.php file:</p>
       
      <div id = "contentData" style = "background-color:#cc0;">
         Data
      </div>
       
      <input type = "button" id = "load_data" value = "Load Data" />
       
   </body>
   </html>