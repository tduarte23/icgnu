const submit = document.querySelector('#submit')
const section = document.querySelector('#section')
const usuario = document.querySelector('#usuario')
const path = document.querySelector('#path')
const validUsers = document.querySelector('#validUsers')
const comment = document.querySelector('#comment')

submit.addEventListener('click', function(event) {
  event.preventDefault()
  const url = `/api/addSharedFolder.php?section=${section.value}&usuario=${usuario.value}&path=${path.value}&validUsers=${validUsers.value}&comment=${comment.value}`
  fetch(url)
    .then(function(res){ location.href = 'pastas.html'})
})
