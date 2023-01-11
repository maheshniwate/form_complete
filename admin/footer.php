<footer class="main-footer">
  <strong>Copyright &copy; 2022 <a href="">Hospital</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
  </div>
</footer>
<script src="plugins/jquery/jquery.min.js"></script>
<script>
$(function(){
  $(".nav-list-item").each(function(){
    if($(this).prop("href") == window.location.href){
      $(this).addClass("active");
      $(this).parent("li").addClass("menu-open");
      $(this).parent("li").parent("ul").css("display","block");
      $(this).children().children().css("transform","rotate(-90deg)");

    }
  });
});
</script>