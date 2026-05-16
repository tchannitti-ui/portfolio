<?php
$name = "Ratchapol Channiti";
$bio = "Passionate developer specializing in digital systems and computer hardware.";

$categories = [
    [
        "title" => "About Me!",
        "description" => "A bit about my background in engineering and technical interests.",
        "image" => "img/68011502.jpg",
        "target" => "about" 
    ],
    [
        "title" => "Achievements",
        "description" => "A collection of my technical milestones, FPGA work, and homelab setup.",
        "image" => "img/OIP.jpg",
        "target" => "achievements"
    ],
    [
        "title" => "Circuit Design",
        "description" => "Custom PCB layouts, 74-series logic circuits, and schematic captures.",
        "image" => "img/IC.jpg", 
        "target" => "circuits"
    ],
    [
        "title" => "Contact me",
        "description" => "Contact Information and Technical Inquiries.",
        "image" => "img/contact.jpg", 
        "target" => "contact"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="logo.ico">
    <title><?php echo $name; ?> | Portfolio</title>
    <style>
        /* 1. Global Reset & Header Styles */
        body { font-family: 'Segoe UI', Tahoma, sans-serif; line-height: 1.6; margin: 0; background: #f4f4f4; color: #333; }
        
        header { 
            background: #2c3e50; 
            color: #fff; 
            padding: 4rem 1rem; 
            text-align: center; 
        }

        .header-label {
            font-size: 4rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 4px;
            margin-bottom: 0.5rem;
            color: rgba(255, 255, 0, 1);
            line-height: 1;
        }

        header h1 { 
            margin: 0; 
            font-size: 2rem; 
            font-weight: 400;
            letter-spacing: 1px;
        }

        header p { 
            margin-top: 10px;
            font-weight: 300; 
            opacity: 0.8; 
            font-size: 1.1rem;
        }

        /* 2. Layout & Grid (4-Column) */
        .container { 
            max-width: 1200px; 
            margin: 3rem auto; 
            padding: 0 1.5rem; 
        }

        .grid { 
            display: grid; 
            grid-template-columns: repeat(4, 1fr); 
            gap: 1.5rem; 
        }

        /* 2.1 Wide Section Style (1x1 with Hover Animation) */
        .wide-section {
            background: #fff;
            border-radius: 12px;
            margin-top: 3rem;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            border-left: 5px solid #3498db;
            /* Added transition for smooth hover */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Matching hover animation from 4x4 cards */
        .wide-section:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .wide-content {
            padding: 2.5rem;
            text-align: left;
        }

        .wide-content h2 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 1.8rem;
        }

        .wide-content p {
            color: #666;
            max-width: 800px;
            margin-bottom: 1.5rem;
        }

        /* 3. Card Styling */
        .card { 
            background: #fff; 
            border-radius: 12px; 
            overflow: hidden; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); 
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .card:hover { 
            transform: translateY(-8px); 
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .card img { 
            width: 100%; 
            height: 200px; 
            object-fit: cover; 
        }

        .card-content { 
            padding: 1.5rem; 
            flex-grow: 1;
        }

        .card-content h3 { margin-top: 0; color: #2c3e50; }
        .card-content p { font-size: 0.9rem; color: #666; margin-bottom: 1.5rem; }

        /* 4. Buttons */
        .btn { 
            display: inline-block; 
            background: #3498db; 
            color: #fff; 
            padding: 0.7rem 1.2rem; 
            text-decoration: none; 
            border-radius: 6px; 
            font-weight: bold;
            transition: background 0.2s;
        }
        .btn:hover { background: #2980b9; }

        /* 5. Responsive Design */
        @media (max-width: 1040px) {
            .grid { grid-template-columns: repeat(2, 1fr); }
            .header-label { font-size: 3rem; }
        }

        @media (max-width: 600px) {
            .grid { grid-template-columns: 1fr; }
            .header-label { font-size: 2.5rem; }
            .wide-content { padding: 1.5rem; text-align: center; }
        }

        footer { text-align: center; padding: 4rem 1rem; color: #888; }
    </style>
</head>
<body>

<header>
    <div class="header-label">Portfolio</div>
    <h1><?php echo $name; ?></h1>
    <p><?php echo $bio; ?></p>
</header>

<div class="container">
    
    <div class="grid">
        <?php foreach ($categories as $cat): ?>
            <div class="card">
                <img src="<?php echo $cat['image']; ?>" alt="<?php echo $cat['title']; ?>">
                <div class="card-content">
                    <h3><?php echo $cat['title']; ?></h3>
                    <p><?php echo $cat['description']; ?></p>
                    <a href="details.php?type=<?php echo $cat['target']; ?>" class="btn">View Details</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="wide-section">
        <div class="wide-content">
            <h2>Academic Credentials & Documents</h2>
            <p>Access my Statement of Purpose, academic transcripts, and technical certifications.</p>
            <a href="details2.php" class="btn">View More Details</a>
        </div>
    </div>

</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
</footer>

</body>
</html>