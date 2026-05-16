<?php
session_start();
// Security check: if not logged in, kick them out
if (!isset($_SESSION['staff_logged_in']) || $_SESSION['staff_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "shop_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname, item_ordered, order_date FROM orders ORDER BY order_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Management Dashboard</title>
    <style>
        :root {
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text: #f8fafc;
            --accent: #38bdf8;
            --danger: #ef4444;
        }
        body { font-family: 'Inter', sans-serif; background: var(--bg); color: var(--text); padding: 40px; }
        .container { max-width: 1100px; margin: 0 auto; }
        
        /* Header Flexbox for Layout */
        .header-flex { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid var(--accent); padding-bottom: 10px; margin-bottom: 20px; }
        h1 { color: var(--accent); margin: 0; }
        
        .logout-btn { background: var(--danger); color: white; text-decoration: none; padding: 8px 16px; border-radius: 5px; font-weight: bold; font-size: 0.9rem; transition: 0.3s; }
        .logout-btn:hover { background: #dc2626; transform: scale(1.05); }

        table { width: 100%; border-collapse: collapse; background: var(--card-bg); border-radius: 8px; overflow: hidden; }
        th, td { padding: 15px; text-align: left; border-bottom: 1px solid #334155; }
        th { background: #334155; color: var(--accent); text-transform: uppercase; font-size: 0.85rem; }
        
        .refresh-btn { display: inline-block; padding: 10px 20px; background: var(--accent); color: var(--bg); text-decoration: none; border-radius: 5px; font-weight: bold; margin-bottom: 20px; margin-right: 10px;}
        .delete-btn { color: var(--danger); text-decoration: none; font-weight: bold; padding: 5px 10px; border: 1px solid var(--danger); border-radius: 4px; }
    </style>
</head>
<body>

<div class="container">
    <div class="header-flex">
        <h1>Active Component Orders</h1>
        <a href="logout.php" class="logout-btn">Logout Session</a>
    </div>

    <a href="dashboard.php" class="refresh-btn">Refresh List</a>
    <!-- Go back to main hub -->
    <a href="index.php" style="color: var(--secondary); text-decoration: none; font-size: 0.9rem;">← Back to Hub</a>

    <table>
        <!-- ... existing table code from previous steps ... -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>IC Component</th>
                <th>Order Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>#" . $row["id"] . "</td>";
                    echo "<td>" . $row["firstname"] . " " . $row["lastname"] . "</td>";
                    echo "<td>" . $row["item_ordered"] . "</td>";
                    echo "<td>" . $row["order_date"] . "</td>";
                    echo "<td><a href='delete.php?id=" . $row["id"] . "' class='delete-btn' onclick='return confirm(\"Delete this order record?\")'>Delete</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>No orders currently in queue.</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>