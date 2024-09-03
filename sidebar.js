// JavaScript for sidebar toggle
document.getElementById('toggle-button').addEventListener('click', function() {
    const sidebar = document.querySelector('.sidebar');
    const toggleIcon = this.querySelector('i'); // Get the icon element inside the button
    sidebar.classList.toggle('collapsed');

    // Toggle icon rotation
    if (sidebar.classList.contains('collapsed')) {
        toggleIcon.classList.replace('bi-chevron-left', 'bi-chevron-right'); // Change to right arrow
    } else {
        toggleIcon.classList.replace('bi-chevron-right', 'bi-chevron-left'); // Change back to left arrow
    }
});

  // JavaScript for dropdown menu
  document.getElementById('login-button').addEventListener('click', function(event) {
    event.preventDefault();
    var dropdown = document.getElementById('dropdown-menu');
    dropdown.classList.toggle('show');
  });

  // Close the dropdown if clicked outside
  window.addEventListener('click', function(event) {
    if (!event.target.matches('#login-button') && !event.target.closest('.dropdown')) {
      var dropdown = document.getElementById('dropdown-menu');
      if (dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
      }
    }
  });
  // Toggle navbar menu on mobile
document.querySelector('.navbar-menu-toggle').addEventListener('click', function() {
    document.querySelector('.navbar-list').classList.toggle('active');
});
// JavaScript untuk mengatur navigasi yang dinamis
document.querySelectorAll('.navbar-link').forEach(link => {
  link.addEventListener('click', function (e) {
    const targetURL = this.href;
    const currentURL = window.location.href;

   
    if (targetURL === currentURL) {
      const sectionId = this.getAttribute('href').split('#')[1]; 
      if (sectionId) {
        e.preventDefault(); 
        
        const sectionElement = document.getElementById(sectionId); 
        if (sectionElement) {
          sectionElement.scrollIntoView({
            behavior: 'smooth'
          });
        }
      }
    }
  });
});