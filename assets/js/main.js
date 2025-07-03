document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu toggle
  const mobileMenuToggle = document.getElementById("mobile-menu-toggle")
  const mobileMenu = document.getElementById("mobile-menu")

  if (mobileMenuToggle && mobileMenu) {
    mobileMenuToggle.addEventListener("click", () => {
      const expanded = mobileMenuToggle.getAttribute("aria-expanded") === "true" || false
      mobileMenuToggle.setAttribute("aria-expanded", !expanded)
      mobileMenu.classList.toggle("hidden")
    })
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const href = this.getAttribute("href")

      if (href !== "#") {
        e.preventDefault()

        const target = document.querySelector(href)
        if (target) {
          target.scrollIntoView({
            behavior: "smooth",
          })
        }
      }
    })
  })

  // Add animation classes when elements come into view
  const animatedElements = document.querySelectorAll(".animate-on-scroll")

  if (animatedElements.length > 0) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animated")
          }
        })
      },
      {
        threshold: 0.1,
      },
    )

    animatedElements.forEach((element) => {
      observer.observe(element)
    })
  }
})
