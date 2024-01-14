<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="nav-bar">
    <a href="#" class="logo">ALEXIAN.</a>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : ''}}">Accueil</a></li>
            <li><a href="{{ route('projects') }}" class="{{ Request::routeIs('projects') ? 'active' : ''}}">Projets</a></li>
            <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'active' : ''}}">À propos</a></li>
            <li><a href="{{ route('skills') }}" class="{{ Request::routeIs('skills') ? 'active' : ''}}">Livret de compétences</a></li>
            <li><a href="{{ route('tech-watch') }}" class="{{ Request::routeIs('tech-watch') ? 'active' : ''}}">Veille technologique</a></li>
        </ul>
    </nav>
</div>
@yield('content')
@section('footer')
<div class="footer">
    <div class="copyright">
    <i class='bx bx-copyright'>2024</i>
    </div>
<div class="footer-links">
        <a href="#"><i class='bx bxl-github'></i></a>
        <a href="#"><i class='bx bxl-linkedin' ></i></a>
    </div>
</div>
@show
<style>
    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style: none;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-sizing: border-box;
    }
    body{
        background: #090b11;
        color: #c3cadb;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 100vh;
        width: 100vw;
        margin: 0;
        display: flex;
        flex-direction: column;
    }
    /** responsive navbar */
    .nav-bar {
        display: block;
        width: 100%;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /**border-radius: 1rem;*/
        /** border : 1px solid #2d3445; */
        padding: 10px 100px;
        background:  #151a27;
        box-shadow: #bbbbbb 0px 1px 8px -2px;
    }
    .logo{
        position: relative;
        font-size: 28px;
        color: #fefefe;
        text-decoration: none;
        font-weight: 600;
    }
    .hamburger{
        display: none;
    }
    .navbar{
        position: relative;
        transition: 0.2s;
        margin: 0 5px;
    }

    .navbar ul {
        display: flex;
    }
    .navbar ul li a{
        display: block;
        color: #c3cadb;
        font-size: 20px;
        padding: 10px 25px;
        border-radius: 50px;
        transition: 0.2s;
        margin: 0 5px;
    }
    .navbar ul li a:hover{
        color :#fefefe;
        background: #7611a6;
    }
    .navbar ul li a.active{
        color: #fefefe;
        background: #7611a6;
    }
    @media only screen and (max-width: 1300px){
        .navbar ul li a {
            padding: 10px 20px;
        }
    }
    @media only screen and (max-width: 1250px){
        .navbar ul li a {
            padding: 10px 17px;
        }
    }
    @media only screen and (max-width: 1200px){
        .navbar ul li a {
            padding: 10px 15px;
        }
    }
    @media only screen and (max-width: 1150px){
        .navbar ul li a {
            padding: 10px 13px;
        }
    }
    @media only screen and (max-width: 1100px){
        .navbar ul li a {
            padding: 10px 10px;
        }
    }
    @media only screen and (max-width: 1050px){
        .navbar ul li a {
            padding: 10px 7px;
        }
    }
    @media only screen and (max-width: 1000px){
        .navbar ul li a {
            padding: 10px 5px;
        }
    }
    @media only screen and (max-width: 900px){
        .hamburger{
            display: block;
            cursor: pointer;
        }
        .hamburger .line{
            width: 30px;
            height: 3px;
            background: #fefefe;
            margin: 6px 0;
        }
        .navbar{
            height: 0px;
            position: absolute;
            top: 80px;
            left: 0;
            right: 0;
            width: 100vw;
            background: #151a27;
            transition: 0.5s;
            overflow: hidden;
        }
        .navbar.active{
            height: 450px;        
        }
        .navbar ul{
            display: block;
            width: fit-content;
            margin: 80px auto 0 auto;
            text-align: center;
            transition: 0.5s;
            opacity: 0;
        }
        .navbar.active ul{
            opacity: 1;        
        }
        .navbar ul li a{
            margin-bottom: 12px;
        }
    }
    /** KEYFRAMES ANIMATION */
    @keyframes showRight{
        100%{
            width: 0;
        }
    }
    /** footer */
    .footer{
        width: 100%;
        height: 80px;
        display: block;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background:  #151a27;
        padding: 10px 100px;
        /** border : 1px solid #2d3445; */
        box-shadow: #bbbbbb 0px 1px 8px -2px;
        }
    .footer-links{
        margin-left: 90%;
    }
    .footer-links a{
        position: relative;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        background: transparent;
        border: 2px solid #fefefe;
        border-radius: 50%;
        font-size: 20px;
        color: #fefefe;
        text-decoration: none;
        z-index: 1;
        overflow: hidden;
        transition: .5s;
    }
    .footer-links a:hover{
        color: #081b29;
    }
</style>
<script>
    const navbar = document.querySelector('.navbar'); 
    const hamburger = document.querySelector('.hamburger')

    hamburger.addEventListener('click', () => {
    navbar.classList.toggle('active');
});
</script>