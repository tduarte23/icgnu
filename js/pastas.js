const shares = document.querySelector('#shares')

fetch("/api/showSmbConfig.php")
  .then(function (res) { return res.json() })
  .then(function (sections) {
    let content = '';
    
    for (const section in sections) {
      if (section !== "global") {
        console.log(sections[section]["  path"])
        content += `<div class="col">
        <div class="card" style="width: 190px;">
        <img class="card-img-top" src="../img/iPasta.png" alt="Card image cap">
          <div class="card-body">
          <h5>${section}</h5>
              <p>${sections[section]["  comment"]}</p>
              <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content=
              "Path = ${sections[section]["  path"]} \n
                Valid user = ${sections[section]["  valid users"]}
                ">
                  Mais...
                </button>
              </div>
        </div>
      </div>`
      }
    }

    shares.innerHTML = content
    $('[data-toggle="popover"]').popover()
  })
