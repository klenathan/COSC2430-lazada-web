<?php
class MyAccount extends Controller {
    
    private static $accountDetail;
    private static $accountFile = '../data/account.db';
    private static $orderFile = '../data/order.db';
    private static $productFile = '../data/product.db';

    function __construct() {
        
        $this->getAccountDetail();
    }

    function renderPage(){
        $accountData = DataHandle::readToJson($this::$accountFile);
        foreach ($accountData as $key => $value) {
            if ($key == $_COOKIE["user"]) {
                if ($value["accountType"] == "customer")  {
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
                } elseif ($value["accountType"] == "shipper") {

                } elseif ($value["accountType"] == "customer") {

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