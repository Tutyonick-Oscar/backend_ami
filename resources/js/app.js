//
import Alpine from 'alpinejs'

Alpine.data('alert', function () {
  return {
    isVisible: false,
    dismiss() {
      this.isVisible = false
    },
    init() {
      setTimeout(() => {
        this.isVisible = true
      }, 80)
      setTimeout(() => {
        this.dismiss()
      }, 5000)
    },
  }
})

Alpine.start()

// Simple scroll effect for navbar
window.addEventListener('scroll', () => {
  const header = document.querySelector('header')
  if (window.scrollY > 50) {
    header.classList.add('shadow-md', 'bg-white/95', 'backdrop-blur-sm')
  } else {
    header.classList.remove('shadow-md', 'bg-white/95', 'backdrop-blur-sm')
  }
})

// Intersection Observer for fade-in animations
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
