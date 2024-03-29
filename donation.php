<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop.css">
    <title>Donation</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .app {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .app-body-main-content {
        padding: 20px;
        flex-grow: 1;
    }

    .request-volunteer-form {
        max-width: 400px;
        margin: 0 auto;
        background-color: #f4f4f4;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .request-volunteer-form h3 {
        text-align: center;
        color: #333;
    }

    .request-volunteer-form label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    .request-volunteer-form input,
    .request-volunteer-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .request-volunteer-form select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        appearance: none; /* Remove default arrow in some browsers */
        background-color: white;
        background-image: url('path-to-your-custom-icon.png'); /* Add a custom arrow icon */
        background-position: right center;
        background-repeat: no-repeat;
        cursor: pointer;
    }

    /* Style for the custom arrow icon */
    .request-volunteer-form select::-ms-expand {
        display: none;
    }

    .request-volunteer-form button {
        background-color: #4caf50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .request-volunteer-form button:hover {
        background-color: #45a049;
    }
    .request-volunteer-form h3 {
    text-align: center;
    color: #333;
    transition: transform 0.3s ease-in-out; /* Add a transition for the transform property */
}

.request-volunteer-form h3:hover {
    transform: scale(1.1); /* Add a scale transformation on hover for the bubbly effect */
}
    
</style>
<body>
    <div class="app">
        <header class="app-header">
            <div class="app-header-logo">
                <div class="logo">
                    <span class="logo-icon">
                        <img src="logo.png" />
                    </span>
                    <h1 class="logo-title">
                        <br>
                        <span>FoodBank.MY</span>
                    </h1>
                </div>
            </div>
            <div class="app-header-navigation">
                <div class="tabs">
                <a href="dashboard.php">
                        Dashboard
                    </a>
                    <a href="shop.php">
                        Shop
                    </a>
                    <a href="explore.php">
                        Volunteer
                    </a>
                    <a href="donation.php" class="active">
                        Donation
                    </a>
                    <a href="notification.php">
                        Notification
                    </a>
                    
                </div>
            </div>
            <div class="app-header-actions">
                <button class="user-profile">
                    <span>Hi </span>
                    <span>
                        </span>
                </button>
                
    
        </header>
        
                
            
            <div class="app-body-main-content">
                <section class="service-section">
                    <br>
                    <h2>Donation Aid</h2>
                    <div class="service-section-header">
                    <div class="request-volunteer-form">
    <h3>💸 Your Every Dollar Counts: Even the smallest contribution makes a significant impact. 
        Your donation doesn't just fund an app; it fuels a mission to eradicate hunger and build a sustainable future.</h3>
        <form action="userdetails.php" method="POST">
        <button type="submit"> Go Now </button>
      
    </form>
    <div class="search-field">
                            <i class="ph-magnifying-glass"></i>
                        </div>
        
</div>
                    </div>
                    
                    
                        </div>
                <footer class="footer">
                    <h1>FoodBank.MY<small>©</small></h1>
                    <div>
                        FoodBank.MY ©<br />
                        All Rights Reserved 2023
                    </div>
                </footer>
            </div>
                
                                </div>
                            </div>
                        </div>
                        </section>
                        </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>


