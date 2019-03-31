<head>
    <meta charset="utf-8" />
    <title>Order</title>
    <link rel="stylesheet" href="css/style.css" />
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="wrapper">
            <h1><a href="index.php" id="brand" title="Rush00">Rush00</a></h1>
            <nav>
                <ul>
                    <li>
                        <a href="search.php">Tops</a>
                        <ul class="sub-menu">
                            <li><a href="search.php">Tshirts</a></li>
                            <li><a href="search.php">Jumpers</a></li>
                            <li><a href="search.php">Cardigans</a></li>
                            <li><a href="search.php">Knitwear</a></li>
                        </ul>
                    </li>
                    <li><a href="search.php">Trousers</a></li>
                    <li>
                        <a href="search.php">Dresses</a>
                        <ul class="sub-menu">
                            <li><a href="search.php">Bridal dress</a></li>
                            <li><a href="search.php">Cocktail dress</a></li>
                            <li><a href="search.php">Maxi dress</a></li>
                            <li><a href="search.php">Shift dress</a></li>
                            <li><a href="search.php" class="current">Summer dress</a></li>
                            <li><a href="search.php">Warp dress</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <aside id="top">
        <div class="wrapper">
            <ul id="social">
                <li>
                    <a href="#" class="facebook" title="like us us on Facebook">like us us on Facebook</a>
                </li>
                <li>
                    <a href="#" class="twitter" title="follow us on twitter">follow us on twitter</a>
                </li>
            </ul>
            <form>
                <input type="text" placeholder="Search Rush00..." /><button type="submit">
                    Search
                </button>
            </form>
            <div id="action-bar">
                <a href="sign_in.php">Login/Register</a> //
                <a href="viewbasket.php">Your bag (3) &nbsp; &euro;148</a>
            </div>
        </div>
    </aside>
    <article id="address" style="margin-top: 0px;padding-top: 5px;padding-bottom: 20px;">
        <element id="form">
            <form id="orderform">
                <div class="area">
                    <div class="row">
                        <div class="col2">
                            <input type="text" name="firstname">
                            <label for="fistname">First Name</label>
                        </div>
                        <div class="col2">
                            <input type="text" name="lastname">
                            <label for="lastname">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <input type="text" name="phone" id="phone">
                        <label for="phone">Phone</label>
                    </div>
                    <div class="row">
                        <input type="text" name="address" id="address">
                        <label for="address">Address</label>
                    </div>

                </div>
                <div class="area">
                    <div class="ckeckarea">
                        <input type="checkbox" name="checkbox1" id="checkbox1" onclick="autofilling(this.form)">
                        <label for="checkbox1">Check this box if order info and sending info are the same.</label>
                    </div>
                    <div class="row">
                        <div class="col2">
                            <input type="text" name="newfirstname">
                            <label for="newfistname">First Name</label>
                        </div>
                        <div class="col2">
                            <input type="text" name="newlastname">
                            <label for="newlastname">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <input type="text" name="newaddress" id="newaddress">
                        <label for="newaddress">Sending Address</label>
                    </div>
                </div>
                <div class="rowbtn">
                    <input type="submit" value="Submit" class="btn">
                    <input type="submit" value="Cancel" class="btn">
                </div>
            </form>
        </element>
    </article>
    <footer>
        <div class="wrapper">
            <span class="logo">Rush00</span>
            <a href="#" target="_blank" title="title" class="right">Web Design 42</a>
            &copy; Rush00 <a href="#">Sitemap</a>
            <a href="#">Terms &amp; Conditions</a>
            <a href="#">Shipping &amp; Returns</a> <a href="#">Size Guide</a><a href="#">Help</a> <br />
        </div>
    </footer>
</body>

</php>
