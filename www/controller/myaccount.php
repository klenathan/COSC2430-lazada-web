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
    <div class="info-wrapper">
        <form action="api/editCustomerProfile" enctype="multipart/form-data" action="api/editCustomerProfile"
            method="post">
            <div class="profile-img">
                <input type="file" id="avtImg" name="avatar" onchange="loadFile(event)" />
                <img class="avatar-image" id="avatar" src="assets/image/avatar/<?php echo $key?>.jpg"
                    alt="blank avatar">
                <div id="image-hover" onclick="clickUpload()">
                    <img src="assets/image/avatar/icons8-compact-camera-ios/icons8-compact-camera-50.png"
                        alt="edit-image icon">
                </div>
            </div>
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
                    <input type="text" name="name" id="edit-name" value="<?php echo $value["name"]?>"
                        placeholder="<?php echo $value["name"]?>" class="input-field">
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    <label for="email"><b>Email:</b></label>
                </div>
                <div class="info-field">
                    <input type="email" name="email" id="edit-email" value="<?php echo $value["email"]?>"
                        placeholder="<?php echo $value["email"]?>" class="input-field">
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    <label for="address"><b>Address:</b></label>
                </div>
                <div class="info-field">
                    <input type="text" name="address" id="edit-address" value="<?php echo $value["address"]?>"
                        placeholder="<?php echo $value["address"]?>" class="input-field">
                </div>
            </div>
            <div class="button-wrapper">
                <input type="submit" class="edit-profile-button" value="Save changes">
            </div>
            <div class="signout">
                <a class="signout-item" href="login/signOut">Sign out</a>
            </div>
        </form>
    </div>

</div>
<?php
                } elseif ($value["accountType"] == "shipper") {
                    ?>
<div class="info-section">
    <div class="info-wrapper">
        <form action="api/editCustomerProfile" enctype="multipart/form-data" action="api/editCustomerProfile"
            method="post">
            <div class="profile-img">
                <input type="file" id="avtImg" name="avatar" onchange="loadFile(event)" />
                <img class="avatar-image" id="avatar" src="assets/image/avatar/<?php echo $key?>.jpg"
                    alt="blank avatar">
                <div id="image-hover" onclick="clickUpload()">
                    <img src="assets/image/avatar/icons8-compact-camera-ios/icons8-compact-camera-50.png"
                        alt="edit-image icon">
                </div>
            </div>

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
                    <input type="text" name="name" id="edit-name" value="<?php echo $value["name"]?>"
                        placeholder="<?php echo $value["name"]?>" class="input-field">
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    <label for="email"><b>Email:</b></label>
                </div>
                <div class="info-field">
                    <input type="email" name="email" id="edit-email" value="<?php echo $value["email"]?>"
                        placeholder="<?php echo $value["email"]?>" class="input-field">
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    <label for="address"><b>Home hub:</b></label>
                </div>
                <div class="info-field">
                    <input type="text" name="address" id="edit-hub" value="<?php echo $value["hub"]?>"
                        placeholder="<?php echo $value["hub"]?>" class="input-field">
                </div>
            </div>
            <div class="button-wrapper">
                <input type="submit" class="edit-profile-button" value="Save changes">
            </div>
        </form>
    </div>

</div>

<?php
                } elseif ($value["accountType"] == "vendor") {
                    ?>
<div class="info-section">
    <div class="info-wrapper">
        <form action="api/editCustomerProfile" enctype="multipart/form-data" action="api/editCustomerProfile"
            method="post">
            <div class="profile-img">
                <input type="file" id="avtImg" name="avatar" onchange="loadFile(event)"  />
                <img class="avatar-image" id="avatar" src="assets/image/avatar/<?php echo $key?>.jpg"
                    alt="blank avatar">
                <div id="image-hover" onclick="clickUpload()">
                    <img src="assets/image/avatar/icons8-compact-camera-ios/icons8-compact-camera-50.png"
                        alt="edit-image icon">
                </div>
            </div>
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
                    <input type="text" name="name" id="edit-name" value="<?php echo $value["name"]?>"
                        placeholder="<?php echo $value["name"]?>" class="input-field">
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    <label for="email"><b>Email:</b></label>
                </div>
                <div class="info-field">
                    <input type="email" name="email" id="edit-email" value="<?php echo $value["email"]?>"
                        placeholder="<?php echo $value["email"]?>" class="input-field">
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    <label for="address"><b>Address:</b></label>
                </div>
                <div class="info-field">
                    <input type="text" name="address" id="edit-address" value="<?php echo $value["address"]?>"
                        placeholder="<?php echo $value["address"]?>" class="input-field">
                </div>
            </div>
            <div class="button-wrapper">
                <input type="submit" class="edit-profile-button" onclick="changeToProfile()" value="Save changes">
            </div>
        </form>
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