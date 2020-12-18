<?= $this->extend('template'); ?>

<?= $this->section('content'); ?>

<section id="content" style="padding: 0px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31736.34611473436!2d106.64771221107178!3d-6.124880270481911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a02695aaccb09%3A0x61dee98159fa3fe5!2sBandar%20Udara%20Internasional%20Soekarno%E2%80%93Hatta!5e0!3m2!1sid!2sid!4v1608277322344!5m2!1sid!2sid" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

    <!-- <div class="container">
        <div class="row">
            <div class="span12">
                <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

                <form action="" method="post" role="form" class="contactForm">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <div class="row">
                        <div class="span4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="span4 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="span4 form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="span12 margintop10 form-group">
                            <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                            <p class="text-center">
                                <button class="btn btn-large btn-theme margintop10" type="submit">Submit message</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

</section>

<?= $this->endSection('content'); ?>