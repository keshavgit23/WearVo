@include('navbar')

<!DOCKTYPE html>
<html>
    <head>
        <title> Hero Section</title>
    <style>
        .hero{
            width: 100%;
            text-align: center;
            height: 500px;
            background-image: url('/images/hero1.jpg');
            background-size: cover;
            background-position: center;
            flex-direction: column;
            justify-content: center;
            padding-left: 50px;
            color: black;
        }
        .hero h1{
            font-size: 50px;
            margin: 0;
        }
        .hero p{
            font-size: 20px;
            margin-bottom: 20px;
            max-width: 100%;
        }
        .hero button{
            margin-top: 20px;
            padding: 15px 25px;
            border: none;
            border-radius: 10px;
            background: yellow;
            color: black;
            font-size: 18px;
            cursor: pointer;
            margin-top: 170px;
        }

        </style>
</head>
 <body>
    <div class="hero">
    <h1> Welcome to WearVo </h1>
    <p> Discover the latest trends here! </p>
    <button> Shop Now </button>
    </div>
</body>
</html>