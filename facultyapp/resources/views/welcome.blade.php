<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/uil.css">
    <title>faculty</title>

    <style>
        

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }
        a{
            text-decoration: none;
        }
        .header{
            position: fixed;
            height: 80px;
            width: 100%;
            z-index: 100;
            padding: 0 20px;

        }
        .nav{
            max-width: 1100px;
            width: 100%;
            margin: 0 auto;
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: space-between;
        }
        .nav_logo{
            font-size: 25px;
            color: #fff;
        }
        .button{
            padding: 6px 24px;
            border: 2px solid #fff;
            cursor: pointer;
            background-color: transparent;
            border-radius: 6px;
            color: #fff;
            font-size: 18px;
        }
        .button:active{
            transform: scale(0.98);
        }
        
        .nav_item{
            display: flex;
            height: 100%;
            align-items: center;
            justify-content: space-between;
            column-gap: 25px;
        }
        .nav_link{
            margin-left: 25px;
            font-size: 20px;
            color: #fff;
        }
        .nav_link:hover{
            color: orange;

        }
        ul{
            list-style: none;
        }
        .home{
            position: relative;
            height: 100vh;
            width: 100%;
            background-image: url({{asset('upload/home.jpg')}});
            background-size: cover;
            background-position: center;
        }
  
    
    </style>
</head>
<body>
   <header class="header">

    <nav class="nav">
        <a href="" class="nav_logo">
      Students Management
        </a>
        <ul class="nav_items">
            <li class="nav-item">
                <a href="" class="nav_link">Home</a>
                <a href="" class="nav_link">About</a>
                <a href="" class="nav_link">perfomance</a>
                <a href="" class="nav_link">Contact</a>
            </li>
        
        </ul>
        <a href="{{ route('login') }}">  <button class="button">Login</button> </a>
        <a href="{{ route('register') }}">  <button class="button">Register</button> </a>
            </nav>
   </header>
<section class="home">

        </form>
       </div>

   


        </form>
       </div>
    </div> 

</section>

<script>


    </script>
</body>
</html>