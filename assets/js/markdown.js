const readmeContent = document.querySelector('.readme-content')
const materiWrapper = document.querySelector('.materi-wrapper')
if (materiWrapper !== null) {
    const materiButton = materiWrapper.querySelector('button')
    const materiHeader = materiWrapper.querySelector('.card-header')
    let materiOpened = false
    let contentPositionY = readmeContent.offsetTop + 150
    window.addEventListener('scroll', () => {
        if (document.documentElement.scrollTop >= contentPositionY || document.body.scrollTop >= contentPositionY) {
            materiWrapper.classList.remove('materi-hidden')
            if (materiOpened) openMateri()
        }
        else {
            materiWrapper.classList.add('materi-hidden')
        }
    })
    materiHeader.addEventListener('click', () => {
        materiOpened = !materiOpened
        if (materiOpened) {
            openMateri()
        }
        else {
            closeMateri()
        }
    })
    function openMateri() {
        materiWrapper.classList.add('materi-shown')
        materiButton.classList.remove('rotated')
    }
    function closeMateri() {
        materiButton.classList.add('rotated')
        materiWrapper.classList.remove('materi-shown')
    }
}

// Menambahkan id slug pada tiap heading
const h2Elements = document.querySelectorAll('h2')
const h3Elements = document.querySelectorAll('h3')
const h4Elements = document.querySelectorAll('h4')
h2Elements.forEach(h2 => h2.setAttribute('id', makeSlug(h2.textContent)) )
h3Elements.forEach(h3 => h3.setAttribute('id', makeSlug(h3.textContent)) )
h4Elements.forEach(h4 => h4.setAttribute('id', makeSlug(h4.textContent)) )
function makeSlug(text) {
    return text.replace('_(', '(')
        .replace(')_', ')')
        .toLowerCase()
        .replace(/_/g, '')
        .replace(/[^\w ]+/g,'')
        .replace(/ +/g,'-')
}
const tables = document.querySelectorAll('table')
tables.forEach(table => table.classList.add('table'))