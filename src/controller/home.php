<?php
class Home extends Controller
{
    public static $bestSeller;

    // Overwrite view function
    function view($view)
    {
        echo '<link rel="shortcut icon" href="assets/image/favicon.png" type="image/png">';
        if (isset($_SESSION["user_detail"])) {
            $userDetail = json_decode($_SESSION["user_detail"], true);
            if ($userDetail["accountType"] == "customer") {
                include("view/home/customerHome.php");
            } else if ($userDetail["accountType"] == "shipper") {
                include("controller/myAccountComponent/shipperAccountPage.php");
                $shipper = new ShipperAccount("name3");
                include("view/home/shipperHome.php");
            } else if ($userDetail["accountType"] == "vendor") {
                include("controller/myAccountComponent/vendorAccountPage.php");
                $vendor = new VendorAccount;
                include("view/home/vendorHome.php");
            }
        } else {
            include("view/home/customerHome.php");
        }
    }

    private static $productFile = "../data/product.db";
    

function productCard($key, $value){
    ?>
    <a class="product-card" href="/product?productid=<?php echo $key; ?>">
    <?php
    echo '
    <div class="product-image">
        <img src="assets/image/product/' . $key . '.jpg" class="product-thumb" alt="' . $value["name"] . '">  
    </div>
    <div class="product-info">
        <p class="product-card-name">' . $value["name"] . '</p>
        <p class="product-card-price">' . number_format($value["price"]) . ' VND</p>
        <p class="product-card-rating">'
    ?>
    <?php
    for ($star = 0; $star < $value["rating"]; $star++) {
        echo '<span id="use"><svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns:ns1="http://sozi.baierouge.fr" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg3019" sodipodi:docname="New document 2" viewBox="0 0 194.22 184.73" version="1.1" inkscape:version="0.48.0 r9654">
                    <sodipodi:namedview id="base" bordercolor="#666666" inkscape:pageshadow="2" inkscape:window-y="314" fit-margin-left="0" pagecolor="#ffffff" fit-margin-top="0" inkscape:window-maximized="0" inkscape:zoom="0.35" inkscape:window-x="498" inkscape:window-height="480" showgrid="false" borderopacity="1.0" inkscape:current-layer="layer1" inkscape:cx="112.11046" inkscape:cy="115.22067" fit-margin-right="0" fit-margin-bottom="0" inkscape:window-width="483" inkscape:pageopacity="0.0" inkscape:document-units="px"/>
                    <g id="layer1" inkscape:label="Layer 1" inkscape:groupmode="layer" transform="translate(-262.89 -462.86)">
                      <g id="g3867" transform="translate(10.175 71.896)">
                        <path id="path2985" sodipodi:r2="23.082041" style="fill:#ffcc00" sodipodi:type="star" d="m369.21 535.67-27.378-13.792-26.883 14.735 4.6566-30.3-22.321-21.014 30.256-4.9346 13.088-27.722 14.043 27.251 30.409 3.8806-21.577 21.776z" sodipodi:r1="46.164082" inkscape:transform-center-x="-0.0063051932" inkscape:transform-center-y="-9.7444528" transform="matrix(2.2115 .038861 -.038861 2.2115 -385.88 -623.3)" sodipodi:arg2="1.5534256" sodipodi:arg1="0.92510704" inkscape:randomized="0" sodipodi:cy="498.79858" sodipodi:cx="341.43155" inkscape:rounded="0" inkscape:flatsided="false" sodipodi:sides="5"/>
                        <path id="path3836" sodipodi:nodetypes="cccc" d="m380.03 451.38c-30.39 41.369-30.72 41.819-30.72 41.819l97.411-31.899z" inkscape:transform-center-x="-48.70566" inkscape:transform-center-y="-20.909293" inkscape:connector-curvature="0" style="fill:#ffe680"/>
                        <path id="path3838" d="m349.81 492.31v51.942l-60.63 31.117z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                        <path id="path3840" d="m349.81 492.31 59.613 81.476-11.189-65.984z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                        <path id="path3842" d="m253.1 461.37 96.715 30.942-29.882-40.842z" style="fill:#ffe680" inkscape:connector-curvature="0"/>
                        <path id="path3844" d="m349.81 492.31v-101.22l29.83 60.357z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                        <path id="path3846" d="m289.8 574.53 11.261-66.541 48.757-15.679z" style="fill:#ffd42a" inkscape:connector-curvature="0"/>
                      </g>
                    </g>
                    <metadata>
                      <rdf:RDF>
                        <cc:Work>
                          <dc:format>image/svg+xml</dc:format>
                          <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                          <cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/"/>
                          <dc:publisher>
                            <cc:Agent rdf:about="http://openclipart.org/">
                              <dc:title>Openclipart</dc:title>
                            </cc:Agent>
                          </dc:publisher>
                          <dc:title>Star</dc:title>
                          <dc:date>2010-11-13T20:17:55</dc:date>
                          <dc:description>A star with simple shadowing</dc:description>
                          <dc:source>https://openclipart.org/detail/95431/star-by-artokem</dc:source>
                          <dc:creator>
                            <cc:Agent>
                              <dc:title>artokem</dc:title>
                            </cc:Agent>
                          </dc:creator>
                          <dc:subject>
                            <rdf:Bag>
                              <rdf:li>star</rdf:li>
                            </rdf:Bag>
                          </dc:subject>
                        </cc:Work>
                        <cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/">
                          <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>
                          <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>
                          <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>
                        </cc:License>
                      </rdf:RDF>
                    </metadata>
                  </svg></span>';
    }
    ?>
    <?php
    for ($star = 0; $star < 5 - $value["rating"]; $star++) {
        echo '<span id="non-use"><svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns:ns1="http://sozi.baierouge.fr" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg3019" sodipodi:docname="New document 2" viewBox="0 0 194.22 184.73" version="1.1" inkscape:version="0.48.0 r9654">
    <sodipodi:namedview id="base" bordercolor="#666666" inkscape:pageshadow="2" inkscape:window-y="314" fit-margin-left="0" pagecolor="#ffffff" fit-margin-top="0" inkscape:window-maximized="0" inkscape:zoom="0.35" inkscape:window-x="498" inkscape:window-height="480" showgrid="false" borderopacity="1.0" inkscape:current-layer="layer1" inkscape:cx="112.11046" inkscape:cy="115.22067" fit-margin-right="0" fit-margin-bottom="0" inkscape:window-width="483" inkscape:pageopacity="0.0" inkscape:document-units="px"/>
    <g id="layer1" inkscape:label="Layer 1" inkscape:groupmode="layer" transform="translate(-262.89 -462.86)">
      <g id="g3867" transform="translate(10.175 71.896)">
        <path id="path2985" sodipodi:r2="23.082041" style="fill:#ffcc00" sodipodi:type="star" d="m369.21 535.67-27.378-13.792-26.883 14.735 4.6566-30.3-22.321-21.014 30.256-4.9346 13.088-27.722 14.043 27.251 30.409 3.8806-21.577 21.776z" sodipodi:r1="46.164082" inkscape:transform-center-x="-0.0063051932" inkscape:transform-center-y="-9.7444528" transform="matrix(2.2115 .038861 -.038861 2.2115 -385.88 -623.3)" sodipodi:arg2="1.5534256" sodipodi:arg1="0.92510704" inkscape:randomized="0" sodipodi:cy="498.79858" sodipodi:cx="341.43155" inkscape:rounded="0" inkscape:flatsided="false" sodipodi:sides="5"/>
        <path id="path3836" sodipodi:nodetypes="cccc" d="m380.03 451.38c-30.39 41.369-30.72 41.819-30.72 41.819l97.411-31.899z" inkscape:transform-center-x="-48.70566" inkscape:transform-center-y="-20.909293" inkscape:connector-curvature="0" style="fill:#ffe680"/>
        <path id="path3838" d="m349.81 492.31v51.942l-60.63 31.117z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
        <path id="path3840" d="m349.81 492.31 59.613 81.476-11.189-65.984z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
        <path id="path3842" d="m253.1 461.37 96.715 30.942-29.882-40.842z" style="fill:#ffe680" inkscape:connector-curvature="0"/>
        <path id="path3844" d="m349.81 492.31v-101.22l29.83 60.357z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
        <path id="path3846" d="m289.8 574.53 11.261-66.541 48.757-15.679z" style="fill:#ffd42a" inkscape:connector-curvature="0"/>
      </g>
    </g>
    <metadata>
      <rdf:RDF>
        <cc:Work>
          <dc:format>image/svg+xml</dc:format>
          <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
          <cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/"/>
          <dc:publisher>
            <cc:Agent rdf:about="http://openclipart.org/">
              <dc:title>Openclipart</dc:title>
            </cc:Agent>
          </dc:publisher>
          <dc:title>Star</dc:title>
          <dc:date>2010-11-13T20:17:55</dc:date>
          <dc:description>A star with simple shadowing</dc:description>
          <dc:source>https://openclipart.org/detail/95431/star-by-artokem</dc:source>
          <dc:creator>
            <cc:Agent>
              <dc:title>artokem</dc:title>
            </cc:Agent>
          </dc:creator>
          <dc:subject>
            <rdf:Bag>
              <rdf:li>star</rdf:li>
            </rdf:Bag>
          </dc:subject>
        </cc:Work>
        <cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/">
          <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>
          <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>
          <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>
        </cc:License>
      </rdf:RDF>
    </metadata>
  </svg></span>';
    }
    ?>
    <?php
    echo '</p>
            </div>'
    ?>

</a>
<?php
}


    function getBestSeller()
    {
        $data = dataHandle::readToJson($this::$productFile);
        ?>
         <section class="product">
            <div class="product-category">
                <h2>Best seller</h2>
                <a href="#"><em>View all product --></em></a>

            </div>

            <button class="pre-btn"><img src="../assets/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="../assets/arrow.png" alt=""></button>

            <div class="product-container">
                <?php
                foreach ($data as $key => $value) {
                    if(!($value["sold"] >= 20000)){
                        continue;
                    }
                ?>
                   <?php
                   $this -> productCard($key, $value);
                   ?>
                <?php
                }
                ?>
            </div>
        </section>
        <?php
    }
    function getCategory($category)
    {
        $data = dataHandle::readToJson($this::$productFile);
        ?>
         <section class="product">
            <div class="product-category">
                <h2><?php
                echo $category
                ?></h2>
                <a href="#"><em>View all product --></em></a>

            </div>

            <button class="pre-btn"><img src="../assets/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="../assets/arrow.png" alt=""></button>

            <div class="product-container">
                <?php
                foreach ($data as $key => $value) {
                    if($value["category"] != $category){
                        continue;
                    }
                ?>
                    <?php
                    $this -> productCard($key, $value);
                    ?>
                <?php
                }
                ?>
            </div>
        </section>
        <?php
    }
    function getAllProduct()
    {
        $data = dataHandle::readToJson($this::$productFile);
?>

        <section class="product">
            <div class="product-category">
                <h2> All products</h2>
                <a href="#"><em>View all product --></em></a>

            </div>

            <button class="pre-btn"><img src="../assets/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="../assets/arrow.png" alt=""></button>

            <div class="product-container">
                <?php
                foreach ($data as $key => $value) {
                ?>
                    <a class="product-card" href="/product?productid=<?php echo $key; ?>">
                        <?php
                        echo '
                        <div class="product-image">
                            <img src="assets/image/product/' . $key . '.jpg" class="product-thumb" alt="' . $value["name"] . '">  
                        </div>
                        <div class="product-info">
                            <p class="product-card-name">' . $value["name"] . '</p>
                            <p class="product-card-price">' . number_format($value["price"]) . ' VND</p>
                            <p class="product-card-rating">'
                        ?>
                        <?php
                        for ($star = 0; $star < $value["rating"]; $star++) {
                            echo '<span id="use"><svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns:ns1="http://sozi.baierouge.fr" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg3019" sodipodi:docname="New document 2" viewBox="0 0 194.22 184.73" version="1.1" inkscape:version="0.48.0 r9654">
                                        <sodipodi:namedview id="base" bordercolor="#666666" inkscape:pageshadow="2" inkscape:window-y="314" fit-margin-left="0" pagecolor="#ffffff" fit-margin-top="0" inkscape:window-maximized="0" inkscape:zoom="0.35" inkscape:window-x="498" inkscape:window-height="480" showgrid="false" borderopacity="1.0" inkscape:current-layer="layer1" inkscape:cx="112.11046" inkscape:cy="115.22067" fit-margin-right="0" fit-margin-bottom="0" inkscape:window-width="483" inkscape:pageopacity="0.0" inkscape:document-units="px"/>
                                        <g id="layer1" inkscape:label="Layer 1" inkscape:groupmode="layer" transform="translate(-262.89 -462.86)">
                                          <g id="g3867" transform="translate(10.175 71.896)">
                                            <path id="path2985" sodipodi:r2="23.082041" style="fill:#ffcc00" sodipodi:type="star" d="m369.21 535.67-27.378-13.792-26.883 14.735 4.6566-30.3-22.321-21.014 30.256-4.9346 13.088-27.722 14.043 27.251 30.409 3.8806-21.577 21.776z" sodipodi:r1="46.164082" inkscape:transform-center-x="-0.0063051932" inkscape:transform-center-y="-9.7444528" transform="matrix(2.2115 .038861 -.038861 2.2115 -385.88 -623.3)" sodipodi:arg2="1.5534256" sodipodi:arg1="0.92510704" inkscape:randomized="0" sodipodi:cy="498.79858" sodipodi:cx="341.43155" inkscape:rounded="0" inkscape:flatsided="false" sodipodi:sides="5"/>
                                            <path id="path3836" sodipodi:nodetypes="cccc" d="m380.03 451.38c-30.39 41.369-30.72 41.819-30.72 41.819l97.411-31.899z" inkscape:transform-center-x="-48.70566" inkscape:transform-center-y="-20.909293" inkscape:connector-curvature="0" style="fill:#ffe680"/>
                                            <path id="path3838" d="m349.81 492.31v51.942l-60.63 31.117z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                                            <path id="path3840" d="m349.81 492.31 59.613 81.476-11.189-65.984z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                                            <path id="path3842" d="m253.1 461.37 96.715 30.942-29.882-40.842z" style="fill:#ffe680" inkscape:connector-curvature="0"/>
                                            <path id="path3844" d="m349.81 492.31v-101.22l29.83 60.357z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                                            <path id="path3846" d="m289.8 574.53 11.261-66.541 48.757-15.679z" style="fill:#ffd42a" inkscape:connector-curvature="0"/>
                                          </g>
                                        </g>
                                        <metadata>
                                          <rdf:RDF>
                                            <cc:Work>
                                              <dc:format>image/svg+xml</dc:format>
                                              <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                                              <cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/"/>
                                              <dc:publisher>
                                                <cc:Agent rdf:about="http://openclipart.org/">
                                                  <dc:title>Openclipart</dc:title>
                                                </cc:Agent>
                                              </dc:publisher>
                                              <dc:title>Star</dc:title>
                                              <dc:date>2010-11-13T20:17:55</dc:date>
                                              <dc:description>A star with simple shadowing</dc:description>
                                              <dc:source>https://openclipart.org/detail/95431/star-by-artokem</dc:source>
                                              <dc:creator>
                                                <cc:Agent>
                                                  <dc:title>artokem</dc:title>
                                                </cc:Agent>
                                              </dc:creator>
                                              <dc:subject>
                                                <rdf:Bag>
                                                  <rdf:li>star</rdf:li>
                                                </rdf:Bag>
                                              </dc:subject>
                                            </cc:Work>
                                            <cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/">
                                              <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>
                                              <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>
                                              <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>
                                            </cc:License>
                                          </rdf:RDF>
                                        </metadata>
                                      </svg></span>';
                        }
                        ?>
                        <?php
                        for ($star = 0; $star < 5 - $value["rating"]; $star++) {
                            echo '<span id="non-use"><svg xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg" xmlns:ns1="http://sozi.baierouge.fr" xmlns:xlink="http://www.w3.org/1999/xlink" id="svg3019" sodipodi:docname="New document 2" viewBox="0 0 194.22 184.73" version="1.1" inkscape:version="0.48.0 r9654">
                        <sodipodi:namedview id="base" bordercolor="#666666" inkscape:pageshadow="2" inkscape:window-y="314" fit-margin-left="0" pagecolor="#ffffff" fit-margin-top="0" inkscape:window-maximized="0" inkscape:zoom="0.35" inkscape:window-x="498" inkscape:window-height="480" showgrid="false" borderopacity="1.0" inkscape:current-layer="layer1" inkscape:cx="112.11046" inkscape:cy="115.22067" fit-margin-right="0" fit-margin-bottom="0" inkscape:window-width="483" inkscape:pageopacity="0.0" inkscape:document-units="px"/>
                        <g id="layer1" inkscape:label="Layer 1" inkscape:groupmode="layer" transform="translate(-262.89 -462.86)">
                          <g id="g3867" transform="translate(10.175 71.896)">
                            <path id="path2985" sodipodi:r2="23.082041" style="fill:#ffcc00" sodipodi:type="star" d="m369.21 535.67-27.378-13.792-26.883 14.735 4.6566-30.3-22.321-21.014 30.256-4.9346 13.088-27.722 14.043 27.251 30.409 3.8806-21.577 21.776z" sodipodi:r1="46.164082" inkscape:transform-center-x="-0.0063051932" inkscape:transform-center-y="-9.7444528" transform="matrix(2.2115 .038861 -.038861 2.2115 -385.88 -623.3)" sodipodi:arg2="1.5534256" sodipodi:arg1="0.92510704" inkscape:randomized="0" sodipodi:cy="498.79858" sodipodi:cx="341.43155" inkscape:rounded="0" inkscape:flatsided="false" sodipodi:sides="5"/>
                            <path id="path3836" sodipodi:nodetypes="cccc" d="m380.03 451.38c-30.39 41.369-30.72 41.819-30.72 41.819l97.411-31.899z" inkscape:transform-center-x="-48.70566" inkscape:transform-center-y="-20.909293" inkscape:connector-curvature="0" style="fill:#ffe680"/>
                            <path id="path3838" d="m349.81 492.31v51.942l-60.63 31.117z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                            <path id="path3840" d="m349.81 492.31 59.613 81.476-11.189-65.984z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                            <path id="path3842" d="m253.1 461.37 96.715 30.942-29.882-40.842z" style="fill:#ffe680" inkscape:connector-curvature="0"/>
                            <path id="path3844" d="m349.81 492.31v-101.22l29.83 60.357z" style="fill:#ffdd55" inkscape:connector-curvature="0"/>
                            <path id="path3846" d="m289.8 574.53 11.261-66.541 48.757-15.679z" style="fill:#ffd42a" inkscape:connector-curvature="0"/>
                          </g>
                        </g>
                        <metadata>
                          <rdf:RDF>
                            <cc:Work>
                              <dc:format>image/svg+xml</dc:format>
                              <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
                              <cc:license rdf:resource="http://creativecommons.org/licenses/publicdomain/"/>
                              <dc:publisher>
                                <cc:Agent rdf:about="http://openclipart.org/">
                                  <dc:title>Openclipart</dc:title>
                                </cc:Agent>
                              </dc:publisher>
                              <dc:title>Star</dc:title>
                              <dc:date>2010-11-13T20:17:55</dc:date>
                              <dc:description>A star with simple shadowing</dc:description>
                              <dc:source>https://openclipart.org/detail/95431/star-by-artokem</dc:source>
                              <dc:creator>
                                <cc:Agent>
                                  <dc:title>artokem</dc:title>
                                </cc:Agent>
                              </dc:creator>
                              <dc:subject>
                                <rdf:Bag>
                                  <rdf:li>star</rdf:li>
                                </rdf:Bag>
                              </dc:subject>
                            </cc:Work>
                            <cc:License rdf:about="http://creativecommons.org/licenses/publicdomain/">
                              <cc:permits rdf:resource="http://creativecommons.org/ns#Reproduction"/>
                              <cc:permits rdf:resource="http://creativecommons.org/ns#Distribution"/>
                              <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/>
                            </cc:License>
                          </rdf:RDF>
                        </metadata>
                      </svg></span>';
                        }
                        ?>
                        <?php
                        echo '</p>
                                </div>'
                        ?>

                    </a>
                <?php
                }
                ?>
            </div>
        </section>
<?php
    }
}
?>
