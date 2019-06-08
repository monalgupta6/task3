<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div>
<select name="homepage_select_first">
    <option>No Match</option>
    <option value="1">Test</option>
    <option value="2">Test 2</option>
    <option value="3">Test 3</option>
</select>
</div>
<div>
<select name="homepage_select_second">
    <option>No Match</option>
    <option value="1">Test</option>
    <option value="2">Test 2</option>
    <option value="3">Test 3</option>
</select>
</div>
<div>
<select name="homepage_select_third">
    <option>No Match</option>
    <option value="1">Test</option>
    <option value="2">Test 2</option>
    <option value="3">Test 3</option>
</select>    
</div>
<script>
    $('select[name*="homepage_select"]').change(function(){


    // start by setting everything to enabled
    $('select[name*="homepage_select"] option').attr('disabled',false);

    // loop each select and set the selected value to disabled in all other selects
    $('select[name*="homepage_select"]').each(function(){
        var $this = $(this);
        $('select[name*="homepage_select"]').not($this).find('option').each(function(){
           if($(this).attr('value') == $this.val())
               $(this).attr('disabled',true);
        });
    });

});
    </script>
</body>
</html>