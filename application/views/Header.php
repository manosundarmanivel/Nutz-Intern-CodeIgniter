<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <title>Basic Navigation Bar</title>
    <style>
        
        ul.navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #333;
        }

        
        ul.navbar li {
            display: inline;
        }

        ul.navbar li a {
            display: block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul.navbar li a:hover {
            background-color: #555;
        }
        body {
    font-family: 'Poppins', sans-serif; 
}

    </style>
</head>
<body>
    <div>
    <ul style="display: flex; justify-content: center;" class="navbar">
        
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    </div>
    
</body>
</html>

