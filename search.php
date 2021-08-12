
    <?php get_header();?>
    <div class="container content">
        <div class="main block">
            <h1 class="page-header">
                Search Results : 
            </h1>
            <?php if(have_posts()) :?>
            <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('content',get_post_format());?>

            <?php endwhile; ?>

            <?php else:?>
                <?php echo apautop('Sorry,no Posts were found');?>

            <?php endif;?>

           
        </div>

        <div class="side">
            <div class="block">
                <h3>Sidebar Head</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis voluptates vitae ex suscipit modi nisi deleniti aspernatur consequatur optio, necessitatibus ad deserunt non illo doloremque at laudantium quam minus dolorum.</p>
                <a href="#" class="button">More</a>
            </div>
        </div>
    </div>

    <?php get_footer();?>
