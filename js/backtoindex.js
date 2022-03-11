function backtomyhome() {
  }
  $(".backtohome").click(function(){
    var timeleft = 3;
    var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
      clearInterval(downloadTimer);
      var url = '../index.php'; 
      setTimeout(function(){ window.location = url; });
    } else {
      document.getElementById("demo").style.color = "red";
      document.getElementById("demo").innerHTML = "กำลังกลับสู่หน้าหลักใน " + timeleft;
    }
    timeleft -= 1;
    }, 1000);
  });