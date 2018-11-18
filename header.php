<!DOCTYPE html>

<html>
<head>
  <link href="css/style.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $(".nav li a").on('click', function(e) {
        e.preventDefault()
        var page = $(this).data('f1');
        $("#forms .f1:not('.hide')").stop().fadeOut('fast', function() {
            $(this).addClass('.hide');
            $('#forms .f1[data-page="'+page+'"]').fadeIn('slow').removeClass('hide');
        });
    });
});
</script>
<!-- jQuery -->
