<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    function openModal(title,text) {
      Swal.fire({
        title: title,
        html: text.replace(/\n/g, "<br>"),
        text: text,
        icon: "info"
        });
    }

    function closeModal() {
      document.getElementById('myModal').style.display = 'none';
    }

    function openSeoOnPage() {
      document.getElementById('seoModal').style.display = 'flex';
    }

    function closeSeoModal() {
      document.getElementById('seoModal').style.display = 'none';
    }

    function openTab(tabId) {
      let tabs = document.querySelectorAll(".tab");
      let contents = document.querySelectorAll(".tab-content");

      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      document.querySelector(`.tab[onclick="openTab('${tabId}')"]`).classList.add("active");
      document.getElementById(tabId).classList.add("active");
    }

    window.onclick = function(event) {
      let modal = document.getElementById('myModal');
      let seoModal = document.getElementById('seoModal');
      if (event.target == modal) {
        modal.style.display = 'none';
      }
      if (event.target == seoModal) {
        seoModal.style.display = 'none';
      }
    }
  </script>