<style type="text/css">

    html{
        scroll-behavior: smooth;
    }
    *{
        margin-top:-12px;
        padding:0;
        box-sizing: border-box;
        font-family: 'Poppins',sans-serif;
    }
    .row{
        margin-left: 0!important;
        margin-right: 0!important;
    }
    /*      Navbar Section*/
    .nav_style{


        background-color: #a29bfe!important;
    }
    .nav_style a {

        padding-top: 15px;
        color:white;
    }

    /*    Main Header Styling*/
    .main_header{


        height:450px;
        width:100%;
    }
    .rightside h1{
        font-size:3rem;

    }
    .animation img{
        animation: gocorona 3s linear infinite;
    }
    @keyframes gocorona{
        0%{transform:rotate(0);}
        100%{transform:rotate(360deg);}
    }

    .leftside img{
        animation:heartbeat 5s linear infinite;
    }
    @keyframes heartbeat{

        0%{
            transform: scale(.75);
        }
        20%{
            transform: scale(1);
        }
        40%{
            transform: scale(.75);
        }
        60%{
            transform: scale(1);
        }
        80%{
            transform: scale(.75);
        }
        100%{
            transform: scale(.75);
        }
    }

    /*Corona Update Section Styling*/
    .corona_update{
        margin: 0 0 30px 0;
    }

    .corona_update h3{
        color:#ff7675;
    }
    .corona_update h1{
        font-size: 2rem;
        text-align: center;
    }

    /*About Section Styling*/
    .sub_section{
        background-color: #fbf9ff;
    }

    /*Footer Section Styling*/
    .footer_style{
        background-color: #a29bfe!important;
    }
    .footer_style p{

        padding:5px;
        margin-bottom: 0!important;
    }

    /*Top Scroll*/
    #myBtn{
        display: none;
        position: fixed;
        bottom: 30px;
        right:40px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #00A8FF;
        color:white;
        cursor: pointer;
        padding: 10px;
        border-radius:10px;
    }
    #myBtn:hover{
        background: #606060;
    }

    /*    Responsive*/
    @media(max-width:768px)  {
        .main_header{
            height: 360px;
            text-align: center;
            margin-bottom: 300px;    
        }

        .main_header h1{
            text-align: center;
            padding: 0;
            width: 100%;
            font-size:40px;
        }
        .count-style{
            display: inline!important;


        }
        .count-style p{
            text-align: center;
        }

        .about_res{
            margin-left: 0!important;
        }

        .ch-style{
            margin-bottom: 60px!important;
        }
    }  

</style>

