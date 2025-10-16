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