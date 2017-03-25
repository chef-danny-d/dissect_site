<script>
$('.items a').on('click', function() {
  var $this = $(this),
      $bc = $('<div class="item"></div>');

  $this.parents('li').each(function(n, li) {
      var $a = $(li).children('a').clone().css("display", "inline");
      $bc.prepend('>', $a);
  });
    $('.breadcrumb').html( $bc.prepend('<a href="nav.php" id="first-nav-item"><span>root</span></a>') );
    return false;
})

</script>
<script>
  $(document).ready(function(){
    $("#test").click(function(){
        $("#place").load("test.html");
    });
});
</script>
