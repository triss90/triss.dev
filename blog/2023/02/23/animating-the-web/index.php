
            <?php $description = 'Animating the Web';  ?>
            <?php include('../../../../../_inc/header.php'); ?>
            <?php include('../../../../../_inc/icons.php'); ?>
            
            <span class='inverted'><?php include('../../../../../_inc/navigation.php'); ?></span>
            <main id='main' class='central space post'>
        <style>
  .darkmode hr {
    background: white;
  }
  .darkmode hr:after {
    backgroudn: white;
  }
  input[type="text"] {
    display: inline-block;
    width: 100%;
    background: none;
    border: 2px solid black;
    background: white;
    font-size: inherit;
    padding: 0.5rem ;
    color: black;
    border-radius: 0;
    width: 100%;
    margin-bottom: 0.5rem;
  }
  input[type="submit"] {
    display: inline-block;
    border: 2px solid black;
    background: white;
    color: black;
    font-size: 1rem;
    padding: 0.5rem 1rem;
    cursor: pointer;
  }
  .box {
    border: 2px solid black;
    padding: 0.5rem 2rem 2rem 2rem;
  }
  .darkmode .box {
    border: 2px solid white;
  }
  /* Orientation */
  .box.orientation .wrapper {
    height: 400px;
    width: 100%;
    overflow-y: scroll;
    position: relative;
  }
  .box.orientation .wrapper .wrapper-1,
  .box.orientation .wrapper .wrapper-2 {
    height: 400px;
    width: 100%;
    position: absolute;
    top: 0;
    text-align: center;
    transition: left 400ms cubic-bezier(.47,1.64,.41,.8);
    border: 2px solid black;
  }
  .box.orientation .wrapper .wrapper-1 {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    left: 0;
    background: #fae3d9
  }
  .box.orientation .wrapper .wrapper-2 {
    left: 100%;
    background: #bbded6
  }
  .box.orientation .wrapper .wrapper-2 svg {
    height: 50%;
    width: 100%;
    background: transparent;
  }
  /* Changes */
  .box.changes .wrapper {
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  } 
  .box.changes .wrapper .checkbox {
    margin: 20px 0;
  }
  .box.changes .wrapper .checkbox .checkbox-label {
    position: relative;
    display: block;
    height: 20px;
    width: 44px;
    background: #fae3d9;
    border: 2px solid black;
    border-radius: 100px;
    cursor: pointer;
    transition: all 300ms ease;
  }
  .box.changes .wrapper .checkbox .checkbox-label:after {
    position: absolute;
    left: -2px;
    top: -5px;
    display: block;
    width: 26px;
    height: 26px;
    border: 2px solid black;
    border-radius: 50%;
    background: #ffb6b9;
    box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.05);
    content: "";
    transition: all 300ms ease;
  }
  .box.changes .wrapper .checkbox .checkbox-label:active:after {
    transform: scale(1.15, 0.85);
  }
  .box.changes .wrapper .checkbox .checkbox-input {
    display: none;
  }
  .box.changes .wrapper .checkbox .checkbox-input:checked ~ label {
    background: #bbded6;
  }
  .box.changes .wrapper .checkbox .checkbox-input:checked ~ label:after {
    left: 20px;
    background: #348498;
  }
  .box.changes .wrapper .checkbox .checkbox-input:disabled ~ label {
    background: #d6d6d6;
    pointer-events: none;
  }
  .box.changes .wrapper .checkbox .checkbox-input:disabled ~ label:after {
    background: #bcbcbc;
  }
  /* New Elements */
  .box.new .wrapper .parent:after {
    content: "";
    display: block;
    clear: both;
  }
  .box.new .wrapper .parent div {
    background: #fae3d9;
    position: relative;
    float: left;
    margin-bottom: 5px;
    border: 2px solid black;
  }
  .box.new .wrapper .parent .div1 {
    width: 100%;
    height: 3rem;
  } 
  .box.new .wrapper .parent .div2 {
    width: 100%;
    height: 0rem;
    background: #ffb6b9;
    margin-bottom: 0;
    margin-right: 5px;
    transition: height 200ms ease-in-out, 
                margin 200ms ease-in-out, 
                border 200ms cubic-bezier(1,0,1,.01); 
    border: 0px solid transparent;
  } 
  .box.new .wrapper .parent .div2.active {
    height: 3rem;
    margin-bottom: 5px;
    transition: height 400ms cubic-bezier(.47,1.64,.41,.8);
    border: 2px dashed black;
  } 
  .box.new .wrapper .parent .div3,
  .box.new .wrapper .parent .div4 {
    width: calc((100% / 3) - 5px);
    height: calc(15rem + 5px);
    margin-right: 5px; 
  }
  .box.new .wrapper .parent .div5 {
    width: calc(100% / 3);
    height: 13rem;
  }
  .box.new .wrapper .parent .div6 {
    width: calc(100% / 3);
    height: 2rem;
  }
  .box.new .wrapper .parent .div6 button {
    width: 100%;
    height: 100%;
    border: 0;
    background: #bbded6;
    color: #348498;
    cursor: pointer;
    font-weight: bold;
  }
  .box.new .wrapper .parent .div7 {
    width: 100%;
    height: 3rem;
  }
  /* Attention */
  .box.attention .parent {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    grid-template-rows: repeat(5, 1fr);
    grid-column-gap: 5px;
  }
  .box.attention .parent div {
    border: 2px solid black;
    background: #fae3d9;
  }
  .box.attention .parent .div1 {
    grid-area: 1 / 1 / 6 / 3;
    height: calc(15rem + 5px);
  }
  .box.attention .parent .div1 div {
    display: block;
    background: #ffb6b9;
    border: 2px solid black;
    margin: 5px;
    height: 1rem;
  }
  .box.attention .parent .div1 div.big {
    height: 2.5rem;
  }
  .box.attention .parent .div1 div.first {
    margin-top: 10px;
    position: relative;
  }
  .box.attention .parent .div1 div.first .ping {
    position: absolute;
    right: -10px;
    top: -10px;
    height: 14px;
    width: 14px;
    border-radius: 100%;
    background: #bbded6;
    -webkit-animation: pulse 3s ease-in-out infinite;
    animation: pulse 3s ease-in-out infinite;
  }
  @-webkit-keyframes pulse {
    0%, 70% {
      box-shadow: 0px 0px 0px 0px rgba(52, 132, 152, 0.75);
    }
    100% {
      box-shadow: 0px 0px 0px 50px rgba(52, 132, 152, 0);
    }
  }
  @keyframes pulse {
    0%, 70% {
      box-shadow: 0px 0px 0px 0px rgba(52, 132, 152, 0.75);
    }
    100% {
      box-shadow: 0px 0px 0px 50px rgba(52, 132, 152, 0);
    }
  }
  .box.attention .parent .div2 {
    grid-area: 1 / 3 / 2 / 8;
    height: 3rem;
    margin-bottom: 5px;
  }
  .box.attention .parent .div3 {
    grid-area: 2 / 3 / 6 / 8;
    height: 12rem;
  }
  /* Visual Feedback */
  .box.visual .modal__trigger, 
  .modal__action {
    border: 2px solid black;
    padding: 15px 20px;
    background: white;
    font-weight: bold;
    display: block;
    cursor: pointer;
    margin: 3rem auto 1.5rem auto;
  }
  .box.visual .modal {
    background: #fae3d9;
    z-index: 5;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(51, 51, 51, 0.4);
    border: 2px solid black;
    visibility: hidden;
    opacity: 0;
    transition: all 450ms cubic-bezier(.47,1.64,.41,.8);
    position: relative;
    top: -15rem;
  }
  .darkmode .box.visual .modal {
    color: black;
  }
  .box.visual .modal.modal--active {
    visibility: visible;
    opacity: 1;
    transition: all 450ms cubic-bezier(.47,1.64,.41,.8);
    top: 0;
  }
  .box.visual .modal .modal__close {
    font-size: 1rem;
    line-height: 1rem;
    font-weight: bold;
    position: absolute;
    right: 15px;
    top: 15px;
    cursor: pointer;
    padding: 15px;
  }
  .box.visual .modal .modal__close:hover {
    color: #ffb6b9;
  }
  .box.visual .modal .modal__action {
    margin: 0;
  }
  /* System Status */
  .box.status .wrapper {
    height: 400px;
    background: #fae3d9;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .box.status .wrapper .progress-bar {
    width: 200px;
    height: 20px;
    background: #bbded6;
    border: 2px solid black;
  }
  .box.status .wrapper .progress {
    height: 100%;
    width: 0%;
    background-color: #348498;
    -webkit-animation: progress linear 6s infinite;
            animation: progress linear 6s infinite;
  }
  @-webkit-keyframes progress {
    0%, 30% {
      width: 0%;
    }
    30% {
      width: 20%;
    }
    40% {
      width: 60%;
    }
    70%, 90% {
      width: 80%;
    }
    90%, 100% {
      width: 100%;
    }
  }
  @keyframes progress {
    0%, 30% {
      width: 0%;
    }
    30% {
      width: 20%;
    }
    40% {
      width: 60%;
    }
    70%, 90% {
      width: 80%;
    }
    90%, 100% {
      width: 100%;
    }
  }
</style>
<h1>Animating the Web</h1>
<p class='timestamp'><time datetime='23-02-2023'>23-02-2023</time></p>
<hr>
<p>Animations have become an increasingly popular way of enhancing the user experience on the web. 
They add a level of interactivity and engagement that static designs cannot provide. 
Animations can range from subtle transitions to complex, eye-catching visual effects. 
They are used in a variety of contexts, such as in website navigation, form validation, notifications, product demos and much more.</p>
<p>One of the primary benefits of using animations on the web is that they can help to guide users through a website. 
By providing visual cues and feedback, animations can help users understand where they are on a page and how they can interact with it. 
For example, a subtle hover effect on a button can indicate that it is clickable, 
while a smooth scrolling animation can indicate that there is more content below the fold.</p>
<p>Despite these benefits, there are also some potential downsides to using animations on the web. 
One of the biggest concerns is that they can slow down the performance of a website. 
If animations are not optimised properly, they can cause a website to load slowly, which can lead to a poor user experience.</p>
<p>Another potential issue is that animations can be distracting if they are overused or too complex. 
This can make it difficult for users to focus on the content of a website, and can ultimately lead to a negative user experience.</p>
<p>As with all the tools available to us, animations should only be deployed when necessary, and when it serves a functional purpose for the user. </p>
<p>In short then, animating elements should:</p>
<ul>
<li>Provide useful information</li>
<li>Inspire confidence</li>
<li>Guide the end-user</li>
</ul>
<p>So, how do we go about doing this correctly you ask? 
I've compiled a short list with examples, 
that serve to showcase some of the ways animations can be deployed in accordance with the principles outlined above:</p>
<ul>
<li><a href="#orientation">Orientation</a></li>
<li><a href="#changes">Changes</a></li>
<li><a href="#new">New Elements</a></li>
<li><a href="#attention">Attention</a></li>
<li><a href="#visual">Visual Feedback</a></li>
<li><a href="#status">Status</a></li>
</ul>
<h2>Orientation</h2>
<p>Orientation is all about letting the end-user know where they are. 
This could be their physical location on the page, their location on in a multistep form and so on.</p>
<p>It is often useful to provide the user with a clear indication that their location has changed and in what direction.
Left, right, good, bad and so on. </p>
<p>The following example is a simple signup form, that shows just one way to provide that information:</p>
<div class="box orientation" id="orientation">
  <h3>Orientation Example</h3>
  <hr>
  <div class="wrapper">
    <div class="wrapper-1" id="wrapper-1">
      <form action="">
        <input type="text" placeholder="Your name"><br>
        <input type="submit" id="button1" value="Next &rarr;">
      </form>
    </div>
    <div class="wrapper-2" id="wrapper-2">
      <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="722" height="568.2821" viewBox="0 0 722 568.2821" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M682.38177,670.59287l-19.26887,17.7393,15.31342-25.6947c-12.06472-21.87846-31.79644-40.7868-31.79644-40.7868s-40.93644,39.22035-40.93644,70.05011,18.32776,41.59434,40.93644,41.59434c22.60831,0,40.93608-10.76459,40.93608-41.59434C687.566,685.0387,685.535,677.76131,682.38177,670.59287Z" transform="translate(-239 -165.85895)" fill="#f2f2f2"/><path d="M658.15748,689.29252v1.51962c-.09027,17.664-3.06935,31.44618-8.91474,41.15083-.08274.14294-.173.27834-.2558.42128l-.6545-.39869-.62437-.39121c6.48482-10.47954,8.77933-25.29233,8.86207-40.69943.00753-.49654.01506-1.00057.00753-1.5046-.02259-6.52247-.42129-13.12011-1.06072-19.52973-.04514-.49654-.09781-1.00057-.15047-1.5046-.88771-8.45585-2.16663-16.53554-3.47563-23.55452-.09027-.49654-.18807-.993-.28588-1.482-2.26443-11.87127-4.574-20.47006-5.10061-22.3734-.06015-.23321-.09781-.36109-.10534-.39117l.7147-.20313.00753-.00753.72222-.20314c.00753.03012.13541.45894.346,1.25638.805,2.97907,2.89639,11.0663,4.95015,21.73391.09027.48149.18808.978.27835,1.47453,1.06825,5.69492,2.114,12.05939,2.94152,18.73978q.31593,2.51649.56422,4.96521c.06015.504.11282,1.008.158,1.5046Q658.11993,680.20851,658.15748,689.29252Z" transform="translate(-239 -165.85895)" fill="#fff"/><path d="M653.13965,643.13134c-.504.06773-1.01559.13546-1.53468.18808a41.50155,41.50155,0,0,1-4.243.2182,40.37112,40.37112,0,0,1-17.45337-3.942c-.316.39869-.63191.79744-.95539,1.20366a41.86607,41.86607,0,0,0,18.40876,4.243,42.94076,42.94076,0,0,0,4.52886-.24075c.51156-.05266,1.02312-.12039,1.52715-.1956a41.51385,41.51385,0,0,0,11.9992-3.63362q-.48523-.62064-.94791-1.21873A40.23261,40.23261,0,0,1,653.13965,643.13134Z" transform="translate(-239 -165.85895)" fill="#fff"/><path d="M656.92374,668.31086q-.77864.0451-1.55726.04513c-.158.00753-.32349.00753-.48149.00753a40.5853,40.5853,0,0,1-33.31187-17.40071c-.3009.44384-.60183.88771-.8952,1.33908A42.09237,42.09237,0,0,0,654.885,669.86812c.21067,0,.42129,0,.632-.00753.52657-.00753,1.04566-.02259,1.56475-.04513a41.86987,41.86987,0,0,0,22.30572-7.82394c-.24075-.44384-.48149-.88771-.72976-1.33154A40.30668,40.30668,0,0,1,656.92374,668.31086Z" transform="translate(-239 -165.85895)" fill="#fff"/><path d="M658.15748,689.29252c-.52657.04514-1.05319.07521-1.57981.0978-.56423.02255-1.12845.03761-1.69268.03761a40.69511,40.69511,0,0,1-39.01428-29.27956c-.33854.60941-.67708,1.21124-1.00057,1.8206A42.18536,42.18536,0,0,0,654.885,690.93253c.56423,0,1.12845-.00753,1.68515-.03761.53415-.01506,1.06077-.04513,1.58734-.08278a42.062,42.062,0,0,0,27.7599-13.54894c-.158-.55669-.33855-1.10586-.51909-1.66255A40.56382,40.56382,0,0,1,658.15748,689.29252Z" transform="translate(-239 -165.85895)" fill="#fff"/><circle cx="98.7538" cy="101.77816" r="98.7538" fill="#e4e4e4"/><circle cx="98.7538" cy="101.77816" r="82.29483" fill="#6c63ff"/><circle cx="361" cy="101.77816" r="98.75379" fill="#e4e4e4"/><circle cx="361" cy="101.77816" r="82.29483" fill="#fff"/><circle cx="623.24622" cy="101.77816" r="98.75379" fill="#e4e4e4"/><circle cx="623.24622" cy="101.77816" r="82.29482" fill="#fff"/><path d="M330.76087,297.39691q-.22063,0-.44189-.01074a9.03472,9.03472,0,0,1-6.69885-3.48047l-12.62366-16.23047a9.05414,9.05414,0,0,1,1.58594-12.69092l.4541-.35351a9.05549,9.05549,0,0,1,12.69177,1.58593,8.044,8.044,0,0,0,12.18909.59424l25.63244-27.05761a9.04362,9.04362,0,0,1,12.78565-.34522l.41846.39649a9.04347,9.04347,0,0,1,.34509,12.78466l-39.77478,41.9834A9.03339,9.03339,0,0,1,330.76087,297.39691Z" transform="translate(-239 -165.85895)" fill="#fff"/><path d="M556.65748,247.64105h-65V191.1115a13.2249,13.2249,0,0,1,13.437-12.97045h21.6062c16.51831,0,29.95679,12.97186,29.95679,28.91639Z" transform="translate(-239 -165.85895)" fill="#2f2e41"/><polygon points="341.722 554.819 329.383 554.818 323.512 507.223 341.724 507.224 341.722 554.819" fill="#ffb6b6"/><path d="M583.86909,732.63911l-39.78794-.00147v-.50325a15.48742,15.48742,0,0,1,15.48658-15.48634h.001l24.30112.001Z" transform="translate(-239 -165.85895)" fill="#2f2e41"/><polygon points="227.987 554.819 215.647 554.818 209.777 507.223 227.989 507.224 227.987 554.819" fill="#ffb6b6"/><path d="M470.13393,732.63911l-39.78794-.00147v-.50325a15.48742,15.48742,0,0,1,15.48658-15.48634h.001l24.30112.001Z" transform="translate(-239 -165.85895)" fill="#2f2e41"/><polygon points="242.886 172.448 234.834 223.78 311.328 224.786 301.263 175.468 242.886 172.448" fill="#ffb6b6"/><path d="M476.05381,377.10523l-24.36316,64.872-3.01952,268.84008H469.3045l49.31879-215.99853L563.91605,705.1785h20.13012L569.95509,468.64963s4.15532-47.47408-17.1106-75.48793l-5.17631-14.95477Z" transform="translate(-239 -165.85895)" fill="#2f2e41"/><path d="M580.55786,427.67626a15.10008,15.10008,0,0,1-9.67476-21.036L538.34119,300.54574,562.277,295.801l29.76276,103.99478a15.18192,15.18192,0,0,1-11.48193,27.8805Z" transform="translate(-239 -165.85895)" fill="#ffb6b6"/><path d="M537.49224,366.65567l-52.72953-1.01784a6.8935,6.8935,0,0,1-6.53416-5.193c-2.82676-11.1919-9.04594-40.35947-5.74712-69.41031a42.36529,42.36529,0,0,1,48.15276-37.06012A42.38438,42.38438,0,0,1,555.622,306.69585c-6.63746,25.206-10.38656,43.23868-11.14321,53.59834A6.8785,6.8785,0,0,1,538.969,366.526h0a6.85738,6.85738,0,0,1-1.33013.13126C537.58988,366.65728,537.54119,366.65674,537.49224,366.65567Z" transform="translate(-239 -165.85895)" fill="#e4e4e4"/><path d="M377.32224,273.46385a14.79514,14.79514,0,0,1,.77821,2.196L444.10291,298.088l12.75361-11.1416,19.33032,17.04976L455.5259,325.91432a11.24491,11.24491,0,0,1-13.29777,2.30092l-70.62668-36.076a14.75488,14.75488,0,1,1,5.72079-18.67543Z" transform="translate(-239 -165.85895)" fill="#ffb6b6"/><path d="M444.23968,294.51124a6.31855,6.31855,0,0,1,2.22207-4.77525L470.629,269.15007a17.56656,17.56656,0,0,1,26.52854,23.034l-17.21,26.79926a6.3253,6.3253,0,0,1-9.483,1.34577l-24.06073-21.01521A6.3182,6.3182,0,0,1,444.23968,294.51124Z" transform="translate(-239 -165.85895)" fill="#e4e4e4"/><path d="M536.88307,327.41989a6.31848,6.31848,0,0,1-3.21567-4.17133l-7.14526-30.93191a17.56655,17.56655,0,0,1,32.66228-12.94224l15.86431,27.61717a6.32532,6.32532,0,0,1-3.172,9.03753l-29.734,11.68121A6.31818,6.31818,0,0,1,536.88307,327.41989Z" transform="translate(-239 -165.85895)" fill="#e4e4e4"/><ellipse cx="548.66423" cy="177.77072" rx="11.25352" ry="15.00469" transform="translate(-69.34548 446.63755) rotate(-66.86956)" fill="#2f2e41"/><circle cx="511.81881" cy="211.38779" r="30.77462" transform="translate(-158.16328 393.23234) rotate(-61.33681)" fill="#ffb6b6"/><path d="M528.70082,176.14105H493.5a10.22757,10.22757,0,0,0-10.3209,9.33429,10.00082,10.00082,0,0,0,9.97841,10.66571h0a10,10,0,0,1,10,10v41h55V205.59772A29.45667,29.45667,0,0,0,528.70082,176.14105Z" transform="translate(-239 -165.85895)" fill="#2f2e41"/><path d="M702.22441,734.141h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-239 -165.85895)" fill="#cacaca"/></svg>
      <input type="submit" id="button2" value="&larr; Back">
    </div>
  </div>
</div>
<h2>Changes</h2>
<p>Providing visual indication when an element changes is often useful. 
It indicates that an element has been changed and might not serve the same purpose anymore. 
A clear example of this is the well known basic toggle:</p>
<div class="box changes" id="changes">
  <h3>Change Example</h3>
  <hr>
  <div class="wrapper">
    <div class="checkbox">
      <input type="checkbox" id="checked" class="checkbox-input" checked/>
      <label for="checked" class="checkbox-label"></label>
    </div>
  </div>
</div>
<h2>New Elements</h2>
<p>Adding new elements to the page is rarely done without disrupting the flow, 
or at the very least drawing the users attention. 
Animating this action serves to enhance the experience and minimise disruption and flow.</p>
<p>The following example adds a new element to the page, but does so in a smooth motion, so as not to interrupt and confuse the user:</p>
<div class="box new" id="new">
  <h3>New Element Example</h3>
  <hr>
  <div class="wrapper">
    <div class="parent">
      <div class="div1"></div>
      <div class="div2" id="newElement"></div>
      <div class="div3"></div>
      <div class="div4"></div>
      <div class="div5"></div>
      <div class="div6"><button id="newElementAction">Add new</button></div>
      <div class="div7"></div>
    </div>
  </div>
</div>
<h2>Attention</h2>
<p>When a change occurs on a page or an event takes place that requires the end-users immediate attention, 
it's useful to draw their gaze to said event. Animating this "call to action" serves to do so, by capturing users attention. </p>
<p>The following example highlights an event that indicates that attention or action is required:</p>
<div class="box attention" id="attention">
  <h3>Attention Example</h3>
  <hr>
  <div class="parent">
    <div class="div1">
      <div class="big"></div>
      <div class="first">
        <div class="ping"></div>
      </div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="div2"></div>
    <div class="div3"></div>
  </div>
</div>
<h2>Visual Feedback</h2>
<p>Providing the user with visual feedback when an event happens, 
helps them to understand that the status quo has changed, and more importantly in what way it has changed and why.</p>
<p>Take the following dialog for example.
Sliding the dialog into view this way, provides the immediate feedback that is expected when the button is pressed.
But more importantly it tells the user where the dialog "was" and where it's gone once closed again.</p>
<div class="box visual" id="visual">
  <h3>Visual Feedback Example</h3>
  <hr>
  <button class="modal__trigger">Open modal</button>
  <div class="modal">
    <span class="modal__close">&#x2715;</span>
    <h2 class="modal__title">This is a title</h2>
    <p class="modal__content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit necessitatibus illo deleniti doloremque culpa voluptas recusandae, sunt eligendi amet, ut modi voluptatibus ipsa quas voluptatem consectetur atque, velit reprehenderit debitis.</p>
    <button class="modal__action">Read more &#8594;</button>
  </div>
</div>
<h2>Status</h2>
<p>Relaying system status is something that comes up often in my work. We provide automated cloud hosting at <a href="https://cloudservers.dk">cloudservers.dk</a>,
which requires some processes to run in the background, during which time nothing happens in the front-end.</p>
<p>To minimise support requests and build trust with out customers we try to provide live status updates wherever and whenever possible.
This lets the users know that the system is in fact working as intended, and thus avoids a lot of panic and frustration.</p>
<p>Among the many different indicators we use, 
the status bar is probably the clearest example of how an animated progress bar can put a user at ease, when a process is running in the background:</p>
<div class="box status" id="status">
  <h3>Status Example</h3>
  <hr>
  <div class="wrapper">
    <div class="progress-bar">
      <div class="progress"></div>
    </div>
  </div>
</div>
<h2>Conclusion</h2>
<p>In conclusion, animations can be a powerful tool for enhancing the user experience on the web. 
They can guide users through a website, improve the overall aesthetic, and improve usability. 
However, it is important to use animations thoughtfully and strategically to ensure that they do not have any negative impacts on the user experience. 
By doing so, we can create engaging and effective websites that users will love.</p>
<script>
  // Orientation
  function orientation() {
    const orientationElement = document.querySelector('#orientation');
    const orientationWrapper1 = orientationElement.querySelector('#wrapper-1');
    const orientationWrapper2 = orientationElement.querySelector('#wrapper-2');
    const orientationAction1 = orientationElement.querySelector('#button1');
    const orientationAction2 = orientationElement.querySelector('#button2');
    orientationAction1.addEventListener('click', function(e) {
      e.preventDefault();
      orientationWrapper1.style.left = "-100%";
      orientationWrapper2.style.left = "0";
    });
    orientationAction2.addEventListener('click', function(e) {
      e.preventDefault();
      orientationWrapper1.style.left = "0";
      orientationWrapper2.style.left = "100%";
    });
  }
  // New Element 
  function newElement() {
    const newElementButton = document.querySelector('#newElementAction');
    const newElementContainer = document.querySelector('#newElement');
    newElementButton.addEventListener('click', function(e) {
      newElementContainer.classList.toggle('active');
    });
  }
  // modal
  function modal() {
    const modalBox = document.querySelector('.modal'),
        modalTrigger = document.querySelector('.modal__trigger'),
        modalClose = document.querySelector('.modal__close'),
        modalTitle = document.querySelector('.modal__title'),
        modalContent = document.querySelector('.modal__content'),
        modalAction = document.querySelector('.modal__action');
    modalTrigger.addEventListener('click', function(e) {
      modalBox.classList.toggle('modal--active');
      if(modalBox.attributes['aria-hidden'].value == "true") {
        console.log(modalBox);
        modalBox.setAttribute("aria-hidden", "false");
      } else {
        console.log(modalBox);
        modalBox.setAttribute("aria-hidden", "true");
      }
      e.stopPropagation();
    });
    modalClose.addEventListener('click', function() {
      modalBox.classList.remove('modal--active');
      if(modalBox.attributes['aria-hidden'].value == "true") {
        console.log(modalBox);
        modalBox.setAttribute("aria-hidden", "false");
      } else {
        console.log(modalBox);
        modalBox.setAttribute("aria-hidden", "true");
      }
    });
  }
  // Run functions
  orientation();
  newElement();
  modal();
</script>
            </main>
            <script src='../../../../../assets/js/highlight.pack.js'></script>
            <script>hljs.initHighlightingOnLoad();</script>
            <?php include('../../../../../_inc/footer.php'); ?>
        