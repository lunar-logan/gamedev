<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Space Runner Game</title>
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/core_ui.css">
        <script type="text/javascript"  src="js/jquery-1.9.0/jquery.min.js"></script>

        <script>
            function init() {
                $('#item1').css("background-color", "#0075c4");
            }
            $(document).ready(function() {
                init();
            });
        </script>
    </head>
    <body>
        <div class="canvas">
            <div class="main-content">
                <div class="maya">
                    <div class="menubar">
                        <a href="index.php"><div id="item1" class="item">Home</div></a>
                        <a href="intro.html"><div id="item2" class="item">Introduction</div></a>
                        <a href="specifications.html"><div id="item3" class="item">Specifications</div></a>
                        <div id="item4" class="item">System Requirements</div>
                        <div id="item5" class="item">About</div>
                        <div class="ritem">Download</div>
                    </div>
                </div>
                <div class="content">
                    <div id="title">Space Runner</div>
                    <p>
                        Space is the boundless three-dimensional extent in which objects and events have relative position and direction.[1] Physical space is often conceived in three linear dimensions, although modern physicists usually consider it, with time, to be part of a boundless four-dimensional continuum known as spacetime. In mathematics, "spaces" are examined with different numbers of dimensions and with different underlying structures.                    </p>
                </div>

            </div>
        </div>
        <div class="footer">
            <div class="content-pane">
                <div id="content">
                    <h1>Presentation</h1>
                    <a href="http://prezi.com/ylzluqb36dar/present/?auth_key=vnmaku2&follow=zz6aonhcudv1">Presentation</a>
                </div>
            </div>
            <div class="links">
                <div id="jme-icon">
                    <center>
                        <a href="http://jmonkeyengine.org/"><img src="img/jme_icon.png" width="210" height="50"></a>
                        <a href="http://www.amd.com/us/products/desktop/graphics/Pages/desktop-graphics.aspx"><img src="img/ATI1.png" width="60" height="60"></a>
                        <a href="http://blender.org"><img src="img/blender.png" width="60" height="60"></a>
                    </center>
                </div>
            </div>
            <div class="copy">
                <center>
                    Designed and developed by <a href="#">Anurag Gautam</a> & <a href="#">Chandra Shekhar</a><br>
                    Copyright &COPY; <?php echo date("Y"); ?>, Anurag Gautam
                </center>
            </div>
        </div>
        <div class="maya">
            <div class="dialog">
                <div class="title-bar">Hello World</div>
                <div class="content">
                    <h1>Presentation</h1>
                    <a href="http://prezi.com/ylzluqb36dar/present/?auth_key=vnmaku2&follow=zz6aonhcudv1">Presentation</a>
                    <div class="button">Okay</div>
                </div>
                
            </div>
        </div>
    </body>
</html>
