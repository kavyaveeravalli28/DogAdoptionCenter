<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Dog Registration</title>
</head>
<body style="background-image: url('bg_dogs.jpg');">
    <div>
        <nav>
           <!--<a href="cards.html"><img src="images/DAR-NEW-BW-T-Shirt-scaled-e1595272758360.jpg"></a>--> 
            <div class="nav-links" id="navLinks">  
                <ul>
                    <li><a href="cards.html"><b>HOME</b></a></li>
                    <li><a href="cards.html"><b>ABOUT</b></a></li>
                    <li><a href="cards.html"><b>SERVICES</b></a></li>
                    <li><a href="cards.html"><b>VOLUNTEER</b></a></li>
                    <li><a href="cards.html"><b>CONTACT</b></a></li>
                </ul>
            </div>
        </nav>
            </div>

    <div class="container">
        <header>
            <h1>Dog Registration</h1>
        </header>
        
        <div>
        <main>
            <form action="register.php" method="POST">
                <label for="dog_name">Dog's Name:</label>
                <input type="text" name="dog_name" id="dog_name" required>
                <label for="owner_name">Owner's Name:</label>
                <input type="text" name="owner_name" id="owner_name" required>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
       


                <label for="breed">Breed:</label>
                <select id="breed" name="breed" required>
                  <option value="">Select Breed</option>
                  <option value="Rajapalyam"> Rajapalyam</option>
                  <option value="Beagle">Beagle </option>
                  <option value="Shih Tzu">Shih Tzu </option>
                  <option value="French Bull">French Bull </option>
                </select>
              
                <label for="Gender">Gender:</label>
                <select id="Gender" name="Gender" required>
                  <option value="">Select Gender</option>
                  <option value="Male"> Male</option>
                  <option value="Female">Female </option>
                </select>
                <br>
                <label for="age">Age:</label>
                <input type="number" name="age" id="age" required> 
               <label for="reason">Reason For Adoption:</label>
        <textarea id="reason" name="reason" rows="2" required></textarea><br>
                <button type="submit">Register</button>
            </form>
        </main>
    </div>        
</div>

<br>
    <div>
    <center>
    <footer>
        
        <!-- <p>&copy; <?php echo date("Y"); ?> All rights reserved.</p> -->
        <h4><br><br><br>
    </footer>
</center>
</div>
</body>
</html>
