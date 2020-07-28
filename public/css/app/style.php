/* <?php
header("Content-type: text/css"); 
?> */
/* PRIMARY STYLES */
*{
    margin: 0px auto;
    font-size: 14px;
    font-family: 'Encode Sans Expanded', sans-serif;
    font-weight: 400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    word-wrap: break-word;
    color: #333;
}
.clear-fix{
    clear: both;
}
.position-relative{
    position: relative;
}
.position-absolute{
    position: absolute;
}

.title{
    direction: rtl;
    position: relative;
    padding-bottom: 20px;
    margin-bottom: 40px;
    font-size: 18px;
    font-weight: 700;
}

.title:after {
    content:'';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: #ccc;
}
.title:before{
    content:'';
    position: absolute;
    bottom: 0;
    left: 0;
    right:0;
    width: 80px;
    height: 5px;
    background: #F9B500;
    z-index: 1;
}
.article-title{
    padding-top: 20px;
    text-align: right;
}
.article-title a{
    font-size: 20px;
    font-weight: 700;
}

.info-bar{
    list-style: none;
    padding-top: 10px;
    padding-bottom: 20px;
    display: inline-block;
    padding-left: 0px;
    text-align:right;
}
.info-bar li{
    display: inline-block;
    line-height: 24px;
}

.text-muted{
    color: #888;
}
.text-yellow{
    color: #F9B500!important;
}

/* body{
    overflow-x: hidden;
} */
a{
    text-decoration: none;
    transition: all .2s;
}
a:hover{
    text-decoration: none;
    color: #F9B500;
    transition: all .2s;
}
a:hover > b{
    text-decoration: none;
    color: #F9B500;
    transition: all .2s;
}
b{
    font-weight: 700;
}
/* end of PRIMARY STYLES */

/* app responsive sizes */
.app{
    width: 1200px;
}
@media  (max-width:1199.98px){
    .app{
        width: 992px;
    }
}
@media  (max-width:991.98px){
    .app{
        width: 768px;
    }
}

@media  (max-width: 767.98px){
    .app{
        width: 576px;
    }
}

@media  (max-width:575.98px){
    .app{
        width: calc(100% - 30px);
        padding:0px 15px ;
    }
}
/* end of app sizes */





/* header */

.header{
    font-weight: 600;
    /*height: 80px;*/
}
/*.header:after{*/
    /*content: '';*/
    /*clear: both;*/
/*}*/

.header-logo{
    float: left;
    height: 60px;
    margin: 10px 0;
}

.header-menu{
    list-style: none;
    display: inline;
    float: right; 
}
.show{
    display: inline-block!important;
    position: relative;
}
.header-menu-item{
    display: inline;
    position: relative;
}
.header-menu-item > span{
    padding: 10px 8px;
    position: absolute;
    top: 100%;
    right: -30%;
    min-width: 150px;
    min-height: 50px;
    display: none;
    z-index: 100;
    background-color: #ffffff;
    border-radius: 3px;
    border: 1px #DEDEDE solid;
}
.header-menu-item:hover > span{
    display: inline-block;
}

.header-menu-item > span > a{
    display: block;
    font-size: 14px;
    padding: 6px;
}
.header-menu-item-link{
    line-height: 80px;
    padding: 0px 15px;
    font-weight: 700;
    color: #333;
}
/* .header-menu-item-link:hover{

} */

.header-menu-burger{
    float: right;
    display: none;
    background-color: inherit;
    color: #888888;
    border: none;
    line-height: 80px;
    font-weight: 100!important;
    font-size: 30px;
}
.header-menu-burger:hover,
.header-menu-burger:focus{
    outline: none;
    color: #F9B500!important;
}
@media  (max-width:991.98px){
    .header-logo{
        height: 46px;
        margin: 12px 0;
    }
    .header-menu-item-link{
        line-height: 70px;
        padding: 0px 5px;
    }
}

@media  (max-width: 767.98px){
    .header-logo{
        height: 40px;
        margin: 11px 0;
    }
    .header-menu-burger{
        display: inline-block;
        line-height: 60px;
    }
    .header-menu{
        display: none;
        float: none;
        width: 100%;
        padding: 0px;
    }
    .header-menu-item{
        display: block;
        float: none;
        width: 100%;
        padding: 5px!important;
        border-bottom: 1px solid #cecece;
    }
    .header-menu-item-link{
        padding: 0px 5px;
    }
}

@media  (max-width:575.98px){
    .header-logo{
    height: 40px;
    margin: 10px 0;
    }
    .header-menu{
        display: none;
    }
    .header-menu-item-link{
        padding: 0 5px;
    }
}
/* end of header*/


/* intro section */


.intro-row{
    width: 100%;
}
.intro-h-600px{
    height: 600px;
    /*height < 768 auto*/
}
.intro-h-100{
    height: 100%;
}
.intro-h-2-3{
    height: calc(200%/3);
}
.intro-h-1-3{
    height: calc(100%/3);
}
.intro-h-50{
    height: calc(50% - 5px);
}
.intro-h-50:first-of-type{
    margin-bottom: 10px;
}
.intro-2-3-col{
    float: left;
    margin-right: 10px;
    width: calc(calc(200%/3) - 10px);
}
.intro-1-3-col{
    float: right;
    width: calc(100%/3);
}
/* .intro-2-3-item{

} */
.intro-1-3-item{
    width: 100%;
}

.intro-1-3-col-item{
    float: left;
    width: calc(100%/3);
}
.intro-1-3-col-item:nth-of-type(2){
    width: calc(calc(100%/3) - 20px);
    margin-right: 10px;
    margin-left: 10px;
}


.intro-item-caption{
    height: 100%;
    width: 100%;
    background-color: rgba(0,0,0,0.4);
    position: absolute;
    top: 0;
    left: 0;
    z-index: 10;
}
.caption-title {
    position: absolute;
    bottom: 50px;
    left: 20px;
    right: 20px;
}
.caption-title b{
    font-size: 20px;
    font-weight: 700;
    color: #FFFFFF;
}
.caption-title span{
    font-size: 26px;
    font-weight: 700;
    color: #FFFFFF;
}
.caption-info-bar{
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    padding: 0px;
    list-style: none;
    display: inline-block;
}
.caption-info-bar li{
    display: inline-block;
    margin-right: 20px;
    color: #FFFFFF;
}



.img-bg{
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
}

.bg-1{ background: url(../images/slider-1-1200x900.jpg) no-repeat center; background-size: cover; }
.bg-2{ background: url(../images/slider-2-450x600.jpg) no-repeat center; background-size: cover; }
.bg-3{ background: url(../images/slider-3-450x600.jpg) no-repeat center; background-size: cover; }
.bg-4{ background: url(../images/slider-4-450x600.jpg) no-repeat center; background-size: cover; }
.bg-5{ background: url(../images/slider-5-450x600.jpg) no-repeat center; background-size: cover; }
.bg-6{ background: url(../images/slider-6-450x600.jpg) no-repeat center; background-size: cover; }

.mr-10x{
  margin-right: 10px;
}
.mt-10x{
    margin-top: 10px;
}
.ml-10x{
    margin-left: 10px;
}
.mb-10x{
    margin-bottom: 10px;
}

@media  (max-width: 767.98px){
    .intro-2-3-col{
        float: none;
        width: 100%;
        margin-right: 0px;
    }

    /*.intro-h-2-3{*/
        /*height: 300px;*/
    /*}*/
    .intro-1-3-col{
        width: 100%;
        height: 300px;
    }
    /*.intro-h-50{*/
        /*height: 300px;*/
    /*}*/
    /*.intro-h-50:first-of-type{*/
        /*margin-bottom: 0px;*/
    /*}*/

    .intro-1-3-col-item{
        float: none;
        width: 100%;
        height: 300px;
    }
    .intro-1-3-col-item:nth-of-type(2){
        float: none;
        width: 100%;
        margin: 0px 0px 10px 0px;
        height: 300px;
    }

    .intro-h-600px{
        height: auto;
        /*height < 768 auto*/
    }
    .intro-h-100{
        height: auto;
    }
    .intro-h-2-3{
        height: auto;
    }
    .intro-h-1-3{
        height: auto;
    }
    .intro-h-50{
        height: auto;
    }


    .h-md-300px{
        height: 300px;
        margin-bottom: 10px;
    }
    .mb-10x{
        margin-bottom: 0px;
    }
}

/* end of intro section */


/* main section */
.container{
    width: 100%;
    margin-top: 50px;
}
.main{
    float: right;
    width: calc(200%/3);
}
.main-news{
    margin-bottom: 30px;
}
.main-news-img{
    width: 100%;
}
.main-news-w-50{
    width: 100%;
    margin-right: 30px;
    float: left;
}
.main-news-w-50 > article {
    margin-bottom: 50px;
    background-color:#F9B50050 ;
}
.main-news-w-50 > article > p {
    text-align: right;
    margin-right: 20px;
}
.main-news-w-50 > article > h3 {
    text-align: right;
    margin-right: 15px;
    margin-bottom: 10px;
}
.main-news-w-50 > article > .info-bar {
    margin-left: 20px;
}
article > p {
    text-align: right;
    direction: rtl;
}



.main-news-w-50:last-of-type{
    margin-right: 0px;
}
/* .recent-news{

} */
/* .main-crypto-mining-news{

} */



.sidebar{
    float: left;
    width: calc(calc(100%/3) - 25px);
    margin-right: 25px;
}
.sidebar-item{
    width: 100%;
    margin-bottom: 40px;
}
.sidebar-list{
    list-style: none;
    padding: 0px;
}
.sidebar-list > li{
    padding: 15px 0px;
    border-bottom: 1px #ffffff solid;
    text-align: center;
    background-color: #F9B500;
}

.popular-post{
    width: 100%;
    margin-bottom: 20px;
}
.popular-post-img{
    height: 100px;
    width: 100px;
    float: right;
}
.popular-post-title{
    margin-right: 20px;
    float: right;
    text-align: right;
    width: calc(100% - 120px);
    font-size: 16px;
}
.popular-post-title h3 a b{
    font-size: 18px;
}

.subscribe-form{
    margin-top: 20px;
    border: none;
}
.subscribe-form-text{
    padding: 13px 58px 13px 13px;
    border: 1px #F9B500 solid;
    float: left;
    width: calc(100% - 73px);

}
.subscribe-form-text:focus{
    outline-color : #F9B500;
}

.subscribe-form button{
    float: right;
    width: 45px;
    height: 42px;
    margin-top: -43px;
    margin-right: 1px;
    border: none;
    text-align: center;
    background: #F9B500;
    color: #000;
}
.subscribe-form button:hover{
    background: #000000;
    color: #ffffff;
}



@media  (max-width:991.98px){
    .main{
        width: 100%;
        float: none;
        margin-bottom: 30px;
    }
    .sidebar{
        margin: 0px auto;
        float: none;
        width: 50%;
    }
}
@media  (max-width: 767.98px){
    .sidebar{
        margin: 0px auto;
        float: none;
        width: 100%;
    }
}
@media  (max-width:575.98px){
    .main-news-w-50{
        width: 100%;
        float: none;
        margin-right: 0px;
    }
}
/* end of main section*/

/* footer */

.footer{
    background-color: #191919;
    color: #cccccc;
}
.footer-row{
    width: 100%;
    background-color: rgba(25,25,25,.9);
}
.bg-map{
    /*background: lightblue url("../images/map.png") no-repeat fixed center;*/
    background-image: url("../images/map.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: local;
    /*background: url(../images/map.png) no-repeat center center;*/
}
.footer-col{
    float: right;
}
.footer-logo{
    float: right;
    height: 24px;
    margin: 28px 0;
}
.footer-p{
    color: #cccccc;
    line-height: 28px;
    font-size: 16px;
    font-weight: normal!important;
    text-align: right;
}
.footer-p-2{
    color: #cccccc;
    line-height: 28px;
    font-size: 10px;
    font-weight: normal!important;
    text-align: right;
    width: 50%;
    float: right;
}
.footer-p a{
    color: #cccccc;
    line-height: 28px;
    font-size: 16px;
    font-weight: normal!important;
    transition: all .2s;
}
.footer-p a:hover{
    color: #F9B500;
    transition: all .2s;
}
.footer-p-margin-20{
    padding: 20px 0px;
}


.footer-section-title{
    color: #F9B500;
    padding: 30px 0px;
    font-size: 18px;
}
.footer-section-link-item{
    color: #ffffff;
    margin-bottom: 20px;
}
.footer-line{
    background-color: rgba(170, 170, 170, .2);
    height: 1px;
}
.footer-section-link-item a{
    color: #ffffff;
    font-size: 14px;
    font-weight: 700;
    transition: all .2s;
}
.footer-section-link-item a:hover{
    color: #F9B500;
    transition: all .2s;
}

.footer-section-link-item p{
    color: #cccccc;
    padding: 15px 0px 0px 0px;
    font-size: 14px;
}



.footer-menu{
    list-style: none;
    padding: 0px;
    float: left;
    width: 50%;
}
.footer-menu li{
    padding: 0px 20px 20px 0px;
    display: inline-block;
}
.footer-menu li a{
    color: #cccccc;
    font-size: 12px;
    transition: all .2s;
    font-weight: normal;
}
.footer-menu li a:hover{
    color: #F9B500;
    transition: all .2s;
}


.footer-social-network{
    list-style: none;
    padding: 0px;
    width: 100%;
    text-align: left;
    display: inline-block;
    width: 50%;
    position: relative;
    top: 50px;
}
.footer-social-network li{
    padding: 0px 8px;
    display: inline-block;
}
.footer-social-network li a i{
    color: #cccccc;
    font-size: 30px;
    transition: all .2s;
    font-weight: normal;
}
.footer-social-network li a i:hover{
    color: #F9B500;
    transition: all .2s;
}


@media  (max-width:575.98px){
    .footer-col{
        float: none;
        width: calc(100% - 30px);
        padding: 15px;
        margin-right: 0px;
    }

    .footer-menu{
        float: none;
        width: 100%;
        text-align: center;
    }
    .footer-menu li{
        padding: 10px;
    }
    .footer-social-network{
        float: none;
        width: 100%;
        text-align: center;
        top: -10px;
    }
    .footer-social-network li{
        padding: 10px;
    }
    .footer-p-2{
        padding: 0px 5px;
        width:100%;
        text-align: center;
        position: relative;
        top:0px;
    }
}
/* end of footer */





.comment{
    display: block;
    width: calc(100% - 20px);
    margin: 8px 0px;
    padding: 10px;
    border-radius: 3px;
    border: 1px solid #DEDEDE;
}

.submit{
    background-color: #F9B500;
    border: 1px solid #F9B500;
    border-radius: 3px;
    padding: 8px;
    transition: all 0.3s;
}
.submit:hover{
    color: #F9B500;
    background-color: #000000;
    transition: all 0.3s;
}


.comment-box{
    border-radius: 3px;
    border: 1px solid #DEDEDE;
    padding: 10px;
    margin-top: 4px;
}
.comment-box-header{
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 6px;
}
.comment-box-date{
    float: right;
    color: #ACACAC;
    font-weight: normal;
    font-size: 10px;
}

