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
      height: 32px;
      background: #7b6ef6;
      margin: 0 auto;
    }

    .btn-sweetalert {
      background: linear-gradient(90deg, #7b6ef6 0%, #5f5fc4 100%);
      color: #fff;
      border: none;
      border-radius: 25px;
      padding: 12px 32px;
      font-size: 1rem;
      font-weight: bold;
      box-shadow: 0 4px 12px rgba(123, 110, 246, 0.15);
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
      margin-top: 16px;
      outline: none;
    }
    .btn-sweetalert:hover {
      background: linear-gradient(90deg, #5f5fc4 0%, #7b6ef6 100%);
      transform: translateY(-2px) scale(1.04);
      box-shadow: 0 6px 18px rgba(123, 110, 246, 0.25);
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
        width: 100%;
        position: relative;
      }

    .branch .line {
      width: 2px;
      height: 32px;
      background: #7b6ef6;
      margin: 0 auto 10px auto;
    }

    .connector {
      width: 90%;
      height: 2px;
      background: #7b6ef6;
      margin: 0 auto;
      position: relative;
      top: 0;
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
        padding: 20px; 
        border-radius: 12px;
        max-width: 90%; 
        width: 100%; 
        text-align: center;
        position: relative;
        overflow-x: auto; 
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
        flex-wrap: wrap; 
        gap: 5px; 
        border-bottom: 2px solid #eee;
        margin-bottom: 20px;
    }

    .tab {
        flex: 1 1 auto; 
        min-width: 120px; 
        padding: 8px;
        cursor: pointer;
        background: #f1f1f1;
        border-radius: 8px 8px 0 0;
        transition: 0.3s;
        text-align: center;
        white-space: nowrap; 
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
  /* Responsividade - tablets */
  @media (max-width: 768px) {
    body {
      padding: 20px;
    }
    h1 {
      font-size: 18px;
      margin-bottom: 20px;
    }
    .node {
      padding: 12px 18px;
      margin: 12px 0;
      min-width: 160px;
      font-size: 0.95rem;
    }
    .line {
      height: 24px;
    }
    .branch {
      gap: 18px;
    }
    .connector {
      width: 95%;
    }
    .btn-sweetalert {
      padding: 10px 24px;
      font-size: 0.95rem;
    }
  }

  /* Responsividade - celulares */
  @media (max-width: 420px) {
    body {
      padding: 12px;
    }
    h1 {
      font-size: 16px;
      margin-bottom: 12px;
    }
    .flowchart {
      align-items: stretch;
      width: 100%;
    }
    .node {
      padding: 10px 14px;
      margin: 10px 0;
      min-width: unset;
      width: 100%;
      box-sizing: border-box;
      font-size: 0.95rem;
      border-radius: 8px;
    }
    .line {
      width: 4px;
      height: 18px;
      margin: 6px auto;
    }
    .branch {
      flex-direction: column;
      gap: 8px;
      align-items: center;
    }
    .branch .line {
      height: 18px;
      margin-bottom: 6px;
    }
    .connector {
      width: 60%;
      height: 2px;
      margin: 6px auto 10px auto;
    }
    .btn-sweetalert {
      width: 100%;
      padding: 12px;
      font-size: 0.95rem;
    }
    .modal-content {
      max-width: 96%;
      padding: 12px;
    }
    .tab {
      font-size: 12px;
      padding: 6px;
      min-width: 80px;
    }
    .tab-container {
      gap: 6px;
    }
  }
  </style>