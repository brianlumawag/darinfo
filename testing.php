<a href="page2.html" class="page-transition">Go to Page 2</a>
<style>
/* Define the page transition classes */
.page-transition {
  transition: transform 0.5s ease-in-out;
}

.page-transition-exit {
  transform: translateX(-100%);
}

.page-transition-enter {
  transform: translateX(100%);
}

/* Hide the overflow on the body to prevent scrolling during animation */
body {
  overflow: hidden;
}

</style>
<script>
// Add event listener to page links
document.querySelectorAll('.page-transition').forEach(link => {
  link.addEventListener('click', e => {
    // Prevent default link behavior
    e.preventDefault();

    // Add exit class to body
    document.body.classList.add('page-transition-exit');

    // Wait for animation to finish, then go to the next page
    setTimeout(() => {
      window.location.href = link.href;
    }, 500);
  });
});

</script>
