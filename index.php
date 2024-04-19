<?php
  require_once('databases.php'); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>National Savings Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>


    <div class="container">
        <!-- Navigation Bar -->
<nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

        <h1 class="form-title">National Savings Form</h1>
        <<form action="process_saving.php" method="post" enctype="multipart/form-data">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="user-input-box">
                    <label for="fathers_name">Father's Name</label>
                    <input type="text" id="fathers_name" name="fathers_name" required>
                </div>

                <div class="user-input-box">
                    <label for="mothers_name">Mother's Name</label>
                    <input type="text" id="mothers_name" name="mothers_name" required>
                </div>

                <div class="user-input-box">
                    <label for="phone">Phone No</label>
                    <input type="text" id="phone" name="phone" required>
                </div>

                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="user-input-box">
                    <label for="nid">NID</label>
                    <input type="text" id="nid" name="nid" required>
                </div>

            </div>

            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other">
                    <label for="other">Other</label>
                </div>
            </div>

            <div class="gender-details-box">
                <label for="dob" class="gender-title">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="user-input-box">
                <label for="address" class="gender-title">Address</label>
                <textarea id="address" name="address" cols="30" rows="10" class="addre" required></textarea>
            </div>

            <label for="scheme" class="dropdown">Scheme</label>
            <select id="scheme" name="scheme" class="option" required>
                <option value="3 year">3 Year</option>
                <option value="5 year">5 Year</option>
                <option value="partner">Partner</option>
            </select><br><br>

            <label for="sector" class="dropdown">Sector</label>
            <select id="sector" name="sector" class="option" required>
                <option value="Bangladesh Bank">Bangladesh Bank</option>
                <option value="Commercial Bank">Commercial Bank</option>
                <option value="Postal">Postal</option>
            </select><br><br>

            <label for="photo" class="dropdown">Photo</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>


            <div class="form-submit-btn">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
    </div>
</body>

</html>