    <!-- EO Header -->


    <div class="container audience-custom">
    
    
    <div class="discoverexp">
       
        
        <div class="white-container2" >
            <div class="header-templt-custom">
                <a href='<?=base_url("/")?>' class='custom-link-btn' >
                KG Media Audience
                </a>
                <a href='<?=base_url("rmb")?>' class='custom-link-btn'>
                    Rich Media Gallery
                </a>
                <a href='<?=base_url("audience")?>' class='custom-link-btn active'>
                Create Custom Audience
                </a>
            </div>
            <p class="header-templt-title-custom">SELECT, FILTER & CREATE YOUR AUDIENCE</p>

            <div id="bckc">
                <img src="<?=base_url(). 'assets/images/leftarr.png' ?>" alt="" id="bbck">
            </div>
            <div class="detailcont">
        <div class="white-container-relatif-brands" id='csimulation1'>
            <div>
                <!-- <div id="tittfilter">
                    Select, Filter & Create your Audiences
                </div> -->
                <div class="row accodiv">
                    <div class="column50">
                        
                            <button id='f1' class="accordion shadowEfct">Gender <span class='filterval'>All Gender</span></button>
                            <button id='f2' class="accordion shadowEfct">Age Range</button>
                            <button id='f3' class="accordion shadowEfct">Income Range</button>
                            <button id='f4' class="accordion shadowEfct">Locations</button>                            
                            <button id='f5' class="accordion shadowEfct">Category Product Interests</button>
                            <button id='f6' class="accordion shadowEfct">Articles Channel They Engage
                            </button>
                            <button id='f7' class="accordion shadowEfct">Video Category They Watch</button>
                            <button id='result-btn-custom' class="accordion shadowEfct result-custom">Result</button>
                           
                    </div>
                
                    <div class="column50" style="position: static;">
                        <div>
                             <div id="cpcalc2"><span>Disclaimer :</span><br>This product for demonstration purposes only, data and feature are limited. <br> full product will be available Next Years!</div>
                             <!-- <div id="calcuses">5.000.000</div> -->
                             <!-- <div id="cpcalc">users</div> -->
                        </div>
                        <!-- <div>
                             <div id="cpcalc3">Use this Custom Audience </div>
                        </div> -->
                    </div>
                
                    
                </div>
                
                
            </div>

            
        </div>    
               
            </div>
<!-- Step 2 -->
        <div id='step2'>
            <div id="ttlstep2">
                Congrats your custome audience created, now you can use your audience for Digital Campaign or Survey Marketing
            </div>
            <!-- <div class="sld_tsm2_  " id='stp1'>
                <img src="<?=base_url() . 'assets/thumb/small/group.png' ?>">
                <div>
                    <div class="sld_tsm_txtpromo ">Your<br>Custom<br>Audience</div>                                
                </div>

                <div class="desc-promo pl-10" id='qrres'>
                Total User : 3.382.290 users <br>
                Emails : 300 emails
                </div>
            </div>
            <div class="sld_tsm3_  "  id='stp2'>
                <img src="<?=base_url() . 'assets/images/arrow.png' ?>">
                
            </div> -->

            <div class="sld_tsm2_  "  id='stp3'>
                <img src="<?=base_url() . 'assets/thumb/small/group.png' ?>">
                <div>
                    <div class="sld_tsm_txtpromo ">Digital Ads</div>                                
                </div>

                <div class="desc-promo pl-10" id='qrres'>
                Create interactive ads easly with our Creative builder. 
                </div>
                <a href='<?=base_url("rmb")?>' >
                <div class="createbtn2" id="cceditor2">See Our Template</div>
                </a>
            </div>
            <div class="sld_tsm2_  "  id='stp4'>
                <img style="filter: grayscale(1);" src="<?=base_url() . 'assets/thumb/small/group.png' ?>">
                <div>
                    <div class="sld_tsm_txtpromo ">Marketing Survey</div>                                
                </div>

                <div class="desc-promo pl-10" id='qrres'>
                Create your survey by our Survey Builder
                </div>
                <a href='#' >
                <div class="createbtn2" id="cceditor2">Coming Soon</div>
                </a>
            </div>

        </div>

        <div class="qr-section hide">
            <p>I'm Interest! <br> Notify Me!</p>
            <img src="<?=base_url() . 'assets/images/qrcode.jpg'?>">
        </div>
        
        
<script>

let f1content = 'Gender';
let f2content = 'Age Range';
let f3content = 'Income Range';
let f4content = 'Locations';
let f5content = 'Category Product Interests';
let f6content = 'Articles Channel They Engage';
let f7content = 'Video Category They Watch';
let f8content = 'Book They Read';
let popupopen = '';

var acarr = [];
var gearr = [];
var agarr = [];
var inarr = [];
var prarr = [];
var vdarr = [];

let strage = '';
let strin = '';

f1.addEventListener('click', openEditor);
f2.addEventListener('click', openEditor);
f3.addEventListener('click', openEditor);
f4.addEventListener('click', openEditor);
f5.addEventListener('click', openEditor);
f6.addEventListener('click', openEditor);
f7.addEventListener('click', openEditor);

function openEditor(e) {
   

    switch (e.target.id){
        case 'f1':
            
            popupopen = 'ge';
            genderlist.style.display = 'block';
            doop2.innerHTML ='Select ' + f1content;
            break;
        case 'f2':
            
            popupopen = 'ag';
            agelist.style.display = 'block';
            doop2.innerHTML ='Select ' + f2content;

            break;    
        case 'f3':
            popupopen = 'in';
            inlist.style.display = 'block';
            doop2.innerHTML ='Select ' + f3content;
            break;    
        case 'f4':
            popupopen = 'lo';
            lolist.style.display = 'block';
            doop2.innerHTML ='Select ' + f4content;
            break;    
        case 'f5':
            popupopen = 'pr';
            prlist.style.display = 'block';
            doop2.innerHTML ='Select ' + f5content;
            break;    
        case 'f6':
            doop2.innerHTML ='Select ' + f6content;
            popupopen = 'ac';
            articleslist.style.display = 'block';
            break;    
        case 'f7':
            doop2.innerHTML ='Select ' + f7content;
            popupopen = 'vd';
            vdlist.style.display = 'block';
            break;    
        case 'f8':
            doop2.innerHTML ='Select ' + f8content;
            break;    
        
    }
    showoption(1)

}


function showoption(v, inf=''){
    if (v){
        TweenMax.to(dimmerModal,0.5,{opacity:1, display:"block",ease:Expo.easeOut});
        TweenMax.to(modalfilter,0.5,{opacity:1, display:"block",ease:Expo.easeOut}); 
    }else{
        TweenMax.to(dimmerModal,0,{opacity:0, display:"none",ease:Expo.easeOut});
        TweenMax.to(modalfilter,0,{opacity:0, display:"none",ease:Expo.easeOut});   
    }
}

// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("accactive");
//     var panel = this.nextElementSibling;
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//     } else {
//       panel.style.maxHeight = panel.scrollHeight + "px";
//     } 
//   });
// }
</script>