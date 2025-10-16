<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

  function openModal(title, text) {
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
    document.getElementById('seoModalOnPage').style.display = 'flex';
  }

  function openSeoOffPage() {
    document.getElementById('seoModalOffPage').style.display = 'flex';
  }

  function closeSeoOnModal() {
    document.getElementById('seoModalOnPage').style.display = 'none';
  }

  function closeSeoOffModal() {
    document.getElementById('seoModalOffPage').style.display = 'none';
  }

  document.getElementById('btnconteudocomp').addEventListener('click', function () {
    Swal.fire({
      title: "Conteúdo Compartilhável",
      html: "Objetivo: Criar conteúdo que seja facilmente compartilhado nas redes sociais e em outras plataformas online.<br>Ações: Crie conteúdo visualmente atraente, com títulos chamativos e informações relevantes. Utilize diferentes formatos de conteúdo, como infográficos, vídeos curtos e listas. Inclua botões de compartilhamento social em todas as páginas do site.",
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Aumentar Distribuição Interna e Externa",
      denyButtonText: `Aumento do Engajamento Social (Redes Sociais, Bookmarking)`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire("Aumentar Distribuição", "Objetivo: Aumentar a distribuição do seu conteúdo, tanto internamente quanto externamente, para alcançar um público maior e gerar mais backlinks. <br>Ações: Promova o seu conteúdo em diferentes canais, como redes sociais, e-mail marketing, newsletters e fóruns online. Incentive o compartilhamento do conteúdo pelos seus colaboradores e parceiros.", "info");
      } else if (result.isDenied) {
        Swal.fire("Aumento do Engajamento", "Objetivo: Aumentar o engajamento social nas redes sociais e em plataformas de bookmarking para promover o seu conteúdo, gerar tráfego para o site e construir a sua marca. <br>Ações: Crie perfis nas principais redes sociais e plataformas de bookmarking. Publique conteúdo relevante e interaja com o seu público. Utilize hashtags relevantes e participe de grupos e comunidades online.", "info");
      }
    });
  });


  function openTab(tabId) {
    let tabs = document.querySelectorAll(".tab");
    let contents = document.querySelectorAll(".tab-content");

    tabs.forEach(t => t.classList.remove("active"));
    contents.forEach(c => c.classList.remove("active"));

    document.querySelector(`.tab[onclick="openTab('${tabId}')"]`).classList.add("active");
    document.getElementById(tabId).classList.add("active");
  }

  window.onclick = function (event) {
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