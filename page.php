<?php 
/* Template Name: main template */ 
get_header(); 
?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
  <div id="contactProgress" class="modal">
    <div class="modal-content">
      <i class="fa fa-spinner fa-5x fa-spin"></i>
    </div>
  </div>

    <!-- Modal Structure -->
  <div id="contactSuccess" class="modal">
    <div class="modal-content">
      <h4>Submission successful</h4>
      <p>Thank you very much for reaching out, I will get back to you as soon as I can.</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn teal">Close</a>
    </div>
  </div>

  <div id="contactFail" class="modal">
    <div class="modal-content">
      <h4>Submission failed</h4>
      <p>Thank you very much for reaching out, We have been notified of this failure and will get it resolved as soon as possible. You can reach us at <a href="mailto:hello@rationalgifts.com">hello@rationalgifts.com</a></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn red">Close</a>
    </div>
  </div>

