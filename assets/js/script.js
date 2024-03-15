// Global Variables
let contents = []
const charCollections = [
  {
    'imgPath': 'assets/imgs/frieren.png',
    'name': 'Frieren',
    'detailName': '「フリーレン Furīren?」',
    'desc': "Protagonis utama dalam \"Frieren: Beyond Journey\'s End\" adalah Mage dari Kelompok Pahlawan dan melakukan perjalanan bersama Hero Himmel, Warrior Eisen, dan Priest Heiter dalam perjalanan sepuluh tahun untuk mengalahkan Raja Iblis.",
    'gender': 'Perempuan',
    'age': '1000+',
    'species': 'Elf',
    'class': 'Mage',
    'rank': 'Back-Alley Mage',
    'affiliation': "Hero Party"
  },
  {
    'imgPath': 'assets/imgs/fern.png',
    'name': 'Fern',
    'detailName': '「フェルン Ferun?」',
    'desc': 'Fern adalah seorang penyihir muda, dan dia menemani Frieren sebagai murid dan anggota kelompoknya. Dia adalah seorang pengungsi perang yatim piatu asal Tanah Selatan, kemudian diadopsi oleh Heiter dan ditempatkan di bawah perawatan Frieren setelah kematiannya.',
    'gender': 'Perempuan',
    'age': '18',
    'species': 'Manusia',
    'class': 'Penyihir',
    'rank': 'Back-Alley Mage',
    'affiliation': "Frieren\'s Party"
  },
  {
    'imgPath': 'assets/imgs/stark.png',
    'name': 'Stark',
    'detailName': '「シュタルク Shutaruku?」',
    'desc': 'Stark adalah seorang pejuang. Setelah desanya diserang oleh para Iblis, dia melarikan diri dan menjadi murid Eisen. Atas petunjuk Eisen, dia bergabung dengan kelompok Frieren sebagai bagian depan mereka.',
    'gender': 'Laki-laki',
    'age': '18 tahun (Bab 26)',
    'species': 'Manusia',
    'class': 'Warrior',
    'affiliation': "Frieren\'s Party"
  }
]
const charaImg = document.getElementById('charaImg')
const charaDesc = document.getElementById('charaDesc')
const img = document.createElement('img')
const h3 = document.createElement('h3')
const sup = document.createElement('sup')
const p = document.createElement('p')
const nav = document.getElementById('navbar')
let lastScrollTop = 0

window.addEventListener('load', () => {
  selectImage(0)
})

window.addEventListener('scroll', () => {
  let currentScroll = window.scrollY || document.documentElement.scrollTop

  if (currentScroll > lastScrollTop) {
    nav.classList.add('hidden')
  } else {
    nav.classList.remove('hidden')
  }

  lastScrollTop = currentScroll
})

function dropMenu() {
  const menuDropdown = document.getElementById('menuDropdown')
  const menuList = document.getElementById('menuList')
  menuList.classList.toggle('d-none')
}

function sortOutput(isAsc) {
  const outputField = document.getElementById('outputField')
  const existedEls = document.getElementsByTagName('span')

  Array.from(existedEls).forEach((el) => {
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

function selectImage(index) {
  // image
  img.src = charCollections[index].imgPath
  img.alt = charCollections[index].name
  img.height = 450
  img.classList.add('fit-cover', 'w-100')
  charaImg.appendChild(img)
  // description
  h3.innerHTML = charCollections[index].name
  h3.classList.add('mb-2')
  sup.innerHTML = charCollections[index].detailName
  p.innerHTML = charCollections[index].desc
  p.classList.add('align-justify')
  h3.appendChild(sup)
  charaDesc.append(h3, p)
  // detail
  document.getElementById('gender').innerHTML = charCollections[index].gender
  document.getElementById('age').innerHTML = charCollections[index].age
  document.getElementById('species').innerHTML = charCollections[index].species
  document.getElementById('class').innerHTML = charCollections[index].class
  document.getElementById('rank').innerHTML = charCollections[index].rank ?? '-'
  document.getElementById('affiliation').innerHTML = charCollections[index].affiliation
}