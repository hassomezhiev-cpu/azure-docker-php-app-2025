<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Azure Docker PHP App</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); 
            color: white; 
            text-align: center; 
            padding: 50px; 
            margin: 0; 
            min-height: 100vh; 
        }
        .container { 
            max-width: 800px; 
            margin: 0 auto; 
            background: rgba(255, 255, 255, 0.1); 
            padding: 40px; 
            border-radius: 15px; 
        }
        h1 { font-size: 3em; margin-bottom: 20px; }
        .info { 
            background: rgba(255, 255, 255, 0.2); 
            padding: 20px; 
            border-radius: 10px; 
            margin: 20px 0; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Azure Docker PHP App</h1>
        <p>✅ Applikationen körs framgångsrikt!</p>
        <div class="info">
            <h3>📊 System Info</h3>
            <p><strong>Tid:</strong> <?= date('Y-m-d H:i:s') ?></p>
            <p><strong>PHP:</strong> <?= phpversion() ?></p>
            <p><strong>Container:</strong> <?= gethostname() ?></p>
        </div>
        <p>⚡ Docker + Azure + GitHub Actions</p>
    </div>
</body>
</html>