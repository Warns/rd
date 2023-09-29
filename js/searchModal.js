document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('searchModal');
  var btn = document.getElementById("openSearchModal");
  var span = document.getElementById("closeSearchModal");
  var searchInput = modal.querySelector("input[type='search']"); // This targets the search input in the modal

  btn.onclick = function() {
      modal.style.display = "block";
      searchInput.focus();  // Set focus on the input when modal is opened
  }

  span.onclick = function() {
      modal.style.display = "none";
  }

  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
});
