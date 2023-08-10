<?php $description = 'HSL for dummies';?>

<?php include '../../_inc/header.php';?>
<?php include '../../_inc/icons.php';?>

<span class='inverted'><?php include '../../_inc/navigation.php';?></span>

<main id='main' class='central space post blog'>

    <style>
.hsl-container {
  width: 100%;
  padding: 1.5rem;
  background: rgba(0, 0, 0, 0.7);
  border-radius: 0.5rem;
  color: white;
  margin: 0 auto;
}
.hsl-container .hsl-slider {
  width: 100%;
  height: 25px;
  background: black;
  outline: none;
  opacity: 0.7;
  -webkit-appearance: none;
  transition: opacity 0.2s;
  border-radius: 1.5rem;
}
.hsl-container .hsl-slider::hover {
  opacity: 1;
}
.hsl-container .hsl-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #0affca;
  cursor: pointer;
}
.hsl-container .hsl-slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background: #0affca;
  cursor: pointer;
}
#color_circle {
  max-width: 96%;
  width: auto;
  height: auto;
  margin: 0 auto;
  background: none !important;
}
.full-width {
  left: 50%;
  margin-left: -50vw;
  margin-right: -50vw;
  max-width: 100vw;
  position: relative;
  right: 50%;
  width: 100vw;
}
.sat-example,
.light-example {
  display: flex;
}
.sat-example .box,
.light-example .box {
  display: grid;
  align-items: center;
  justify-content: center;
  width: 20%;
  height: 100px;
}
.sat-example .box.one {
  background-color: hsl(0, 100%, 50%);
}
.sat-example .box.two {
  background-color: hsl(0, 75%, 50%);
}
.sat-example .box.three {
  background-color: hsl(0, 50%, 50%);
}
.sat-example .box.four {
  background-color: hsl(0, 25%, 50%);
}
.sat-example .box.five {
  background-color: hsl(0, 0%, 50%);
}
.light-example .box.one {
  background-color: hsl(0, 100%, 100%);
  color: black;
}
.light-example .box.two {
  background-color: hsl(0, 100%, 75%);
  color: black;
}
.light-example .box.three {
  background-color: hsl(0, 100%, 50%);
  color: black;
}
.light-example .box.four {
  background-color: hsl(0, 100%, 25%);
  color: white;
}
.light-example .box.five {
  background-color: hsl(0, 100%, 0%);
  color: white;
}
body.darkmode #circle32 {
  fill: #19191a;
}
body.darkmode #color_circle path.text {
  fill: white !important;
  stroke: white !important;
}
body.darkmode #color_circle path.arrow {
  stroke: white !important;
}
</style>
<h1>HSL Simplified</h1>
<p class='timestamp'><time datetime='22-03-2021'>22-03-2021</time></p>
<hr>
<h2>What is HSL?</h2>
<p>The HSL color model uses the color wheel, making it far more intuitive to use than RGB, HEX and the like.
You can guess at the colors you want, and then tweak them as you see fit.
It's also easier to pair colors of the same light-, darkness and saturation, as you can simply tweak the hue.</p>
<p>HSL is simply used like so in CSS</p>
<pre><code>background-color: hsl(H,S,L);
</code></pre>
<p><strong>H</strong> = Hue <br>
<strong>S</strong> = Saturation <br>
<strong>L</strong> = Lightness <br></p>
<h2>Hue</h2>
<p>Hue is represented as an angle of the color wheel (You'll know this as the rainbow represented in a circle).
The angle is measured in degrees(0-360). Your reds are on either end of the spectrum(0 and 360) with all colors in between,
so <code>green = 120</code>, <code>blue = 240</code> and so on.</p>
<div class="full-width">
<svg width="974" height="701" id="color_circle" viewBox="0 0 974 701" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
  <path d="M712.998 369.94C713.193 415.94 702.865 455.147 680.034 495.081L652.936 503.08L463 371L695.784 351.76L712.998 369.94Z" fill="#FEFE33"/>
  <path d="M587.081 153.966C627.015 176.797 655.806 205.344 678.975 245.083L673.242 269.294L463 371L563.101 160.048L587.081 153.966Z" fill="#FB9902"/>
  <path d="M678.975 245.083C702.143 284.823 712.803 323.941 712.998 369.94L463 371L678.975 245.083Z" fill="#FABC02"/>
  <path d="M337.083 155.025C376.823 131.857 415.941 121.197 461.94 121.002L482.925 143.058L463 371L329.78 180.851L337.083 155.025Z" fill="#FE2712"/>
  <path d="M461.94 121.002C507.94 120.807 547.147 131.135 587.081 153.966L463 371L461.94 121.002Z" fill="#FD5308"/>
  <path d="M213.002 372.06C212.807 326.06 223.135 286.853 245.966 246.919L277.597 235.946L463 371L235.692 393.238L213.002 372.06Z" fill="#8601AF"/>
  <path d="M245.966 246.919C268.797 206.985 297.344 178.194 337.083 155.025L463 371L245.966 246.919Z" fill="#A7194B"/>
  <path d="M338.919 588.034C298.985 565.203 270.194 536.656 247.025 496.917L256.221 470.189L463 371L366.819 583.207L338.919 588.034Z" fill="#0247FE"/>
  <path d="M247.025 496.917C223.857 457.177 213.197 418.059 213.002 372.06L463 371L247.025 496.917Z" fill="#3D01A4"/>
  <path d="M588.917 586.974C549.177 610.143 510.059 620.803 464.06 620.998L444.453 600.225L463 371L594.736 562.014L588.917 586.974Z" fill="#66B032"/>
  <path d="M464.06 620.998C418.06 621.193 378.853 610.865 338.919 588.034L463 371L464.06 620.998Z" fill="#0391CE"/>
  <path d="M680.034 495.081C657.203 535.015 628.656 563.806 588.917 586.974L463 371L680.034 495.081Z" fill="#D0EA2B"/>
</g>
<path d="M423.825 519.723C505.962 541.359 590.087 492.312 611.723 410.175C633.359 328.038 584.312 243.913 502.175 222.277C420.038 200.641 335.913 249.687 314.277 331.825C292.641 413.962 341.687 498.087 423.825 519.723Z" id="circle32" fill="white"/>
<path class="arrow" d="M694.712 534.984C700.91 555.184 713.317 583.542 704.219 604.511C700.149 613.892 683.911 625.91 673.943 614.369C642.448 577.906 873.733 521.508 890.998 516.894" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path class="arrow" d="M706.929 538.683C700.198 536.452 697.771 530.497 691.923 527.274C691.254 531.933 689.424 541.324 685.805 545.058" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path class="arrow" d="M468.926 97.809C506.234 44.2108 568.993 23.1277 642 28.9331M463 88.6748C465.831 94.4462 462.409 99.8923 463.763 105.746C468.252 103.132 477.648 98.1711 483.424 98.0519" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path class="arrow" d="M90.6859 649.552C119.823 663.453 161.252 642.473 168.562 603.81C170.478 593.667 173.357 573.746 164.076 567.441C143.716 553.614 134.245 617.489 167.447 609.092C181.178 605.617 192.361 590.217 201.151 578.055C211.589 563.62 220.561 547.762 231 533.329" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path class="arrow" d="M238.314 550.73C234.717 540.431 238.861 530.616 237.093 520.144C231.581 524.901 220.038 533.945 212.895 534.251" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path class="text" d="M663.531 38.2812C662.594 37.6823 661.852 36.9401 661.305 36.0547C660.758 35.1432 660.484 34.1667 660.484 33.125C660.484 32.0833 660.641 30.8464 660.953 29.4141C661.266 27.9818 661.656 26.6536 662.125 25.4297C662.62 24.2057 663.206 23.0208 663.883 21.875C664.586 20.7292 665.38 19.7135 666.266 18.8281C668.219 16.9271 670.432 15.9766 672.906 15.9766C676.24 15.9766 678.792 17.2005 680.562 19.6484C682.203 21.862 683.023 24.6094 683.023 27.8906C683.023 31.7708 681.786 34.7917 679.312 36.9531C676.891 39.0365 673.674 40.0781 669.664 40.0781C667.346 40.0781 665.302 39.4792 663.531 38.2812ZM662.789 32.8516C662.789 36.3672 665.289 38.125 670.289 38.125C673.883 38.125 676.578 37.2005 678.375 35.3516C680.198 33.5026 681.109 30.8724 681.109 27.4609C681.109 27.3568 681.109 27.2526 681.109 27.1484C681.109 24.1536 680.367 21.862 678.883 20.2734C677.398 18.6849 675.367 17.8906 672.789 17.8906C672.503 17.8906 672.242 17.8906 672.008 17.8906C671.799 17.8906 671.604 17.8906 671.422 17.8906C670.042 17.8906 668.674 18.8281 667.32 20.7031C666.044 22.4219 664.951 24.6224 664.039 27.3047C663.206 29.7526 662.789 31.6016 662.789 32.8516ZM686.695 28.8672C686.174 28.4766 685.797 28.0859 685.562 27.6953C685.328 27.3047 685.211 26.7578 685.211 26.0547C685.211 25.3516 685.367 24.7396 685.68 24.2188C686.227 23.3594 687.008 22.9297 688.023 22.9297C689.378 22.9297 690.458 23.4766 691.266 24.5703C691.63 25.0391 691.852 25.5729 691.93 26.1719C691.93 27.5 691.656 28.3854 691.109 28.8281C690.589 29.2448 689.781 29.4531 688.688 29.4531C687.906 29.4531 687.242 29.2578 686.695 28.8672ZM690.094 25.5469C689.495 24.9219 688.857 24.6094 688.18 24.6094C687.372 24.6094 686.891 25 686.734 25.7812C686.734 25.8594 686.734 26.0286 686.734 26.2891C686.734 26.5234 686.891 26.901 687.203 27.4219C687.672 27.8125 688.036 28.0208 688.297 28.0469C688.557 28.0729 688.792 28.0859 689 28.0859C689.234 28.0859 689.482 27.9818 689.742 27.7734C690.133 27.513 690.328 27.1745 690.328 26.7578C690.328 26.3151 690.25 25.9115 690.094 25.5469ZM733.336 37.0312C733.336 37.7604 732.763 38.125 731.617 38.125C730.862 38.125 729.885 37.7734 728.688 37.0703C728.245 36.8099 727.789 36.5755 727.32 36.3672C726.878 36.1328 726.383 36.0156 725.836 36.0156C725.029 36.4323 724.143 36.901 723.18 37.4219C719.846 39.1927 716.917 40.0781 714.391 40.0781L713.141 40C713.115 40 713.036 40 712.906 40C712.802 40 712.529 39.9479 712.086 39.8438C710.94 39.5573 710.081 39.1536 709.508 38.6328C709.326 38.4505 709.234 38.2812 709.234 38.125C709.234 37.9427 709.26 37.7995 709.312 37.6953L716.422 26.3672C715.276 24.388 714.56 22.9948 714.273 22.1875C713.857 20.9115 713.648 19.4141 713.648 17.6953C713.857 15.0391 714.742 12.8385 716.305 11.0938C717.529 9.76562 718.753 9.10156 719.977 9.10156C720.914 9.10156 721.63 9.55729 722.125 10.4688C722.464 11.0417 722.633 11.849 722.633 12.8906C722.633 15.9375 721.201 20.2083 718.336 25.7031C718.414 26.7448 719.638 28.2552 722.008 30.2344C723.154 31.1979 724.13 31.9141 724.938 32.3828C725.745 32.8516 726.253 33.0859 726.461 33.0859C727.945 32.2526 728.961 31.5625 729.508 31.0156C730.055 30.4688 730.458 30.026 730.719 29.6875C730.979 29.349 731.266 28.9844 731.578 28.5938C732.359 27.5781 733.297 26.5625 734.391 25.5469C734.651 25.5469 734.938 25.6771 735.25 25.9375C735.562 26.1719 735.706 26.3281 735.68 26.4062C735.654 26.4583 735.536 26.6797 735.328 27.0703C735.12 27.4609 734.742 27.9948 734.195 28.6719C732.789 30.3906 730.745 32.2266 728.062 34.1797C731.578 35.9245 733.336 36.875 733.336 37.0312ZM712.164 37.5781C712.164 38.0469 712.385 38.2812 712.828 38.2812C712.906 38.2812 713.245 38.2812 713.844 38.2812C714.469 38.2552 715.237 38.1771 716.148 38.0469C717.086 37.8906 717.984 37.6693 718.844 37.3828C720.328 36.888 722.099 36.0286 724.156 34.8047L717.672 28.3203C717.047 28.9453 716.318 29.8828 715.484 31.1328C713.271 34.362 712.164 36.5104 712.164 37.5781ZM717.047 23.7891C718.245 23.112 719.182 21.5625 719.859 19.1406C720.38 17.2917 720.641 15.4297 720.641 13.5547L720.68 12.5391C720.68 12.0703 720.562 11.7708 720.328 11.6406C720.12 11.5104 719.729 11.4453 719.156 11.4453C718.609 11.4453 718.089 11.6927 717.594 12.1875C717.099 12.6562 716.695 13.2422 716.383 13.9453C715.81 15.2214 715.523 16.7969 715.523 18.6719C715.523 20.5469 716.031 22.2526 717.047 23.7891ZM770.68 20.1953C770.68 21.7578 769.43 23.5938 766.93 25.7031C766.305 26.1979 765.771 26.6406 765.328 27.0312C768.531 27.0833 770.445 27.8385 771.07 29.2969C771.201 29.6354 771.266 29.987 771.266 30.3516C771.266 30.7161 771.161 31.2109 770.953 31.8359C770.771 32.4349 770.367 33.151 769.742 33.9844C769.117 34.8177 768.362 35.625 767.477 36.4062C765.628 38.0208 763.674 39.1406 761.617 39.7656C760.914 39.974 760.341 40.0781 759.898 40.0781C759.482 40.0781 759.143 40.0651 758.883 40.0391C758.622 40.0391 758.349 39.9609 758.062 39.8047C757.776 39.6484 757.633 39.388 757.633 39.0234C759.586 38.5286 761.305 37.8255 762.789 36.9141C764.273 36.0026 765.445 35.0521 766.305 34.0625C767.32 32.8385 767.828 31.8229 767.828 31.0156C767.828 30.2083 767.581 29.6615 767.086 29.375C766.591 29.0885 765.953 28.9453 765.172 28.9453C763.193 28.9453 760.497 29.7526 757.086 31.3672L755.719 29.6094C763.609 25.9635 767.555 23.3464 767.555 21.7578C767.555 21.0807 766.812 20.638 765.328 20.4297C763.792 20.4297 762.034 20.6901 760.055 21.2109C758.102 21.7318 756.591 22.1094 755.523 22.3438C754.456 22.5781 753.362 22.6953 752.242 22.6953C752.242 21.4714 752.542 20.7552 753.141 20.5469C754.234 20.2865 755.393 20 756.617 19.6875C760.628 18.6719 763.831 18.1641 766.227 18.1641C768.648 18.1641 770.133 18.8411 770.68 20.1953ZM773.062 28.9844C773.062 28.8542 773.062 28.5026 773.062 27.9297C773.062 27.3307 773.232 26.4714 773.57 25.3516C773.909 24.2318 774.378 23.138 774.977 22.0703C775.602 20.9766 776.318 19.9479 777.125 18.9844C777.958 18.0208 778.857 17.1615 779.82 16.4062C781.904 14.8177 783.987 14.0234 786.07 14.0234C786.435 14.0234 786.734 14.0885 786.969 14.2188C787.203 14.349 787.32 14.5573 787.32 14.8438C787.32 15.1042 787.32 15.2865 787.32 15.3906C784.195 15.9635 781.578 17.5781 779.469 20.2344C777.359 22.8646 776.305 25.7812 776.305 28.9844C776.305 30.026 776.552 31.1068 777.047 32.2266C777.568 33.3464 778.036 34.1797 778.453 34.7266C778.896 35.2474 779.378 35.5078 779.898 35.5078C780.315 35.1693 780.784 34.7266 781.305 34.1797C781.852 33.6328 782.451 33.0469 783.102 32.4219C783.779 31.7708 784.508 31.1328 785.289 30.5078C786.07 29.8568 786.891 29.2708 787.75 28.75C789.677 27.6042 791.617 27.0052 793.57 26.9531C794.456 26.9531 795.159 27.3438 795.68 28.125C796.174 28.8802 796.422 29.7135 796.422 30.625C796.031 33.776 794.547 36.224 791.969 37.9688C789.859 39.4271 787.438 40.1562 784.703 40.1562C783.01 40.1562 781.448 39.8698 780.016 39.2969C777.099 38.151 775.055 36.1979 773.883 33.4375C773.336 32.1354 773.062 30.651 773.062 28.9844ZM793.844 30.8984C793.844 30.013 793.427 29.5703 792.594 29.5703C791.76 29.5703 790.836 29.8828 789.82 30.5078C788.831 31.1328 787.854 31.862 786.891 32.6953C785.641 33.737 784.156 35.1823 782.438 37.0312C782.906 37.1094 783.414 37.1484 783.961 37.1484C784.534 37.1484 785.302 37.0833 786.266 36.9531C787.229 36.8229 788.297 36.4974 789.469 35.9766C790.641 35.4557 791.643 34.7786 792.477 33.9453C793.31 33.0859 793.766 32.0703 793.844 30.8984ZM801.812 38.2812C800.875 37.6823 800.133 36.9401 799.586 36.0547C799.039 35.1432 798.766 34.1667 798.766 33.125C798.766 32.0833 798.922 30.8464 799.234 29.4141C799.547 27.9818 799.938 26.6536 800.406 25.4297C800.901 24.2057 801.487 23.0208 802.164 21.875C802.867 20.7292 803.661 19.7135 804.547 18.8281C806.5 16.9271 808.714 15.9766 811.188 15.9766C814.521 15.9766 817.073 17.2005 818.844 19.6484C820.484 21.862 821.305 24.6094 821.305 27.8906C821.305 31.7708 820.068 34.7917 817.594 36.9531C815.172 39.0365 811.956 40.0781 807.945 40.0781C805.628 40.0781 803.583 39.4792 801.812 38.2812ZM801.07 32.8516C801.07 36.3672 803.57 38.125 808.57 38.125C812.164 38.125 814.859 37.2005 816.656 35.3516C818.479 33.5026 819.391 30.8724 819.391 27.4609C819.391 27.3568 819.391 27.2526 819.391 27.1484C819.391 24.1536 818.648 21.862 817.164 20.2734C815.68 18.6849 813.648 17.8906 811.07 17.8906C810.784 17.8906 810.523 17.8906 810.289 17.8906C810.081 17.8906 809.885 17.8906 809.703 17.8906C808.323 17.8906 806.956 18.8281 805.602 20.7031C804.326 22.4219 803.232 24.6224 802.32 27.3047C801.487 29.7526 801.07 31.6016 801.07 32.8516ZM824.977 28.8672C824.456 28.4766 824.078 28.0859 823.844 27.6953C823.609 27.3047 823.492 26.7578 823.492 26.0547C823.492 25.3516 823.648 24.7396 823.961 24.2188C824.508 23.3594 825.289 22.9297 826.305 22.9297C827.659 22.9297 828.74 23.4766 829.547 24.5703C829.911 25.0391 830.133 25.5729 830.211 26.1719C830.211 27.5 829.938 28.3854 829.391 28.8281C828.87 29.2448 828.062 29.4531 826.969 29.4531C826.188 29.4531 825.523 29.2578 824.977 28.8672ZM828.375 25.5469C827.776 24.9219 827.138 24.6094 826.461 24.6094C825.654 24.6094 825.172 25 825.016 25.7812C825.016 25.8594 825.016 26.0286 825.016 26.2891C825.016 26.5234 825.172 26.901 825.484 27.4219C825.953 27.8125 826.318 28.0208 826.578 28.0469C826.839 28.0729 827.073 28.0859 827.281 28.0859C827.516 28.0859 827.763 27.9818 828.023 27.7734C828.414 27.513 828.609 27.1745 828.609 26.7578C828.609 26.3151 828.531 25.9115 828.375 25.5469Z" fill="black"/>
<path class="text" d="M912.094 516.375C912.094 515.88 912.107 515.112 912.133 514.07C912.185 513.003 912.224 511.805 912.25 510.477C912.302 509.148 912.354 507.755 912.406 506.297C912.458 504.839 912.497 503.445 912.523 502.117C912.576 500.789 912.615 499.604 912.641 498.562C912.667 497.521 912.693 496.74 912.719 496.219C912.667 495.646 912.771 495.281 913.031 495.125C913.292 494.969 913.578 494.891 913.891 494.891C914.229 494.891 914.516 494.917 914.75 494.969C915.01 495.021 915.193 495.229 915.297 495.594L914.672 515.672C914.62 516.141 914.255 516.479 913.578 516.688C912.901 516.87 912.406 516.766 912.094 516.375ZM937.133 510.477C937.992 510.477 938.422 510.802 938.422 511.453C938.422 512.104 938.135 512.586 937.562 512.898C936.99 513.185 936.339 513.393 935.609 513.523C934.906 513.654 934.242 513.732 933.617 513.758C932.992 513.758 932.589 513.784 932.406 513.836C932.25 513.862 931.872 513.966 931.273 514.148C930.701 514.305 930.01 514.5 929.203 514.734C928.396 514.943 927.523 515.177 926.586 515.438C923.643 516.219 921.299 516.609 919.555 516.609C918.669 516.609 918.07 516.479 917.758 516.219C917.471 515.932 917.419 515.542 917.602 515.047C919.555 513.328 921.586 511.115 923.695 508.406C926.846 504.37 928.422 501.219 928.422 498.953C928.422 498.51 928.357 498.094 928.227 497.703C927.94 496.896 927.198 496.375 926 496.141C924.854 496.141 923.917 496.375 923.188 496.844C922.458 497.312 921.768 497.833 921.117 498.406C920.492 498.979 919.841 499.5 919.164 499.969C918.513 500.438 917.706 500.672 916.742 500.672C916.768 499.812 917.12 498.979 917.797 498.172C919.151 496.505 921.065 495.307 923.539 494.578C924.424 494.292 925.128 494.148 925.648 494.148C926.169 494.148 926.56 494.161 926.82 494.188C927.836 494.292 928.708 494.656 929.438 495.281C930.167 495.906 930.596 496.87 930.727 498.172C930.727 501.844 929.008 505.919 925.57 510.398C924.633 511.622 923.708 512.755 922.797 513.797C923.083 513.823 923.526 513.836 924.125 513.836C924.75 513.836 925.596 513.693 926.664 513.406C927.732 513.094 928.865 512.729 930.062 512.312C931.26 511.87 932.445 511.453 933.617 511.062C934.789 510.672 935.961 510.477 937.133 510.477ZM943.539 515.281C942.602 514.682 941.859 513.94 941.312 513.055C940.766 512.143 940.492 511.167 940.492 510.125C940.492 509.083 940.648 507.846 940.961 506.414C941.273 504.982 941.664 503.654 942.133 502.43C942.628 501.206 943.214 500.021 943.891 498.875C944.594 497.729 945.388 496.714 946.273 495.828C948.227 493.927 950.44 492.977 952.914 492.977C956.247 492.977 958.799 494.201 960.57 496.648C962.211 498.862 963.031 501.609 963.031 504.891C963.031 508.771 961.794 511.792 959.32 513.953C956.898 516.036 953.682 517.078 949.672 517.078C947.354 517.078 945.31 516.479 943.539 515.281ZM942.797 509.852C942.797 513.367 945.297 515.125 950.297 515.125C953.891 515.125 956.586 514.201 958.383 512.352C960.206 510.503 961.117 507.872 961.117 504.461C961.117 504.357 961.117 504.253 961.117 504.148C961.117 501.154 960.375 498.862 958.891 497.273C957.406 495.685 955.375 494.891 952.797 494.891C952.51 494.891 952.25 494.891 952.016 494.891C951.807 494.891 951.612 494.891 951.43 494.891C950.049 494.891 948.682 495.828 947.328 497.703C946.052 499.422 944.958 501.622 944.047 504.305C943.214 506.753 942.797 508.602 942.797 509.852ZM966.703 505.867C966.182 505.477 965.805 505.086 965.57 504.695C965.336 504.305 965.219 503.758 965.219 503.055C965.219 502.352 965.375 501.74 965.688 501.219C966.234 500.359 967.016 499.93 968.031 499.93C969.385 499.93 970.466 500.477 971.273 501.57C971.638 502.039 971.859 502.573 971.938 503.172C971.938 504.5 971.664 505.385 971.117 505.828C970.596 506.245 969.789 506.453 968.695 506.453C967.914 506.453 967.25 506.258 966.703 505.867ZM970.102 502.547C969.503 501.922 968.865 501.609 968.188 501.609C967.38 501.609 966.898 502 966.742 502.781C966.742 502.859 966.742 503.029 966.742 503.289C966.742 503.523 966.898 503.901 967.211 504.422C967.68 504.812 968.044 505.021 968.305 505.047C968.565 505.073 968.799 505.086 969.008 505.086C969.242 505.086 969.49 504.982 969.75 504.773C970.141 504.513 970.336 504.174 970.336 503.758C970.336 503.315 970.258 502.911 970.102 502.547Z" fill="black"/>
<path class="text" d="M21.0156 650.477C21.875 650.477 22.3047 650.802 22.3047 651.453C22.3047 652.104 22.0182 652.586 21.4453 652.898C20.8724 653.185 20.2214 653.393 19.4922 653.523C18.7891 653.654 18.125 653.732 17.5 653.758C16.875 653.758 16.4714 653.784 16.2891 653.836C16.1328 653.862 15.7552 653.966 15.1562 654.148C14.5833 654.305 13.8932 654.5 13.0859 654.734C12.2786 654.943 11.4062 655.177 10.4688 655.438C7.52604 656.219 5.18229 656.609 3.4375 656.609C2.55208 656.609 1.95312 656.479 1.64062 656.219C1.35417 655.932 1.30208 655.542 1.48438 655.047C3.4375 653.328 5.46875 651.115 7.57812 648.406C10.7292 644.37 12.3047 641.219 12.3047 638.953C12.3047 638.51 12.2396 638.094 12.1094 637.703C11.8229 636.896 11.0807 636.375 9.88281 636.141C8.73698 636.141 7.79948 636.375 7.07031 636.844C6.34115 637.312 5.65104 637.833 5 638.406C4.375 638.979 3.72396 639.5 3.04688 639.969C2.39583 640.438 1.58854 640.672 0.625 640.672C0.651042 639.812 1.0026 638.979 1.67969 638.172C3.03385 636.505 4.94792 635.307 7.42188 634.578C8.30729 634.292 9.01042 634.148 9.53125 634.148C10.0521 634.148 10.4427 634.161 10.7031 634.188C11.7188 634.292 12.5911 634.656 13.3203 635.281C14.0495 635.906 14.4792 636.87 14.6094 638.172C14.6094 641.844 12.8906 645.919 9.45312 650.398C8.51562 651.622 7.59115 652.755 6.67969 653.797C6.96615 653.823 7.40885 653.836 8.00781 653.836C8.63281 653.836 9.47917 653.693 10.5469 653.406C11.6146 653.094 12.7474 652.729 13.9453 652.312C15.1432 651.87 16.3281 651.453 17.5 651.062C18.6719 650.672 19.8438 650.477 21.0156 650.477ZM38.3984 657.586C37.8516 657.586 37.5391 657.43 37.4609 657.117L37.6172 649.383H34.7656L30.0781 649.344H27.2656C26.9271 649.344 26.5885 649.292 26.25 649.188C25.9115 649.083 25.7422 648.81 25.7422 648.367C27.1224 646.596 28.4635 644.812 29.7656 643.016C33.9062 637.365 36.7448 634.539 38.2812 634.539C40 634.539 40.8594 637.56 40.8594 643.602C40.8594 644.383 40.8464 645.216 40.8203 646.102L49.4531 645.984C49.4531 646.661 49.362 647.156 49.1797 647.469C49.0234 647.781 48.8802 647.951 48.75 647.977L41.5234 648.562C41.1589 649.578 40.9375 650.724 40.8594 652C40.7292 654.083 40.6641 655.828 40.6641 657.234L38.3984 657.586ZM37.6172 638.172C37.0443 638.953 36.3411 639.721 35.5078 640.477C34.7005 641.206 33.9062 641.948 33.125 642.703C32.3438 643.432 31.6406 644.174 31.0156 644.93C30.3906 645.685 30 646.466 29.8438 647.273C30.026 647.273 30.4297 647.273 31.0547 647.273C31.6797 647.273 32.5781 647.208 33.75 647.078C34.9219 646.922 36.2109 646.766 37.6172 646.609V638.172ZM54.6484 655.281C53.7109 654.682 52.9688 653.94 52.4219 653.055C51.875 652.143 51.6016 651.167 51.6016 650.125C51.6016 649.083 51.7578 647.846 52.0703 646.414C52.3828 644.982 52.7734 643.654 53.2422 642.43C53.737 641.206 54.3229 640.021 55 638.875C55.7031 637.729 56.4974 636.714 57.3828 635.828C59.3359 633.927 61.5495 632.977 64.0234 632.977C67.3568 632.977 69.9089 634.201 71.6797 636.648C73.3203 638.862 74.1406 641.609 74.1406 644.891C74.1406 648.771 72.9036 651.792 70.4297 653.953C68.0078 656.036 64.7917 657.078 60.7812 657.078C58.4635 657.078 56.4193 656.479 54.6484 655.281ZM53.9062 649.852C53.9062 653.367 56.4062 655.125 61.4062 655.125C65 655.125 67.6953 654.201 69.4922 652.352C71.3151 650.503 72.2266 647.872 72.2266 644.461C72.2266 644.357 72.2266 644.253 72.2266 644.148C72.2266 641.154 71.4844 638.862 70 637.273C68.5156 635.685 66.4844 634.891 63.9062 634.891C63.6198 634.891 63.3594 634.891 63.125 634.891C62.9167 634.891 62.7214 634.891 62.5391 634.891C61.1589 634.891 59.7917 635.828 58.4375 637.703C57.1615 639.422 56.0677 641.622 55.1562 644.305C54.3229 646.753 53.9062 648.602 53.9062 649.852ZM77.8125 645.867C77.2917 645.477 76.9141 645.086 76.6797 644.695C76.4453 644.305 76.3281 643.758 76.3281 643.055C76.3281 642.352 76.4844 641.74 76.7969 641.219C77.3438 640.359 78.125 639.93 79.1406 639.93C80.4948 639.93 81.5755 640.477 82.3828 641.57C82.7474 642.039 82.9688 642.573 83.0469 643.172C83.0469 644.5 82.7734 645.385 82.2266 645.828C81.7057 646.245 80.8984 646.453 79.8047 646.453C79.0234 646.453 78.3594 646.258 77.8125 645.867ZM81.2109 642.547C80.612 641.922 79.974 641.609 79.2969 641.609C78.4896 641.609 78.0078 642 77.8516 642.781C77.8516 642.859 77.8516 643.029 77.8516 643.289C77.8516 643.523 78.0078 643.901 78.3203 644.422C78.7891 644.812 79.1536 645.021 79.4141 645.047C79.6745 645.073 79.9089 645.086 80.1172 645.086C80.3516 645.086 80.599 644.982 80.8594 644.773C81.25 644.513 81.4453 644.174 81.4453 643.758C81.4453 643.315 81.3672 642.911 81.2109 642.547Z" fill="black"/>
<defs>
<clipPath id="clip0">
<rect width="540" height="540" fill="white" transform="translate(270.681 41.1311) rotate(14.7571)"/>
</clipPath>
</defs>
</svg>
</div>
<h2>Saturation</h2>
<p>Saturation is represented as a percentage. 100% is full saturation, and 0% is simply a shade of grey devoid of color.</p>
<div class="sat-example">
  <div class="box one">100%</div>
  <div class="box two">75%</div>
  <div class="box three">50%</div>
  <div class="box four">25%</div>
  <div class="box five">0%</div>
</div>
<h2>Lightness</h2>
<p>Lightness describes how much light you want to give the color. 0% means no light at all(black) while 100% is full lightness(white).</p>
<div class="light-example">
<div class="box one">100%</div>
<div class="box two">75%</div>
<div class="box three">50%</div>
<div class="box four">25%</div>
<div class="box five">0%</div>
</div>
<h2>Alpha</h2>
<p>You can expand HSL to also include the alpha, thus making the color more or less transparent.
Alpha ranges from 0-1, where &quot;0&quot; is 100% transparent and &quot;1&quot; is 100% visible.
You can add the alpha by writing the following(Notice the &quot;A&quot; for Alpha: HSL<strong>A</strong>):</p>
<p><strong>background-color: hsla(H, S, L, A);</strong></p>
<pre><code>background-color: hsla(0, 100%, 50%, 0.5);
</code></pre>
<p>Or the modern syntax, <strong>background-color: hsla(H S L / A);</strong></p>
<pre><code>background-color: hsla(0 100% 50% / 0.5);
</code></pre>
<h2>Try it</h2>
<p>Try it with this HSLA editor:</p>
<div class="hsl-container">
  <p>Hue: <input type="range" min="0" max="360" value="0" class="hsl-slider" id="hue" oninput="updateHSLA()"><br></p>
  <p>Saturation: <input type="range" min="0" max="100" value="0" class="hsl-slider" id="saturation" oninput="updateHSLA()"><br></p>
  <p>Lightness: <input type="range" min="0" max="100" value="100" class="hsl-slider" id="lightness" oninput="updateHSLA()"><br></p>
  <p>Alpha: <input type="range" min="0" max="1" value="1" step="0.01"class="hsl-slider" id="alpha" oninput="updateHSLA()"><br></p>
  <div class="output" id="output">
    hsla(0 0% 100% / 1)<br>
    hsla(0, 0%, 100%, 1)
  </div>
</div>
<h2>Browser support</h2>
<p>Unless you're still, for some god forsaken reason, supporting IE8 or prior, you'll have no problems using HSL across the board!</p>
<script>
function updateHSLA() {
  const output = document.getElementById('output');
  const hue = document.getElementById('hue').value;
  const saturation = document.getElementById('saturation').value;
  const lightness = document.getElementById('lightness').value;
  const alpha = document.getElementById('alpha').value;
  const exampleCircle = document.getElementById('circle32');
  document.body.style.background = "hsla("+hue+" "+saturation+"% "+lightness+"% / "+alpha+")";
  exampleCircle.style.fill = "hsla("+hue+" "+saturation+"% "+lightness+"% / "+alpha+")";
  output.innerHTML = "hsla("+hue+" "+saturation+"% "+lightness+"% / "+alpha+")<br>hsla("+hue+", "+saturation+"%, "+lightness+"%, "+alpha+")<br>";
}
</script>


</main>

<script src='../../assets/js/highlight.pack.js'></script>
<script>hljs.initHighlightingOnLoad();</script>

<?php include '../../_inc/footer.php';?>
