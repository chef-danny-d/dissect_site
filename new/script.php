<script>
$('.items a').on('click', function() {
  var $this = $(this),
      $bc = $('<div class="item"></div>');

  $this.parents('li').each(function(n, li) {
      var $a = $(li).children('a').clone();
      $bc.prepend(' > ', $a);
  });
    $('.breadcrumb').html( $bc.prepend('<a href="nav.php">Home</a>') );
    return false;
})

</script>
<!--
<script>
  $( "#test" ).load( "test.html p" );
</script>
-->
