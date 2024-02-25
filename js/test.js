// Example using Bootstrap events
const pageItems = document.querySelectorAll('.page-item');

pageItems.forEach(item => {
  item.addEventListener('click', (event) => {
    const pageNumber = event.target.textContent;
    // Update your page content based on pageNumber
  });
});
