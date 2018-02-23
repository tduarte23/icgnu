const SITE = 'http://localhost/api/showSmbConfig.php'


function show(){
  fetch(SITE)
       .then(function (res) { return res.json() })
       .then(function (pcs) {
         console.log(pcs);
       })
}
