<div id="popup_contact"> <a class="button button_js" href="#"><i class="icon-mail-line"></i></a>
  <div class="popup_contact_wrapper">
    <div id="contactWrapper_popup">
      <form id="contactform_popup">
        <h4>Send us a message</h4>
        <p> <span>
          <input type="text" name="name_popup" id="name_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your name" />
          </span><span>
          <input type="email" name="email_popup" id="email_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Your email" />
          </span><span>
          <input type="text" name="subject_popup" id="subject_popup" size="40" aria-required="true" aria-invalid="false" placeholder="Subject" />
          </span><span>
          <textarea name="body_popup" cols="40" id="body_popup" rows="2" aria-required="true" aria-invalid="false" placeholder="Message"></textarea>
          </span>
          <input type="button" value="Send Message" id="submit_popup" onClick="return check_values_popup();">
        </p>
      </form>
      <div id="confirmation_popup"></div>
    </div>
    <span class="arrow"></span> </div>
</div>