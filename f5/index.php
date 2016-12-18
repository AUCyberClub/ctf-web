Sayfayı yenileyerek sayacı 1 arttırabilirsin!<br>
<br>Yenileme kısayolu (PC): f5
<br>Yenileme kısayolu (MAC): cmd+R
<br>
<hr>
<b>Sayac: </b> <span id="counter"></span>
<br><br>

Kappa :)
<script>
  if(!localStorage.counter){
    localStorage.counter = 0;
  }

  localStorage.counter = parseInt(parseInt(localStorage.counter) + 1);
  document.getElementById("counter").innerHTML = localStorage.counter;

  if(parseInt(localStorage.counter) == 1000){
    getJSON("./meh.json").then(meh => {
      alert(meh.key);
    });
  }

  function getJSON(url) {
      return new Promise(function(resolve, reject) {
          var xhr = new XMLHttpRequest();
          xhr.open('get', url, true);
          xhr.responseType = 'json';
          xhr.onload = function() {
              var status = xhr.status;
              if (status == 200) {
                  resolve(xhr.response);
              } else {
                  reject(status);
              }
          };
          xhr.send();
      });
  }

</script>
