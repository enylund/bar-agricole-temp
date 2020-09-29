<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bar Agricole</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Bar Agricole">
    <meta name="description" content="Bar Agricole is a new field-to-spirit company.">

    <meta property="og:site_name" content="Bar Agricole">
    <meta property="og:title" content="Bar Agricole">
    <meta property="og:url" content="https://www.baragricole.co/">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Bar Agricole is a new field-to-spirit company.">
    <meta itemprop="name" content="Bar Agricole">
    <meta itemprop="url" content="https://www.baragricole.co/">
    <meta itemprop="description" content="Bar Agricole is a new field-to-spirit company.">
    <meta name="keywords" content="san francisco, bar agricole, spirits, alcohol">

    <link href="assets/images/favicons/ba_favicon-32x32.png" rel="shortcut icon" type="image/png" />

    <link rel="stylesheet" href="assets/css/_normalize.css">
    <link rel="stylesheet" href="assets/css/cal.css">
    <link rel="stylesheet" href="assets/css/font_main.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177784052-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-177784052-1');
    </script>

  </head>
  

  <body>

  <?php
    $randNum = rand(1,15);
  ?>
    <div class="site-max-width">
      <div class="mid-section__container">
        <div class="agricole-logo__container">
          <div class="agricole-logo__container--image image-<?php echo $randNum; ?>">
            <img src="assets/images/<?php echo $randNum; ?>.png" class='image-<?php echo $randNum; ?>'/>
          </div>
          <svg viewBox="0 0 1128 406" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M314.427 3.95604C351.158 3.95604 375.465 24.5695 375.465 51.7813C375.465 69.4822 364.099 89.0372 333.187 91.6796V92.205C366.479 93.7889 382.604 110.176 382.604 135.804C382.604 165.928 359.618 184.162 323.15 184.162H250.74V179.673C270.032 179.673 273.726 176.235 273.726 155.629V32.2338C273.726 11.8906 269.762 8.18983 250.74 8.45256V3.95604H314.427ZM298.573 85.3439C304.121 86.4023 307.821 86.9278 312.581 86.9278C335.837 86.9278 349.311 73.716 349.311 50.7304C349.311 27.4746 335.041 13.2118 312.318 13.2118C307.296 13.2118 303.332 13.7373 298.581 14.7957V85.3439H298.573ZM298.573 171.483C305.442 174.126 310.201 174.922 316.544 174.922C339.004 174.922 353.012 160.914 353.012 136.87C353.012 112.826 335.837 96.1761 311.259 96.1761C307.033 96.1761 303.595 96.4388 298.573 97.4972V171.483Z" fill="black"/>
            <path d="M421.969 161.447C421.173 164.885 420.648 167.527 420.648 169.374C420.648 176.243 424.874 179.944 438.086 179.681V184.17H389.202V179.681C402.151 179.681 406.903 174.659 412.721 154.841L458.962 0H463.188L512.868 154.841C520.532 178.885 523.963 179.681 536.649 179.681V184.17H475.079V179.681C486.174 179.681 490.408 176.776 490.408 169.374C490.408 166.469 489.882 164.352 487.765 157.483L477.721 126.571H432.276L421.969 161.447ZM454.203 52.3143H453.677L435.181 116.527H474.554L454.203 52.3143Z" fill="black"/>
            <path d="M594.248 155.629C594.248 176.243 597.949 179.936 617.504 179.673V184.162H545.898V179.673C565.978 179.936 569.416 175.972 569.416 155.629V32.4966C569.416 11.6204 564.927 8.18983 545.898 8.45256V3.95604H619.884C654.235 3.95604 673.79 25.095 673.79 49.139C673.79 71.5991 657.673 90.0956 630.191 95.3804L672.994 165.14C680.125 176.768 684.359 180.199 693.337 179.673V184.162H658.724L606.402 98.5482H594.248V155.629ZM604.03 90.1031C628.87 90.1031 644.191 74.2489 644.191 51.7888C644.191 28.8033 630.716 13.2118 611.161 13.2118C605.081 13.2118 599.27 14.533 594.248 16.9126V90.1106H604.03V90.1031Z" fill="black"/>
            <path d="M32.7669 378.391C31.9712 381.829 31.4457 384.472 31.4457 386.318C31.4457 393.187 35.672 396.888 48.8839 396.625V401.114H0V396.625C12.9491 396.625 17.7009 391.603 23.5186 371.785L69.7601 216.944H73.9864L123.666 371.785C131.33 395.829 134.761 396.625 147.447 396.625V401.114H85.8771V396.625C96.9721 396.625 101.206 393.72 101.206 386.318C101.206 383.413 100.68 381.296 98.5635 374.428L88.5195 343.515H43.0737L32.7669 378.391ZM65.0009 269.258H64.4754L45.9788 333.471H85.3516L65.0009 269.258Z" fill="black"/>
            <path d="M285.909 273.747H281.42C278.778 243.098 256.055 226.185 233.062 226.185C200.828 226.185 180.214 259.74 180.214 311.274C180.214 352.493 194.222 395.829 231.215 395.829C243.631 395.829 254.734 391.603 265.04 382.617V329.245C265.04 314.712 261.34 308.631 246.807 308.368V303.879H308.114V308.368C293.318 308.368 289.88 314.974 289.88 332.412V384.997C271.646 398.472 253.15 405.077 232.806 405.077C184.718 405.077 150.63 367.822 150.63 314.704C150.63 267.404 179.959 216.937 229.639 216.937C254.478 216.937 266.632 228.565 271.917 228.565C276.406 228.565 278.26 224.864 278.523 216.937H282.749L285.909 273.747Z" fill="black"/>
            <path d="M366.494 372.573C366.494 393.187 370.195 396.88 389.75 396.617V401.106H318.143V396.617C338.224 396.88 341.662 392.917 341.662 372.573V249.441C341.662 228.565 337.173 225.134 318.143 225.397V220.908H392.13C426.48 220.908 446.035 242.047 446.035 266.091C446.035 288.551 429.919 307.047 402.436 312.332L445.24 382.092C452.371 393.72 456.605 397.15 465.583 396.625V401.114H430.969L378.647 315.5H366.494V372.573ZM376.275 307.047C401.115 307.047 416.436 291.193 416.436 268.733C416.436 245.747 402.962 230.156 383.407 230.156C377.326 230.156 371.516 231.477 366.494 233.857V307.055H376.275V307.047Z" fill="black"/>
            <path d="M543.803 220.9V225.389C526.102 225.126 521.606 228.827 521.606 249.171V372.573C521.606 394.508 527.153 396.617 543.803 396.617V401.106H474.569V396.617C492.802 396.88 496.766 392.128 496.766 372.573V249.178C496.766 228.835 492.277 225.397 474.569 225.397V220.908H543.803V220.9Z" fill="black"/>
            <path d="M682.258 276.39H677.498C675.119 245.477 657.418 225.659 632.315 225.659C599.548 225.659 583.694 257.105 583.694 316.558C583.694 372.311 603.775 395.829 635.483 395.829C656.359 395.829 670.097 384.997 682.25 360.683L686.476 362.8C674.06 390.807 654.505 405.077 628.081 405.077C591.088 405.077 554.095 374.69 554.095 316.025C554.095 258.952 586.329 216.937 629.936 216.937C651.337 216.937 661.907 228.032 668.513 228.032C671.951 228.032 673.535 225.126 674.593 216.937H679.082L682.258 276.39Z" fill="black"/>
            <path d="M769.456 216.937C817.814 216.937 840.8 264.762 840.8 311.003C840.8 358.04 817.544 405.07 769.456 405.07C723.477 405.07 698.112 360.675 698.112 311.003C698.112 264.762 721.097 216.937 769.456 216.937ZM769.456 395.829C802.485 395.829 811.208 362.8 811.208 311.011C811.208 251.558 798.792 226.192 769.456 226.192C738.543 226.192 727.703 255.521 727.703 311.011C727.703 370.464 740.127 395.829 769.456 395.829Z" fill="black"/>
            <path d="M925.619 220.9V225.389C906.597 225.126 902.1 228.294 902.1 249.433V376.8C902.1 388.69 904.217 391.07 915.312 391.07H934.071C962.612 391.07 970.276 384.727 980.575 352.223L984.802 353.544L971.853 401.106H853.734V396.617C874.348 396.88 877.253 392.128 877.253 372.836V249.441C877.253 228.565 872.493 225.134 853.734 225.397V220.908H925.619V220.9Z" fill="black"/>
            <path d="M1115.87 260.01H1111.11C1108.2 233.849 1100.02 230.944 1079.4 230.944H1042.93V301.5H1071.47C1091.55 301.5 1097.1 294.894 1096.84 274.551H1101.33V337.442H1096.84C1097.1 317.624 1091.56 311.544 1076.23 311.544H1042.93V376.019C1042.93 388.705 1044.78 391.078 1055.62 391.078H1081.52C1103.45 391.078 1114.55 381.304 1123.27 354.873L1127.76 356.194L1114.02 401.114H995.116V396.625C1013.88 396.888 1018.1 393.457 1018.1 372.581V249.178C1018.1 230.156 1015.2 224.871 995.116 225.397V220.908H1113.23L1115.87 260.01Z" fill="black"/>
            </svg>
        </div>
      </div>
      <div class="bottom-section__container--outer">
        <div class="bottom-section__container">
          <div class="bottom-section__container--left">
            Join our mailing list
          </div>
          <div class="bottom-section__container--left">
            <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup">
                <form action="https://gmail.us2.list-manage.com/subscribe/post?u=19235564b33637abc607e6e23&amp;id=5da1e07bb2"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank"
                  novalidate>
                  <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                      <input type="email" value="" placeholder="Email" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                        name="b_19235564b33637abc607e6e23_5da1e07bb2" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Sign-up" name="subscribe" id="mc-embedded-subscribe"
                        class="button"></div>
                  </div>
                </form>
              </div>
            <!--End mc_embed_signup-->
          </div>
          <div class="bottom-section__container--right">
            <a class="contact-button" href="mailto:info@baragricole.com">Contact</a>  
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


