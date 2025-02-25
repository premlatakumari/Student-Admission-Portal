

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f4f4f4;
        }
        .header {
            background-color: #343a40;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .logo {
            font-size: 20px;
            font-weight: bold;
        }
        .header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
        }
        .header .social-icons a {
            color: white;
            margin-left: 10px;
            font-size: 18px;
        }
        .form-container {
            max-width: 500px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-bottom: 15px;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">ADMISSION SYSTEM</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Admissions</a>
            <a href="#">Students Section</a>
            <a href="#">Register</a>
            <a href="#">Logout</a>
        </nav>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </header>
    <div class="form-container">
        <h2>Student Admission Form</h2>
        <form action="/submit-form" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="text" name="father_name" placeholder="Father's Name">
            <input type="text" name="mother_name" placeholder="Mother's Name">
            <input type="date" name="dob" required>
            <input type="file" name="image" accept="image/*">
            <input type="file" name="document" accept=".pdf">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
 -->


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 20px;
        }
        .header {
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .header nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-size: 16px;
            transition: 0.3s;
        }
        .header nav a:hover {
            color: #ffcc00;
        }
        .header .social-icons a {
            color: white;
            margin-left: 10px;
            font-size: 18px;
            transition: 0.3s;
        }
        .header .social-icons a:hover {
            color: #ffcc00;
        }
        .form-container {
            max-width: 500px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top: 80px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }
        input:focus {
            border-color: #667eea;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
        }
        button:hover {
            background: #764ba2;
        }
        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                text-align: center;
            }
            .header nav {
                margin-top: 10px;
            }
            .form-container {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">ADMISSION SYSTEM</div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Admissions</a>
            <a href="#">Students Section</a>
            <a href="#">Register</a>
            <a href="#">Logout</a>
        </nav>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </header>
    <div class="form-container">
        <h2>Student Admission Form</h2>
        <form action="/submit-form" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="text" name="father_name" placeholder="Father's Name">
            <input type="text" name="mother_name" placeholder="Mother's Name">
            <input type="date" name="dob" required>
            <input type="file" name="image" accept="image/*">
            <input type="file" name="document" accept=".pdf">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
