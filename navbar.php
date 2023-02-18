<section data-bs-version="5.1" class="menu menu1 cid-ttyaejZCF3" once="menu" id="menu1-0">
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg" style="background-color: white;">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="assets/images/logo-200x60.png" alt="" style="height: 3rem;">
                    </a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                    <li class="nav-item dropdown">
                        <a class="nav-link link dropdown-toggle text-black display-4" href="" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            COMBOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-647">
                            <a class="dropdown-item text-black display-4" href="PLP.php">Cakes &amp; Choclate</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link dropdown-toggle text-black display-4" href="" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside">ANNIVERSARY</a>
                        <div class="dropdown-menu" data-bs-popper="none" aria-labelledby="dropdown-461">
                            <a class="dropdown-item text-black display-4" href="PLP.php">Heart Shaped</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link dropdown-toggle text-black display-4" href="" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">BIRTHDAY</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-111">
                            <a class="dropdown-item text-black display-4" href="PLP.php">Cakes</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link dropdown-toggle text-black display-4" href="" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">OCCASIONS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-750">
                            <a class="dropdown-item text-black display-4" href="PLP.php">Mother's Day</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">
                            <span class="mbrib-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>
                            <span class="mbr-iconfont translate-middle badge rounded-pill bg-primary" id="cartaddedproducts">
                            0
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" data-bs-toggle="modal" data-bs-target="#exampleModalsearch" href="">
                            <span class="mbrib-search mbr-iconfont mbr-iconfont-btn"></span>Search
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="Log In.php">
                            <span class="mbrib-user mbr-iconfont mbr-iconfont-btn"></span>Account
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<!--CART Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content modal-body">
            <iframe sandbox="allow-same-origin" src="Cart.php" title="Cart" height="500" width="300"></iframe>
        <div class="modal-footer">
            <button type="button" class="mbr-text mbr-fonts-style display-7 btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>

<!--Search Modal -->
<div class="modal fade" id="exampleModalsearch" tabindex="-1" aria-labelledby="exampleModalLabelsearch" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content modal-body">
            <iframe sandbox="allow-same-origin" src="Search.php" title="Cart" height="570" width="300"></iframe>
        <div class="modal-footer">
            <button type="button" class="mbr-text mbr-fonts-style display-7 btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
    integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous">
</script>

<script>
    setInterval(function() {
        let TotalPrice = 0;
        let counter = 0;
        let TotalOrders = '';
        if(typeof(localStorage.products) != "undefined") {
            let productsres= JSON.parse(localStorage.products);
            for (var key in productsres) {
                counter++;
                TotalPrice += Number(productsres[key]['productPrice'])*Number(productsres[key]['productQuantity']);
                TotalOrders += '<strong>IMAGE&nbsp; &nbsp;'+productsres[key]['productName'] +'&nbsp; &nbsp;+ '+productsres[key]['productQuantity']+' -&nbsp; &nbsp;'+productsres[key]['productPrice'] +' Rs&nbsp; &nbsp;'+Number(productsres[key]['productPrice'])*Number(productsres[key]['productQuantity'])+'&nbsp;&nbsp;</strong><strong id="'+key+'">❌️</strong><br><br><br>';

            }
            $('#addedproductdisplay').html(TotalOrders);
            $('#addedproductdisplaytotal').html(TotalPrice+' RS');
            $('#cartaddedproducts').text(counter);           
        }
        else {
            $('#addedproductdisplay').html("No Products Added");
        }
        
    },100);
</script>