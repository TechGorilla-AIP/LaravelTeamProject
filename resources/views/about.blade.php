<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          
            <div class="content">
                <div class="title m-b-md">
                   About TechGorilla
                </div>
                <div class="fh5co-post-text">
                    <div class="panel-heading"><img src="/favicon.ico" height="45" width="45" /><h4>TechGorilla is a blog system, users can post anything on TechGorilla after login/register.<br/>Please contact at techgorillaservice@gmail.com if you have any question about our service.</h4>
                    <h3>TechGorilla Developers</h3>

                    <p>Fulun He 12650356</p>
                    <p>Qiaozhi Lu 12730507</p>
                    <p>Xiaohan Wang 12730192</p>
                </div><br/><br/>
                <div class="links">

                    <a href="{{ url('')}}">Home</a>
                </div>
                    <br/>Where to find us?<br/>
                    <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJse6XQySuEmsRO7j5kgWBIWA&destination=place_id:ChIJQ0g5teWkEmsRtthvc4PGLiI&key=AIzaSyArelRfP_JZavbFFEFX0zL2Rhh_-uIjv1s" allowfullscreen></iframe>
                
            </div>

        </div>
    </body>
</html>
