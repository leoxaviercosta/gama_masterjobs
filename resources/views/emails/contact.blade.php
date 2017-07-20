<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Mensagem recebida</title>
    <meta charset="UTF-8">
</head>

<body>
    <style>
        body {
                background: url('http://masterjobs.tech/assets/img/bg.jpg');
        }

        a {
            text-decoration: none;
        }

        .container {
            margin: 0 auto;
            max-width: 700px;
            width: 70%;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
        }

        .container ul {
            list-style: none;
            padding: 0 0 0 10px;
        }

        .btn {
            padding: 10px 30px 10px 30px;
            margin: 0 auto;
            border: 1px solid #54c000;
            color: #54c000;
        }
    </style>
    <div class="container">
        <p><b>Nome:</b> {{ $name }}</p>
        <p><b>Email:</b> {{ $email }}</p>
        <p><b>Assunto:</b> {{ $subject }}</p>       
        <p><b>Mensagem:</b> {{ $msg }}</p> 
        <br/>
        <center>
            <div style="text-align: center; margin: 0 auto;padding-bottom: 10px;">
                <div style="float:left; width: 50%;text-align: right;">
                    <img src="http://masterjobs.tech/assets/img/logo-master-jobs.png" alt="Master Jobs" title="Master Jobs"
                    style="max-width: 200px;width:100%;margin-top: 6px;margin-right: 6px;" />
                </div>

                <div style="float:left; width: 50%;text-align: left;">
                    <img src="http://masterjobs.tech/assets/img/logo-gama.png" alt="Gama Academy" title="Gama Academy" style="margin-left: 6px;max-width: 200px;width:100%;" />
                </div>
            </div>
        </center>
    </div>
</body>

</html>