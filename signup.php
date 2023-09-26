<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .signup-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: wheat;
            border-radius: 20px;
		    margin: 50px 600px;
            padding-bottom: 100px;
        }
        form {
            display: flex;
            flex-direction: column;
            padding-bottom: 20px;
        }
        form input {
            display: flex;
            padding: 15px;
            border-radius: 20px;
        }
        button {
		background-color: transparent;
		transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
        border-radius: 20px;
        font-size: larger;
		}

		button:disabled {
		pointer-events: none;
		}

		button:hover {
		color: #fff;
		background-color: #1A1A1A;
		box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
		transform: translateY(-2px);
		}

		button:active {
		box-shadow: none;
		transform: translateY(0);
		}
        #NumberOneInput {
            margin-bottom: 10px;
        }
        #NumberTwoInput {
            margin-bottom: 10px;
        }
        nav {
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        body {
            background-color: burlywood;
        }

    </style>
</head>
<body>
    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="HomePagina.php" method="GET">
            <input id="NumberOneInput"type="email" name="email" placeholder="Email" required>
            <input id="NumberTwoInput" type="password" name="pass" placeholder="Password" required>
            <button type="submit" name="login" >Sign Up</button>
        </form>
        <nav>
            <a href="welkomPagina.php">Terug</a>
            <a href="registerPagina.php">Heb je geen account?Klik hier!</a>
        </nav>
    </section>
</body>
</html>

