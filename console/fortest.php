<?php session_start();  
require ('../database/dbconnect.php');
require ('../php/checkadmin.php');

// http://jsfiddle.net/MMzhS/1/

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kunkai Book Shop</title>
  <link rel="icon"type="image/png"href="../img/Logo.png">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/console.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="../js/allpage.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../toolbar/css/froala_editor.css">
  <link rel="stylesheet" href="../toolbar/css/froala_style.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/code_view.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/draggable.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/colors.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/emoticons.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/image_manager.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/image.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/table.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/char_counter.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/video.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/file.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/help.css">
  <link rel="stylesheet" href="../toolbar/css/third_party/spell_checker.css">
  <link rel="stylesheet" href="../toolbar/css/plugins/special_characters.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
  <style>
    body {
      text-align: center;
    }
    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
    .ss {
      background-color: red;
    }
  </style>
</head>
<body onload="start()">
<script>
function start(){
    timeout();
}
</script>
<span id="time_now_set" style="display:none;"></span>
<span id="timehr" style="display:none;"></span>
<span id="timem" style="display:none;"></span>
<span id="times" style="display:none;"></span>
<?php require ("../style/admin_style.php"); ?>
    <div class="container mt-5">
    <h3 class="text-center mb-3">ทดสอบการรับข้อความ</h3>
      <div id="editor">
      <div id='edit' style='margin-top: 30px;'>
      </div>
      </div>
      <form id="formtest" action="../console/fortest_get.php" method="POST" class="text-left" style="margin-left:95px;">
      <input id="x" type="hidden" name="x">
      </form>
      <input type="button" class="btn btn-primary" value="ทดสอบ" onclick="x();">
    </div>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.2.7/purify.min.js"></script>

  <!-- Website Kunkaibookshop -->
  <script type="text/javascript" src="../toolbar/js/froala_editor.min.js"></script>

  <script type="text/javascript" src="../toolbar/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/help.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/print.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/third_party/spell_checker.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/special_characters.min.js"></script>
  <script type="text/javascript" src="../toolbar/js/plugins/word_paste.min.js"></script>
  <script>
    (function () {
      new FroalaEditor("#edit")
    })()
  </script>
  <script>
  function x(){
    var form = document.getElementById("formtest");
    var id = document.getElementsByClassName("fr-element")[0].innerHTML;
    var kill = document.getElementById("x").value = id;
    form.submit();
  }
  </script>
  </body>
</html>
<script>
$(window).on('beforeunload', function(){
  $(window).scrollTop(0);
});
</script>
</body>
</html>