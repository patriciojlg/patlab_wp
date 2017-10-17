<!-- fix contact button -->
<?php
require( 'movile_detect.php');
$detect = new Mobile_Detect;
?>

<?php 

if (!$detect->isMobile()) {
 echo '<div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large  light-green accent-4 btn">
      <i class="large material-icons">phone</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">mail</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">phone</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">format_quote</i></a></li>
    </ul>
  </div>';   // Your code here.
}
else {
echo '<div class="fixed-action-btn horizontal">
    <a href="tel:+56991092562" class="btn-floating btn-large  light-green accent-4 btn">
      <i class="large material-icons">phone</i>
    </a>
    
  </div>';
}
?>

