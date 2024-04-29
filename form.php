<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">  
</head>
  
<body>
    <div class="signup-container">   
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form id="form.php" action="welcome.php" method="get">
        <label for="first-name">First name:</label><br>
        <input type="text" name="first-name" id="first-name" required><br>
        <label for="last-name">Last name:</label><br>
        <input type="text" name="last-name" id="last-name" required><br>
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br>
        <input type="radio" id="Secret"name="gender" value="Secret" required>
        <label for="Secret">Secret</label><br>
        <p>Nationality</p>
        <select name="nationality" id="nationality" required>
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
            <option value="India">India</option>
            <option value="Johar">Johar</option>
            <option value="CKM">CitraKebunMas</option>   
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" id="language1" value="Indonesia" name="language[]">
        <label for="language1"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" value="English" name="language[]">
        <label for="language2"> English</label><br>
        <input type="checkbox" id="language3" value="Palestina" name="language[]">
        <label for="language3"> Palestine</label><br>
        <input type="checkbox" id="language4" value="Sunda" name="language[]">
        <label for="language4"> Sunda</label><br>
        <label for="bio">Bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <div align="center">    
            <button type="submit">Sign Up</button>
        </div>
    </form>
    </div>
</body>
</html>
