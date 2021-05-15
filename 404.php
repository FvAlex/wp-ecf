<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">w
        <title> Wordpress </title>
        <link rel="stylesheet" href="css/styles.css">
        <style>
            nav{
                display: flex;
                flex-direction: row;
            }
            .row{
                display: flex;
                flex-direction: row
            }
            .article{
                font-size: 30pt;
                text-decoration: none;
            }
            .date{
                font-size: 10pt;
                color: grey;
                margin-left: 10px;
            }
        </style>
    </head>
    <body>
        <?php get_header();?>
        <p>Je suis la page 404 </p>


        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
    
                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Not Found ERR 404', 'twentythirteen' ); ?></h1>
                </header>
            </div>
        </div>












        
        <?php get_footer();?>
    </body>
</html>