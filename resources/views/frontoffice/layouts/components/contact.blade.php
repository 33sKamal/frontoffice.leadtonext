<div style="opacity: 0; display: none" class="modal-wrapper">
  <div id="w-node-_30640d4a-0d76-b9b7-521a-9aa7475d1f15-a0cb33f6" style="
          -webkit-transform: translate3d(0, 20px, 0) scale3d(1, 1, 1)
            rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
          -moz-transform: translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          -ms-transform: translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          transform: translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(0)
            rotateY(0) rotateZ(0) skew(0, 0);
          opacity: 0;
        " class="modal-container">
    <div class="card-body-modal">
      <div class="modal__heading-close-wrapper">
        <div class="modal__heading">
          <h4 class="h2 is--bgtext-success text-center">Contact us</h4>
        </div>
        <a href="#" class="modal__close-btn w-inline-block">
          <div class="icon-solid">
            ×︁
          </div>
        </a>
      </div>
      <div class="contact-form_main-wrapper w-form">
        <form name="wf-form-Message" method="post" class="contact-form_wrap" id="contact-form">
          @csrf
          <div class="contactus-p">
            <p class="h6 is--bgtext-success text-center">
              Our friendly team will love to hear from you!
            </p>
          </div>
          <div class="inputs__wrapper">
            <div class="input_wrap right-m">
              <label for="name" class="p-body is--bgtext-success">Name</label>
              <input class="input w-input" maxlength="256" name="name" placeholder="" required type="text" id="name"  value="" />
            </div>
            <div class="input_wrap left-m">
              <label for="email" class="p-body is--bgtext-success">Email Address</label>
              <input class="input w-input" maxlength="256" name="email" placeholder="" required type="email" id="email"  value="" />
            </div>
            <div class="input_wrap left-m">
              <label for="phone" class="p-body is--bgtext-success">Phone</label>
              <input class="input w-input" maxlength="256" name="phone" placeholder="" required type="phone" id="phone"  value="" />
            </div>
          </div>
          <label for="message" class="p-body is--bgtext-success">Message</label>
          <textarea placeholder="Your message goes here" maxlength="5000" id="message" name="message"  required class="input message w-input">
          </textarea>
          <div class="main-button-wrapper submit">
            <input type="submit" class="submit__button w-button" value="Send" />
            <a href="javascript:void(0)" class="b-button__wrap w-inline-block send-contact-message-button">
              <div class="b-text">
                <div class="b-b-text-up">
                  Send
                </div>
                <div class="b-b-text-static">
                  Send
                </div>
              </div>
              <div class="b-b-bg"></div>
            </a>
          </div>
        </form>
        <div class="success-message w-form-done">
          <div class="h4 is--bgtext-success">
            Thank you! <br />Your message has been received!
          </div>
        </div>
        <div class="error-message w-form-fail">
          <div class="h6 is--bgtext-danger">
            Oops! Something went wrong. Did you miss a required field?
          </div>
        </div>
      </div>
    </div>
  </div>
  <div aria-hidden="true" tabindex="-1" class="modal__close-area"></div>
</div>