<?php
/**
 * Convertio PHP API Demo
 * 
 * This is a simple demonstration of the Convertio PHP library.
 * Replace '_YOUR_API_KEY_' with your actual API key from https://convertio.co/api/
 */

require_once 'autoload.php';

use \Convertio\Convertio;
use \Convertio\Exceptions\APIException;
use \Convertio\Exceptions\CURLException;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertio PHP API Demo</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
            line-height: 1.6;
            background: #f8fafc;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #1e293b;
            margin-bottom: 1rem;
        }
        .code-block {
            background: #f1f5f9;
            padding: 1rem;
            border-radius: 8px;
            font-family: 'Monaco', 'Menlo', monospace;
            font-size: 0.9rem;
            overflow-x: auto;
            margin: 1rem 0;
        }
        .feature {
            margin: 1.5rem 0;
            padding: 1rem;
            border-left: 4px solid #3b82f6;
            background: #eff6ff;
        }
        .warning {
            background: #fef3c7;
            border-left: 4px solid #f59e0b;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 4px;
        }
        .installation {
            background: #f0fdf4;
            border-left: 4px solid #22c55e;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔄 Convertio PHP API Library</h1>
        
        <p>This is the official PHP wrapper for the <strong>Convertio API</strong> - a powerful file conversion service that supports hundreds of file formats.</p>

        <div class="warning">
            <strong>⚠️ API Key Required:</strong> To use this library, you need to obtain an API key from <a href="https://convertio.co/api/" target="_blank">convertio.co/api</a>
        </div>

        <div class="installation">
            <h3>📦 Installation</h3>
            <p>Install via Composer:</p>
            <div class="code-block">composer require convertio/convertio-php</div>
            
            <p>Or download and include the autoloader:</p>
            <div class="code-block">require_once 'autoload.php';</div>
        </div>

        <div class="feature">
            <h3>🌐 Convert from URL</h3>
            <p>Render web pages to images:</p>
            <div class="code-block">$API = new Convertio("_YOUR_API_KEY_");
$API->startFromURL('http://google.com/', 'png')
    ->wait()
    ->download('./google.png')
    ->delete();</div>
        </div>

        <div class="feature">
            <h3>📄 Convert Local Files</h3>
            <p>Convert documents between formats:</p>
            <div class="code-block">$API = new Convertio("_YOUR_API_KEY_");
$API->start('./input.docx', 'pdf')
    ->wait()
    ->download('./output.pdf')
    ->delete();</div>
        </div>

        <div class="feature">
            <h3>🔍 OCR Support</h3>
            <p>Extract text from scanned documents:</p>
            <div class="code-block">$API = new Convertio("_YOUR_API_KEY_");
$API->start('./scan.pdf', 'docx', [
    'ocr_enabled' => true,
    'ocr_settings' => [
        'langs' => ['eng', 'spa'],
        'page_nums' => '1-3,5,7'
    ]
])->wait()->download('./editable.docx')->delete();</div>
        </div>

        <div class="feature">
            <h3>📋 Supported Features</h3>
            <ul>
                <li>✅ 300+ file format conversions</li>
                <li>✅ OCR (Optical Character Recognition)</li>
                <li>✅ Web page rendering</li>
                <li>✅ Batch processing</li>
                <li>✅ Callback URL support</li>
                <li>✅ Exception handling</li>
            </ul>
        </div>

        <div class="feature">
            <h3>🔗 Resources</h3>
            <ul>
                <li><a href="https://convertio.co/api/docs/" target="_blank">API Documentation</a></li>
                <li><a href="https://convertio.co/formats" target="_blank">Supported Formats</a></li>
                <li><a href="https://github.com/convertio/convertio-php" target="_blank">GitHub Repository</a></li>
            </ul>
        </div>

        <footer style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid #e2e8f0; color: #64748b; text-align: center;">
            <p>Convertio PHP Library - Official SDK for file conversion API</p>
        </footer>
    </div>
</body>
</html>