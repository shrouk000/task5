<html>
  <head></head>
  <body>
    <h2> do while loop</h2>
    <div class="alert alert-success">
   
    </div>
    
  </body>
</html>
<?php
    
    
    $total = 0;
    
    for ($i = 0; $i <= 30; $i++) {
        $total += $i;
    }
    
    echo "The sum of all integers between 0 and 30 is: " . $total."<br>";
    function calculateRectangleArea($length, $width) {
      $area = $length * $width;
      return $area;
  }
  
  // Example usage
  $length = 5;
  $width = 3;
  echo "The area of the rectangle is: " . calculateRectangleArea($length, $width); // Output: The area of the rectangle is: 15
    ?>
  
        