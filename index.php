<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Assignment 1: PHP Website</title>

    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- PHP Variables -->
    <?php
        $name;
        $pwd;
        $email;
        $tel;
        $rad_btn;
        $txtarea;
        $drpdwn;
    ?>

    
</head>
<body>
    <main class="content">
        <header>
            <div class="header">
                <img src="images/nwd-logo-website.png" alt="Website originator logo" title="Nomad Web Designs" height="50">
                <h1>PHP Website Assignment 1</h1>
            </div>
        </header>

        <div class="form">
            <form action="" method="post">
                <div class="name">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name"><br>
                </div>

                <div class="pwd">
                    <label for="password">Password:</label><br>
                    <input type="password" id="pwd" name="pwd"><br>            
                </div>

                <div class="email">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"><br>            
                </div>

                <div class="phone">
                    <label for="tel">Phone:</label><br>
                    <input type="tel" id="tel" name="tel"><br>            
                </div>

                <div class="radio">
                    <section class="sect-1">
                        <label for="radio">When is the best time to contact you?</label><br>
                        <form action="">
                            <input type="radio" id="morning" name="morning" value="morning">
                            <label for="morning">morning</label>
                    
                            <input type="radio" id="afternoon" name="afternoon" value="afternoon">
                            <label for="afternoon">afternoon</label>
                    
                            <input type="radio" id="evening" name="evening" value="evening">
                            <label for="evening">evening</label>
                        </form>
                    </section>            
                </div>

                <div class="txtarea">
                    <textarea name="message" id="comments" cols="30" rows="10">Enter your comments here...
                    </textarea><br>
                </div>

                <div class="contact-method"></div>
                    <label for="method">Please choose your preferred contact method:</label>
                    <select name="method" id="method">
                        <option value="call">Call</option>
                        <option value="text" selected>Text</option>
                        <option value="email">Email</option>
                    </select>
                </div>
            </form>
        </div>
    </main>

    <footer class="footer">
        <h2>Nomad Web Designs</h2>
        <p>&copy; March 2022: all rights reserved</p>
    </footer>
    
</body>
</html>

