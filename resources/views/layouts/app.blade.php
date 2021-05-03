<html>

<head>
    <title>App Name - @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

        .menuhorizontal {
            margin: 0;
            padding: 0;
            width: auto;
            height: 30px;
        }

        /*definições gerais do menu*/

        .menuhorizontal ul {
            list-style: none;
        }

        /*retirar o estilo das listas*/

        .menuhorizontal li {
            display: inline;
            float: left;
            padding:0px;
            margin: 0;
            width: 80px;
            border-left: #666666 thin solid;
        }

        /*formatar a lista. Definir o tamanho do botão, o seu posicionamento e display: inline por ser um menu horzontal*/

        .menuhorizontal a {
            display: block;
            text-decoration: none;
            padding: 6px;
            background-color: #CCCCCC;
            font-family:Verdana, Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }

        /* formatação da âncora e área clicável*/

        .menuhorizontal :hover {
            background-color: #EEEEEE;
            text-decoration: none;
            color: #FFFFFF;
        }

        /*formatação do estado :hover*/

        .menuhorizontal li.btnesquerdo {
            border: none;
        }

    </style>

</head>

<body>
    @section('sidebar')

    @show

    <ul class="menuhorizontal">
        <li><a href="{{ route('courses.index') }}">Cursos</a></li>
        <li><a href="{{ route('students.index') }}">Alunos</a></li>
        <li><a href="{{ route('enrollments.index') }}">Matrículas</a></li>
    </ul>
    <hr>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>
