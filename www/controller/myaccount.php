<?php
class MyAccount extends Controller {
    
    private static $accountDetail;
    private static $accountFile = '../data/account.db';
    private static $orderFile = '../data/order.db';
    private static $productFile = '../data/product.db';

    function __construct() {
        if (!isset($_COOKIE["user"])) {
            header("Location: /");
        } else {
            $this->getAccountDetail();
        }
        
    }

    function renderPage(){
        $accountData = DataHandle::readToJson($this::$accountFile);
        foreach ($accountData as $key => $value) {
            if ($key == $_COOKIE["user"]) {
                if ($value["accountType"] == "customer")  {
                    ?>
                        <div class="info-section">
                            <div class="profile-img">
                                <input type="file" id="imgupload"
                                onchange="loadFile(event)" style="display:none"/> 
                                <img class="avatar-image" id="avatar" 
                                src="assets/image/signupimage/Ellipse 2.png" alt="avatar" onclick="clickUpload()">
                                <div id="image-hover">
                                    <img src="assets/image/edit_image.png" alt="edit-image icon">
                                </div>
                            </div>
                            <div class="info-wrapper">
                                <form action="post" action="api/editCustomerProfile">
                                    <div class="info-row">
                                        <div class="info-label">
                                            <label for="Username: "><b>Username:</b></label>
                                        </div>
                                        <p class="username-field"><?php echo $key?></p>
                                    </div>

                                    <div class="info-row">
                                        <div class="info-label">
                                            <label for="name"><b>Name:</b></label>
                                        </div>
                                        <div class="info-field">
                                            <input type="text" name="name" id="edit-name"
                                             placeholder="<?php echo $value["name"]?>" class="input-field">
                                        </div>
                                    </div>

                                    <div class="info-row">
                                        <div class="info-label">
                                            <label for="email"><b>Email:</b></label>
                                        </div>
                                        <div class="info-field">
                                            <input type="email" name="email" id="edit-email"
                                            placeholder="<?php echo $value["email"]?>" class="input-field">
                                        </div>
                                    </div>

                                    <div class="info-row">
                                        <div class="info-label">
                                            <label for="address"><b>Address:</b></label>
                                        </div>
                                        <div class="info-field">
                                            <input type="text" name="address" id="edit-address"
                                            placeholder="<?php echo $value["address"]?>" class="input-field">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="button-wrapper">
                                    <input
                                    type="submit" 
                                    class="edit-profile-button"
                                    onclick="changeToProfile()" 
                                    value="Save changes">
                            </div>
                        </div>
                    <?php
                } elseif ($value["accountType"] == "shipper") {
                    ?>
                        <img src="assets/image/avatar/<?php echo $key?>.jpg" 
                        class="profile-img"
                        alt="<?php echo $value["name"]?>" srcset="">
                        <div class="info-section">
                            <div id= "info-render" class="info-child">
                                <button 
                                onclick="changeToEdit()"
                                class="edit-profile-btn">Edit Profile</button>
                                <p>Username: <?php echo $key?></p>
                                <p>Name: <?php echo $value["name"]?></p>
                                <p>Email: <?php echo $value["email"]?></p>
                                <p>Home Hub: <?php echo $value["hub"]?></p>
                            </div>

                            <div id="info-edit-modal">
                                <div id="info-edit">
                                    <button
                                    id="modal-off-button"
                                    onclick="modalOff()">X</button>

                                    <form action="api/editCustomerProfile" 
                                    class="modal-form"
                                    method="post">
                                        <label for="username">Username: </label>
                                        <input type="text" name="username" 
                                        value="<?php echo $key?>"
                                        id="edit-username" disabled>
                                        
                                        <label for="name">Name: </label>
                                        <input type="text" name="name" 
                                        value="<?php echo $value["name"]?>"
                                        id="edit-name" required>

                                        <label for="email">Email: </label>
                                        <input type="email" 
                                        value="<?php echo $value["email"]?>"
                                        name="email" id="edit-email" required>

                                        <label for="hub">Home Hub: </label>
                                        <input type="text" 
                                        value="<?php echo $value["hub"]?>"
                                        name="hub" id="edit-hub" required>
                                        
                                        <div class="modal-button-wrapper">
                                            <input 
                                            onclick="changeToProfile()"
                                            class="edit-profile-btn"
                                            type="submit" value="Confirm">
                                        </div>
                                    </form>                             
                                </div>
                            </div>
                        </div>
                    <?php
                } elseif ($value["accountType"] == "vendor") {
                    ?>
                        <img src="assets/image/avatar/<?php echo $key?>.jpg" 
                        class="profile-img"
                        alt="<?php echo $value["name"]?>" srcset="">
                        <div class="info-section">
                            <div id= "info-render" class="info-child">
                                <button 
                                onclick="changeToEdit()"
                                class="edit-profile-btn">Edit Profile</button>
                                <p>Username: <?php echo $key?></p>
                                <p>Name: <?php echo $value["name"]?></p>
                                <p>Email: <?php echo $value["email"]?></p>
                                <p>Address: <?php echo $value["address"]?></p>
                            </div>

                            <div id="info-edit-modal">
                                <div id="info-edit">
                                    <button
                                    id="modal-off-button"
                                    onclick="modalOff()">X</button>

                                    <form action="api/editCustomerProfile" 
                                    class="modal-form"
                                    method="post">
                                        <label for="username">Username: </label>
                                        <input type="text" name="username" 
                                        value="<?php echo $key?>"
                                        id="edit-username" disabled>
                                        
                                        <label for="name">Name: </label>
                                        <input type="text" name="name" 
                                        value="<?php echo $value["name"]?>"
                                        id="edit-name" required>

                                        <label for="email">Email: </label>
                                        <input type="email" 
                                        value="<?php echo $value["email"]?>"
                                        name="email" id="edit-email" required>

                                        <label for="address">Address: </label>
                                        <input type="text" 
                                        value="<?php echo $value["address"]?>"
                                        name="address" id="edit-address" required>
                                        
                                        <div class="modal-button-wrapper">
                                            <input 
                                            onclick="changeToProfile()"
                                            class="edit-profile-btn"
                                            type="submit" value="Confirm">
                                        </div>
                                    </form>                             
                                </div>
                            </div>
                        </div>
                    <?php
                }
                
                // $_SESSION["user_detail"] = json_encode($value);
                $this::$accountDetail = $value;
            }
        }
    }

    public function getUserOrder(){

    }

    private function renderCustomerPage() {
        include("controller/myAccountComponent/customerAccountPage.php");
        // Testing purpose
        foreach ($this::$accountDetail as $key => $value) {
            echo '<p>'.$key." ".$value.'</p>';
        }
    }

    private function getAccountDetail() {
        
    }
}
?>