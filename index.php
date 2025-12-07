<?php
/**
 * Aplicación PHP Simple para Azure App Service
 * Actividad 1 Corte 2 - Sistemas Operativos
 */

// Configuración de zona horaria
date_default_timezone_set('America/Bogota');

// Función para obtener información del servidor
function obtenerInfoServidor() {
    return [
        'php_version' => phpversion(),
        'servidor' => $_SERVER['SERVER_SOFTWARE'] ?? 'Desconocido',
        'sistema_operativo' => php_uname(),
        'fecha_hora' => date('Y-m-d H:i:s'),
        'ip_cliente' => $_SERVER['REMOTE_ADDR'] ?? 'N/A',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'N/A'
    ];
}

$infoServidor = obtenerInfoServidor();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación PHP en Azure - Sistemas Operativos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 800px;
            width: 100%;
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            color: #667eea;
            text-align: center;
            margin-bottom: 10px;
            font-size: 2.5em;
        }

        h2 {
            color: #764ba2;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.2em;
            font-weight: normal;
        }

        .status {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.3em;
            font-weight: bold;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .info-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border-left: 4px solid #667eea;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .info-card h3 {
            color: #667eea;
            font-size: 0.9em;
            text-transform: uppercase;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        .info-card p {
            color: #333;
            font-size: 1em;
            word-break: break-word;
        }

        .features {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .features h3 {
            color: #764ba2;
            margin-bottom: 15px;
        }

        .features ul {
            list-style: none;
            padding-left: 0;
        }

        .features li {
            padding: 8px 0;
            padding-left: 25px;
            position: relative;
            color: #555;
        }

        .features li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #667eea;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            color: #999;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #f0f0f0;
        }

        .badge {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.85em;
            margin: 5px;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 1.8em;
            }
            
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 Aplicación PHP en Azure</h1>
        <h2>Actividad 1 Corte 2 - Sistemas Operativos</h2>

        <div class="status">
            ✅ Aplicación Desplegada Exitosamente con GitHub Actions
        </div>

        <div class="info-grid">
            <div class="info-card">
                <h3>🔧 Versión PHP</h3>
                <p><?php echo $infoServidor['php_version']; ?></p>
            </div>

            <div class="info-card">
                <h3>🖥️ Servidor</h3>
                <p><?php echo $infoServidor['servidor']; ?></p>
            </div>

            <div class="info-card">
                <h3>📅 Fecha y Hora</h3>
                <p><?php echo $infoServidor['fecha_hora']; ?></p>
            </div>

            <div class="info-card">
                <h3>🌐 IP del Cliente</h3>
                <p><?php echo $infoServidor['ip_cliente']; ?></p>
            </div>
        </div>

        <div class="features">
            <h3>✨ Características Implementadas:</h3>
            <ul>
                <li>Aplicación PHP simple y funcional</li>
                <li>Despliegue automatizado con GitHub Actions</li>
                <li>Integración con Azure App Service</li>
                <li>Gestión segura de credenciales con GitHub Secrets</li>
                <li>Autenticación básica configurada</li>
                <li>Interfaz responsive y moderna</li>
            </ul>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <span class="badge">Azure App Service</span>
            <span class="badge">GitHub Actions</span>
            <span class="badge">PHP <?php echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION; ?></span>
            <span class="badge">CI/CD</span>
        </div>

        <div class="footer">
            <p><strong>Sistema Operativo del Servidor:</strong></p>
            <p style="font-size: 0.85em; color: #666; margin-top: 5px;">
                <?php echo $infoServidor['sistema_operativo']; ?>
            </p>
            <p style="margin-top: 15px;">
                Desarrollado para Sistemas Operativos - 2024
            </p>
        </div>
    </div>
</body>
</html>
