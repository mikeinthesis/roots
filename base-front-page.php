<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

<section class="above-the-fold">
  <div class="wrap container" role="document">
    <div class="content row">
      <h1>A <span class="colored">SMARTER</span> WAY TO LOSE.</h1>
      <h2>What is HCG 2.0? A contemporary HCG diet for the average working adult.</h2>
      <div class="col-sm-6">
        <h3>How It Works:</h3>
        <img class="how-it-works" src="http://placehold.it/460x250/adc483/ffffff" />
        <!-- <iframe width="460" height="250" src="//www.youtube.com/embed/htgyXOpKx_8" frameborder="0" allowfullscreen></iframe>-->
        <h3 id="seen-in">As Seen On:</h3>
        <ul class="list-inline credibility">
          <li><img src="<?php echo get_bloginfo('template_url'); ?>/assets/img/credibility/yahoo.png" /></li>
          <li><img id="wellness" src="<?php echo get_bloginfo('template_url'); ?>/assets/img/credibility/wellness.jpg" /></li>
        </ul>
      </div>

      <div class="col-sm-6 optin">
        <h2>Get the First Chapter of HCG 2.0 Free:</h2>
        <div class="row">
          <div class="col-sm-6">
            <form role="form">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Your Name" />
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Your Email" />
              </div>
              <button type="submit" class="btn btn-primary btn-lg">DOWNLOAD</button>
            </form>
          </div>
          <div class="col-sm-6">
            <img src="http://placehold.it/200x200/adc483/ffffff" />
          </div>
        </div>
      </div>
    </div><!-- /.content -->
  </div><!-- /.wrap -->
</section>

<section id="three-sections">
  <div class="container">
    <div class="row">
      <center><h2>How much do you want to lose?</h2></center>
      <div class="col-sm-4">
        <h3>15-25 Pounds</h3>
        <p>It's likely that this is the first time you've had to pursue a weight loss option. Maintaining a healthy weight has probably never been a problem for you. However, you're not as active as you used to be, and over the course of months or years, the pounds have begun to accumulate.</p>
      </div>
      <div class="col-sm-4">
        <h3>25-50 Pounds</h3>
        <p>Although your weight hasn't always been a problem, This probably isn't the first time you've considered a diet plan. You've likely gained weight over the years, done some yo-yo dieting with intermittant success, but still continue to gain.</p>
      </div>
      <div class="col-sm-4">
        <h3>50+ Pounds</h3>
        <p>You've likely struggled your weight your entire life. The household you grew up in probably didn't give you much of an opportunity to eat healthy. You also may have underlying metabolic issues.</p>
      </div>
    </div>
  </div>
</section>


<section id="section-one">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h2>THE GREATEST DIET YOU'VE NEVER HEARD OF: HCG 2.0</h2>
        <p>Are you aware that the term HCG Diet and related keywords get nearly 30 million Google searches per month?</p> 

        <p>Why? Because it works! </p>

        <p>Is it easy? NO. It’s brutal… But it doesn’t have to be. </p>

        <p>This is why I wrote and published HCG 2.0. A diet need not be the undertaking of a lifetime to achieve life-changing results.</p>

        <p>Keep in mind this is no “magic pill” diet. But, HCG 2.0 is a low-calorie diet that you CAN stick to and achieve long lasting results, even if you’ve struggled with weight-loss in the past… especially if you’ve struggled with weight-loss in the past. </p> 

        <p>What makes it so effective? HCG 2.0 uses advanced research into low-carb, ketosis dieting; food chemistry and the supplement HCG to get dramatic, continual results.</p> 
      </div>
    </div>
  </div>
</section>

<section id="section-two">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-8">
        <h2>HCG BASICS AND CONCERNS</h2>
        <p>The original HCG diet was developed and popularized in 1954 by Dr. Alfred T.W. Simeons.</p>

        <p>Dr. Simeons’ protocol is extremely strict and difficult, even dangerous, to sustain. It allows for only 500 calories to be consumed daily, regardless of your weight, height, or gender.</p>

        <p>In fact, Dr. Simeons’ original patients would be admitted to his clinic so they could be observed and supported throughout the diet. As a result, these patients were removed from the everyday stresses of work, chasing children around and helping them with homework, and resisting late-night temptations while making dinner for families.</p> 

        <p>Bottom line… 500 calories a day is not only impractical for today’s working adult: it simply isn’t safe or sustainable without clinical supervision! Most participants of the original HCG diet report the following side-effects: piercing headaches, continuous and gnawing hunger, heavy fatigue, and depression.</p>

        <p>As a result, the failure rate while on the original diet is high. You simply can’t live in today’s fast-paced world on 500 calories a day.</p> 

        <p>When I first started selling HCG, I liked the idea of offering my patients rapid weight loss, and the thousands of success stories had me convinced that Dr. Simeons’ HCG could do it. 
        But knowing what I know about food science and life’s everyday demands on our bodies, I started to doubt the original protocol. It wasn’t something I could offer my patients in good conscience. So, I created HCG 2.0.</p>
      </div>
    </div>
  </div>
</section>

<section id="section-three">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h2>HOW HCG 2.0 IS DIFFERENT</h2>
        <ul>
          <li><strong>It is tailored to the individual.</strong> Every HCG 2.0 patient has different needs. Assigning just 500 calories a day to EVERYONE is foolish. HCG 2.0 uses a unique BMR calculator which uses your current weight and height to determine the perfect number of protein calories for YOU to consume to lose rapid weight, while not experiencing the side effects listed earlier.</li>
          <li><strong>It uses recent developments in food chemistry.</strong> When Dr. Simeons popularized the HCG diet, “food chemistry” wasn’t a studied field. By using modern day food science, HCG 2.0 teaches you how to eat smarter and NOT starve, while maintaining rapid weight loss.</li>
          <li><strong>Food portions take the kind of food into consideration.</strong> HCG 2.0 uses a P/CF (Protein/Carbs and Fats) calculation to help you choose smarter foods to eat. The smarter the food, the more of it you can eat while on the diet!</li>
          <li><strong>“Bad days” are allowed.</strong> The original HCG diet is so strict that even slipping up for one or two days can have a major effect on the success of the diet. HCG 2.0 embraces mistakes and allows for breathing room throughout the diet. There is no “failure” on HCG 2.0… only varying levels of success.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="section-four">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-8">
        <h2>IS HCG 2.0 EASY?</h2>
        <p>Weight loss is never easy. If it was we’d all fit into our fav jeans and obesity wouldn’t be epidemic. However, eating smart is easy and quite satisfying.  No matter what diet or program you use, there will be challenges. For most of us, change is tough… but the rewards (in this case, weight-loss and healthier lifestyle) are worth it!</p>

        <p>That being said, I’ve seen more patients succeed with HCG 2.0 than any other diet. So while I can’t say HCG 2.0 is easy, I will say it is more sustainable for the modern lifestyle. More, I’ll say that for you, it’s not only possible, but LIKELY you will experience dramatic, life-changing weight loss with HCG 2.0.</p>

        <p>While the low calorie diet itself is what causes the rapid weight loss, the process is facilitated with the HCG hormone.</p>

        <p>What the HCG hormone does is simple:</p>
        <ol>
          <li><strong>HCG targets your weight loss</strong> so that you maintain muscle mass while strictly losing from abnormal fat deposits… more commonly known as our “trouble spots.”</li>
          <li><strong>HCG suppresses appetite</strong> by enhancing Ketosis, a process that converts fat stores to usable calories. As a result, your body will sustain itself on your stored fat, making you less hungry on the low calorie diet.</li>
          <li><strong>HCG has the capacity to “reset” your metabolism</strong> when used with the HCG 2.0 guidelines. This allows you to successfully maintain your weight loss.</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section id="section-five">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h2>WHAT PEOPLE ARE SAYING ABOUT HCG 2.0</h2>
        <p>If your experience is anything like the bulk of my patients’, <u>you will lose weight.</u> Let me say it again: <em>A diet need not be the undertaking of a lifetime to achieve life-changing results.</em>  On HCG 2.0, eat smart, don’t starve… and lose.</p>
      </div>
    </div>
  </div>
</section>

<section id="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>TRY HCG 2.0 NOW</h3>
      </div>
    </div>
  </div>
</section>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
