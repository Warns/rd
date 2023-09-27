document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('searchModal');
    var btn = document.getElementById("openSearchModal");
    var span = document.getElementById("closeSearchModal");

    btn.onclick = function() {
      modal.style.display = "block";
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
