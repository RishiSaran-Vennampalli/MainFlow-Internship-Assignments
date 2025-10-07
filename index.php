<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #f5eee6; 
    color: #3e2c19;      
}
nav {
    background: #8d6748; 
    display: flex;
    align-items: center;
    padding: 0 30px;
    height: 60px;
}
nav .logo {
    color: #fffbe6;      
    font-weight: bold;
    font-size: 1.3em;
    margin-right: 40px;
    letter-spacing: 1px;
}
nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
    flex: 1;
}
nav ul li {
    margin: 0 18px;
}
nav ul li a {
    color: #fffbe6;
    text-decoration: none;
    font-size: 1em;
    transition: color 0.2s;
}
nav ul li a:hover {
    color: #b7a07a; 
}
nav .searchbar {
    display: flex;
    align-items: center;
}
nav input[type="text"] {
    padding: 6px 10px;
    border: none;
    border-radius: 3px 0 0 3px;
    outline: none;
    font-size: 1em;
    background: #e7dbc8; 
    color: #3e2c19;
}
nav button {
    padding: 6px 12px;
    border: none;
    background: #6e4c2b; 
    color: #fffbe6;
    border-radius: 0 3px 3px 0;
    cursor: pointer;
    font-size: 1em;
}
header {
    text-align: center;
    padding: 60px 20px 30px 20px;
    background: #e7dbc8; 
}
header h1 {
    margin: 0 0 10px 0;
    font-size: 2.5em;
    color: #6e4c2b; 
}
header p {
    font-size: 1.2em;
    color: #5b4631; 
}
section {
    display: flex;
    justify-content: center;
    gap: 40px;
    padding: 40px 10px;
    background: #fffbe6; 
}
section div {
    background: #e3e6d9; 
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(141,103,72,0.08);
    padding: 30px 20px;
    text-align: center;
    width: 250px;
}
section img {
    margin-bottom: 15px;
}
section h3 {
    margin: 10px 0 8px 0;
    color: #6e4c2b; 
}
section p {
    color: #5b4631;
    font-size: 1em;
}
footer {
    text-align: center;
    padding: 18px 0;
    background: #8d6748; 
    color: #fffbe6;
    font-size: 1em;
    margin-top: 30px;
}
@media (max-width: 900px) {
    section {
        flex-direction: column;
        align-items: center;
        gap: 25px;
    }
}
@media (max-width: 600px) {
    nav {
        flex-direction: column;
        align-items: flex-start;
        height: auto;
        padding: 10px 10px;
    }
    nav .logo {
        margin-bottom: 8px;
    }
    section div {
        width: 90%;
    }
}
    </style>
    <nav>
        <div class="logo">Only Teak</div>
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Contact</a></li>
            
        </ul>
        <form class="searchbar" action="#" method="get">
            <input type="text" placeholder="Search..." name="q">
            <button type="submit">Search</button>
        </form>
    </nav>
    <header>
        <h1>Welcome to Only Teak</h1>
        <p>experience the strongest teak furniture crafted with precision and care.</p>
    </header>
        <section>
        <div>
            <img src="https://www.falaknazthewarehouse.com/wp-content/uploads/2018/06/Classic-Armchair-e1528184819765.jpg" alt="Teak Chair" width="180" height="120" style="border-radius:8px;">
            <h3>Classic Teak Chair</h3>
            <p>Price: ₹4,500</p>
        </div>
        <div>
            <img src="https://i5.walmartimages.com/asr/7cb4fa78-c56d-44e8-837e-260960a3b60b_1.daa3cc01aa59664894c0d7adfc6aeccc.jpeg" alt="Teak Table" width="180" height="120" style="border-radius:8px;">
            <h3>Elegant Teak Table</h3>
            <p>Price: ₹12,000</p>
        </div>
        <div>
            <img src="https://m.media-amazon.com/images/I/71B9+yysFZL._SL1440_.jpg" alt="Teak Sofa" width="180" height="120" style="border-radius:8px;">
            <h3>Luxury Teak Sofa</h3>
            <p>Price: ₹25,000</p>
        </div>
        </section>
        <footer>
                        <section>
        <div>
            <img src="https://img.icons8.com/ios-filled/50/4f8cff/lightning-bolt.png" alt="Strong" width="50" height="50">
            <h3>Strong & Reliable</h3>
            <p>Experience the strength and durability of our teak furniture, built to last.</p>
        </div>
        <div>
            <img src="https://img.icons8.com/ios-filled/50/4f8cff/lock-2.png" alt="Secure" width="50" height="50">
            <h3>Secure</h3>
            <p>Your furniture is protected by our govt certified bills of sale.</p>
        </div>
        <div>
            <img src="https://img.icons8.com/ios-filled/50/4f8cff/easy.png" alt="All India Delivery" width="50" height="50">
            <h3>All India Delivery</h3>
            <p>We offer delivery across India, ensuring your furniture reaches you no matter where you are.</p>
        </div>
        </section>
        &copy; 2024 Your Company. All rights reserved.
        </footer>
    </body>
    </html>
