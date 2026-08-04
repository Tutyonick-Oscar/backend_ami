// Micro-interactions and scroll effects
window.addEventListener('scroll', () => {
  const header = document.querySelector('header')
  if (window.scrollY > 50) {
    header.classList.add('shadow-lg', 'bg-surface-container-high/95', 'backdrop-blur-md')
  } else {
    header.classList.remove('shadow-lg', 'bg-surface-container-high/95', 'backdrop-blur-md')
  }
})

// Intersection Observer for fade-in effects
const observerOptions = {
  threshold: 0.1,
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('opacity-100', 'translate-y-0')
      entry.target.classList.remove('opacity-0', 'translate-y-10')
    }
  })
}, observerOptions)

document.querySelectorAll('section > div').forEach((el) => {
  el.classList.add('transition-all', 'duration-1000', 'opacity-0', 'translate-y-10')
  observer.observe(el)
})
