<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: cover;
        }

        .login-container {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.8);
            text-align: center;
        }

        .login-container input[type="text"], 
        .login-container input[type="password"],
        .login-container select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .login-container input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <?php
echo $this->Form->create();
echo $this->Form->control('nome', ['required' => true]);
echo $this->Form->control('senha', ['type' => 'password', 'required' => true]);
echo $this->Form->select('funcoes', ['Administrador' => 'Administrador' ,'Vendedor' => 'Vendedor'], ['required' => true]);
echo $this->Form->button(__('Login'));
echo $this->Form->end();
    ?>
</body>
</html>
