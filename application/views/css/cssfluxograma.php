<style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f8fc;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 30px;
    }

    h1 {
      margin-bottom: 40px;
    }

    .flowchart {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .node {
      background: #ffffff;
      border: 2px solid #7b6ef6;
      border-radius: 10px;
      padding: 15px 25px;
      margin: 20px 0;
      text-align: center;
      cursor: pointer;
      transition: 0.3s;
      box-shadow: 0px 3px 6px rgba(0,0,0,0.1);
      min-width: 200px;
    }

    .node:hover {
      background: #7b6ef6;
      color: #fff;
    }

    .line {
      width: 2px;
      height: 30px;
      background: #7b6ef6;
    }

    /* Ramificação */
       .branch {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 40px;
      margin-top: -10px;
    }

    .branch .line {
      width: 2px;
      height: 20px;
      margin: 0 auto;
    }

    .connector {
      width: 100%;
      height: 2px;
      background: #7b6ef6;
      position: relative;
      top: 10px;
    }

    /* Modal */
    .modal {
      display: none;
      position: fixed;
      z-index: 10;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.6);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
        background: white;
        padding: 20px; /* menos padding para telas pequenas */
        border-radius: 12px;
        max-width: 90%; /* antes estava 700px, agora 90% da tela */
        width: 100%; /* garante que ocupe a largura disponível */
        text-align: center;
        position: relative;
        overflow-x: auto; /* evita overflow horizontal */
    }

    .close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 20px;
      cursor: pointer;
      color: #333;
    }

    .close:hover {
      color: red;
    }

    /* Tabs */
    .tab-container {
        display: flex;
        flex-wrap: wrap; /* permite quebrar em linhas em telas pequenas */
        gap: 5px; /* espaço entre as abas */
        border-bottom: 2px solid #eee;
        margin-bottom: 20px;
    }

    .tab {
        flex: 1 1 auto; /* flex-grow, flex-shrink, flex-basis */
        min-width: 120px; /* garante que não fique muito pequeno */
        padding: 8px;
        cursor: pointer;
        background: #f1f1f1;
        border-radius: 8px 8px 0 0;
        transition: 0.3s;
        text-align: center;
        white-space: nowrap; /* evita que o texto quebre */
    }

    .tab.active {
      background: #7b6ef6;
      color: white;
      font-weight: bold;
    }

    .tab-content {
      display: none;
      text-align: left;
    }

    .tab-content.active {
      display: block;
    }

    /* Para telas pequenas */
    @media (max-width: 500px) {
        .modal-content {
            padding: 15px;
        }
        .tab {
            font-size: 12px;
            padding: 6px;
            min-width: 100px;
        }
        .tab-container {
            gap: 3px;
        }
    }
  </style>