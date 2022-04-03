<div class="contact-form">
    <div class="row">
        <div class="col-sm-6">
            [text* your-name class:form-control placeholder "Name"]
        </div>
        <div class="col-sm-6">
            [email* your-email class:form-control placeholder "Email"]
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            [text your-subject class:form-control placeholder "Subject"]
        </div>
        <div class="col-sm-6">
            [tel your-phone class:form-control placeholder "Phone"]
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            [textarea your-message class:form-control placeholder "Message"]
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            [submit "Send"]
        </div>
    </div>
</div>


<?php echo do_shortcode(get_field('contact_form_shortcode')); ?>

////////// CSS
/* Contact Form */
.contact-form input[type="submit"]{
    background-color: #1A9489;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    font-size: 19px;
    padding: 5px 18px;
    font-weight: 700;
    border: 0 none;
    -webkit-transition: all .35s ease;
    -moz-transition: all .35s ease;
    -o-transition: all .35s ease;
    transition: all .35s ease;
}

.contact-form input[type="submit"]:focus,
.contact-form input[type="submit"]:hover{
    background: #FF921E;
}

.contact-form .row{
    margin-bottom: 20px;
}

.form-control{
    padding: 10px 8px 10px 30px;
    height: 40px;
}

textarea.form-control {
    height: 150px;
    resize: vertical;
}

.your-name input{
    background: url(images/form-icon/contact-form-name-icon.png) no-repeat scroll 5px center;
}

.your-email input{
    background: url(images/form-icon/contact-form-mail-icon.png) no-repeat scroll 5px center;
}

.your-subject input{
    background: url(images/form-icon/contact-form-state-icon.png) no-repeat scroll 5px center;
}

.your-phone input{
    background: url(images/form-icon/contact-form-phone-icon.png) no-repeat scroll 5px center;
}

.wpcf7-textarea{
    background: url(images/form-icon/contact-form-comment-icon.png) no-repeat scroll 5px 13px;;
}

.contact-form p{
    margin: 0;
}


/////////////  RESPONSIVE
    .wpcf7-form-control-wrap.your-subject,
    .wpcf7-form-control-wrap.your-name{
        display: block;
        margin-bottom: 20px;
    }
