<style>
    .tab .nav-tabs {
        /* background-color: #007bff; */
        border: 1px solid #035c73;
        /* Set the background color of the tabs */
        color: white;
        border-radius: 15px;
        /* Add a border-radius for rounded corners */
    }

    .tab .nav-link {
        color: #035c73 !important;
        /* Set the text color of the tabs */
        font-weight: bold;
        /* Make the text bold */
        margin: 1px;

    }

    .tab .nav-link:hover {
        background-color: #035c73;
        border-radius: 15px;
        color: white !important;
        /* Change the background color on hover */
    }

    .tab .nav-link.active {
        background-color: #035c73 !important;
        color: white !important;
        border-radius: 15px;
        /* Set the background color of the active tab */
    }

    .tab p {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        /* Choose an attractive font family */
        font-size: 18px;
        /* Set the font size */
        line-height: 1.5;
        /* Adjust line height for better readability */
        color: #333;
        /* Set the text color */
    }

    .tab .button-86::before {
        transform: translate(0%, 0%);
        width: 100%;
        height: 100%;
        background: #035c73;
        border-radius: 10px;
    }

    .tab .button-87 {
        background-image: linear-gradient(45deg, #002561 0%, #0cc658 51%, #0cc652 100%);

    }

    
</style>
<section class="container tab mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title pt-4">
                    <span class="badge">Explore</span>
                    <h1 class="display-3 fw-bold ">Our Products </h1>
                    <hr class=" mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height:3px; background:#035c73">

                    <p>We develop all kinds of Software and provide unique branding to your business. Some of the
                        key developments
                        are given below, but we are not limited only to them. </p>
                </div>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="justified-tab-0" data-bs-toggle="tab" href="#justified-tabpanel-0" role="tab"
                aria-controls="justified-tabpanel-0" aria-selected="true">Sisnovate Smart School</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="justified-tab-1" data-bs-toggle="tab" href="#justified-tabpanel-1"
                role="tab" aria-controls="justified-tabpanel-1" aria-selected="false"> Sisnovate Smart Inventory
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="justified-tab-2" data-bs-toggle="tab" href="#justified-tabpanel-2" role="tab"
                aria-controls="justified-tabpanel-2" aria-selected="false"> Sisnovate Smart Hospital </a>
        </li>
    </ul>
    <div class="tab-content pt-5" id="tab-content">
        <div class="tab-pane " id="justified-tabpanel-0" role="tabpanel" aria-labelledby="justified-tab-0">
            <div class="row">
                <div class="col-sm-6">
                    <div class="product-card" data-aos="fade-right">
                        <h2 class="display-5 fw-bold attractive-heading">School <br> Management System</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero magni neque maxime at? Nam
                            modi,
                            assumenda laboriosam aliquam cumque vitae.</p>
                        <p>
                            Nisi corrupti maxime optio? Architecto impedit magni, at iusto ipsam
                            corrupti sunt omnis nemo voluptatum voluptate ipsum, fuga accusantium sed earum, eaque
                            quaerat animi. Sit ullam tempora laudantium nemo odio in ea officiis, nobis velit possimus
                            laboriosam deleniti, corporis ipsam cupiditate voluptate. Fugiat distinctio optio eveniet
                            omnis libero nihil, minus quaerat!
                        </p>

                    </div>
                </div>
                <div class="col-sm-6">
                    <img data-aos="fade-left" src="{{ asset('images/services/1.png') }}" class="d-block w-100"
                        alt="...">
                    <div data-aos="fade-left" class="d-flex pt-4">
                        <a class="button-86 mx-3" href="#" role="button">Contact Us</a>
                        <a class="button-87 mx-3" href="#" role="button">Let's Demo</a>
                    </div>
                </div>


            </div>


        </div>
        <div class="tab-pane active" id="justified-tabpanel-1" role="tabpanel" aria-labelledby="justified-tab-1">
            <div class="row">
                <div class="col-sm-6">
                    <div class="product-card" data-aos="fade-right">
                        <h2 class="display-5 fw-bold attractive-heading">Inventory <br> Management System</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero magni neque maxime at? Nam
                            modi,
                            assumenda laboriosam aliquam cumque vitae.</p>
                        <p>
                            Nisi corrupti maxime optio? Architecto impedit magni, at iusto ipsam
                            corrupti sunt omnis nemo voluptatum voluptate ipsum, fuga accusantium sed earum, eaque
                            quaerat animi. Sit ullam tempora laudantium nemo odio in ea officiis, nobis velit possimus
                            laboriosam deleniti, corporis ipsam cupiditate voluptate. Fugiat distinctio optio eveniet
                            omnis libero nihil, minus quaerat!
                        </p>

                    </div>
                </div>
                <div class="col-sm-6">
                    <img data-aos="fade-left" src="{{ asset('images/services/3.png') }}" class="d-block w-100"
                        alt="...">
                    <div data-aos="fade-left" class="d-flex pt-4">
                        <a class="button-86 mx-3" href="#" role="button">Contact Us</a>
                        <a class="button-87 mx-3" href="#" role="button">Let's Demo</a>
                    </div>
                </div>


            </div>
        </div>
        <div class="tab-pane" id="justified-tabpanel-2" role="tabpanel" aria-labelledby="justified-tab-2">
            <div class="row">
                <div class="col-sm-6">
                    <div class="product-card" data-aos="fade-right">
                        <h2 class="display-5 fw-bold attractive-heading">Hospital <br> Management System</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero magni neque maxime at? Nam
                            modi,
                            assumenda laboriosam aliquam cumque vitae.</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. A beatae laudantium ratione enim
                            distinctio doloribus asperiores veniam earum maxime rerum necessitatibus vel aperiam,
                            voluptatem dolore excepturi tempore pariatur. Odio nobis eos officiis laborum corporis,
                            aperiam perspiciatis nemo, deleniti quidem omnis impedit at ab ipsa dignissimos labore a
                            reprehenderit soluta.
                        </p>

                    </div>
                </div>
                <div class="col-sm-6">
                    <img data-aos="fade-left" src="{{ asset('images/services/2.png') }}" class="d-block w-100"
                        alt="...">
                    <div data-aos="fade-left" class="d-flex pt-4">
                        <a class="button-86 mx-3" href="#" role="button">Contact Us</a>
                        <a class="button-87 mx-3" href="#" role="button">Let's Demo</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
