// Simple micro-interaction for form inputs
document.querySelectorAll('input, select, textarea').forEach((el) => {
  el.addEventListener('focus', () => {
    el.parentElement.classList.add('border-secondary')
  })
  el.addEventListener('blur', () => {
    el.parentElement.classList.remove('border-secondary')
  })
})

// Form submission simulation
document.querySelector('form').addEventListener('submit', (e) => {
  e.preventDefault()
  const btn = e.target.querySelector('button')
  const originalHtml = btn.innerHTML
  btn.innerHTML = 'Envoi en cours...'
  btn.disabled = true

  setTimeout(() => {
    btn.innerHTML = 'Message envoyé !'
    btn.classList.replace('bg-primary', 'bg-green-600')
    e.target.reset()
    setTimeout(() => {
      btn.innerHTML = originalHtml
      btn.classList.replace('bg-green-600', 'bg-primary')
      btn.disabled = false
    }, 3000)
  }, 1500)
})
