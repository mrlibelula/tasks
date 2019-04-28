<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" />
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>

    <title>Project4</title>

    <style>
        .navbar-item.is-mega {
            position: static;
        }
        .navbar-item.is-mega .is-mega-menu-title {
            margin-bottom: 0;
            padding: .375rem 1rem;
        }

        .libesoft {
            font-family: 'Kanit', sans-serif;
            font-size: 1rem;
            margin-top: -0.1rem;
            margin-left: 0.2rem;
        }

        .libesoft-text {
            font-family: 'Kanit', sans-serif;
            font-weight: 100;
        }

        .gradient-blue {
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,1157a0+0,7db9e8+100 */
            background: rgb(30,87,153); /* Old browsers */
            background: -moz-linear-gradient(left, rgba(30,87,153,1) 0%, rgba(17,87,160,1) 0%, rgba(125,185,232,1) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(17,87,160,1) 0%,rgba(125,185,232,1) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, rgba(30,87,153,1) 0%,rgba(17,87,160,1) 0%,rgba(125,185,232,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 */
        }

        .gradient-dark {
            /* background: #aca7cb; */
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,aca7cb+0,aca7cb+100 */
            background: rgb(30,87,153); /* Old browsers */
            background: -moz-linear-gradient(left, rgba(30,87,153,1) 0%, rgba(172,167,203,1) 0%, rgba(172,167,203,1) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left, rgba(30,87,153,1) 0%,rgba(172,167,203,1) 0%,rgba(172,167,203,1) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right, rgba(30,87,153,1) 0%,rgba(172,167,203,1) 0%,rgba(172,167,203,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#aca7cb',GradientType=1 ); /* IE6-9 */
        }
    </style>
</head>
<body>
    <div>
        @yield('navbar')
    </div>
    <div>
        @yield('hero')
    </div>
    <div class="field">
        @yield('nav-page')
    </div>
    <div class="container" style="padding:20px">
        @yield('content')
    </div>
</body>
</html>