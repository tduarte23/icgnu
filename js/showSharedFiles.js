const shares = document.querySelector('#shares')

fetch("/api/showSmbConfig.php")
  .then(function (res) { return res.json() })
  .then(function (sections) {
    let content = '';

    for (const section in sections) {
      if (section !== "global") {
        content += `<div class="card">
        <img class="card-img-top" src="../img/iPasta.png" alt="Card image cap">
          <div class="card-body">
            <h2>${section}</h2>
          </div>
        </div>`
      }
    }

    shares.innerHTML = content
  })
