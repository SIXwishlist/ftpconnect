<!DOCTYPE html>
<html>
    <head>
        <!-- Page title -->
        <title>FTP Connect - The free and simple FTP client for you</title>
        
        <!-- SEO -->
        <meta name="description" content="FTP Connect - The free and simple FTP client for you">
        <meta name="keywords" content="FTP,free,online,FTP client">
        <meta name="author" content="Chooper100">
        
        <!-- General meta -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!-- Styles -->
        <link href='/assets/css/home.css' rel='stylesheet' type='text/css'>
        
        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        
        <!--Scripts-->
        <script src="/assets/js/home.js" async></script>
    </head>
    <body>
        <?php include_once($_SERVER['DOCUMENT_ROOT'].'/parts/analyticstracking.php') ?>
        <div id="start">
            <div id="start-left">
                <h1>FTP Connect</h1>
                <h2>The free and simple FTP client for you</h2>
            </div>
            <form method="post" id="start-form" action="test_ftp.php">
                <h3>Get started:</h3>
                <div class="input-group">
                    <label for="txtftphost" class="control-label">FTP Host:</label>
                    <input type="text" class="form-control" id="txtftphost" name="ftphost" />
                </div>
                <div class="input-group">
                    <label for="txtuser" class="control-label">FTP Username:</label>
                    <input type="text" class="form-control" id="txtuser" name="user" />
                </div>
                <div class="input-group">
                    <label for="txtpass" class="control-label">FTP Password:</label>
                    <input type="password" class="form-control" id="txtpass" name="pass" />
                </div>
                <input type="submit" class="btn-submit" value="Go"/>
                <p>Warning: Currently only uses standard FTP connection over http!</p>
            </form>
            <div id="start-down-container">
                <a href="#main">
                    <i id="start-down" class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div id="main">
            <div id="warning">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <b>Warning - Early access project:</b>
                This project could contain broken or missing features
            </div>
            
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/parts/footer.php'; ?>
    </body>
</html>	
