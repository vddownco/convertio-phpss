<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertio PHP Library</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .header {
            text-align: center;
            color: white;
            margin-bottom: 3rem;
        }
        
        .header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .card h2 {
            color: #667eea;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        
        .code-block {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 1.5rem;
            margin: 1rem 0;
            overflow-x: auto;
        }
        
        .code-block pre {
            margin: 0;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 0.9rem;
            line-height: 1.4;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .feature {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border-left: 4px solid #667eea;
        }
        
        .feature h3 {
            color: #667eea;
            margin-bottom: 0.5rem;
        }
        
        .installation {
            background: #667eea;
            color: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        
        .installation h2 {
            color: white;
            margin-bottom: 1rem;
        }
        
        .install-code {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 1rem;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            margin: 1rem 0;
        }
        
        .badge {
            display: inline-block;
            background: #28a745;
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Convertio PHP</h1>
            <p>Official PHP Wrapper for Convertio API</p>
            <div class="badge">PHP Library</div>
        </div>
        
        <div class="installation">
            <h2>📦 Installation</h2>
            <p>Install via Composer:</p>
            <div class="install-code">
                composer require convertio/convertio-php
            </div>
        </div>
        
        <div class="card">
            <h2>🚀 Quick Start</h2>
            <p>Here's how to get started with the Convertio PHP library:</p>
            
            <div class="code-block">
                <pre><?php echo htmlspecialchars('<?php
require_once \'vendor/autoload.php\';

use Convertio\Convertio;

// Initialize with your API key
$convertio = new Convertio("your_api_key_here");

// Convert a file from URL
$conversion = $convertio->start([
    \'inputformat\' => \'pdf\',
    \'outputformat\' => \'jpg\',
    \'input\' => \'download\',
    \'file\' => \'https://example.com/document.pdf\'
]);

// Check conversion status
$status = $convertio->status($conversion->id);

// Download the result
if ($status->step === \'finish\') {
    $result = $convertio->download($conversion->id);
    file_put_contents(\'converted_file.jpg\', $result);
}
?>'); ?></pre>
            </div>
        </div>
        
        <div class="feature-grid">
            <div class="feature">
                <h3>🔄 File Conversion</h3>
                <p>Convert between 300+ file formats including documents, images, videos, and audio files.</p>
            </div>
            
            <div class="feature">
                <h3>🌐 URL Support</h3>
                <p>Convert files directly from URLs without downloading them first.</p>
            </div>
            
            <div class="feature">
                <h3>📱 OCR Support</h3>
                <p>Extract text from images and scanned documents with built-in OCR capabilities.</p>
            </div>
            
            <div class="feature">
                <h3>⚡ Fast Processing</h3>
                <p>High-performance conversion servers ensure quick processing times.</p>
            </div>
            
            <div class="feature">
                <h3>🔒 Secure</h3>
                <p>All files are processed securely and deleted automatically after conversion.</p>
            </div>
            
            <div class="feature">
                <h3>📊 Progress Tracking</h3>
                <p>Monitor conversion progress with real-time status updates.</p>
            </div>
        </div>
        
        <div class="card">
            <h2>📋 Advanced Usage</h2>
            
            <h3>File Upload Conversion</h3>
            <div class="code-block">
                <pre><?php echo htmlspecialchars('// Upload and convert a local file
$conversion = $convertio->start([
    \'inputformat\' => \'docx\',
    \'outputformat\' => \'pdf\',
    \'input\' => \'upload\'
]);

// Upload the file
$convertio->upload($conversion->id, \'path/to/document.docx\');

// Wait for completion and download
$convertio->wait($conversion->id);
$result = $convertio->download($conversion->id);'); ?></pre>
            </div>
            
            <h3>OCR Text Extraction</h3>
            <div class="code-block">
                <pre><?php echo htmlspecialchars('// Extract text from image
$conversion = $convertio->start([
    \'inputformat\' => \'jpg\',
    \'outputformat\' => \'txt\',
    \'input\' => \'download\',
    \'file\' => \'https://example.com/image.jpg\',
    \'options\' => [
        \'ocr_enabled\' => true,
        \'ocr_settings\' => [
            \'langs\' => [\'eng\', \'fra\']
        ]
    ]
]);'); ?></pre>
            </div>
        </div>
        
        <div class="card">
            <h2>🔧 Configuration</h2>
            <p>The library supports various configuration options:</p>
            
            <div class="code-block">
                <pre><?php echo htmlspecialchars('// Custom timeout and retry settings
$convertio = new Convertio("your_api_key", [
    \'timeout\' => 60,
    \'max_retries\' => 3,
    \'base_url\' => \'https://api.convertio.co\'
]);

// Set conversion options
$options = [
    \'inputformat\' => \'mp4\',
    \'outputformat\' => \'mp3\',
    \'options\' => [
        \'audio_bitrate\' => 320,
        \'audio_frequency\' => 44100
    ]
];'); ?></pre>
            </div>
        </div>
        
        <div class="card">
            <h2>📚 Documentation</h2>
            <p>For complete documentation and API reference, visit:</p>
            <ul style="margin-top: 1rem; padding-left: 2rem;">
                <li><a href="https://convertio.co/api/docs/" target="_blank" style="color: #667eea;">Official API Documentation</a></li>
                <li><a href="https://github.com/convertio/convertio-php" target="_blank" style="color: #667eea;">GitHub Repository</a></li>
                <li><a href="https://convertio.co/api/" target="_blank" style="color: #667eea;">Get API Key</a></li>
            </ul>
        </div>
    </div>
</body>
</html>