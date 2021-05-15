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
        <p> Je suis la page Page </p>

            <a style="margin-left:20px;" class="article" href="<?php echo the_permalink(39);?>">L'article</a>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>















        
        <?php get_footer();?>
    </body>
</html>