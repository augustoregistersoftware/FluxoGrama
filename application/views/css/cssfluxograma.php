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
      padding: 30px;
      border-radius: 12px;
      max-width: 700px;
      width: 90%;
      text-align: center;
      position: relative;
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
      border-bottom: 2px solid #eee;
      margin-bottom: 20px;
    }

    .tab {
      flex: 1;
      padding: 10px;
      cursor: pointer;
      background: #f1f1f1;
      border-radius: 8px 8px 0 0;
      transition: 0.3s;
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
  </style>