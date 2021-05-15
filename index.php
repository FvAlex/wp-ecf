<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
        <p> Je suis la page d'accueil</p>

        <a style="margin-left:20px;" class="article" href="<?php echo the_permalink(47);?>">Page</a>

        <div class="row">
            <a style="margin-left:20px;" class="article" href="<?php echo the_permalink(39);?>">Article</a>
            <p class="date"><?php the_date(); ?> </p> 
        </div>
















        <?php get_footer();?>
    </body>
</html>