<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Contact Us</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a> <span class="divider">/</span></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->       

    
    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>Name</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your Name" name="name">
                        
                        <label>Email Address</label>
                        <input type="text" class="input-block-level" required="required" placeholder="Your email address" name="email">
                    </div>
                    <div class="span7">
                        <label>Message (if requesting a quote, describe your project)</label>
                        <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                    </div>
                    <input type="hidden" name="subject" value="[CloudF Consulting] Contact Form Submission" >

                </div>
                <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                <p> </p>

            </form>
        </div>

        <div class="span3">
            <h4>Our Address</h4>
            <p></p>
            <p>
                <i class="icon-map-marker pull-left"></i> 116 Ellemoor Ln, Lexington<br>
                KY, 40515,  United States
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp;support@cloudfconsulting.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+1 859-368-1550
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.cloudfconsulting.com
            </p>
        </div>

    </div>

</section>



