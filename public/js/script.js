const body = document.querySelector('body'),
  sidebar = body.querySelector('nav'),
  toggle = body.querySelector('.toggle'),
  searchBtn = body.querySelector('.search-box'),
  modeSwitch = body.querySelector('.toggle-switch'),
  modeText = body.querySelector('.mode-text')
logoutLink = document.getElementById('logout-link')
toggle.addEventListener('click', () => {
  sidebar.classList.toggle('close')
})
searchBtn.addEventListener('click', () => {
  sidebar.classList.remove('close')
})
modeSwitch.addEventListener('click', () => {
  body.classList.toggle('dark')

  if (body.classList.contains('dark')) {
    modeText.innerText = 'Light mode'
  } else {
    modeText.innerText = 'Dark mode'
  }
})

logoutLink.addEventListener('click', function (event) {
  event.preventDefault() // Prevent default form submission
  const confirmation = confirm('Are you sure you want to log out?')

  if (confirmation) {
    console.log('User confirmed logout. Redirecting...')
    window.location.href = 'index.php'
  } else {
    console.log('User canceled logout.')
  }
})
