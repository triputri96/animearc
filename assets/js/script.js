// Variables
let contents = []

function dropMenu() {
  const menuDropdown = document.getElementById('menuDropdown')
  const menuList = document.getElementById('menuList')
  menuList.classList.toggle('d-none')
}

function sortOutput(isAsc) {
  const outputField = document.getElementById('outputField')
  const existedEls = document.getElementsByTagName('span')

  console.log(existedEls, ' existedEls[2]');
  Array.from(existedEls).forEach((el) => {
    console.log(el, 'elll');
    el.remove()
  })

  if (isAsc) {
    contents.sort()
    // outputField.appendChild(ul)
  } else {
    contents.sort()
    contents.reverse()
  }

  console.log(contents, 'contents');
  for (const i in contents) {
    let span = document.createElement('span')
    span.innerText = contents[i]
    span.classList.add('d-block')
    outputField.appendChild(span)
  }
}

function insertContent() {
  const content = document.getElementById('content')
  const outputField = document.getElementById('outputField')
  let span = document.createElement('span')

  contents.push(content.value)

  span.innerText = content.value
  span.classList.add('d-block')
  outputField.appendChild(span)

  content.value = ''
}

function onKeyDown(event) {
  if (event.keyCode == 13) {
    insertContent()
  }
}
