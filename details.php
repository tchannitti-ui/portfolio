<?php
// Get the type from the URL
$type = isset($_GET['type']) ? $_GET['type'] : 'about';

// --- DATA ARRAYS ---

$contact = [
    "email" => "tchannitti@gmail.com",
    "github" => "NONE", // Set to your URL when ready
    "linkedin" => "NONE", // Set to your URL when ready
    "location" => "Bangkok, Thailand"
];

$circuits = [
    [
        "title" => "Prototype unfinished calc circuit",
        "desc" => "An unfinished design created in Logisim.",
        "image" => "img/logic1.jpg"
    ],
    [
        "title" => "Unfinished 16bit cpu",
        "desc" => "Partial prototype design. Hopefully continued and finished in the future.",
        "image" => "img/logic2.jpg"
    ]
];

$achievements = [
    [
        "title" => "Utility Cart Rail System",
        "desc" => "A custom rail system project using Arduino/FPGA integration.",
        "image" => "img/cart.jpg"
    ],
    [
        "title" => "THL Homelab",
        "desc" => "A large personal homelab established 4 years ago.",
        "image" => "img/logo.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <title>Portfolio Details</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; line-height: 1.6; margin: 0; background: #f4f4f4; color: #333; }
        .container { max-width: 800px; margin: 3rem auto; background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; margin-bottom: 20px; }
        h2 { color: #2c3e50; margin-top: 10px; }
        .back-btn { display: inline-block; margin-bottom: 2rem; color: #3498db; text-decoration: none; font-weight: bold; }
        .back-btn:hover { text-decoration: underline; }
        
        /* Project Item Design */
        .project-item { border-bottom: 1px solid #eee; padding: 2.5rem 0; }
        .project-item:last-child { border-bottom: none; }
        .project-item img { width: 100%; height: auto; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); margin-bottom: 1.5rem; }
        
        /* Contact Styles */
        .contact-list { list-style: none; padding: 0; }
        .contact-item { margin-bottom: 1.5rem; font-size: 1.2rem; }
        .contact-label { font-weight: bold; color: #2c3e50; display: block; }
        .contact-link { color: #3498db; text-decoration: none; word-break: break-all; }
        .contact-link:hover { text-decoration: underline; }
        .none-text { color: #999; font-style: italic; font-size: 0.9rem; }
    </style>
</head>
<body>

<div class="container">
    <a href="index.php" class="back-btn">&larr; Back to Home</a>

    <?php if ($type == 'about'): ?>
        <h1>About Me</h1>
        <img src="img/68011502.jpg" style="width:100%; border-radius:8px; margin-bottom:1.5rem;">
        <p>I am a computer engineering student focused on digital systems. I specialize in hardware modification and building integrated systems using FPGA and Arduino platforms.</p>

    <?php elseif ($type == 'contact'): ?>
        <h1>Contact Me</h1>
        <div class="contact-list">
            <div class="contact-item">
                <span class="contact-label">Email:</span>
                <a href="mailto:<?php echo $contact['email']; ?>" class="contact-link"><?php echo $contact['email']; ?></a>
            </div>

            <div class="contact-item">
                <span class="contact-label">GitHub:</span>
                <?php if($contact['github'] !== "NONE"): ?>
                    <a href="<?php echo $contact['github']; ?>" target="_blank" class="contact-link"><?php echo $contact['github']; ?></a>
                <?php else: ?>
                    <span class="none-text">Not available yet</span>
                <?php endif; ?>
            </div>

            <div class="contact-item">
                <span class="contact-label">Location:</span>
                <span class="contact-text"><?php echo $contact['location']; ?></span>
            </div>
        </div>

    <?php elseif ($type == 'circuits'): ?>
        <h1>Circuit Design</h1>
        <?php foreach ($circuits as $item): ?>
            <div class="project-item">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                <h2><?php echo $item['title']; ?></h2>
                <p><?php echo $item['desc']; ?></p>
            </div>
        <?php endforeach; ?>

    <?php else: ?>
        <h1>Projects & Achievements</h1>
        <?php foreach ($achievements as $work): ?>
            <div class="project-item">
                <img src="<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>">
                <h2><?php echo $work['title']; ?></h2>
                <p><?php echo $work['desc']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<footer>
    <p style="text-align:center; padding: 2rem; color: #888;">&copy; <?php echo date("Y"); ?> Ratchapol Channiti</p>
</footer>

</body>
</html>