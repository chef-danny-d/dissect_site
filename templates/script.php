<script src="js/ui.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="js/jquery.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

<script src="js/dropzone.js"></script>

<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
 });
 });
</script>
<script>

$("#hide").click(function(){
    $("p").hide();
});

$("#show").click(function(){
    $("p").show();
});

</script>

<script>

    $(document).ready(function() {
      $('#acc_nav').addClass('left');
    });
    $("#open").click(function() {
      $("#acc_nav").removeClass("left").addClass("right");
    });
    $("#close").click(function() {
      $("#acc_nav").addClass("left").removeClass("right");
    }); 
    $("#open").click(function() {
      $("#navimg").addClass("hide");
    });
    $("#close").click(function() {
      $("#navimg").removeClass("hide");
    }); 
</script>

<script>
$(document).ready(function(){
        $(".per").show();
        $(".nor").hide();
});
$(document).ready(function(){
    $(".pers").click(function(){
        $(".nor").hide();
    });
    $(".pers").click(function(){
        $(".per").show();
    });
});
$(document).ready(function(){
    $(".norm").click(function(){
        $(".per").hide();
    });
    $(".norm").click(function(){
        $(".nor").show();
    });
});

</script>
<script src="js/jquery.particleground.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        particleground(document.getElementById('particles'), {
            dotColor: '#33B29A',
            lineColor: '#5cbdaa'
        });
        var intro = document.getElementById('intro');
        intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
    }, false);
</script>