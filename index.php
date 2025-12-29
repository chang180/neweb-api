<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>藍新金流 API 測試環境</title>
    <style>
        body {
            font-family: 'Microsoft JhengHei', Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 300;
        }
        .header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 1.1em;
        }
        .content {
            padding: 40px;
        }
        .section {
            margin-bottom: 40px;
        }
        .section h2 {
            color: #333;
            border-bottom: 3px solid #667eea;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.5em;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .card {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: inherit;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-color: #667eea;
        }
        .card h3 {
            margin: 0 0 10px 0;
            color: #667eea;
            font-size: 1.2em;
        }
        .card p {
            margin: 0;
            color: #666;
            line-height: 1.5;
        }
        .status {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .status h3 {
            margin: 0 0 10px 0;
            color: #155724;
        }
        .status p {
            margin: 0;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #666;
            border-top: 1px solid #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 藍新金流 API 測試環境</h1>
            <p>PHP 8.4 + Nginx + Xdebug 開發環境</p>
        </div>
        
        <div class="content">
            <div class="status">
                <h3>✅ 服務狀態</h3>
                <p>Docker 容器已啟動，所有 API 測試頁面均可正常訪問</p>
            </div>

            <div class="section">
                <h2>📋 API 範例目錄</h2>
                <div class="grid">
                    <a href="api-example/" class="card">
                        <h3>💳 藍新金流 API 範例</h3>
                        <p>包含信用卡、超商代碼、WebATM、定期定額等各種支付方式的 API 測試範例</p>
                    </a>
                    
                    <a href="api-logistic/" class="card">
                        <h3>📦 物流 API 範例</h3>
                        <p>物流相關 API 測試，包含建立運單、查詢運單、列印標籤等功能</p>
                    </a>
                    
                    <a href="api-platform/" class="card">
                        <h3>🏢 平台 API 範例</h3>
                        <p>平台管理相關 API，包含新增商戶、資金分配、收費指令等功能</p>
                    </a>
                </div>
            </div>

            <div class="section">
                <h2>🔧 快速測試頁面</h2>
                <div class="grid">
                    <a href="stop_operation/stop_operation_api.php" class="card">
                        <h3>⏹️ 停止操作測試</h3>
                        <p>測試停止操作的 API 功能，包含參數轉換和 AJAX 請求</p>
                    </a>
                </div>
            </div>

            <div class="section">
                <h2>📚 技術資訊</h2>
                <div class="grid">
                    <div class="card">
                        <h3>🐳 Docker 環境</h3>
                        <p>PHP 8.4 FPM + Xdebug<br>Nginx Alpine<br>獨立網路：api_test_network</p>
                    </div>
                    
                    <div class="card">
                        <h3>🔍 調試功能</h3>
                        <p>Xdebug 3.x 已啟用<br>調試端口：9003<br>支援 IDE 斷點調試</p>
                    </div>
                    
                    <div class="card">
                        <h3>🌐 訪問方式</h3>
                        <p>主機端口：8080<br>容器端口：80<br>完全獨立運行</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>© 2025 藍新金流 API 測試環境 | 使用 Docker 容器化部署</p>
        </div>
    </div>
</body>
</html>
