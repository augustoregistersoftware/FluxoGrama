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
    
    // Close sidebar when clicking outside on mobile
    let sidebar = document.getElementById('sidebar');
    let hamburgerBtn = document.querySelector('.hamburger-btn');
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
    
    // Close sidebar when clicking outside on mobile
    let sidebar = document.getElementById('sidebar');
    let hamburgerBtn = document.querySelector('.hamburger-btn');
    if (window.innerWidth <= 768 && sidebar.classList.contains('active') && !sidebar.contains(event.target) && !hamburgerBtn.contains(event.target)) {
        sidebar.classList.remove('active');
        document.body.classList.remove('sidebar-open');
    }
  }

  function toggleSidebar() {
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
    
    // Close sidebar when clicking outside on mobile
    let sidebar = document.getElementById('sidebar');
    let hamburgerBtn = document.querySelector('.hamburger-btn');
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
    
    // Close sidebar when clicking outside on mobile
    let sidebar = document.getElementById('sidebar');
    let hamburgerBtn = document.querySelector('.hamburger-btn');
    if (window.innerWidth <= 768 && sidebar.classList.contains('active') && !sidebar.contains(event.target) && !hamburgerBtn.contains(event.target)) {
        sidebar.classList.remove('active');
        document.body.classList.remove('sidebar-open');
    }
  }

  function toggleSidebar() {
    let sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('active');
    document.body.classList.toggle('sidebar-open');
  }

  function showMenuInfo(option) {
      let title = "";
      let html = "";
      let icon = "info";

      switch(option) {
          case 'Home':
              title = "Bem-vindo ao Fluxograma SEO";
              html = "Esta é a página inicial onde você pode visualizar todo o processo de SEO.";
              break;
          case 'Metodologia':
              title = "Nossa Metodologia";
              html = `
              <div style="text-align: left;">
                  <p>O desenvolvimento do workflow de integração entre Search Engine Optimization baseou-se em uma abordagem técnico-conceitual que integra práticas de SEO e princípios de Gestão da Informação a partir de referências diversas, sendo concebido em três etapas.</p>
                  <ul style="list-style-type: none; padding-left: 0;">
                      <li style="margin-bottom: 10px;"><b>Etapa 1 — Concepção do Modelo:</b> Foi definido o fluxo de integração entre SEO e GI, a partir da revisão de literatura que abordem estes dois temas. O objetivo foi traduzir práticas de SEO em etapas aplicáveis à gestão informacional organizacional oferencendo, de forma clara, os objetivos e as ações a serem desenvolvidas pela organização em sua implementação .</li>
                      <li style="margin-bottom: 10px;"><b>Etapa 2 — Implementação Técnica:</b> O site foi desenvolvido utilizando as tecnologias PHP CI3, CSS e JavaScript, hospedado na plataforma Render, garantindo acesso aberto e responsivo. O workflow foi construído de forma interativa, permitindo a navegação entre as etapas e a compreensão visual das relações entre as quatro principais dimensões de SEO e os processos informacionais.</li>
                      <li style="margin-bottom: 10px;"><b>Etapa 3 — Integração SEO + GI:</b> O modelo associa elementos de SEO, como seleção de palavras-chave, SEO Off-page, SEO On-page e monitoramento de desempenho, às práticas de Gestão da Informação, voltadas recuperação, organização, disseminação e uso de informações no âmbito organizacional. Essa integração propõe que os princípios de otimização para mecanismos de busca possam ser adaptados para aprimorar também mecanismos internos de busca e sistemas de informação corporativos.</li>
                  </ul>
              </div>
              `
              break;
          case 'Sobre':
              title = "Sobre";
              html = `
                  <div style="text-align: left;">
                      <p>Este é um modelo de um processo tecnológico que visa otimizar a estruturação e categorização dos dados, facilitando a recuperação e análise de informações relevantes, como evidenciado por Castanha e Camossi (2024).</p>
                      <p>O workflow foi estruturado em quatro etapas principais, cada uma com subtarefas específicas:</p>
                      <ul style="list-style-type: none; padding-left: 0;">
                          <li style="margin-bottom: 10px;"><b>1) Pesquisa e Seleção de Palavras-Chave:</b> mapeamento das necessidades informacionais da organização e seleção de termos relevantes para indexação e busca.</li>
                          <li style="margin-bottom: 10px;"><b>2) Implementação de SEO On-Page:</b> estruturação e organização das informações para otimizar sua visibilidade e recuperação, tanto em mecanismos de busca quanto em sistemas internos de informação.</li>
                          <li style="margin-bottom: 10px;"><b>3) Aplicação de SEO Off-Page:</b> fortalecimento da autoridade e visibilidade das informações por meio de estratégias externas que ampliam a disseminação e a confiabilidade do conteúdo.</li>
                          <li style="margin-bottom: 10px;"><b>4) Monitoramento e Análise de Desempenho:</b> acompanhamento contínuo dos resultados, avaliando a eficácia das estratégias de SEO aplicadas à gestão da informação.</li>
                      </ul>
                      <p>Esta iniciativa surge da necessidade de integrar metodologias de SEO (Search Engine Optimization) à Gestão da Informação (GI), propondo um modelo aplicado que apoia organizações nos processos de recuperação, organização, disseminação e uso de informações dentro das organizações, aprimorando o processo de GI.</p>
                  </div>
              `;
              break;
          case 'Referências':
              title = "Referências";
              html = `
              <div style="text-align: left;">
                  <ul style="list-style-type: none; padding-left: 0;">
                      <li style="margin-bottom: 10px;">CAMOSSI, G. et al. As técnicas de Search Engine Optimization e os elementos da indexação no processo de ranqueamento em mecanismos de busca. Em Questão, [S. l.], v. 29, p. e, 3 nov. 2023. Disponível em: <b>https://www.scielo.br/j/emquestao/a/XMcGYmptz4VcSMQWB9rZ9TC/</b></li>
                      <li style="margin-bottom: 10px;">CASTANHA, R. G.; CAMOSSI, G. Search Engine Optimization como ferramenta estratégica na gestão da informação: primeiras perspectivas. Em Questão, [S. l.], v. 30, 16 jul. 2024. Disponível em: <b>https://seer.ufrgs.br/index.php/EmQuestao/article/view/138007</b></li>
                      <li style="margin-bottom: 10px;">DOMENE, F. M. Técnicas avanzadas de posicionamiento en buscadores. [S. l.]: Anaya multimedia, 2014. </li>
                      <li style="margin-bottom: 10px;">DOVER, D.; DAFFORN, E. Search engine optimization secrets: do what you never thought possible with SEO. Indianapolis, IN: Wiley, 2011(Secrets).</li>
                      <li style="margin-bottom: 10px;">GANDOUR, A.; REGOLINI, A. Web site search engine optimization: a case study of Fragfornet. Library Hi Tech News, [S. l.], v. 28, n. 6, p. 6–13, 1 jan. 2011. Disponível em: <b>https://doi.org/10.1108/07419051111173874</b></li>
                      <li style="margin-bottom: 10px;">GIOMELAKIS, D.; VEGLIS, A. Employing Search Engine Optimization Techniques in Online News Articles. Studies in Media and Communication, [S. l.], v. 3, n. 1, p. 22–33, 2015. Disponível em: <b>https://econpapers.repec.org/article/rfasmcjnl/v_3a3_3ay_3a2015_3ai_3a1_3ap_3a22-33.htm</b></li>
                      <li style="margin-bottom: 10px;">IGLESIAS-GARCÍA, M.; CODINA, L. Los cibermedios y la importancia estratégica del posicionamiento en buscadores (SEO). Opción, [S. l.], v. 32, 24 nov. 2016. Disponível em: <b>https://produccioncientificaluz.org/index.php/opcion/article/view/21784</b></li>
                      <li style="margin-bottom: 10px;">LUKITO, R. B.; LUKITO, C.; ARIFIN, D. Implementation Techniques of Search Engine Optimization in Marketing Strategies Through the Internet. Journal of Computer Science, [S. l.], v. 11, n. 1, p. 1–6, 22 set. 2014. Disponível em: <b>https://thescipub.com/abstract/jcssp.2015.1.6</b></li>
                      <li style="margin-bottom: 10px;">MALAGA, R. A. Worst practices in search engine optimization. Commun. ACM, [S. l.], v. 51, n. 12, p. 147–150, 1 dez. 2008. Disponível em: <b>https://dl.acm.org/doi/10.1145/1409360.1409388</b></li>
                      <li style="margin-bottom: 10px;">MCVITTIE, D. SEO Tools: Looking at SEO Specialists as a User Class. University of Guelph, 2011. Disponível em: <b>http://hdl.handle.net/10214/3244</b></li>
                      <li style="margin-bottom: 10px;">MORAES, S. de S.; DAMIAN, I. P. M. Gestão da informação no setor bancário: análise por meio do discurso do sujeito coletivo. RDBCI, [S. l.], v. 22, p. e024004–e024004, 15 fev. 2024. Disponível em: <b>https://periodicos.sbu.unicamp.br/ojs/index.php/rdbci/article/view/8674873</b></li>
                      <li style="margin-bottom: 10px;">NEVES, B. C. et al. Se estou no Google, logo existo: técnicas de alavancagem e visibilidade de um periódico científico em motores de busca por meio de técnicas de SEO. Informação & Informação, [S. l.], v. 25, n. 4, p. 402–430, 26 dez. 2020. Disponível em: <b>https://ojs.uel.br/revistas/uel/index.php/informacao/article/view/39512</b></li>
                      <li style="margin-bottom: 10px;">NONATO, R. dos S.; AGANETTE, E. C. Gestão da informação: rumo a uma proposta de definição atual e consensual para o termo. Perspectivas em Ciência da Informação, [S. l.], v. 27, p. 133–159, 6 maio 2022. Disponível em: <b>https://www.scielo.br/j/pci/a/X3WNQHDXTFSNXNspLV73DRw/?lang=pt</b></li>
                      <li style="margin-bottom: 10px;">PATIL, V. M.; PATIL, A. V. SEO: On-Page + Off-Page Analysis. In: 2018 INTERNATIONAL CONFERENCE ON INFORMATION, COMMUNICATION, ENGINEERING AND TECHNOLOGY (ICICET), 2018. p. 1–3. Disponível em: <b>https://ieeexplore.ieee.org/abstract/document/8533836</b></li>
                      <li style="margin-bottom: 10px;">SANTOS, B. R. P. dos; DAMIAN, I. P. M. A gestão da informação e a competência em informação: subsídios para o âmbito empresarial. Palabra Clave (La Plata), [S. l.], v. 7, n. 1, p. e028–e028, 9 out. 2017. Disponível em: <b>https://www.palabraclave.fahce.unlp.edu.ar/article/view/PCe028</b></li>
                      <li style="margin-bottom: 10px;">SANTOS, H. M. dos; KRAWSZUK, G. L. Gestión del conocimiento organizacional: tratamiento archivístico para la reutilización de informação administrativa. Investigación Bibliotecológica, [S. l.], v. 34, n. 83, p. 103–127, 30 mar. 2020. Disponível em: <b>http://rev-ib.unam.mx/ib/index.php/ib/article/view/58146</b></li>
                      <li style="margin-bottom: 10px;">SHAHZAD, A. et al. The new trend for search engine optimization, tools and techniques. Indonesian Journal of Electrical Engineering and Computer Science, [S. l.], v. 18, n. 3, p. 1568–1583, 1 jun. 2020. Disponível em: <b>https://ijeecs.iaescore.com/index.php/IJEECS/article/view/21531</b></li>
                  </ul>
              </div>
              `;
              break;
          default:
              title = option;
              html = "Informações sobre " + option;
      }

      Swal.fire({
          title: title,
          html: html,
          icon: icon,
          confirmButtonText: 'Entendi'
      });

      // Close sidebar on mobile after clicking
      if (window.innerWidth <= 768) {
          toggleSidebar();
      }
  }
</script>