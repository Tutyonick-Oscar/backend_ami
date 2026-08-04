const listViewBtn = document.getElementById('listViewBtn')
const calendarViewBtn = document.getElementById('calendarViewBtn')
const eventsGrid = document.getElementById('eventsGrid')
const calendarGrid = document.getElementById('calendarGrid')

listViewBtn.addEventListener('click', () => {
  eventsGrid.classList.remove('hidden')
  calendarGrid.classList.add('hidden')

  listViewBtn.classList.add('bg-surface', 'text-primary', 'shadow-sm')
  listViewBtn.classList.remove('text-on-surface-variant')

  calendarViewBtn.classList.remove('bg-surface', 'text-primary', 'shadow-sm')
  calendarViewBtn.classList.add('text-on-surface-variant')
})

calendarViewBtn.addEventListener('click', () => {
  eventsGrid.classList.add('hidden')
  calendarGrid.classList.remove('hidden')

  calendarViewBtn.classList.add('bg-surface', 'text-primary', 'shadow-sm')
  calendarViewBtn.classList.remove('text-on-surface-variant')

  listViewBtn.classList.remove('bg-surface', 'text-primary', 'shadow-sm')
  listViewBtn.classList.add('text-on-surface-variant')
})

// Micro-interactions for buttons
document.querySelectorAll('button').forEach((btn) => {
  btn.addEventListener('mousedown', () => btn.classList.add('opacity-80'))
  btn.addEventListener('mouseup', () => btn.classList.remove('opacity-80'))
  btn.addEventListener('mouseleave', () => btn.classList.remove('opacity-80'))
})
