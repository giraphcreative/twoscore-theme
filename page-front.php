<?php
/**
 * Template Name: Homepage
 */

get_header();

?>

	<section id="consulting" class="what">
		
		<header>
			<h2>What We Do</h2>
			<p>TwoScore was founded to work exclusively with credit unions under $100 million in assets. While many firms offer services to this group, they often use a "one-size-fits-all" approach to marketing that doesn't cater to the unique needs of small credit unions.</p>
		</header>

		<div class="inner">
			
			<div class="blocks">
				<div class="block">
					<div class="text-center">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/icon-marketing-research.png">
					</div>
					<h3>Strategic Marketing</h3>
					<p>Over 90% of our clients choose us as their full-service marketing department. From conducting research to setting goals an engaging your employees, we make marketing with measurable results a reality.</p>
					<p><a href="#connect" class="button">Learn More</a></p>
				</div>
				<div class="block">
					<div class="text-center">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/icon-road.png">
					</div>
					<h3>Strategic Planning</h3>
					<p>We draw on our many years of credit union experience to compare your trends to industry and peer, ask challenging questions, and align your management team around future organizational objectives.</p>
					<p><a href="#connect" class="button">Learn More</a></p>
				</div>
				<div class="block">
					<div class="text-center">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/icon-marketing-review.png">
					</div>
					<h3>Marketing Review</h3>
					<p>Already have a marketing plan in place? We'll perform an audit to ensure it's the most relevant and best use of your budget.</p>
					<p><a href="#connect" class="button">Learn More</a></p>
				</div>
				<div class="block">
					<div class="text-center">
						<img src="<?php bloginfo( 'template_url' ); ?>/img/icon-branding.png">
					</div>
					<h3>Reimagined Brand</h3>
					<p>From culture development to new logos and website redesigns, we're here to help you bring your brand to life for your members.</p>
					<p><a href="#connect" class="button">Learn More</a></p>
				</div>
			</div>
			
			<div class="right-column">
				<!--
				<div class="block">
					<h3>Case Studies</h3>
					<p>Read case studies about our recent projects.</p>
					<p><a href="/case-studies" class="button">Case Studies</a></p>
				</div>
				-->
				<div class="block">
					<h3>Testimonials</h3>
					<p>See what our clients have to say about us.</p>
					<p><a href="#testimonials" class="button">Testimonials</a></p>
				</div>
			</div>

		</div>

	</section>

	<section id="results" class="why">
		
		<header class="eiffel">
			<h2>Results</h2>
		</header>

		<div class="inner text-center">
			<!--
			<div class="shutter">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/arrow-large.png">
				<h3><span>1,021%</span> ROI</h3>
				<div class="caption">
					<p>Results a $25 million credit union achieved during a two-month used auto loan campaign developed by TwoScore.</p>
				</div>
			</div>
		
			<div class="shutter">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/arrow-large.png">
				<h3><span>1,226%</span> ROI</h3>
				<div class="caption">
					<p>TwoScore developed a new auto loan campaign that helped a $44 million credit union achieve 1226% ROI.</p>
				</div>
			</div>
		
			<div class="shutter">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/arrow-large.png">
				<h3><span>1,401%</span> ROI</h3>
				<div class="caption">
					<p>A three-month auto loan campaign developed by TwoScore for a $19 million credit union helped them achieve 1401% ROI.</p>
				</div>
			</div>
		
			<div class="shutter">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/arrow-large.png">
				<h3><span>13%</span> Growth</h4>
				<div class="caption">
					<p>A $19 million credit union grew their auto loan portfolio over 13% in the first half of 2015 through working with TwoScore.</p>
				</div>
			</div>
		
			<div class="shutter">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/arrow-large.png">
				<h3><span>31%</span> Growth</h3>
				<div class="caption">
					<p>A $25 million client credit union grew their auto loan portfolio by over 31% in 2015 through working with TwoScore.</p>
				</div>
			</div>
		
			<div class="shutter">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/arrow-large.png">
				<h3><span>816%</span> ROI</h3>
				<div class="caption">
					<p>Results a $44 million credit union achieved from an auto loan campaign developed by TwoScore.</p>
				</div>
			</div>
		
			<div class="shutter">
				<img src="<?php bloginfo( 'template_url' ) ?>/img/arrow-large.png">
				<h3><span>509%</span> ROI</h3>
				<div class="caption">
					<p>The results a $44 million credit union realized from a two-month HELOC campaign built by TwoScore.</p>
				</div>
			</div>
			-->
			<img src="<?php bloginfo( 'template_url' ) ?>/img/infographic.png" class="infographic" >

		</div>

	</section>


	<section id="blog" class="work">
		
		<header>
			<h2>Blog</h2>
		</header>
		
		<div class="inner">
			
			<?php
			$wp_query = new WP_Query( array( 'posts_per_page' => 3 ) );
			if ( have_posts() ) {
				while ( have_posts() ) { the_post(); ?>
				<div class="entry">
					<div class="thumbnail">
						<?php the_post_thumbnail() ?>
					</div>
					<div class="entry-content">
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<p class="meta">Posted by <?php the_author_link() ?> in <?php print get_the_category_list( ', ', '', get_the_ID() ) ?> <span>on <?php the_date() ?></span></p>
					</div>
				</div>
					<?php
				}				
			}
			?>
			
			<div class="aux">
				<a href="/blog" class="read-more">All Blog Entries &raquo;</a>
				<a href="/subscribe" class="subscribe-link">Subscribe for Updates &raquo;</a>
			</div>
			
		</div>

	</section>


	<section id="speaking" class="who">
		
		<header>
			<h2>Speaking</h2>
			<p>We share our expertise in marketing strategy, organizational culture, branding, and strategic planning with credit union partners all across the country.</p>
		</header>

		<div class="topics list-styles">
			<h4>Topics Include:</h4>
			<ul>
				<li>Rock Solid Goal Setting</li>
				<li>Bringing Your Culture to Life</li>
				<li>Building a Winning Marketing Plan</li>
				<li>Reading and Understanding Your Credit Union’s Financials</li>
				<li>Finding Your Inner Marketing Rockstar</li>
				<li>Are My Marketing Efforts Successful?</li>
				<li>Strategic Planning Sessions</li>
			</ul>
		</div>
			
		<div class="download">
			<a href="<?php bloginfo( 'template_url' ) ?>/documents/speaking-topics.pdf">Download our Speaking Topics</a>
		</div>

		<div class="dont-see">
			<p><a href="mailto:amanda@twoscore.biz">Don’t see a topic listed?</a> We would love the opportunity to create a custom program based on your objectives and audience.</p>
		</div>

	</section>


	<section id="about" class="web group">
		
		<header>
			<h2>About</h2>
			<p>TwoScore was founded out of a love for credit unions and the belief that small credit unions are vital to this industry. We know the unique challenges small credit unions face in today's market. TwoScore channels our passion for the industry and the wonderful people within it to help credit unions reach their strategic goals through marketing.</p>
		</header>

		<div class="inner">
			<div class="wrap group">
				<div class="half">
					<div class="headshot">
						<img src="<?php bloginfo( 'template_url' ) ?>/img/headshot-amanda.jpg" />
					</div>
					<div class="bio">
						<h2>Amanda</h2>
						<h3>Founder &amp; President</h3>
						<p>A credit union veteran, Amanda has many years of marketing experience in credit unions ranging in size from $37 million to $200 million in assets. Her unique approach to marketing and passion for organizational culture and employee engagement has made TwoScore a vital partner of many credit unions across the United States.</p>
						<p>Amanda is the recipient of many state and national awards, including the Ohio Credit Union League Cutting Edge Marketing Brilliance Award, Trailblazer 40 Below, Crash the GAC, Crash Big.Bright.Minds and she was a finalist in the 2011 CUES Next Top Credit Union Exec competition.</p>
						<p>When she's not busy helping credit unions succeed, you can find her reading history books, watching her beloved Kentucky Wildcats basketball team, trying out a gourmet recipe, or planning her next travel adventure with her husband, Mike.  As you may have guessed, their favorite place to visit is France.  Don't be surprised if you also see her guest lecturing at a local university, sharing her love of marketing with undergraduate students.</p>
					</div>
				</div>
				<div class="half">
					<div class="headshot">
						<img src="<?php bloginfo( 'template_url' ) ?>/img/headshot-liz.jpg" />
					</div>
					<div class="bio">
						<h2>Liz</h2>
						<h3>AVP, Marketing &amp; Client Services</h3>
						<p>Liz joined TwoScore in 2016, bringing her ninja skills with technology and out of the box ideas to help our credit union clients take things to the next level.</p>
						<p>She has worked in credit unions for over five years, and played an integral role growing loans almost 40% during her tenure at a mid-sized credit union. Liz's success is fueled by her love of credit unions' commitment to "people helping people." She is a champion of keeping small to mid-sized credit unions a competitive and thriving force in the financial landscape.</p>
						<p>Liz has been actively involved in the credit union industry, participating in Crash the GAC, leading a presentation at CUNA’s Community Credit Union &amp; Growth Conference, and serving as chair of the Central Ohio Credit Union Outreach Alliance. In addition to her credit union efforts, Liz is pursuing her Masters of Business Administration at Capital University in Columbus and will complete her degree in August 2016.</p>
						<p>Outside of credit union-land you’re likely to find Liz hitting up a hip hop dance class, scoping out the Columbus restaurant scene with her husband Zach, training for her next race, reading an inspiring business book, or taking her pup Kobe to the dog park.</p>
					</div>
				</div>
			</div>

		</div>

	</section>


	<section id="values" class="what">
		
		<header>
			<h2>Values</h2>
		</header>

		<div class="inner">
			<div class="values-content">
				<p class="vision">our vision - to inspire credit union leaders nationwide.</p>
				<h3>Our Mission</h3>
				<p>To help credit unions thrive by providing invaluable solutions they can afford while inspiring and empowering their leaders and future leaders to take the industry to new heights. </p>
			</div>

			<div class="boxes">

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-1.png">
					<h4>accountability breeds success</h4>
					<div class="caption">
						<p><strong>We believe accountability is a crucial part of success.</strong></p>
						<p><em>"Accountability breeds response-ability" – Steven R. Covey</em></p>
						<p class="small">Because we are entrepreneurs, accountability is one of our most closely-held values and takes many different forms. First, we’re accountable to ourselves by striving every day to reach our personal and professional goals. We’re also accountable to our clients by doing what we say we will when we say we’ll do it in order to be a dependable resource for them. Lastly, we bring accountability to our partnerships by holding our clients accountable to their goals, plans, and vision for the future.</p>
					</div>
				</div>

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-2.png">
					<h4>collaboration</h4>
					<div class="caption">
						<p><strong>We believe success involves collaboration.</strong></p>
						<p><em>"The achievements of an organization are the results of the combined effort of each individual" – Vince Lombardi</em></p>
						<p class="small">There is no silver bullet to success. We love working with credit unions that aren’t afraid to roll up their sleeves and are as committed to doing the hard work as we are. This philosophy also extends to business partners and trade organizations, as collaboration makes us stronger and helps the entire industry move forward.</p>
					</div>
				</div>

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-3.png">
					<h4>empowering leaders</h4>
					<div class="caption">
						<p><strong>We believe in empowering the leaders of today and tomorrow.</strong></p>
						<p><em>"If your actions inspire others to dream more, learn more, do more and become more, you are a leader." – John Quincy Adams</em></p>
						<p class="small">Our partnerships are so much more than providing marketing insight. CEOs and executives of small credit unions wear many hats, and through these relationships we end up wearing many hats ourselves including coach, mentor, and trusted advisor. The end results of this work are increased time and revenue, which allow our clients more freedom to lead their credit unions to success.</p>
					</div>
				</div>

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-4.png">
					<h4>dream big</h4>
					<div class="caption">
						<p><strong>We believe in dreaming big.</strong></p>
						<p><em>"The future belongs to those who believe in the beauty of their dreams." – Eleanor Roosevelt </em></p>
						<p class="small">TwoScore was born from a dream and the belief that you can accomplish anything with passion and hard work. Our company is made better through employees supporting and encouraging each other to achieve their dreams. This encouragement to dream big extends to our clients as well, as their smaller size should not be perceived as a roadblock for them to enhance their members’ experience and improve their financial well-being.</p>
					</div>
				</div>

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-5.png">
					<h4>results marketing</h4>
					<div class="caption">
						<p><strong>We believe marketing gets results. </strong></p>
						<p><em>"You may never know what results come from your action. But if you do nothing, there will be no result." – Gandhi</em></p>
						<p class="small">We treat every dollar of our clients’ budgets as if it were our own. By approaching marketing from a financial perspective, it keeps our clients’ brands alive, aligns everyone in the organization, helps them stay relevant to members, and ensures success in the form of 200%, 300%, 500%, and even higher ROI percentages. It’s those results that allow our clients to thrive, innovate, and continually make an impact in the lives of their members and those in the community.</p>
					</div>
				</div>

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-6.png">
					<h4>health and balance</h4>
					<div class="caption">
						<p><strong>We believe the more balanced and healthy we are, the better we are for our clients, personal relationships, and ourselves.</strong></p>
						<p><em>"I believe that being successful means having a balance of success stories across the many areas of your life. You can’t truly be considered successful in your business life if your home life is in shambles." – Zig Ziglar</em></p>
						<p class="small">Time away from the office is mandatory at TwoScore. Whether it’s taking time to work out regularly or completely unplugging on a vacation to recharge, we are able to be the best versions of ourselves by making health, family, and balance a priority. This practice ensures the fresh ideas and high energy that we bring to every client interaction.</p>
					</div>
				</div>

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-7.png">
					<h4>relationships come first</h4>
					<div class="caption">
						<p><strong>We believe our relationship with our clients comes above all else.</strong></p>
						<p><em>"Get closer than ever to your customers. So close that you tell them what they need well before they realize it themselves." – Steve Jobs</em></p>
						<p class="small">We understand that small credit unions especially want and need strong relationships with their vendor partners. While we do offer valuable marketing expertise to our clients, it is the strong relationships we develop that are invaluable. We strive to delight our clients with regular communication, support, inspiration, and showing them the results of our collaborative efforts.  This helps us continually innovate, improve, and identify opportunities for sustainable success. </p>
					</div>
				</div>

				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-8.png">
					<h4>choose gratitude</h4>
					<div class="caption">
						<p><strong>We believe in choosing gratitude.</strong></p>
						<p><em>"“Gratitude opens the door to the power, the wisdom, the creativity of the universe. You open the door through gratitude." – Deepak Chopra</em></p>
						<p class="small">We believe gratitude is the catalyst for the kind of positive thinking that changes the world. Starting each day thankful for the opportunity to help credit unions and pursue our dreams gives us the optimistic attitude and vivacious energy that inspires our clients and is contagious to the world around us.</p>
					</div>
				</div>
 
				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-9.png">
					<h4>personal development</h4>
					<div class="caption">
						<p><strong>We believe in the importance of personal development.</strong></p>
						<p><em>I am not afraid of storms for I am learning how to sail my ship." - Louisa May Alcott</em></p>
						<p class="small">Personal development is the foundation on which our business is built. We believe that if we’re not growing every day, we’re falling behind for our clients and ourselves. To us, personal development means always challenging ourselves to step outside our comfort zones and being curious about everything around us. From learning French and pursuing an MBA to learning to become a digital video guru and mastering photography, our constant thirst for knowledge gives us the ability to tackle projects from a unique perspective.</p>
					</div>
				</div>
 
				<div class="shutter square">
					<img src="<?php bloginfo( 'template_url' ) ?>/img/values-10.png">
					<h4>focus on strength</h4>
					<div class="caption">
						<p><strong>We believe in focusing on your strengths.</strong></p>
						<p><em>"Everybody is a genius. But if you judge a fish by its ability to climb a tree, it will live its whole life believing that it is stupid." – Albert Einstein</em></p>
						<p class="small">We believe greatness occurs when people maximize their unique gifts and talents, not when they magnify their weaknesses. We see this in our industry daily – the credit unions that know where they excel instead of trying to be all things to all people are the ones thriving in the market. That’s why we seek to build an environment where TwoScore thrives from the individual expertise of our team members making us collectively stronger for our clients. </p>
					</div>
				</div>
			
				<div class="final">
					<h4>We believe these 10 things to be true.</h4>
				</div>

			</div>
		
		</div>

	</section>


	<section id="connect" class="connect">
			
		<header>
			<h2>Connect</h2>
		</header>

		<div class="wrap">
			<div class="inner">

				<div class="amanda-photo">
					<div class="photo-info">
						<div class="caption"></div>
						<div class="photo-credit">Photo: <a href="http://www.andyjanning.com">Andy Janning</a></div>
					</div>
				</div>

				<p class="intro">Tell us how we can help your credit union thrive!</p>
				<div class="grid-row group">
					<?php print do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
				</div>

			</div>
			
		</div>

	</section>


	<section id="testimonials" class="testimonials">
			
		<header>
			<h2>Testimonials</h2>
		</header>

		<div class="wrap">
			<div class="inner">

				<blockquote class="testimonial half">
					<p>"Amanda McMeans of TwoScore is a great resource for small credit unions that are looking to take their marketing to the next level. Her understanding of the credit union movement and the challenges small credit unions face, combined with her marketing expertise, are a combination that set her apart."</p>
					<span class="by-line">- Sarah Dale Harmon, AVP Marketing, Members Exchange Credit Union</span>
				</blockquote>

				<blockquote class="testimonial half">
					<p>"We have been with TwoScore for 2 years and it's been the best decision we've ever made! Being a small credit union, with limited resources, we struggled with our marketing. Our first year with Amanda was such a success that our board did not hesitate to sign with her again for 2016. We have seen solid growth in our loan portfolio since signing on with TwoScore. Amanda and Liz are talented, creative, knowledgeable and a pleasure to work with!"</p>
					<span class="by-line">- Julie King, CEO, Harvest Federal Credit Union</span>
				</blockquote>

				<blockquote class="testimonial half">
					<p>"We have an extension of our credit union by the expertise Amanda McMeans and Liz Garster offer. The biggest difference with TwoScore and our prior marketing 'attempts' is we have cheerleaders marketing and strategically assisting in reaching our goals."</p>
					<span class="by-line">- Beth Carpenter, CEO, Educational Community Alliance Credit Union</span>
				</blockquote>

				<blockquote class="testimonial half">
					<p>"Amanda was very knowledgeable and did a very good job 
					in getting everyone engaged in the whole process."</p>
					<span class="by-line">- Board member, Education First Credit Union</span>
				</blockquote>

			</div>
		</div>

	</section>

<?php

get_footer();

?>