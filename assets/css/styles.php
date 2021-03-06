<style>
    body, html{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
    }

    *, *::after, *::before{
        box-sizing: inherit;
    }

    header{
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 1;
    }

    nav{
        display: flex;
        justify-content: space-between;
        width: 80%;
        margin: 0 auto;
        padding-top: 1rem;
        /* border: 2px solid; */
    }

    nav > div{
        /* border: 2px solid blue; */
        display: flex;
        align-items: center;
        flex-grow: 1;
        justify-content: center;
    }

    nav ul{
        /* border: 2px solid; */
        list-style-type: none;
        margin: 0; 
        padding: 0;
        display: flex;
        flex-grow: 1;
        justify-content: center;
    }

    nav a{
        border-bottom: 2px solid transparent;
        padding-bottom: 0.2rem;
        text-decoration: none;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
        margin: 0 1rem;
        transition: border-color 800ms;
        border-radius: 2px;
    }

    nav a:not(.nav-logo):hover{
        border-color: black;
    }

    .nav-logo{
        letter-spacing: 5px;
        transition: none;
    }


    #home{
        height: 100vh;
        background-image: url("../assets/img/home-bg.jpg");
        background-size: cover;
        background-position: 60% 65%;
        background-attachment: fixed;
        position: relative;
    }


    #route-search-form{
        position: absolute;
        top: 20%;
        right: 20%;
        width: 20rem;
        border: 2px solid white;
        font-size: 1.4rem;
        padding: 1rem 0.5rem;
        color: white;
        border-radius: 15px;
    }


    #route-search-form h1{
        margin-top: 0;
        text-align: center;
        color: white;
    }

    form{
        padding: 0 0.5rem;
        font-weight: bold;
    }

    #route-search-form div{
        margin: 1rem 0;
    }

    form input{
        margin-top: 0.8rem;
        border: 2px solid black;
        outline: none;
        width: 100%;
        font-size: inherit;
        border-radius: 5px;
    }

    #route-search-form form div:last-child{
        text-align: center;
    }

    form button{ 

        color: #fff;
        border:2px solid #fff;
        padding: 0.3rem 0.7rem;
        font-size: 1.2rem;
        font-weight: bolder;
        background-color: transparent;
        transition: background-color 800ms, color 800ms;
        border-radius: 4px;
    }

    form button:hover{
        background-color: #fff;
        color: #201E22;
        cursor: pointer;
    }

    #block{
        width: 85%;
        margin: 0 auto;
    }

    #info-num{
        display: flex;
        justify-content: center;
        padding: 2.5rem 0;
    }

    #info-num figure{
        margin: 0 3rem;
        text-align: center;
    }

    #info-num figcaption{
        margin-top: 1rem;
        text-transform: uppercase;
    }

    #info-num .num{
        display: block;
        margin-bottom: 0.3rem;
        font-size: 1.2rem;
        font-weight: 800;
    }

    #pnr-enquiry{
        border: 2px solid;
        height: 50vh;
        background-image: url("../assets/img/pnr-bg.jpg");
        background-size: cover;
        background-position: 50% 50%;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    #pnr-form{
        flex-basis: 50%;
        color: white;
        font-size: 1.4rem;
        position: relative;
        z-index: 1;
    }

    #pnr-form::before{
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        right: 0%;
        background-color: black;
        z-index: -1;
        opacity: 0.5;
    }

    #pnr-form input{
        width: 60%;
    }

    #pnr-form div{
        margin: 2rem 0;
    }

    #pnr-form button{
        font-weight: 400;
        padding: 0.3rem 1rem;
        text-transform: uppercase;
        border: 3px solid;
    }

    #pnr-form button:hover{
        color: #212529;
        background-color: white;
        cursor: pointer;
    }

    footer{
        height: 60vh;
    }
/* Tablet */
    @media only screen and (min-width: 768px){
        nav, #block{
            width: 100%;
        }

        #route-search-form{
            right: ;
        }


    }
/* Desktops */
    @media only screen and (min-width: 992px){
        
    }

/* mob */
    @media only screen and (max-width: 768px){
        
    }

</style>


