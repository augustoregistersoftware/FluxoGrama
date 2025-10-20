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

    document.getElementById('btnconteudoblogging').addEventListener('click', function () {
    Swal.fire({
      title: "Guest Blogging",
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: "Publicação de Artigos em Blogs Externos",
      denyButtonText: `Maior Autoridade Organizacional e Visibilidade`
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        Swal.fire("Publicação de Artigos", "Objetivo: Publicar artigos em blogs e sites externos relevantes para gerar backlinks, aumentar o tráfego do site e construir a autoridade da sua marca. <br>Ações: Identifique sites e blogs que aceitam artigos de autores convidados. Crie conteúdo original e de alta qualidade que seja relevante para o público desses sites. Inclua links para o seu site nos artigos publicados.", "info");
      } else if (result.isDenied) {
        Swal.fire("Maior Autoridade", "Objetivo: Aumentar a autoridade da sua organização e a visibilidade da sua marca através de ações de SEO Off-Page. <br>Ações: Construa backlinks de alta qualidade, participe de eventos e publique conteúdo relevante em sites e blogs do seu setor. Promova a sua marca nas redes sociais e interaja com o seu público.", "info");
      }
      });
    });

    document.getElementById('btnconteudocolab').addEventListener('click', function () {
    Swal.fire({
        title: "Colaboração com Parceiros",
        html: "Objetivo: Estabelecer parcerias com outras empresas e influenciadores do seu setor para promover o seu conteúdo e gerar backlinks. <br>Ações: Identifique potenciais parceiros que possuem público-alvo similar ao seu. Crie campanhas de co-marketing, participe de eventos conjuntos e promova o conteúdo uns dos outros.",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Obtenção de Backlinks de Alta Qualidade",
        denyButtonText: `Integração em Plataformas de Bookmarking`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          Swal.fire("Obtenção de Backlinks", "Objetivo: Obter backlinks de alta qualidade de sites relevantes do seu setor para aumentar a autoridade do seu site e melhorar o seu ranqueamento nos mecanismos de busca. <br>Ações: Utilize diferentes estratégias de link building, como guest blogging, divulgação de conteúdo em diretórios e fóruns, criação de infográficos e construção de relacionamentos com outros sites. Concentre-se em obter backlinks de sites com alta autoridade e relevância para o seu nicho.", "info");
        } else if (result.isDenied) {
          Swal.fire("Integração em Plataformas", "Objetivo: Integrar o seu conteúdo em plataformas de bookmarking, para aumentar a visibilidade e gerar tráfego para o site. <br>Ações: Adicione os seus conteúdos mais relevantes. Utilize tags e descrições relevantes para facilitar a busca e o acesso ao seu conteúdo.", "info");
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