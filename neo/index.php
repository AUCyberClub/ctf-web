<script>
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
var murl = "";
  if(!localStorage.neoBlocker){
    localStorage.neoBlocker = 1;
  }
  if(parseInt(localStorage.neoBlocker) === 0){
      getJSON("./text.json").then((a)=>{
        murl = a.url;
      });
  }

    function bluepill(){
      if(murl){
        window.location.href= murl;
      }else{
        alert("Henüz hazır değilsin neo!");
      }
    }
</script>
Seç bakalım neo;
<br>
<hr>
<div onclick = "alert('Tamam, ölene kadar matrixin içinde kal ölünce de seni karamelize edip bebeklere beslesinler neo, hıh. ');"; style="margin:30px; padding:30px; background:red; float:left; border-radius:10px;"></div>
<div onclick= "bluepill()" style="margin:30px; padding:30px; background:blue; float:left; border-radius:10px;"></div>
