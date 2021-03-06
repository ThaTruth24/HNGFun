<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Profile Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        * {
            box-sizing: border-box;
        }
        body {
            background: #ffff00;
            margin: 20px;
            color: #900;
        }
        section {
            margin: 50px auto;
            padding: 20px;
        }
        
        header {
            margin-left: 10px;
            float: left;        
        }
        header h1 {
            font-size: 25px;
            font-style: italic;
        }
        img {
            border: 4px solid #c60;
            width: 250px; 
            margin-right: 10px;
            border-top-right-radius: 50px;
            border-bottom-left-radius: 50px;
        }

        .desc h1 {
            font-size: 4em;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .desc p {
            font-size: 1.2em;
            margin-top: -20px;
        }
        .small {
            line-height: 25px;
        }
        @media (min-width: 769px){
            .desc {
                padding-left: 25%;
            }
            section {
                margin-left: 15%;
                margin-top: 8%;
            }
        }
        @media (min-width: 768px){
            .small {
                margin-top: 460px;
            }
        }
        @media (min-width: 600px) and (max-width: 768px){
            .desc {
                padding-left: 5%;
                margin-left: -5%;
            }
        }
        @media (min-width: 769px){
            img {
                margin-left: -10%;
            }
        }

        /* responsive design */

        @media (min-width: 768px){
            .col-1 {width: 8.33%;}
            .col-2 {width: 16.66%;}
            .col-3 {width: 25%;}
            .col-4 {width: 33.33%;}
            .col-5 {width: 41.66%;}
            .col-6 {width: 50%;}
            .col-7 {width: 58.33%;}
            .col-8 {width: 66.66%;}
            .col-9 {width: 75%;}
            .col-10 {width: 83.33%;}
            .col-11 {width: 91.66%;}
            .col-12 {width: 100%;}

            [class*="col-"] {
                float: left;
                padding: 15px;
            }

            .row:after {
                content: "";
                clear: both;
                display: block;
            }
        }

        [class*="col-"] {
                max-width: 100%;
        }

        </style>
    </head>
    <body>
        
        <section class='row'>
            <article class="desc col-8">
                <h1>Hi, I'm Befe!</h1>
                <p class="small"> I am a Web developer with skills in HTML, CSS, JAVASCRIPT AND PHP!</p>
                <p class="small"> I use the following Frameworks: Bootstrap, JQuery, AngularJs.</p>
            </article>
            <article class='col-4'>
                <img src='http://res.cloudinary.com/befe/image/upload/v1523623765/dbefe.jpg' alt ='befe sitted and giving a pose'>
            </article>
        </section>

    </body>
</html>