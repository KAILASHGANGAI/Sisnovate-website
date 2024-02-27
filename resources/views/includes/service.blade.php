<section class="container pt-4 mt-4">
    <div class="row">
        <div class="col-sm-5 col-md-5 col-lg-5">
            <div class="text-box">
                <div class="layout"></div>

                <div class="layout"></div>
                <div class="blob-content">
                    <span class="badge">Explore</span> <br>
                    <span class="text-1">Our Services</span>
                    <h1 class="text-2"> Need Amazing Service?</h1>

                    <p class="text-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas perspiciatis sint
                        cupiditate culpa
                        provident id commodi, distinctio esse reiciendis minus odio quisquam architecto officia impedit
                        itaque amet veniam? Expedita, dicta?</p>
                    <button class="button-87 mt-3" role="button">Let's Start</button>

                    <img src="{{ asset('images/service/1.svg') }}" class="blob" alt="" srcset="">
                </div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-6 p-0">
                    <div class="layout"></div>
                    <div class="service-box">
                        <div class="box-layout">
                            <div class="layout-layer">
                                <span class="icon">
                                    <img src="{{ asset('images/service/004-ux.png') }}" class="img-fluid"
                                        srcset="">

                                </span>
                                <h4>Website Development</h4>
                                <p>A software engineer based in Boston, MA who enjoys building things that live on the
                                    internet
                                    exceptional</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="box-layout">
                            <div class="layout-layer">
                                <span class="icon d-flex" style="padding-left: 0.4rem;">
                                    <img src="{{ asset('images/service/006-social.png') }}" class="img-fluid"
                                        srcset=""> +
                                    <img src="{{ asset('images/service/apple.png') }}" class="img-fluid" srcset="">
                                </span>
                                <h4>App Development</h4>
                                <p>A software engineer based in Boston, MA who enjoys building things that live on the
                                    internet
                                    exceptional</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-0">

                    <div class="service-box">
                        <div class="box-layout">
                            <div class="layout-layer">
                                <span class="icon">
                                    <img src="{{ asset('images/service/009-online-shopping.png') }}" class="img-fluid"
                                        srcset="">
                                </span>
                                <h4>E- commerce Solutions</h4>
                                <p>A software engineer based in Boston, MA who enjoys building things that live on the
                                    internet
                                    exceptional</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="box-layout">
                            <div class="layout-layer">
                                <span class="icon">
                                    <img src="{{ asset('images/service/003-social-media-1.png') }}" class="img-fluid"
                                        srcset="">
                                </span>
                                <h4>Digital Marketing Services</h4>
                                <p>A software engineer based in Boston, MA who enjoys building things that live on the
                                    internet
                                    exceptional</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<style>
    .blob-content {
        position: relative;
        z-index: 1;
    }


    .blob-content .blob {
        content: "";
        position: absolute;
        left: -23rem;
        top: -5rem;
        z-index: -1;

    }



    .text-box {
        padding: 58px 9px 20px 8px;

    }

    .text-1 {
        text-transform: uppercase;
        letter-spacing: 7px;
        line-height: 1;
        font-weight: 400;
        margin: 0;
    }

    .text-2 {

        font-size: 3.75rem;
        font-weight: 700;
        margin: 12px 0 0;

    }

    .text-3 {
        margin: 28px 0 0;
    }

    .layout {
        padding: 30px;
        position: relative;
        flex: 1;
        max-width: 100%;
        transition-duration: inherit;
    }

    .service-box {
        border: 15px solid transparent !important;

    }

    .box-layout .icon {
        height: 80px;
        width: 80px;
        background-image: none;
        margin: 0 auto 0 0;
        background: #035c73;
    }

    .layout-layer {
        min-height: 345px;
        min-width: 100%;
        background: white;
        background-image: url('../images/lotify-images/bubble.svg');

        box-shadow: 5px 5px 20px 0 rgba(0, 0, 0, 0.2);
        padding: 30px;
        justify-content: center;
        margin: 2px;



    }



    .box-layout h4 {
        margin: 20px auto 0 0;
        font-family: Oswald, sans-serif !important;
        word-wrap: break-word;
        position: relative;
        display: table;
        align-self: flex-start;
        font-weight: 400;
        font-size: 1.5rem;
        line-height: 1.2;
        width: fit-content;
    }

    .box-layout p {
        line-height: 1.8;
        font-style: italic;
        margin: 20px auto 0 0;
        color: #808080 !important;
    }

    ::-webkit-scrollbar {
        width: 6px;
        /* Adjust the width as needed */
    }

    ::-webkit-scrollbar-thumb {
        background-color: #fff;
        /* Change this to your desired thumb color */
    }

    ::-webkit-scrollbar-track {
        background-color: #035c73;
        /* Change this to your desired track color */
    }
</style>
