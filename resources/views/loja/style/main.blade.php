<style>
/*---------------------
  Shopping Cart
-----------------------*/

.shopping__cart__table {
	margin-bottom: 30px;
}

.shopping__cart__table table {
	width: 100%;
}

.shopping__cart__table table thead {
	border-bottom: 1px solid #f2f2f2;
}

.shopping__cart__table table thead tr th {
	color: #ffffff;
	font-size: 17px;
	font-weight: 700;
	text-transform: uppercase;
	padding: 25px;
}

.shopping__cart__table table tbody tr {
	border-bottom: 1px solid #f2f2f2;
}

.shopping__cart__table table tbody tr td {
	padding-bottom: 30px;
	padding-top: 30px;
}

.shopping__cart__table table tbody tr td.product__cart__item {
	width: 400px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__pic {
	float: left;
	margin-right: 30px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__text {
	overflow: hidden;
	padding-top: 21px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__text h6 {
	color: #111111;
	font-size: 15px;
	font-weight: 600;
	margin-bottom: 10px;
}

.shopping__cart__table table tbody tr td.product__cart__item .product__cart__item__text h5 {
	color: #0d0d0d;
	font-weight: 700;
}

.shopping__cart__table table tbody tr td.quantity__item {
	width: 175px;
}

.shopping__cart__table table tbody tr td.quantity__item .quantity .pro-qty-2 {
	width: 80px;
}

.shopping__cart__table table tbody tr td.quantity__item .quantity .pro-qty-2 input {
	width: 50px;
	border: none;
	text-align: center;
	color: #111111;
	font-size: 16px;
}

.shopping__cart__table table tbody tr td.quantity__item .quantity .pro-qty-2 .qtybtn {
	font-size: 16px;
	color: #888888;
	width: 10px;
	cursor: pointer;
}

.shopping__cart__table table tbody tr td.cart__price {
	color: #111111;
	font-size: 18px;
	font-weight: 700;
	width: 140px;
}

.shopping__cart__table table tbody tr td.cart__close i {
	font-size: 18px;
	color: #111111;
	height: 40px;
	width: 40px;
	background: #f3f2ee;
	border-radius: 50%;
	line-height: 40px;
	text-align: center;
}

.continue__btn.update__btn {
	text-align: right;
}

.continue__btn.update__btn a {
	color: #ffffff;
	background: #111111;
	border-color: #111111;
}

.continue__btn.update__btn a i {
	margin-right: 5px;
}

.continue__btn a {
	color: #111111;
	font-size: 14px;
	font-weight: 700;
	letter-spacing: 2px;
	text-transform: uppercase;
	border: 1px solid #e1e1e1;
	padding: 14px 35px;
	display: inline-block;
}

.cart__discount {
	margin-bottom: 60px;
}
.cart__discount .line{

}

.cart__discount h6 {
	color: #111111;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 35px;
}

.cart__discount form {
	position: relative;
}

.cart__discount form input {
	font-size: 14px;
	color: #b7b7b7;
	height: 50px;
	width: 100%;
	border: 1px solid #e1e1e1;
	padding-left: 20px;
}

.cart__discount form input::-webkit-input-placeholder {
	color: #b7b7b7;
}

.cart__discount form input::-moz-placeholder {
	color: #b7b7b7;
}

.cart__discount form input:-ms-input-placeholder {
	color: #b7b7b7;
}

.cart__discount form input::-ms-input-placeholder {
	color: #b7b7b7;
}

.cart__discount form input::placeholder {
	color: #b7b7b7;
}

.cart__discount form button {
	font-size: 14px;
	color: #ffffff;
	font-weight: 700;
	letter-spacing: 2px;
	text-transform: uppercase;
	background: #111111;
	padding: 0 30px;
	border: none;
	position: absolute;
	right: 0;
	top: 0;
	height: 100%;
}

.cart__total {
	background: #f3f2ee;
	padding: 35px 40px 40px;
}

.cart__total h6 {
	color: #111111;
	text-transform: uppercase;
	margin-bottom: 12px;
}

.cart__total ul {
	margin-bottom: 25px;
}

.cart__total ul li {
	list-style: none;
	font-size: 16px;
	color: #444444;
	line-height: 40px;
	overflow: hidden;
}

.cart__total ul li span {
	font-weight: 700;
	color: #e53637;
	float: right;
}

.cart__total .primary-btn {
	display: block;
	padding: 12px 10px;
	text-align: center;
	letter-spacing: 2px;
}

	.quantity {
        display: inline-block;
    }

    .pro-qty-2 {
        display: flex;
        align-items: center;
    }

    .quantity-input {
        width: 50px;
        text-align: center;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .increase-btn,
    .decrease-btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        border-radius: 4px;
        margin-left: 5px;
    }

    .increase-btn:hover,
    .decrease-btn:hover {
        background-color: #0056b3;
    }
</style>