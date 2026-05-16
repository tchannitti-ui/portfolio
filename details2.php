<?php
// --- DATA FOR DOCUMENTS ---
$documents = [
    [
        "title" => "Statement of Purpose (SOP)",
        "type" => "Academic Essay",
        "desc" => "My personal statement outlining my goals in Computer Engineering.",
        "link" => "docs/sop.pdf", // Path to your PDF
        "icon" => "📄"
    ],
    [
        "title" => "Academic Transcript",
        "type" => "Official Record",
        "desc" => "GED Transcript",
        "link" => "docs/transcript.pdf",
        "icon" => "🎓"
    ],
    [
        "title" => "Certificates",
        "type" => "Certifications",
        "desc" => "Kmitl-TEP certificate",
        "link" => "img/cert1.jpg",
        "icon" => "📜"
    ],
    [
        "title" => "Diploma",
        "type" => "Diploma",
        "desc" => "GED-Diploma",
        "link" => "docs/diploma.pdf",
        "icon" => "💼"
    ]



];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <title>Academic Documents | Portfolio</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.6; margin: 0; background: #f4f4f4; color: #333; }
        .container { max-width: 800px; margin: 3rem auto; background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; margin-bottom: 2rem; }
        
        .back-btn { display: inline-block; margin-bottom: 2rem; color: #3498db; text-decoration: none; font-weight: bold; }
        .back-btn:hover { text-decoration: underline; }

        /* Document Card Design */
        .doc-item { 
            display: flex; 
            align-items: center; 
            background: #f9f9f9; 
            padding: 1.5rem; 
            border-radius: 8px; 
            margin-bottom: 1.5rem; 
            border: 1px solid #eee;
            transition: 0.2s;
        }
        .doc-item:hover { border-color: #3498db; background: #fff; }

        .doc-icon { font-size: 2.5rem; margin-right: 1.5rem; }
        
        .doc-info { flex-grow: 1; }
        .doc-info h2 { margin: 0; font-size: 1.3rem; color: #2c3e50; }
        .doc-info span { font-size: 0.85rem; color: #3498db; font-weight: bold; text-transform: uppercase; }
        .doc-info p { margin: 5px 0 15px 0; color: #666; font-size: 0.95rem; }

        .view-btn { 
            background: #2c3e50; 
            color: #fff; 
            padding: 0.6rem 1rem; 
            text-decoration: none; 
            border-radius: 5px; 
            font-size: 0.9rem; 
            font-weight: bold;
            transition: background 0.2s;
        }
        .view-btn:hover { background: #34495e; }

        @media (max-width: 600px) {
            .doc-item { flex-direction: column; text-align: center; }
            .doc-icon { margin-right: 0; margin-bottom: 1rem; }
        }
    </style>
</head>
<body>

<div class="container">
    <a href="index.php" class="back-btn">&larr; Back to Home</a>

    <h1>Credentials & Academic Documents</h1>
    
    <div class="doc-list">
        <?php foreach ($documents as $doc): ?>
            <div class="doc-item">
                <div class="doc-icon"><?php echo $doc['icon']; ?></div>
                <div class="doc-info">
                    <span><?php echo $doc['type']; ?></span>
                    <h2><?php echo $doc['title']; ?></h2>
                    <p><?php echo $doc['desc']; ?></p>
                    <a href="<?php echo $doc['link']; ?>" target="_blank" class="view-btn">View Document</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<footer>
    <p style="text-align:center; padding: 2rem; color: #888;">&copy; <?php echo date("Y"); ?> Ratchapol Channiti</p>
</footer>

</body>
</html>