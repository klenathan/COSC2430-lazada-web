# COSC2430 LAZADA REPLICA WEB APPLICATION

---

# GROUP MEMBER AND CONTRIBUTION
Nam Thai Tran - s3891890 - 25%
Pham Vo Dong - -s3891968 25%
Nguyen Hoang Minh Khoi - - 25%
Bui Viet Ha - - 25%

# Data structure

## Customer

```json
{
    "customer": {
        "password":"hashed_password",
        "name": "Customer",
        "email": "one@one.com",
        "address" : "Q7, HCM",
        "accountType": "customer"
    }
}

```
## Shipper

```json
{
    "shipper": {
        "password":"hashed_password",
        "name": "Shipper",
        "email": "one@one.com",
        "hub" : "hub_q7",
        "accountType": "shipper"
    }
}

```
## Vendor

```json
{
    "vendor": {
        "password":"hashed_password",
        "name": "Vendor",
        "email": "one@one.com",
        "address" : "Q7, HCM",
        "accountType": "vendor"
    }
}

```

Tóm tắt thấy thíu:
Validate vendor address mà thằng vendor dc quyền trùng vời thằng custome
Chưa validate username
	username: contains only letters (lower and upper case) and digits, has a length from 8 to 15 characters, unique
Lỗi signup
Minium length orther field 5 char
Signout ở my accountpage
Vendor View my product missing
Length:
Add new product name from 10 to 20




