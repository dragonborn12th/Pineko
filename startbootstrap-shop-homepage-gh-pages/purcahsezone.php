<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Details</title>
    <link rel="icon" type="image/x-icon" href="file:images\_ec4c65ef-eb75-48c7-88fc-c7f007877583.ico">
      <link rel="icon" type="image/x-icon" href="/images/_ec4c65ef-eb75-48c7-88fc-c7f007877583.ico">

    <style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: 200px auto 120px;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

@media screen and (max-width: 768px) {
    .container {
        width: 90%;
        margin: 100px auto 80px;
        padding: 15px;
    }
}

@media screen and (max-width: 480px) {
    .container {
        width: 95%;
        margin: 50px auto 40px;
        padding: 10px;
    }
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.dashboard-link {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
}

.dashboard-link:hover {
    background-color: #0056b3;
}

.purchase-detail {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid black;
    overflow-x: auto;
}

.purchase-item {
    border-bottom: 1px solid #ddd;
}

.purchase-item:last-child {
    border-bottom: none;
}

.purchase-detail th,
.purchase-detail td {
    padding: 10px;
    text-align: center;
    vertical-align: middle;
    border: 1px solid black;
}

@media screen and (max-width: 768px) {
    .purchase-detail th,
    .purchase-detail td {
        font-size: 14px;
    }
}

@media screen and (max-width: 480px) {
    .purchase-detail th,
    .purchase-detail td {
        font-size: 12px;
    }
}

.purchase-item img {
    max-width: 100px;
    max-height: 100px;
    border-radius: 5px;
}

.cancel-button,
.contact-button {
    display: inline-block;
}

.cancel-button button,
.contact-button button {
    padding: 10px 20px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
}

.cancel-button button {
    background-color: #ff5f5f;
    color: white;
}

.contact-button button {
    background-color: #00bcd4;
    color: white;
}

.cancel-button button:hover,
.contact-button button:hover {
    transform: scale(1.1);
}

.contact-modal {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    z-index: 1000;
}

.contact-modal.show {
    display: block;
}

.total-container {
    position: absolute;
    top: 20px;
    right: 20px;
    background-color: #fff;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.dashboard-link {
    position: relative;
    padding: 20px 35px;
    background: #ffffff;
    font-size: 20px;
    font-weight: 600;
    color: #000000;
    box-shadow: 0px 0px 10px 0px rgb(255, 255, 255);
    border-radius: 100px;
    border: none;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.dashboard-link:hover {
    background: #000000;
    color: #ffffff;
    box-shadow: 0 0 80px #ffffff8c;
}

.dashboard-link:hover .star-1 {
    position: absolute;
    top: -20%;
    left: -20%;
    width: 20px;
    height: auto;
    filter: drop-shadow(0 0 10px #fffdef);
    z-index: 2;
}

.dashboard-link:hover .star-2 {
    position: absolute;
    top: 35%;
    left: -25%;
    width: 15px;
    height: auto;
    filter: drop-shadow(0 0 10px #fffdef);
    z-index: 2;
}

.dashboard-link:hover .star-3 {
    position: absolute;
    top: 80%;
    left: -10%;
    width: 10px;
    height: auto;
    filter: drop-shadow(0 0 10px #fffdef);
    z-index: 2;
}

.dashboard-link:hover .star-4 {
    position: absolute;
    top: -25%;
    left: 105%;
    width: 20px;
    height: auto;
    filter: drop-shadow(0 0 10px #fffdef);
    z-index: 2;
}

.dashboard-link:hover .star-5 {
    position: absolute;
    top: 30%;
    left: 115%;
    width: 15px;
    height: auto;
    filter: drop-shadow(0 0 10px #fffdef);
    z-index: 2;
}

.dashboard-link:hover .star-6 {
    position: absolute;
    top: 80%;
    left: 105%;
    width: 10px;
    height: auto;
    filter: drop-shadow(0 0 10px #fffdef);
    z-index: 2;
}

.star-1 {
    position: absolute;
    top: 20%;
    left: 20%;
    width: 25px;
    height: auto;
    filter: drop-shadow(0 0 0 #fffdef);
    z-index: -5;
    transition: all 0.8s cubic-bezier(0.05, 0.83, 0.43, 0.96);
}

.star-2 {
    position: absolute;
    top: 45%;
    left: 45%;
    width: 15px;
    height: auto;
    filter: drop-shadow(0 0 0 #fffdef);
    z-index: -5;
    transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);
}

.star-3 {
    position: absolute;
    top: 40%;
    left: 40%;
    width: 5px;
    height: auto;
    filter: drop-shadow(0 0 0 #fffdef);
    z-index: -5;
    transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);
}

.star-4 {
    position: absolute;
    top: 20%;
    left: 40%;
    width: 8px;
    height: auto;
    filter: drop-shadow(0 0 0 #fffdef);
    z-index: -5;
    transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);
}

.star-5 {
    position: absolute;
    top: 25%;
    left: 45%;
    width: 15px;
    height: auto;
    filter: drop-shadow(0 0 0 #fffdef);
    z-index: -5;
    transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);
}

.star-6 {
    position: absolute;
    top: 5%;
    left: 50%;
    width: 5px;
    height: auto;
    filter: drop-shadow(0 0 0 #fffdef);
    z-index: -5;
    transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);
}

.confirmation-container {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 9999;
    display: none;
}


    </style>

</head>
<body>

<div class="total-container">
    <h3>Total Payment Amount:</h3>
    <span id="totalPaymentAmount">0</span>
</div>

<div class="container">
    <h1>Purchase Details</h1>
    <a href="dashbaord.php" class="dashboard-link">
    Back to Dashboard
    <div class="star-1">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering: geometricPrecision; text-rendering: geometricPrecision; image-rendering: optimizeQuality; fill-rule: evenodd; clip-rule: evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path>
            </g>
        </svg>
    </div>
    <div class="star-2">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering: geometricPrecision; text-rendering: geometricPrecision; image-rendering: optimizeQuality; fill-rule: evenodd; clip-rule: evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path>
            </g>
        </svg>
    </div>
    <div class="star-3">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering: geometricPrecision; text-rendering: geometricPrecision; image-rendering: optimizeQuality; fill-rule: evenodd; clip-rule: evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path>
            </g>
        </svg>
    </div>
    <div class="star-4">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering: geometricPrecision; text-rendering: geometricPrecision; image-rendering: optimizeQuality; fill-rule: evenodd; clip-rule: evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path>
            </g>
        </svg>
    </div>
    <div class="star-5">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering: geometricPrecision; text-rendering: geometricPrecision; image-rendering: optimizeQuality; fill-rule: evenodd; clip-rule: evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path>
            </g>
        </svg>
    </div>
    <div class="star-6">
        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53" style="shape-rendering: geometricPrecision; text-rendering: geometricPrecision; image-rendering: optimizeQuality; fill-rule: evenodd; clip-rule: evenodd" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <defs></defs>
            <g id="Layer_x0020_1">
                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                <path d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z" class="fil0"></path>
            </g>
        </svg>
    </div>
</a>

<div id="confirmationContainer" class="confirmation-container">
    <p>Are you sure you want to cancel this order?</p>
    <button onclick="confirmCancelOrder(true)">Yes</button>
    <button onclick="hideConfirmationContainer()">No</button>
</div>


    <table class="purchase-detail">
        <thead>
            <tr>
                <th>Product Image</th>
                <th>Product Name</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Quantity</th>
                <th>Payment Amount</th>
                <th>Actions</th>
                <th>Product ID</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


    <div id="contactModal" class="contact-modal">
        <h2> Your Product Details</h2>
        <img class="product-image" src="" alt="Product Image">
        <p class="product-name"></p>
        <p class="name"></p>
        <p class="age"></p>
        <p class="address"></p>
        <p class="phone-number"></p>
        <p class="email"></p>
        <p class="contact-number"></p>
        <button onclick="hideContactModal()">Close</button>
    </div>
    

    <script>
        const urlParams = new URLSearchParams(window.location.search);
const productName = urlParams.get('productName');
const name = urlParams.get('name');
const age = urlParams.get('age');
const address = urlParams.get('address');
const phoneNumber = urlParams.get('phoneNumber');
const quantity = urlParams.get('quantity');
const paymentAmount = urlParams.get('paymentAmount');
const productImage = urlParams.get('productImage');

if (productName && name && age && address && phoneNumber && quantity && paymentAmount && productImage) {
    let purchaseDetails = localStorage.getItem('purchase_details');
    if (!purchaseDetails) {
        purchaseDetails = [];
    } else {
        purchaseDetails = JSON.parse(purchaseDetails);
    }

    const productId = generateProductId();

    purchaseDetails.push({
        productName: productName,
        name: name,
        age: age,
        address: address,
        phoneNumber: phoneNumber,
        quantity: quantity,
        paymentAmount: paymentAmount,
        productImage: productImage,
        productId: productId 
    });

    localStorage.setItem('purchase_details', JSON.stringify(purchaseDetails));
}

function cancelOrder(cancelIndex) {
    const confirmationContainer = document.getElementById('confirmationContainer');
    confirmationContainer.style.display = 'block';
    confirmationContainer.dataset.cancelIndex = cancelIndex;
}
function confirmCancelOrder(confirm) {
    const confirmationContainer = document.getElementById('confirmationContainer');
    const cancelIndex = confirmationContainer.dataset.cancelIndex;

    if (confirm) {
        let purchaseDetails = localStorage.getItem('purchase_details');
        if (!purchaseDetails) return;

        purchaseDetails = JSON.parse(purchaseDetails);
        if (purchaseDetails[cancelIndex]) {
            purchaseDetails.splice(cancelIndex, 1);
            localStorage.setItem('purchase_details', JSON.stringify(purchaseDetails));
            window.location.href = window.location.href.split('?')[0];
        }
    }
    confirmationContainer.style.display = 'none';
}
function hideConfirmationContainer() {
    const confirmationContainer = document.getElementById('confirmationContainer');
    confirmationContainer.style.display = 'none';
}



const purchaseDetailContainer = document.querySelector('.purchase-detail tbody');
let purchaseDetails = localStorage.getItem('purchase_details');
if (purchaseDetails) {
    purchaseDetails = JSON.parse(purchaseDetails);
    purchaseDetails.forEach((purchase, index) => {
        const row = purchaseDetailContainer.insertRow();
        row.classList.add('purchase-item');

        const productId = purchase.productId;

        row.innerHTML = `
    <td><img src="${purchase.productImage}" alt="${purchase.productName}"></td>
    <td>${purchase.productName}</td>
    <td>${purchase.name}</td>
    <td>${purchase.age}</td>
    <td>${purchase.address}</td>
    <td>${purchase.phoneNumber}</td>
    <td>${purchase.quantity}</td>
    <td>₱${purchase.paymentAmount}</td>
    <td>
        <div class="cancel-button"><button onclick="cancelOrder(${index})">Cancel Order</button></div>
        <div class="contact-button"><button onclick="showContactModal('${purchase.productName}', '${purchase.name}', '${purchase.age}', '${purchase.address}', '${purchase.phoneNumber}', '${purchase.email}', '${purchase.contactNumber}')"> Your Product Details</button></div>

    </td>
    <td>${productId}</td>
`;

    });
} else {
    purchaseDetailContainer.innerHTML = "<tr><td colspan='10'>No purchase details available.</td></tr>";
}

function showContactModal(productName, name, age, address, phoneNumber, email, contactNumber, productImage) {
    const contactModal = document.getElementById('contactModal');
    const productNameElement = contactModal.querySelector('.product-name');
    const nameElement = contactModal.querySelector('.name');
    const ageElement = contactModal.querySelector('.age');
    const addressElement = contactModal.querySelector('.address');
    const phoneNumberElement = contactModal.querySelector('.phone-number');
    const emailElement = contactModal.querySelector('.email');
    const contactNumberElement = contactModal.querySelector('.contact-number');
    const productImageElement = contactModal.querySelector('.product-image');

    productNameElement.textContent = `Product Name: ${productName}`;
    nameElement.textContent = `Name: ${name}`;
    ageElement.textContent = `Age: ${age}`;
    addressElement.textContent = `Address: ${address}`;
    phoneNumberElement.textContent = `Phone Number: ${phoneNumber}`;
    emailElement.textContent = `Email: ${email}`;
    contactNumberElement.textContent = `Contact: ${contactNumber}`;
    productImageElement.src = productImage;

    contactModal.classList.add('show');
}



function hideContactModal() {
    const contactModal = document.getElementById('contactModal');
    contactModal.classList.remove('show');
}

function generateProductId() {
    return Math.floor(Math.random() * 9000) + 1000;
}

let totalPaymentAmount = 0;
if (purchaseDetails) {
    purchaseDetails.forEach((purchase) => {
        totalPaymentAmount += parseInt(purchase.paymentAmount);
    });
}

const totalPaymentAmountElement = document.getElementById('totalPaymentAmount');
totalPaymentAmountElement.innerHTML = `₱${totalPaymentAmount} <div style="position: relative; display: inline-block;">INCLUDE RETURN <a href="#" id="questionMarkIcon" style="text-decoration: none; color: inherit; display: inline-block; border-radius: 50%; width: 20px; height: 20px; text-align: center; background-color: #000; color: white;">&#63;</a>
<div id="returnInfoContainer" style="display: none; background-color: #fff; border: 1px solid #000; padding: 10px; position: absolute; top: 30px; left: 0;">
    <p>When the driver delivers your order, please provide the exact payment amount You put in the amount Orders. The driver will return any change due.</p>
</div></div>`;

const returnInfoContainer = document.getElementById('returnInfoContainer');
const questionMarkIcon = document.getElementById('questionMarkIcon');

questionMarkIcon.addEventListener('click', () => {
    returnInfoContainer.style.display = returnInfoContainer.style.display === 'none' ? 'block' : 'none';
});

    </script>
</body>
</html>
