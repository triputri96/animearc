const btnLogin = document.getElementsByName('btnLogin')
const btnBatal = document.getElementsByName('btnBatal')
const expiredContent = document.getElementById('expiredContent')
const expiredText = document.getElementById('expiredText')

if (expiredContent.classList.contains('d-block')) {
  console.log(expiredContent);
  let sec = 9
  const myInterval = setInterval(() => {
    expiredText.textContent = sec
    sec--

    if (sec < 0)
      clearInterval(myInterval)
  }, 1000);
}

if (btnLogin[0].classList.contains('disabled')) {
  setTimeout(resetStyle, 10000)
}

function resetStyle() {
  btnLogin[0].classList.remove('disabled')
  btnBatal[0].classList.remove('disabled')
  expiredContent.classList.remove('d-block')
  expiredContent.classList.add('d-none')
}